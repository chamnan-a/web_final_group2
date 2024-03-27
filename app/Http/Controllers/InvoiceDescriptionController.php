<?php

namespace App\Http\Controllers;

use App\Models\InvoiceDescription;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class InvoiceDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $invoiceDescriptions = InvoiceDescription::paginate(5);
        return view('invoicedescriptions.index', compact('invoiceDescriptions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('invoicedescriptions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'invoice_id' => 'required|exists:invoices,id',
            'product_id' => 'required|exists:products,id',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0',
        ]);

        InvoiceDescription::create($request->all());

        return redirect()->route('invoicedescriptions.index')->with('success', 'Invoice description created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  InvoiceDescription  $invoicedescription
     * @return View
     */
    public function show(InvoiceDescription $invoicedescription): View
    {
        return view('invoicedescriptions.show', compact('invoicedescription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  InvoiceDescription  $invoicedescription
     * @return View
     */
    public function edit(InvoiceDescription $invoicedescription): View
    {
        return view('invoicedescriptions.edit', compact('invoicedescription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  InvoiceDescription  $invoicedescription
     * @return RedirectResponse
     */
    public function update(Request $request, InvoiceDescription $invoicedescription): RedirectResponse
    {
        $request->validate([
            'invoice_id' => 'required|exists:invoices,id',
            'product_id' => 'required|exists:products,id',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0',
        ]);

        $invoicedescription->update($request->all());

        return redirect()->route('invoicedescriptions.index')->with('success', 'Invoice description updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  InvoiceDescription  $invoicedescription
     * @return RedirectResponse
     */
    public function destroy(InvoiceDescription $invoicedescription): RedirectResponse
    {
        $invoicedescription->delete();

        return redirect()->route('invoicedescriptions.index')->with('success', 'Invoice description deleted successfully.');
    }
}

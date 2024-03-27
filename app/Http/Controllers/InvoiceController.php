<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $invoices = Invoice::with('user')->with('employee')->paginate(5);
        return view('invoices.index', compact('invoices'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        // Assuming you have User1 and Employee models
        $data = [
            'users' => \App\Models\User1::all(),
            'employees' => \App\Models\Employee::all(),
        ];
        return view('invoices.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'date' => 'required|date',
            'address' => 'required',
            'user_id' => 'required|exists:user1,id',
            'employee_id' => 'required|exists:employees,id',
        ]);

        Invoice::create($request->all());

        return redirect()->route('invoices.index')
            ->with('success', 'Invoice created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param Invoice $invoice
     * @return View
     */
    public function show(Invoice $invoice): View
    {
        $invoice = $invoice->load('user', 'employee');
        return view('invoices.show', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Invoice $invoice
     * @return View
     */
    public function edit(Invoice $invoice): View
    {
        $data = [
            'invoice' => $invoice,
            'users' => \App\Models\User1::all(),
            'employees' => \App\Models\Employee::all(),
        ];
        return view('invoices.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Invoice $invoice
     * @return RedirectResponse
     */
    public function update(Request $request, Invoice $invoice): RedirectResponse
    {
        $request->validate([
            'date' => 'required|date',
            'address' => 'required',
            'user_id' => 'required|exists:user1,id',
            'employee_id' => 'required|exists:employees,id',
        ]);

        $invoice->update($request->all());

        return redirect()->route('invoices.index')
            ->with('success', 'Invoice updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Invoice $invoice
     * @return RedirectResponse
     */
    public function destroy(Invoice $invoice): RedirectResponse
    {
        $invoice->delete();

        return redirect()->route('invoices.index')
            ->with('success', 'Invoice deleted successfully');
    }
}

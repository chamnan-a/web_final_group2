<?php
namespace App\Http\Controllers;

use App\Models\User1;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class User1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $users = User1::paginate(5);
        return view('user1.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('user1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'address' => 'required',
        ]);

        User1::create($request->all());

        return redirect()->route('user1.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User1  $user
     * @return \Illuminate\View\View
     */
    public function show(User1 $user): View
    {
        return view('user1.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User1  $user
     * @return \Illuminate\View\View
     */
    public function edit(User1 $user): View
    {
        return view('user1.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User1  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User1 $user): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'address' => 'required',
        ]);

        $user->update($request->all());

        return redirect()->route('user1.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User1  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User1 $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('user1.index')
            ->with('success', 'User deleted successfully');
    }
}

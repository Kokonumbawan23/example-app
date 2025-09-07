<?php

namespace App\Http\Controllers;

use App\Http\Requests\WalletRequest;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function create()
    {
        return view('wallet.create');
    }

    public function store(WalletRequest $request)
    {

        // Logic to create a wallet would go here

        return redirect()->route('wallet.create')->with('success', 'Wallet created successfully!');
    }

    public function show($id)
    {
        // Logic to show a specific wallet would go here

        return view('wallet.show', compact('id'));
    }

    public function index()
    {
        // Logic to list all wallets would go here

        return view('wallet.index');
    }

    public function destroy($id)
    {
        // Logic to delete a specific wallet would go here

        return redirect()->route('wallet.index')->with('success', 'Wallet deleted successfully!');
    }

    public function edit($id)
    {
        // Logic to edit a specific wallet would go here

        return view('wallet.edit', compact('id'));
    }

    public function update(WalletRequest $request, $id)
    {

        // Logic to update a specific wallet would go here

        return redirect()->route('wallet.show', $id)->with('success', 'Wallet updated successfully!');
    }
}

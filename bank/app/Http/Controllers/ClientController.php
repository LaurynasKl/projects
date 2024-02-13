<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Account;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        return view('client.create', [
            'clients' => $clients,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        Account::create($request->all());
        return redirect()->route('client-show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        $client = Auth::user();
        $accounts = Account::all();
        return view('client.show', [
            'client' => $client,
            'accounts' => $accounts,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        $client = Auth::user();
        $accounts = Account::all();
        return view('client.edit', [
            'account' => $account,
            'accounts' => $accounts,
            'client' => $client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Account $account)
    {
  
        $to = $request->whereTo;
        $whereTo = Account::findOrFail($to);
        $whereToSum = $whereTo->eur;

        if ($whereTo->id !== $account->id) {
            $newSum = $request->eur;
            $currentSum = $account->eur;
            $minusSum = $currentSum - $newSum;
            $plusSum = $whereToSum + $newSum;
            $account->update(['eur' => $minusSum]);
            $whereTo->update(['eur' => $plusSum]);
        }

        // dump($whereTo->id);
        // dd($account->id);


        return redirect()->route('client-show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}

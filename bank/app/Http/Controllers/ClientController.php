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
        return redirect()->route('client-show')->with('ok', 'Nauja sąskaita sukurta');
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
        $clients = User::all();
        $client = Auth::user();
        $accounts = Account::all();


        // dump($account->user_code);
        // dd($clients);



        return view('client.edit', [
            'account' => $account,
            'accounts' => $accounts,
            'client' => $client,
            'clients' => $clients,
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

        $newSum = $request->eur;
        $currentSum = $account->eur;
        $minusSum = $currentSum - $newSum;
        $plusSum = $whereToSum + $newSum;

        if ($account->eur >= 0 && $newSum > $currentSum) {
            return redirect()->route('client-show');
        } else {
            if ($whereTo->id !== $account->id) {
                $account->update(['eur' => $minusSum]);
                $whereTo->update(['eur' => $plusSum]);
            }
        }


        return redirect()->route('client-show')->with('ok', 'Pavedimas atliktas');
    }

    public function delete(Account $account)
    {
        return view('client.delete', [
            'account' => $account,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        $account->delete();
        return redirect()->route('client-show')->with('error', 'Sąskaita ištrinta');
    }
}

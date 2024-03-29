<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Account;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        return view('admin.create', [
            'clients' => $clients,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request)
    {
        User::create($request->all());
        Client::create($request->all());
        return redirect()->route('admin-showAll')->with('ok', 'Naujas klientas sukurtas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client, Account $account)
    {
        $accounts = Account::all();

        $totalAccount = DB::table('accounts')
            ->where('user_code', $client->code)
            ->count();

        $totalSum = DB::table('accounts')
            ->where('user_code', $client->code)
            ->sum('eur');

        return view('admin.show', [
            'client' => $client,
            'accounts' => $accounts,
            'totalSum' => $totalSum,
            'totalAccount' => $totalAccount,
        ]);
    }

    public function showAll()
    {

        $clients = Client::all();
        return view('admin.showAll', [
            'clients' => $clients,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('admin.edit', [
            'client' => $client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, Client $client)
    {
        $client->update($request->all());
        return redirect()->route('admin-showAll')->with('ok', ' Kliento informacija atnaujinta');
    }

    public function delete(Client $client)
    {
        return view('admin.delete', [
            'client' => $client,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $users = User::all();
        $accounts = Account::all();
        foreach ($users as $user) {
            if ($client->code == $user->code) {
                $user->delete();
                $client->delete();
                return redirect()->route('admin-showAll');
            }
        }
        return redirect()->route('admin-showAll');
    }
}

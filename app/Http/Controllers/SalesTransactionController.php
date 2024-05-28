<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalesTransaction;
use Illuminate\Support\Facades\Auth;

class SalesTransactionController extends Controller
{
    public function index()
    {
        $transactions = SalesTransaction::with('user')->get();
        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required|string|max:255',
        ]);

        SalesTransaction::create([
            'user_id' => Auth::id(),
            'amount' => $request->amount,
            'description' => $request->description,
        ]);

        return redirect()->route('transactions.index');
    }
}

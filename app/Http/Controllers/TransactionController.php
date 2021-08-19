<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\HeaderTransaction;
use App\Models\Transaction;
use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {

        //TODO GET CURRENT USER DATA

        //TODO CHECK TYPE TRANSACTION {BUYER OR SELLER TRANSACTIONS}
        $transactions = null;
        return view('pages/transactions/index', compact('transactions','type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cart $cart)
    {
        //TODO GET CURRENT USER DATA

        //TODO GET TOTAL PRICE FROM CART


        //TODO CHECK DISCOUNT IS HGIGHER THAN MAXIMUM PRICE VOUCHER

        //TODO CHECK IF TOTAL PRICE IS HIGHER THAN USER CURRENT MONEY
        //TODO CHEECK IF TOTAL PRICE IS LOWER THAN VOUCHER MINIMUM PRICE


        //TODO INSERT TRANSACTION DATA

        //TODO INSERT PRODUCT_TRANSACTION DATA



        //TODO DELETE CART PRODUCT


        //TODO GET SELLER DATA

        //TODO UPDATE SELLER MONEY


        //TODO UPDATE USER MONEY

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

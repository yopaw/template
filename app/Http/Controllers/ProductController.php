<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\Seller;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TODO GET ALL PRODUCTS FROM DATABASE
        $products = null;
        return view('pages/home', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/products/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO VALIDATE REQUEST WITH VALIDATOR HERE

        //TODO GET CURRENT USER
        //TODO INSERT PRODUCT TO DATABASE


        //TODO SAVE FILE TO STORAGE DIRECTORY/APP/PRODUCTS/

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('pages/products/show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('pages.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //TODO VALIDATE REQUEST WITH VALIDATOR HERE


        //TODO GET CURRENT USER

        //TODO UPDATE PRODUCT

        //TODO SAVE NEW FILE TO STORAGE/APPS/PRODUCTS

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //TODO SOFT DELETE PRODUCTS
        return back();
    }

    public function manage(){
        //TODO GET CURRENT USER AS SELLER
        //TODO GET PRODUCTS THAT SELLER HAVE
        $products = null;
        return view('pages.products.manage', compact('products'));
    }

    public function view(){
        //TODO GET CURRENT USER AS SELLER
        //TODO GET PRODUCTS THAT SELLER HAVE
        $products = null;
        return view('pages.products.index', compact('products'));
    }
}

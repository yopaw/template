@extends('layouts/app')

@section('content')
    <div class="container">
        <h2>My Carts</h2>
{{--        @foreach(carts)--}}
            <div class="card" style="margin-bottom: 2rem">
                <div class="card-body">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 1rem">
{{--                        <h3 class="card-title">Transactions from {{seller name}}</h3>--}}
{{--                        <a href="{route to show cart detail}}">--}}
                            <button type="submit" class="btn btn-outline-success my-2 my-sm-0">See Cart Details</button>
                        </a>
                    </div>
                    <h4 class="card-title"></h4>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Total Product</th>
                            <th scope="col">Total Quantity</th>
                            <th scope="col">Grand Total Price</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
{{--                                <td>{{total products in cart}} Product(s)</td>--}}
{{--                                <td>{{total quantity in cart}}</td>--}}
{{--                                <td>Rp. {{total price in cart}}</td>--}}
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
{{--        @endforeach--}}
    </div>
@endsection

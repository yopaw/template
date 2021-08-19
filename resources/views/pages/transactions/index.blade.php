@extends('layouts/app')

@section('content')
    <div class="container">
        <h2>My Transaction History</h2>
{{--        @foreach(transactions)--}}
            <div class="card" style="margin-bottom: 2rem">
                <div class="card-body">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 1rem">
{{--                        @if()--}}
                            <h3 class="card-title">Transactions from {{$transaction->seller->name}}</h3>
{{--                        @else--}}
                            <h3 class="card-title">Transactions from {{$transaction->user->username}}</h3>
{{--                        @endif--}}
{{--                        TODO USE POLICY HERE--}}
{{--                                <a href="{{route create review transaction}}">--}}
                                    <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Leave a Review
                                    </button>
                                </a>
                    </div>
{{--                    <h4 class="card-title">Transaction Date: {{transcation date}}</h4>--}}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Quantity</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @foreach(get proruct with deleted at)--}}
                            <tr>
{{--                                <th scope="row">{{index}}</th>--}}
{{--                                <td>{{product name}}</td>--}}
{{--                                <td>Rp. {{product price}}</td>--}}
{{--                                <td>{{product quantity}}</td>--}}
                            </tr>
{{--                        @endforeach--}}
                        <tr>
                            <td colspan="2"></td>
                            <td><strong>Total Price</strong></td>
{{--                            <td>Rp. {{total price}}</td>--}}
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
{{--        @endforeach--}}
    </div>
@endsection

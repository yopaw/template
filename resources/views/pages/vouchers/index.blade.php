@extends('layouts/app')

@section('content')
    <div class="container">
        <h2>Vouchers</h2>
{{--        @foreach(vouchers)--}}
            <div class="card" style="margin-bottom: 2rem">
                <div class="card-body">
                    <h3 class="card-title">{{$voucher->name}}</h3>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Seller Name</th>
                            <th scope="col">Used</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @foreach(voucher sellerr)--}}
                            <tr>
{{--                                <th scope="row">{{index}}</th>--}}
{{--                                <td>{{seller name}}</td>--}}
{{--                                <td>{{total voucher used by seller)}}</td>--}}
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td>Total Used</td>
{{--                            @dd($voucher->transactions)--}}
{{--                            <td>{{total used by transcation}}</td>--}}
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
{{--        @endforeach--}}
    </div>
@endsection

@extends('layouts/app')
@section('css')
    #outer-container{
    margin: 1rem;
    display: flex;
    flex-wrap: wrap;
    }
    .card
@endsection
@section('content')
    <div id="outer-container">
{{--        @foreach(products)--}}
{{--            <x-card :product="product" type="manage">--}}

{{--            </x-card>--}}
{{--        @endforeach--}}
    </div>
@endsection

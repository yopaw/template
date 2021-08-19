@extends('layouts/app')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/review.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1">
{{--                                <img src="{{route(route for retrieve image from storage)}}" style="width: 70%"/>--}}
                            </div>
                        </div>
                    </div>
                    <div class="details col-md-6">
{{--                        <h3 class="product-title">{{seller name}}</h3>--}}
{{--                        <h4 class="product-title">{{$product >name}}</h4>--}}
                        <div class="rating">
                            <div class="stars">
{{--                                @for($i = 1; $i <= 5 ;$i++)--}}
{{--                                    @if($i <= product rating))--}}
                                        <span class="fa fa-star star-active"></span>
{{--                                    @else--}}
                                        <span class="fa fa-star star-inactive"></span>
{{--                                    @endif--}}
{{--                                @endfor--}}
                            </div>
{{--                            <span class="review-no">{{get total review}} reviews</span>--}}
                        </div>
{{--                        <p class="product-description">{{product description}}</p>--}}
{{--                        <h4 class="price"><span style="color: black"> Rp. {{product price}}</span></h4>--}}
                        <div class="action">
                            <button class="btn btn-outline-success my-2 my-sm-0" style="padding: 0.75rem" type="button">Add to cart</button>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        @foreach(product in transactipn)--}}
{{--            @if(isset(transaction review)--}}
                <x-review
                    :review="$transaction->review"
                    :username="$transaction->user->username">
                </x-review>
{{--            @endif--}}
{{--        @endforeach--}}
    </div>
@endsection

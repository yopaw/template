@extends('layouts/app')

@section('content')
    <div class="card" style="margin: 2rem">
        <h1 style="margin: 2rem">Insert Review</h1>
{{--        <form action="{{route insert review}}" style="margin: 2rem" method="POST">--}}
            @csrf
            <div class="form-group">
                <h3>Shop Name</h3>
{{--                <h3>{{seller name}}</h3>--}}
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" rows="3" name="content"></textarea>
                @error('content') <div class="text-danger">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" placeholder="rating">
                @error('rating') <div class="text-danger">{{$message}}</div>@enderror
            </div>
            <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Submit</button>
        </form>
    </div>
@endsection


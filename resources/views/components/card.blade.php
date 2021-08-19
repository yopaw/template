<div class="card" style="width: 16.5rem; margin: 1rem">
{{--    <img class="card-img-top" src="{{route product image}}" alt="Card image cap">--}}
    <div class="card-body">
{{--        <h5 class="card-title">{{product name}}</h5>--}}
{{--        <p class="card-text">{{product description}}</p>--}}
            <div style="display: flex; justify-content: space-between">
{{--                <a href="{{route product update}}" class="btn btn-outline-success my-2 my-sm-0">Update</a>--}}
{{--                <form action="{{route product delete}}" method="POST">--}}
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-outline-danger my-2 my-sm-0">Delete</button>
{{--                </form>--}}
            </div>
{{--        @else--}}
{{--        <a href="{{route product detail}}" class="btn btn-outline-success my-2 my-sm-0">See Details</a>--}}
    </div>
</div>

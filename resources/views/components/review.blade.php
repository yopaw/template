<div style="margin-bottom: 2rem; margin-top: 2rem">
    <div class="card">
        <div class="row d-flex">
{{--            <div class=""> <img class="profile-pic" src="{{route for retrieve image}}"> </div>--}}
            <div class="d-flex flex-column">
{{--                <h3 class="mt-2 mb-0">{{seller name}}</h3>--}}
                <div>
{{--                    <p class="text-left"><span class="text-muted">{{review rating}}</span>--}}
{{--                        @for($i = 1; $i <= 5 ;$i++)--}}
{{--                            @if($i <= review rating)--}}
                                <span class="fa fa-star star-active"></span>
{{--                            @else--}}
                                <span class="fa fa-star star-inactive"></span>
{{--                            @endif--}}
{{--                        @endfor--}}
                </div>
            </div>
            <div class="ml-auto">
{{--                <p class="text-muted pt-5 pt-sm-3">{{review date}}</p>--}}
            </div>
        </div>
        <div class="row text-left">
{{--            <h4 class="mt-3">{{review content}}</h4>--}}
{{--            TODO USE POLICY HERE--}}
            <div class="ml-auto" style="">
{{--                <a href="{{route edit review}}">--}}
                    <button class="btn btn-outline-success my-2 my-sm-0">Manage this Review</button>
                </a>
            </div>
        </div>
    </div>
</div>

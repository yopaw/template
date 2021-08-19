@extends('layouts/app')

@section('content')
    <div class="container">
        <h2>Requests</h2>
            <div class="card" style="margin-bottom: 2rem">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Shop Name</th>
                            <th scope="col">Reason</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @foreach(requests)--}}
                            <tr>
                                <th scope="row">{{$loop->index+1}}</th>
                                <td>{{$request->user->username}}</td>
                                <td>{{$request->seller_name}}</td>
                                <td>{{$request->reason}}</td>
{{--                                TODO CHECK STATUS HERE--}}
{{--
                                    <td style="color: #2d995b">{{status name}}</td>
                                    <td></td>
{{----}}
{{--                                    <td style="color: black">{{request status name}}</td>--}}
                                    <td>
{{--                                        TODO USE POLICY HERE--}}
{{--                                        <button type="button" class="btn btn-outline-success my-2 my-sm-0"--}}
{{--                                                data-toggle="modal"--}}
{{--                                                data-target="#requestModal"--}}
{{--                                                data-description = "{{request description}}"--}}
{{--                                                data-sellername = "{{request seller name}}"--}}
{{--                                                data-username = "{{request user name}}"--}}
{{--                                                data-id = "{{$request->id}}">--}}
{{--                                            Manage Request--}}
{{--                                        </button>--}}
                                    </td>
{{--                                @else--}}
{{--                                    <td style="color: red">{{request status name}}</td>--}}
                                    <td></td>
{{--                                @endif--}}
                            </tr>
{{--                        @endforeach--}}
                        </tbody>
                    </table>
                    <x-modal/>
                </div>
            </div>
    </div>
@endsection
@section('script')
    $(document).ready(function(){
        $('#requestModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var requestDescription = button.data('description')
            var sellerName = button.data('sellername')
            var userName = button.data('username')
            var requestID = button.data('id')
            var modal = $(this)
            console.log(userName)
            console.log(sellerName)
            modal.find('.modal-body #requestDescription').text(requestDescription)
            modal.find('.modal-body #userName').text(userName)
            modal.find('.modal-body #sellerName').text(sellerName)
            modal.find('.modal-header h5').text(userName+' Request')
            modal.find('.modal-body #id').val(requestID)
        })
    })
@endsection

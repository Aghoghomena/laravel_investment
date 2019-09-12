@extends('master')
@section('title', 'View Users')
@section('content')
    <!-- Content -->
    <div class="content clearfix">

        <!-- Intro Title -->
        <div class="section-block intro-title-2 small">
            <div class="media-overlay bkg-black opacity-03"></div>
            <div class="row">
                <div class="column width-12 center">
                    <div class="title-container">
                        <div class="title-container-inner color-white">
                            <h1 class="title-xlarge font-alt-2 weight-light color-white mb-10">Users List</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-block cart-overview deals-table">
            <div class="row">
                <div class="column width-12">
                    <div class="cart-review">
                        <table class="table" id="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">First Name</th>
                                <th class="text-center">Last Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">User Type</th>
                                <th class="text-center">Last Login</th>
                                <th class="text-center"></th>
                                <th class="text-center"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->first_name}}</td>
                                    <td>{{$user->last_name}}</td>
                                    <td>{{$user->email}}/td>
                                    <td>{{$user->type->name}}</td>
                                    <td>{{$user->last_login}}</td>
                                    <td><a href="/user/{{ $user->id }}/edit"><span class="icon-pencil"></span></a></td>
                                    <td><a href="#" data-status="{{$user->status ? 0 : 1}}" data-id="{{$user->id}}">
                                            <span class="remove {{$user->status ?'icon-cancel': 'icon-check'}}"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Content End -->

@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('#table').DataTable();

            //disable item
            $('#table').on('click', '.remove', function () {

                var type = $(this).attr('data-status');
                var user_id = $(this).attr('data-id');
                console.log(parseInt(user_id));
                console.log(parseInt(type));

                $.ajax({

                    type: 'GET',
                     // url: '/user/1/0',
                    url: '/user/'+parseInt(user_id)+'/'+parseInt(type),

                    data: {status: type},

                    success: function (data) {

                        if (data.status === 1) {

                            alert(data.message);
                            location.reload();
                        } else {

                            alert(data.message);

                        }

                    }

                });

            });
        });
    </script>
@endsection

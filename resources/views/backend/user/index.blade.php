@extends('backend.layouts.main')
@section('content')
    <div class="card-body">

        <h5 class="header-title pl-3 redial-relative" style="display: flex; justify-content: space-between;">
            <div>Users</div>
            <div>
                <a href="{{route('admin.user.create')}}" class="btn btn-primary">Create User</a>
            </div>
        </h5>
        <table class="table table-dark table-hover mb-0 redial-font-weight-500 table-responsive d-md-table">
            <thead>
            <tr>
                <th scope="col">Row</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Roles</th>
                <td>Date</td>
                <td>Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @foreach(json_decode($user->roles->roles) as $role)
                            <span class="badge badge-primary text-white">{{$role}}</span>
                        @endforeach
                    </td>
                    <td>{{$user->updated_at}}</td>
                    <td>
                        <a class="btn btn-primary"
                           href="{{route('admin.user.update',['id' => $user->id])}}"
                           style="margin-right: 8px;"><i class='fa fa-pencil'></i></a>
                        <button type="submit" class="btn btn-danger" href=""
                                form="deleteRequest{{$user->id}}" onclick="return deleteAlert(this)"><i
                                class='fa fa-trash'></i></button>

                        <form method="post" action="{{route('admin.user.delete',['id' => $user->id])}}"
                              id="deleteRequest{{$user->id}}">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="DELETE">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

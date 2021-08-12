@extends('backend.layouts.main')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card redial-border-light redial-shadow mb-4">
        <div class="card-body">
            <h6 class="header-title pl-3 redial-relative">Create User</h6>
            <form method="post" action="{{route('admin.user.create')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="redial-font-weight-600">Email</label>
                    <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}"/>
                </div>
                <div class="form-group">
                    <label class="redial-font-weight-600">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{old('email')}}"/>
                </div>
                <div class="form-group">
                    <label class="redial-font-weight-600">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password" {{old('password')}}/>
                </div>


                <div class="form-group">
                    <select class="form-control selectRoles" multiple name="roles[]">
                        @foreach($roles as $id => $role)

                            <option value="{{$role}}" {{in_array($role,old('roles',[])) ? 'selected' : '' }}>{{$role}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="redial-divider my-4"></div>


                <button type="submit" href="#" class="btn btn-primary btn-xs">Save</button>
            </form>
        </div>
    </div>
@endsection

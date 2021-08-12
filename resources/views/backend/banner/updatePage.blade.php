@extends('backend.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-6 mb-4 offset-sm-3">
            <div class="card redial-border-light redial-shadow">
                <div class="card-body">
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
                    <h6 class="header-title pl-3 redial-relative">Banner Form</h6>
                    <form method="post" action="{{route('admin.banner.update',['id' => request('id')])}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="redial-font-weight-600">Priority</label>
                            <input type="text" class="form-control" placeholder="Enter Priority" name="priority" value="{{$banner->priority}}"/>
                        </div>
                        <div class="form-group">
                            <label class="redial-font-weight-600 d-block">Image (1920x1280)</label>
                            <input type="file" name="image"/>
                        </div>

                        <div class="redial-divider my-4"></div>
                        <button type="submit" class="btn btn-primary btn-xs">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection

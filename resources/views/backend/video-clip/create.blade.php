@extends('backend.layouts.main')

@section('content')
    <div class="col-6 col-md-6">
        <div class="card redial-border-light redial-shadow mb-4">
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
                <form method="POST" action="{{route('admin.video-clip.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="redial-font-weight-600">Title</label>
                        <input type="text" class="form-control" placeholder="Enter title" name="title"/>
                    </div>
                    <div class="form-group">
                        <label class="redial-font-weight-600">Url</label>
                        <input type="text" class="form-control" placeholder="Enter url" name="url"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="checkbox1" name="is_main" value="1">
                        <label for="checkbox1" class="redial-dark mb-0">Main</label>
                    </div>
                    <div class="redial-divider my-4"></div>
                    <button class="btn btn-primary btn-xs">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection

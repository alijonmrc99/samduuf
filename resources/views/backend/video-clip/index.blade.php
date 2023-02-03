@extends('backend.layouts.main')

@section('content')
    <style>
        form {
            display: inline;
        }
    </style>
    <div class="col-12 col-md-12">
        <div class="card redial-border-light redial-shadow mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="header-title pl-3 redial-relative">Video clips</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{route('admin.video-clip.create')}}" class="btn btn-primary">Add video clip</a>
                    </div>
                </div>
                <table class="table table-bordered mb-0 redial-font-weight-500 table-responsive d-md-table">
                    <thead class="redial-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Url</th>
                        <th scope="col">Is Main</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($videoClips as $videoClip)
                        <tr>
                            <th scope="row">{{$videoClip->id}}</th>
                            <td>{{$videoClip->title}}</td>
                            <td>{{$videoClip->url}}</td>
                            <td>{{$videoClip->is_main}}</td>
                            <td>
                                <a href="{{ route('admin.video-clip.edit',['id' => $videoClip->id]) }}" class="btn btn-success">
                                    <i class="icofont icofont-pencil"></i>
                                </a>
                                <form action="{{ route('admin.video-clip.delete',['id' => $videoClip->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-2">
                                        <i class="icofont icofont-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

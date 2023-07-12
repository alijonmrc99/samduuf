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
                        <h6 class="header-title pl-3 redial-relative">Partner organisations</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{route('admin.partner-org.create')}}" class="btn btn-primary">Add organisation</a>
                    </div>
                </div>
                <table class="table table-bordered mb-0 redial-font-weight-500 table-responsive d-md-table">
                    <thead class="redial-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Url</th>
                        <th scope="col">Desc O'zbek</th>
                        <th scope="col">Desc Ўзбек</th>
                        <th scope="col">Desc Руский</th>
                        <th scope="col">Desc English</th>
                        <th scope="col">Image</th>
                        <th scope="col">Order</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orgs as $org)
                        <tr>
                            <th scope="row">{{$org->id}}</th>
                            <td>{{$org->url}}</td>
                            <td>{{$org->desc_uz}}</td>
                            <td>{{$org->desc_kuz}}</td>
                            <td>{{$org->desc_ru}}</td>
                            <td>{{$org->desc_en}}</td>
                            <td><img src="{{$org->image_path}}" alt="" height="100px"></td>
                            <td>{{$org->order}}</td>
                            <td>
                                <a href="{{ route('admin.partner-org.edit',['id' => $org->id]) }}" class="btn btn-success">
                                    <i class="icofont icofont-pencil"></i>
                                </a>
                                <form action="{{ route('admin.partner-org.delete',['id' => $org->id]) }}" method="POST">
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

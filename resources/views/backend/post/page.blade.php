@extends('backend.layouts.main')

@section('content')
    <div class="card redial-border-light redial-shadow mb-4">
        <div class="card-body">
            <a href="{{route('admin.post.create')}}" class="btn btn-primary">Create Post</a>
            <h6 class="header-title pl-3 redial-relative">Hoverable Table</h6>
            <table class="table table-hover mb-0 redial-font-weight-500 table-responsive d-md-table">
                <thead class="redial-dark">
                <tr>
                    <th scope="col">Row</th>
                    <th scope="col">Visible</th>
                    <th scope="col">Type</th>
                    <th scope="col">Title Uz</th>
                    <th scope="col">Title Kuz</th>
                    <th scope="col">Title Ru</th>
                    <th scope="col">Title En</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        @if($post->is_active)
                            <th class="bg-success" style="color: #ffffff">On</th>
                        @else
                            <th class="bg-danger" style="color: #ffffff">Off</th>
                        @endif
                        <td>{{ $post->types[$post->type] }}</td>
                        <td>{{ $post->title_uz }}</td>
                        <td>{{ $post->title_kuz}}</td>
                        <td>{{ $post->title_ru}}</td>
                        <td>{{ $post->title_en}}</td>
                        <td>
                            @if($post->is_active)
                                <a href="{{route('admin.post.change.visibility',['id' => $post->id])}}">Hide</a>
                            @else
                                <a href="{{route('admin.post.change.visibility',['id' => $post->id ])}}">Show</a>
                            @endif
                                <a href="{{route('admin.post.view',['id' => $post->id])}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                <a href="{{route('admin.post.update',['id' => $post->id])}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                <button type="submit" form="delete{{$post->id}}" href="" class="btn btn-danger" onclick="return deleteAlert(this)"><i class="fa fa-trash" ></i></button>
                                                    <form action="{{route('admin.post.delete',['id' => $post->id])}}" method="post" id="delete{{$post->id}}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="_method" value="DELETE" hidden>
                                                    </form>
                        </td>
                        {{--                        <td>--}}
                        {{--                            <a href="{{route('admin.page.update',['id' => $post->menu_id])}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>--}}
                        {{--                            <button type="submit" form="delete{{$post->menu_id}}" href="" class="btn btn-danger"><i class="fa fa-trash"></i></button>--}}
                        {{--                            <form action="{{route('admin.page.delete',['id' => $post->menu_id])}}" method="post" id="delete{{$post->menu_id}}">--}}
                        {{--                                {{csrf_field()}}--}}
                        {{--                                <input type="hidden" name="_method" value="DELETE" hidden>--}}
                        {{--                            </form>--}}
                        {{--                        </td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            {{$posts->links('pagination::bootstrap-4')}}
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function deleteAlert(elem) {

            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this data!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-primary',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: "No, cancel plx!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        swal("Deleted!", "Your data has been deleted!", "success");
                        elem.form.submit();

                    } else {
                        swal("Cancelled", "Your data is safe :)", "error");
                    }
                    confirm = isConfirm;
                });
            return false;
        }
    </script>
@endsection

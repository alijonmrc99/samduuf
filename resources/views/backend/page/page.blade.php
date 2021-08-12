@extends('backend.layouts.main')

@section('content')
    <div class="card redial-border-light redial-shadow mb-4">
        <div class="card-body">
            <a href="{{route('admin.page.create')}}" class="btn btn-primary">Create Page</a>
            <h6 class="header-title pl-3 redial-relative">Hoverable Table</h6>
            <table class="table table-hover mb-0 redial-font-weight-500 table-responsive d-md-table">
                <thead class="redial-dark">
                <tr>
                    <th scope="col">Row</th>
                    <th scope="col">Title Uz</th>
                    <th scope="col">Title Kuz</th>
                    <th scope="col">Title Ru</th>
                    <th scope="col">Title En</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr>
                        <th scope="row">{{$page->id}}</th>
                        <td>{{$page->getMenuOrLink->title_uz}}</td>
                        <td>{{$page->getMenuOrLink->title_kuz}}</td>
                        <td>{{$page->getMenuOrLink->title_ru}}</td>
                        <td>{{$page->getMenuOrLink->title_en}}</td>
                        <td>
                            <a href="{{route('admin.page.view',['id' => $page->id])}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                            <a href="{{route('admin.page.update',['id' => $page->id])}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                            <button type="submit" form="delete{{$page->menu_id}}" href="" class="btn btn-danger" onclick="return deleteAlert(this)"><i class="fa fa-trash"></i></button>
                            <form action="{{route('admin.page.delete',['id' => $page->id])}}" method="post" id="delete{{$page->menu_id}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE" hidden>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            {{$pages->links('pagination::bootstrap-4')}}
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

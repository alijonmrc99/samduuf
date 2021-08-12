@extends('backend.layouts.main')
@section('content')
    <div class="card-body">
        <h6 class="header-title pl-3 redial-relative"> Contacts</h6>
        <table class="table table-dark table-hover mb-0 redial-font-weight-500 table-responsive d-md-table">
            <thead>
            <tr>
                <th scope="col">Row</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <td>Date</td>
                <td>Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <th scope="row">{{$contact->id}}</th>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->surname}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->created_at}}</td>
                    <td>
                        <a href="{{route('admin.contact.view',['id' => $contact->id])}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                        <button type="submit" form="delete{{$contact->id}}" href="" class="btn btn-danger" onclick="return deleteAlert(this)"><i class="fa fa-trash" ></i></button>
                        <form action="{{route('admin.contact.delete',['id' => $contact->id])}}" method="post" id="delete{{$contact->id}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE" hidden>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        {{$contacts->links('pagination::bootstrap-4')}}
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

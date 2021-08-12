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
                    <form method="post" action="{{route('admin.banner')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="redial-font-weight-600">Priority</label>
                            <input type="text" class="form-control" placeholder="Enter Priority" name="priority" />
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


    <div class="card redial-border-light redial-shadow">
        <div class="card-body">
            <div class="row">
                @foreach($banners as $banner)
                    <div class="col-12 col-sm-6 col-xl-3 mb-4 text-center">
                        <div class="gallery">
                            <a href="/{{$banner->image}}" data-toggle=""><img src="/{{$banner->image}}"
                                                                                      data-gallery="example-gallery"
                                                                                      alt=""
                                                                                      class="img-fluid rounded"></a>
                            <a class="btn btn-primary" style="margin-top: 5px;" href="{{route('admin.banner.update',['id' => $banner->id])}}"><i class="fa fa-pencil"></i></a>
                            <button type="submit" class="btn btn-danger" href="" form="deleteRequest{{$banner->id}}" style="margin-top: 5px;" onclick="return deleteAlert(this)"><i class='fa fa-trash' ></i></button>
                            <form method="post" action="{{route('admin.banner.delete',['id' => $banner->id])}}" id="deleteRequest{{$banner->id}}">
                                {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



@endsection
@section('scripts')
    <script src="{{asset('backend/js/clickboard.js')}}"></script>
    <script>
        new ClipboardJS('.clickBoard');
        $("#checkbox1").change(function () {
            if (this.checked) {
                $('#link').css('visibility', 'visible');
            } else {
                $('#link').css('visibility', 'hidden');
            }
        });

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

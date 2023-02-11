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
                <form method="POST" action="{{route('admin.photo-galleries.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="redial-font-weight-600">Date</label>
                        <input type="text" id="date" class="form-control" placeholder="Enter date" name="date" value="{{old('date')}}"/>
                    </div>
                    <div class="custom-tabs2">
                        <ul class="nav nav-tabs flex-column flex-md-row nav-justified" id="myTab"
                            role="tablist">
                            <li class="nav-item">
                                <a class="nav-link redial-light rounded-0 active" data-toggle="tab"
                                   href="#id1" role="tab" aria-selected="true" aria-expanded="true"><i
                                        class="icofont icofont-home pr-2"></i> O'zbek</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link redial-light rounded-0" data-toggle="tab" href="#id2"
                                   role="tab" aria-selected="false" aria-expanded="false"><i
                                        class="icofont icofont-ui-user pr-2"></i> Ўзбек</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link redial-light rounded-0" data-toggle="tab" href="#id3"
                                   role="tab" aria-selected="false" aria-expanded="false"><i
                                        class="icofont icofont-settings pr-2"></i>Руский</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link redial-light rounded-0" data-toggle="tab" href="#id4"
                                   role="tab" aria-selected="false" aria-expanded="false"><i
                                        class="icofont icofont-settings pr-2"></i>English</a>
                            </li>
                        </ul>
                        <div class="tab-content border redial-border-light" id="myTabContent">
                            <div class="tab-pane fade active show" id="id1" role="tabpanel"
                                 aria-expanded="true">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter desc"
                                               name="desc_uz" data-text-limit="255" data-output-id="validationLimits"
                                               onkeyup="inputValidate(this)" value="{{old('desc_uz')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="id2" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter desc"
                                               name="desc_kuz" data-text-limit="255" data-output-id="validationLimits"
                                               onkeyup="inputValidate(this)" value="{{old('desc_kuz')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="id3" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <input type="text" class="form-control" placeholder="Enter desc"
                                           name="desc_ru" data-text-limit="255" data-output-id="validationLimits"
                                           onkeyup="inputValidate(this)" value="{{old('desc_ru')}}"/>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="id4" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <input type="text" class="form-control" placeholder="Enter desc"
                                           name="desc_en" data-text-limit="255" data-output-id="validationLimits"
                                           onkeyup="inputValidate(this)" value="{{old('desc_en')}}"/>
                                </div>
                            </div>
                            <span id="validationLimits" class="validation-limit"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="redial-font-weight-600">Order</label>
                        <input type="text" class="form-control" placeholder="Enter Order" name="order" value="{{old('desc_kuz',0)}}"/>
                    </div>
                    <div class="form-group">
                        <label class="redial-font-weight-600 d-block">Image</label>
                        <input type="file" name="image" accept="image/*"/>
                    </div>
                    <div class="redial-divider my-4"></div>
                    <button class="btn btn-primary btn-xs">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $('#date').flatpickr({});
    </script>
@endsection

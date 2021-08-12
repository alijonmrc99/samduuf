@extends('backend.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="row mb-4">
                <div class="col-12 col-xl-6">
                    <div class="card redial-border-light redial-shadow mb-4">
                        <div class="alert-primary">
                            <ul>
                                <li>Contact /contact</li>
                                <li>News /post-news</li>
                                <li>Annuncements /post-ads</li>
                            </ul>
                        </div>
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
                            <h6 class="header-title pl-3 redial-relative">Menu Form</h6>
                            <form method="post"
                                  action="{{  route('admin.menu')  }}">
                                {{csrf_field()}}
                                <label class="redial-font-weight-600">Titles</label>
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
                                                    <input type="text" class="form-control" placeholder="Enter title"
                                                           name="title_uz" value="{{old('title_uz')}}" data-text-limit="128" data-output-id="validationLimits" onkeyup="inputValidate(this)"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="id2" role="tabpanel" aria-expanded="false">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Enter title"
                                                           name="title_kuz" value="{{old('title_kuz')}}" data-text-limit="128" data-output-id="validationLimits" onkeyup="inputValidate(this)"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="id3" role="tabpanel" aria-expanded="false">
                                            <div class="card-body">
                                                <input type="text" class="form-control" placeholder="Enter title"
                                                       name="title_ru" value="{{old('title_ru')}}" data-text-limit="128" data-output-id="validationLimits" onkeyup="inputValidate(this)"/>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="id4" role="tabpanel" aria-expanded="false">
                                            <div class="card-body">
                                                <input type="text" class="form-control" placeholder="Enter title"
                                                       name="title_en" value="{{old('title_en')}}" data-text-limit="128" data-output-id="validationLimits" onkeyup="inputValidate(this)"/>
                                            </div>
                                        </div>
                                        <span id="validationLimits" class="validation-limit"></span>
                                    </div>
                                </div>

                                <br>
                                <div class="form-group">
                                    <label class="redial-font-weight-600">Select parent of menu</label>
                                    <select class="form-control" name="parent_id" required>
                                        <option disabled selected>Select parent</option>
                                        @foreach($menus as $menu)
                                            <option
                                                value="{{$menu->id}}" {{old('parent_id') == $menu->id ? 'selected' : '' }}>
                                                {{$menu->degree >= 2 ? '(M)' : ''}}
                                                {{$menu->degree == 1 ? $menu->getParent->title_uz == 'Link(Root)' ? '(L)' : '(M)' : ''}}
                                                {{$menu->title_uz}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="text" class="form-control" placeholder="Priority" name="priority"
                                       value="{{old('priority')}}"/>
                                <br>
                                <div class="form-group">
                                    <input type="checkbox" id="checkbox1"
                                           name="is_link" {{old('is_link')!= 'on' ?: 'checked'}}>
                                    <label for="checkbox1" class="redial-dark mb-0">Check this if you aren't creating
                                        page</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="link" name="link" class="form-control"
                                           placeholder="Enter Link"
                                           value="{{old('link')}}" style="visibility: {{old('is_link') ?: 'hidden'}}"/>
                                </div>
                                <div class="redial-divider my-4"></div>
                                <button type="submit" class="btn btn-primary btn-xs">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card redial-border-light redial-shadow">
                        <div class="card-body">
                            <h6 class="header-title pl-3 redial-relative">Menu Tree</h6>
                            <div id="collapseDVR3" class="panel-collapse">
                                <div class="tree">
                                    <ul class="list-unstyled redial-font-weight-600 redial-dark">
                                        <li><span><i class="fa fa-folder-open"></i> Menu(Root)</span>
                                            <ul>
                                                @foreach($menus->where('parent_id',1) as $menu)
                                                    <li><span><i class="fa fa-folder"></i> {{$menu->title_uz}}</span>
                                                        <ul>
                                                            @foreach($menus->where('parent_id',$menu->id) as $menu)
                                                                <li><span><i class="fa fa-list"></i> {{$menu->title_uz}} </span>
                                                                    <ul>
                                                                        @foreach($menus->where('parent_id',$menu->id) as $menu)
                                                                            <li><span><i class="fa fa-link"></i> {{$menu->title_uz}} </span>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card redial-border-light redial-shadow mb-4">
                <div class="card-body">
                    <h6 class="header-title pl-3 redial-relative">Menu Grid</h6>
                    <table class="table table-hover mb-0 redial-font-weight-500 table-responsive d-md-table">
                        <thead class="redial-dark">
                        <tr>
                            <th scope="col">Row</th>
                            <th scope="col">O'zbek</th>
                            <th scope="col">Ўзбек</th>
                            <th scope="col">Руский</th>
                            <th scope="col">English</th>
                            <th scope="col">Parrent</th>
                            <th scope="col">Link</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menus as $menu)
                            <tr >
                                <th scope="row">{{$menu->id}}</th>
                                <td>{{$menu->title_uz}}</td>
                                <td>{{$menu->title_kuz}}</td>
                                <td>{{$menu->title_ru}}</td>
                                <td>{{$menu->title_en}}</td>

                                <td>{{$menu->parent_id !=0 ? $menu->getParent->title_uz : ''}}</td>
                                <td>
                                    <a type="button" class="btn btn-outline-primary btn-xs" target="_blank"
                                       href="{{$menu->link ?: '/page/' . $menu->slug }}" >Open</a>
                                    <button class="clickBoard btn btn-info" data-clipboard-text="{{$menu->link ?: '/page/' . $menu->slug }}">
                                        Copy
                                    </button>
                                </td>
                                <td>
                                    @if($menu->parent_id != 0)
                                        <a class="btn btn-primary"
                                           href="{{route('admin.menu.change',['id' => $menu->id])}}"
                                           style="margin-right: 8px;"><i class='fa fa-pencil'></i></a>
                                        <button type="submit" class="btn btn-danger" href=""
                                                form="deleteRequest{{$menu->id}}" onclick="return deleteAlert(this)"><i class='fa fa-trash'></i></button>

                                        <form method="post" action="{{route('admin.menu.delete',['id' => $menu->id])}}"
                                              id="deleteRequest{{$menu->id}}">
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <p class="text-center">
                    {{$menus->links('pagination::bootstrap-4')}}
                    </p>
                </div>
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


@extends('backend.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="row mb-4">
                <div class="col-12 col-xl-6">
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
                            <h6 class="header-title pl-3 redial-relative">Menu Form</h6>
                            <form method="post"
                                  action="{{ route('admin.menu.change',['id' => request('id')])  }}">
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
                                                           name="title_uz" value="{{$menuToChange['title_uz']}}" data-text-limit="128" data-output-id="validationLimits" onkeyup="inputValidate(this)"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="id2" role="tabpanel" aria-expanded="false">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Enter title"
                                                           name="title_kuz" value="{{$menuToChange['title_kuz']}}" data-text-limit="128" data-output-id="validationLimits" onkeyup="inputValidate(this)"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="id3" role="tabpanel" aria-expanded="false">
                                            <div class="card-body">
                                                <input type="text" class="form-control" placeholder="Enter title"
                                                       name="title_ru" value="{{$menuToChange['title_ru']}}" data-text-limit="128" data-output-id="validationLimits" onkeyup="inputValidate(this)"/>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="id4" role="tabpanel" aria-expanded="false">
                                            <div class="card-body">
                                                <input type="text" class="form-control" placeholder="Enter title"
                                                       name="title_en" value="{{$menuToChange['title_en']}}" data-text-limit="128" data-output-id="validationLimits" onkeyup="inputValidate(this)"/>
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
                                                value="{{$menu->id}}" {{$menuToChange['parent_id'] == $menu->id ? 'selected' : '' }}>
                                                {{$menu->degree >= 2 ? '(M)' : ''}}
                                                {{$menu->degree == 1 ? $menu->getParent->title_uz == 'Link(Root)' ? '(L)' : '(M)' : ''}}
                                                {{$menu->title_uz}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="text" class="form-control" placeholder="Priority" name="priority"
                                       value="{{$menuToChange['priority']}}"/>
                                <br>
                                <div class="form-group">
                                    <input type="checkbox" id="checkbox1"
                                           name="is_link" {{ $menuToChange['is_link'] != 'on' ?: 'checked'}}>
                                    <label for="checkbox1" class="redial-dark mb-0">Check this if you aren't creating
                                        page</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="link" name="link" class="form-control"
                                           placeholder="Enter Link"
                                           value="{{$menuToChange['link']}}" style="visibility: {{$menuToChange['is_link'] ?: 'hidden'}}"/>
                                </div>
                                <div class="redial-divider my-4"></div>
                                <button type="submit" class="btn btn-primary btn-xs">Save</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $("#checkbox1").change(function () {
            if (this.checked) {
                $('#link').css('visibility', 'visible');
            } else {
                $('#link').css('visibility', 'hidden');
            }
        });
    </script>
@endsection

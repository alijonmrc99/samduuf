@extends('backend.layouts.main')

@section('content')

    <div class="col-12 col-xl-12">
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
                      action="{{  route('admin.page.update',['id' => $page->id])  }}">
                    {{csrf_field()}}

                    <label class="redial-font-weight-600">Short Content</label>
                    <div class="custom-tabs2">
                        <ul class="nav nav-tabs flex-column flex-md-row nav-justified" id="myTab"
                            role="tablist">
                            <li class="nav-item">
                                <a class="nav-link redial-light rounded-0 active" data-toggle="tab"
                                   href="#identity11" role="tab" aria-selected="true" aria-expanded="true"><i
                                        class="icofont icofont-home pr-2"></i> O'zbek</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link redial-light rounded-0" data-toggle="tab" href="#identity22"
                                   role="tab" aria-selected="false" aria-expanded="false"><i
                                        class="icofont icofont-ui-user pr-2"></i> Ўзбек</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link redial-light rounded-0" data-toggle="tab" href="#identity33"
                                   role="tab" aria-selected="false" aria-expanded="false"><i
                                        class="icofont icofont-settings pr-2"></i>Руский</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link redial-light rounded-0" data-toggle="tab" href="#identity44"
                                   role="tab" aria-selected="false" aria-expanded="false"><i
                                        class="icofont icofont-settings pr-2"></i>English</a>
                            </li>
                        </ul>
                        <div class="tab-content border redial-border-light" id="myTabContent">
                            <div class="tab-pane fade active show" id="identity11" role="tabpanel"
                                 aria-expanded="true">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" name="short_content_uz" class="form-control"
                                               value="{{$page->short_content_uz}}" data-text-limit="512" data-output-id="validationLimitsShortContent" onkeyup="inputValidate(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="identity22" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" name="short_content_kuz" class="form-control"
                                               value="{{$page->short_content_kuz}}" data-text-limit="512" data-output-id="validationLimitsShortContent" onkeyup="inputValidate(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="identity33" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <input type="text" name="short_content_ru" class="form-control"
                                           value="{{$page->short_content_ru}}" data-text-limit="512" data-output-id="validationLimitsShortContent" onkeyup="inputValidate(this)">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="identity44" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <input type="text" name="short_content_en" class="form-control"
                                           value="{{$page->short_content_en}}" data-text-limit="512" data-output-id="validationLimitsShortContent" onkeyup="inputValidate(this)">
                                </div>
                            </div>
                            <span id="validationLimitsShortContent" class="validation-limit"></span>
                        </div>
                    </div>

                    <label class="redial-font-weight-600">Content</label>
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
                                        <textarea name="content_uz" class="form-control my-editor">{!! $page->content_uz !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="id2" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <div class="form-group">
                                        <textarea name="content_kuz" class="form-control my-editor">{!! $page->content_kuz !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="id3" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                     <textarea name="content_ru" class="form-control my-editor">{!! $page->content_ru !!}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="id4" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                     <textarea name="content_en" class="form-control my-editor">{!! $page->content_en !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="form-group">
                        <label class="redial-font-weight-600">Select menu or link</label>
                        <select class="form-control" name="menu_id" required>
                            <option disabled >Select parent</option>
                            <option value="{{$page->getMenu->id}}" selected>{{$page->getMenu->title_uz}}</option>
                            @foreach($menusOrLinks  as $menusOrLink)
                                <option
                                    value="{{$menusOrLink->id}}">
                                    {{$menusOrLink->title_uz}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="redial-divider my-4"></div>
                    <button type="submit" class="btn btn-primary btn-xs">Save</button>
                </form>
            </div>
        </div>
    </div>


@endsection
@section('scripts')
    <script src="{{asset('backend/tinymce/tinymce.min.js')}}" referrerpolicy="origin"></script>
    <script>
        var editor_config = {
            path_absolute: "/admin/",
            selector: 'textarea.my-editor',
            relative_urls: false,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            file_picker_callback: function (callback, value, meta) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                if (meta.filetype == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.openUrl({
                    url: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no",
                    onMessage: (api, message) => {
                        callback(message.content);
                    }
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@endsection


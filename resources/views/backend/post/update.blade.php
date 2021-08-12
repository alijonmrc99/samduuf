@extends('backend.layouts.main')

@section('content')
    <style>
        img {
            display: block;
            max-width: 100%;
        }
        .modal-lg{
            max-width: 1000px !important;
        }
        .preview {
            overflow: hidden;
            width: 100%;
            height: 300px;
            margin-left: 15px;
            border: 1px dashed red;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"
          rel="stylesheet"/>

    <div class="modal fade" id="largemodel" style="width: 100%" tabindex="-1" role="dialog" aria-labelledby="largemodel"
         aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content redial-border-light">
                <div class="modal-header redial-border-light">
                    <h5 class="modal-title pt-2" id="exampleModalLabel">Large Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img id="image" src="https://avatars0.githubusercontent.com/u/3456749"
                                     style="width: 100%">
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer redial-border-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="crop">Crop</button>
                </div>
            </div>
        </div>
    </div>

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
                      action="{{  route('admin.post.update',['id' => $post->id])  }}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="redial-font-weight-600">Select type</label>
                                <select class="form-control" name="type" required>
                                    <option disabled selected>Select parent</option>
                                    <option value="1" {{$post->type == 1 ? 'selected' : ''}}>News(yangilik)</option>
                                    <option value="2" {{$post->type == 2 ? 'selected' : ''}}>Ad(E'lon)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <div class="form-group">
                                    <label class="redial-font-weight-600">Select date</label>
                                    <input data-date-format="dd/mm/yyyy" id="datepicker" class="form-control"
                                           name="date" value="{{old('date') ?: $post->date}}"/>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-2">
                            <div class="form-group" style="margin-top: 32px;">
                                <input type="checkbox" id="checkbox1"
                                       name="is_active" {{$post->is_active ? 'checked' : ''}}>
                                <label for="checkbox1" class="redial-dark mb-0">Visible</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="redial-font-weight-600 d-block">Image</label>
                        <input type="file" class="image"  id="image"/>
                        <input type="text" name="image" id="form-image" value="{{old('image') ?: $post->image}}" hidden>
                    </div>

                    <label class="redial-font-weight-600">Titles</label>
                    <div class="custom-tabs2">
                        <ul class="nav nav-tabs flex-column flex-md-row nav-justified" id="myTab"
                            role="tablist">
                            <li class="nav-item">
                                <a class="nav-link redial-light rounded-0 active" data-toggle="tab"
                                   href="#identity1" role="tab" aria-selected="true" aria-expanded="true"><i
                                        class="icofont icofont-home pr-2"></i> O'zbek</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link redial-light rounded-0" data-toggle="tab" href="#identity2"
                                   role="tab" aria-selected="false" aria-expanded="false"><i
                                        class="icofont icofont-ui-user pr-2"></i> Ўзбек</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link redial-light rounded-0" data-toggle="tab" href="#identity3"
                                   role="tab" aria-selected="false" aria-expanded="false"><i
                                        class="icofont icofont-settings pr-2"></i>Руский</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link redial-light rounded-0" data-toggle="tab" href="#identity4"
                                   role="tab" aria-selected="false" aria-expanded="false"><i
                                        class="icofont icofont-settings pr-2"></i>English</a>
                            </li>
                        </ul>
                        <div class="tab-content border redial-border-light" id="myTabContent">
                            <div class="tab-pane fade active show" id="identity1" role="tabpanel"
                                 aria-expanded="true">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" name="title_uz" class="form-control"
                                               value="{{ old('title_uz') ?: $post->title_uz}}" data-text-limit="128" data-output-id="validationLimitsTitle" onkeyup="inputValidate(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="identity2" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" name="title_kuz" class="form-control"
                                               value="{{ old('title_kuz') ?: $post->title_kuz}}" data-text-limit="128" data-output-id="validationLimitsTitle" onkeyup="inputValidate(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="identity3" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <input type="text" name="title_ru" class="form-control"
                                           value="{{ old('title_ru') ?: $post->title_ru}}" data-text-limit="128" data-output-id="validationLimitsTitle" onkeyup="inputValidate(this)">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="identity4" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <input type="text" name="title_en" class="form-control"
                                           value="{{ old('title_en') ?: $post->title_en}}" data-text-limit="128" data-output-id="validationLimitsTitle" onkeyup="inputValidate(this)">
                                </div>
                            </div>
                            <span id="validationLimitsTitle" class="validation-limit"></span>
                        </div>
                    </div>
                    <br>

                    <label class="redial-font-weight-600">Short Content</label>
                    <div class="custom-tabs2">
                        <ul class="nav nav-tabs flex-column flex-md-row nav-justified" id="myTab"
                            role="tablist">
                            <li class="nav-item">
                                <a class="nav-link redial-light rounded-0 active" data-toggle="tab"
                                   href="#identity1" role="tab" aria-selected="true" aria-expanded="true"><i
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
                                               value="{{old('short_content_uz') ?: $post->short_content_uz}}" data-text-limit="256" data-output-id="validationLimitsShortContent" onkeyup="inputValidate(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="identity22" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" name="short_content_kuz" class="form-control"
                                               value="{{ old('short_content_kuz') ?: $post->short_content_kuz}}" data-text-limit="256" data-output-id="validationLimitsShortContent" onkeyup="inputValidate(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="identity33" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <input type="text" name="short_content_ru" class="form-control"
                                           value="{{old('short_content_ru') ?: $post->short_content_ru}}" data-text-limit="256" data-output-id="validationLimitsShortContent" onkeyup="inputValidate(this)">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="identity44" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <input type="text" name="short_content_en" class="form-control"
                                           value="{{old('short_content_en') ?: $post->short_content_en}}" data-text-limit="256" data-output-id="validationLimitsShortContent" onkeyup="inputValidate(this)">
                                </div>
                            </div>
                            <span id="validationLimitsShortContent" class="validation-limit"></span>
                        </div>
                    </div>

                    <br>
                    <label class="redial-font-weight-600">Contents</label>
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
                                        <textarea name="content_uz"
                                                  class="form-control my-editor">{{old('content_uz') ?: $post->content_uz}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="id2" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <div class="form-group">
                                        <textarea name="content_kuz"
                                                  class="form-control my-editor">{{old('content_kuz') ?: $post->content_kuz}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="id3" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <textarea name="content_ru"
                                              class="form-control my-editor">{{old('content_ru') ?: $post->content_ru}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="id4" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <textarea name="content_en"
                                              class="form-control my-editor">{{old('content_en') ?: $post->content_en}}</textarea>
                                </div>
                            </div>
                        </div>
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
            height: '550',
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

    <script type="text/javascript">
        $('#datepicker').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });
    </script>
    <script>

        var $modal = $('#largemodel');
        var image = document.getElementById('image');
        var cropper;

        $("body").on("change", ".image", function (e) {
            var files = e.target.files;
            var done = function (url) {
                image.src = url;
                $modal.modal('show');
            };
            var reader;
            var file;
            var url;

            if (files && files.length > 0) {
                file = files[0];

                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });

        $modal.on('shown.bs.modal', function () {
            cropper = new Cropper(image, {
                aspectRatio: 35 / 25,
                cropBoxResizable: false,
                viewMode: 1,
                preview: '.preview',
            });
        }).on('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
        });

        $("#crop").click(function () {
            canvas = cropper.getCroppedCanvas({
                width: 350,
                height: 250,
            });

            canvas.toBlob(function (blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function () {
                    var base64data = reader.result;
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "/admin/post/upload-image",
                        data: {image: base64data},
                        success: function(data){
                            console.log(data);
                            document.getElementById('form-image').value = data.image_name;
                            $modal.modal('hide');
                            alert("success upload image");
                        }
                    });
                }
            });

        })

    </script>
@endsection


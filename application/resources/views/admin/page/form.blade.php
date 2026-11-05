<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="form-control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($page->title) ? $page->title : ''}}" required>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('heading') ? 'has-error' : ''}}">
    <label for="heading" class="form-control-label">{{ 'Heading' }}</label>
    <input class="form-control" name="heading" type="text" id="heading" value="{{ isset($page->heading) ? $page->heading : ''}}" required>
    {!! $errors->first('heading', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group{{ $errors->has('banner') ? ' has-danger' : '' }}">
    <label class="form-control-label" for="input-banner">{{ __('Image') }}</label>
    @isset($page->banner)
        <img src="{{ url('upload/' . $page->banner) }}" height="42" width="42"         style="    margin-left: 74px;">
    @endisset
    <div >
        <input type="file" name="banner"
               id="input-banner" accept="image/*">
    </div>
    {!! $errors->first('banner', '<p class="help-block">:message</p>') !!}
    @include('admin.alerts.feedback', ['field' => 'banner'])
</div>






<div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
    <label class="form-control-label"
           for="input-content">{{ __('Content') }}</label>
    <input type="text" value="{{ isset($page->content) ? $page->content : ''}}" name="content"
           id="input-content"
           class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}"
           placeholder="{{ __('content') }}"  >
    @include('admin.alerts.feedback', ['field' => 'content'])
</div>




<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.5/tinymce.min.js"></script>

<script>
    var editor_config = {

        selector: '#input-content',

        directionality: document.dir,

        path_absolute: "/",

        menubar: 'edit insert view format table',

        plugins: [

            "advlist autolink lists link image charmap preview hr anchor pagebreak",

            "searchreplace wordcount visualblocks visualchars code fullscreen",

            "insertdatetime media save table contextmenu directionality",

            "paste textcolor colorpicker textpattern"

        ],

        toolbar: "insertfile undo redo | formatselect styleselect | bold italic strikethrough forecolor backcolor permanentpen formatpainter | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | fullscreen code",

        relative_urls: false,

        language: document.documentElement.lang,

        height: 300,

    }

    tinymce.init(editor_config);
</script>

<div class="form-group {{ $errors->has('heading') ? 'has-error' : ''}}">
    <label for="heading" class="control-label">{{ 'Heading' }}</label>
    <input class="form-control" name="heading" type="text" id="heading" value="{{ isset($qualityeducation->heading) ? $qualityeducation->heading : ''}}" required>
    {!! $errors->first('heading', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($qualityeducation->title) ? $qualityeducation->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('text') ? 'has-error' : ''}}">
    <label for="text" class="control-label">{{ 'Text' }}</label>
    <textarea class="form-control" rows="5" name="text" type="textarea" id="text" required>{{ isset($qualityeducation->text) ? $qualityeducation->text : ''}}</textarea>
    {!! $errors->first('text', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
    <label class="form-control-label" for="input-image">{{ __('Image') }}</label>
    @isset($qualityeducation->image)
        <img src="{{ url('upload/' . $qualityeducation->image) }}" height="42" width="42"         style="    margin-left: 74px;">
    @endisset
    <div >
        <input type="file" name="image"
               id="input-image" accept="image/*">
    </div>
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    @include('admin.alerts.feedback', ['field' => 'image'])
</div>


<div class="form-group{{ $errors->has('banner') ? ' has-danger' : '' }}">
    <label class="form-control-label" for="input-banner">{{ __('Banner') }}</label>
    @isset($qualityeducation->banner)
        <img src="{{ url('upload/' . $qualityeducation->banner) }}" height="42" width="42"         style="    margin-left: 74px;">
    @endisset
    <div >
        <input type="file" name="banner"
               id="input-banner" accept="image/*">
    </div>
    {!! $errors->first('banner', '<p class="help-block">:message</p>') !!}
    @include('admin.alerts.feedback', ['field' => 'banner'])
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

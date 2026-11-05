<div class="form-group{{ $errors->has('banner') ? ' has-danger' : '' }}">
    <label class="form-control-label" for="input-banner">{{ __('Banner') }}</label>
    @isset($missionvision->banner)
        <img src="{{ url('upload/' . $missionvision->banner) }}" height="42" width="42"         style="    margin-left: 74px;">
    @endisset
    <div >
        <input type="file" name="banner"
               id="input-banner" accept="image/*">
    </div>
    {!! $errors->first('banner', '<p class="help-block">:message</p>') !!}
    @include('admin.alerts.feedback', ['field' => 'banner'])
</div>
<div class="form-group {{ $errors->has('heading1') ? 'has-error' : ''}}">
    <label for="heading1" class="control-label">{{ 'Heading1' }}</label>
    <input class="form-control" name="heading1" type="text" id="heading1" value="{{ isset($missionvision->heading1) ? $missionvision->heading1 : ''}}" required>
    {!! $errors->first('heading1', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('image1') ? ' has-danger' : '' }}">
    <label class="form-control-label" for="input-image1">{{ __('Image 1') }}</label>
    @isset($missionvision->image1)
        <img src="{{ url('upload/' . $missionvision->image1) }}" height="42" width="42"         style="    margin-left: 74px;">
    @endisset
    <div >
        <input type="file" name="image1"
               id="input-image1" accept="image/*">
    </div>
    {!! $errors->first('image1', '<p class="help-block">:message</p>') !!}
    @include('admin.alerts.feedback', ['field' => 'image1'])
</div>


<div class="form-group {{ $errors->has('description1') ? 'has-error' : ''}}">
    <label for="description1" class="control-label">{{ 'Description1' }}</label>
    <textarea class="form-control" rows="5" name="description1" type="textarea" id="description1" required>{{ isset($missionvision->description1) ? $missionvision->description1 : ''}}</textarea>
    {!! $errors->first('description1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('heading2') ? 'has-error' : ''}}">
    <label for="heading2" class="control-label">{{ 'Heading2' }}</label>
    <input class="form-control" name="heading2" type="text" id="heading2" value="{{ isset($missionvision->heading2) ? $missionvision->heading2 : ''}}" required>
    {!! $errors->first('heading2', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('image2') ? ' has-danger' : '' }}">
    <label class="form-control-label" for="input-image2">{{ __('image2') }}</label>
    @isset($missionvision->image2)
        <img src="{{ url('upload/' . $missionvision->image2) }}" height="42" width="42"         style="    margin-left: 74px;">
    @endisset
    <div >
        <input type="file" name="image2"
               id="input-image2" accept="image/*">
    </div>
    {!! $errors->first('image2', '<p class="help-block">:message</p>') !!}
    @include('admin.alerts.feedback', ['field' => 'image2'])
</div>


<div class="form-group {{ $errors->has('description2') ? 'has-error' : ''}}">
    <label for="description2" class="control-label">{{ 'Description2' }}</label>
    <textarea class="form-control" rows="5" name="description2" type="textarea" id="description2" required>{{ isset($missionvision->description2) ? $missionvision->description2 : ''}}</textarea>
    {!! $errors->first('description2', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

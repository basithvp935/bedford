
<div class="form-group {{ $errors->has('text') ? 'has-error' : ''}}">
    <label for="text" class="control-label">{{ 'Text' }}</label>
    <textarea class="form-control" rows="5" name="text" type="textarea" id="text" required>{{ isset($qualityeducationvideo->text) ? $qualityeducationvideo->text : ''}}</textarea>
    {!! $errors->first('text', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('category_id') ? ' has-danger' : '' }}">
    <div class="input-group input-group-alternative">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-badge"></i></span>
        </div>
        <select class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" id="category_id" name="category_id">
            @foreach($categories as $category)
                <option value="{{$category->id}}" @isset($qualityeducationvideo->category_id) @if ($qualityeducationvideo->category_id == $category->id) selected @endif @endisset> {{ $category->name }}</option>
            @endforeach

        </select>
    </div>
    @if ($errors->has('category_id'))
        <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
    @endif
</div>
<div class="form-group {{ $errors->has('iframe') ? 'has-error' : ''}}">
    <label for="iframe" class="control-label">{{ 'Iframe' }}</label>
    <input class="form-control" name="iframe" type="text" id="iframe" value="{{ isset($qualityeducationvideo->iframe) ? $qualityeducationvideo->iframe : ''}}" required>
    {!! $errors->first('iframe', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

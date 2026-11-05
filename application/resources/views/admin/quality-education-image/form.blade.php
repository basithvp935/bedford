<div class="form-group {{ $errors->has('text') ? 'has-error' : ''}}">
    <label for="text" class="control-label">{{ 'Text' }}</label>
    <textarea class="form-control" rows="5" name="text" type="textarea" id="text" >{{ isset($qualityeducationimage->text) ? $qualityeducationimage->text : ''}}</textarea>
    {!! $errors->first('text', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('category_id') ? ' has-danger' : '' }}">
    <div class="input-group input-group-alternative">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-badge"></i></span>
        </div>
        <select class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" id="category_id" name="category_id">
            @foreach($categories as $category)
            <option value="{{$category->id}}" @isset($qualityeducationimage->category_id) @if ($qualityeducationimage->category_id == $category->id) selected @endif @endisset> {{ $category->name }}</option>
            @endforeach

        </select>
    </div>
    @if ($errors->has('category_id'))
        <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
    <label class="form-control-label" for="input-image">{{ __('Image') }}</label>
    @isset($qualityeducationimage->image)
        <img src="{{ url('upload/' . $qualityeducationimage->image) }}" height="42" width="42"         style="    margin-left: 74px;">
    @endisset
    <div >
        <input type="file" name="image"
               id="input-image" accept="image/*">
    </div>
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    @include('admin.alerts.feedback', ['field' => 'image'])
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

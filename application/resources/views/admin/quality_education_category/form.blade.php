<div class="form-group {{ $errors->has('heading') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($quality_education_category->name) ? $quality_education_category->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="text" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="text" required>{{ isset($quality_education_category->description) ? $quality_education_category->description : ''}}</textarea>
    {!! $errors->first('text', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('quality_education_category_id') ? ' has-danger' : '' }}">

    <div class="">
        <label class="form-control-label" for="priority">{{ __('Select Priority') }}</label>
        <select class="form-control{{ $errors->has('quality_education_category_id') ? ' is-invalid' : '' }}" id="priority" name="priority">
            @for($x = 1; $x <= $count; $x++)
                <option value="{{$x}}" @isset($quality_education_category->priority) @if ($quality_education_category->priority == $x) selected @endif @endisset>{{$x}}</option>
            @endfor
        </select>
    </div>
    @if ($errors->has('quality_education_category_id'))
        <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('quality_education_category_id') }}</strong>
                                    </span>
    @endif
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

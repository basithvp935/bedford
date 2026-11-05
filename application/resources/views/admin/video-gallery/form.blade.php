<div class="form-group {{ $errors->has('iframe') ? 'has-error' : ''}}">
    <label for="iframe" class="form-control-label">{{ 'iframe' }}</label>
    <input class="form-control" name="iframe" type="text" id="iframe" value="{{ isset($videogallery->iframe) ? $videogallery->iframe : ''}}" required>
    {!! $errors->first('iframe', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" required>{{ isset($videogallery->description) ? $videogallery->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

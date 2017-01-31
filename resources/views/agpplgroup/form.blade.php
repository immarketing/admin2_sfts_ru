
<div class="form-group {{ $errors->has('Code') ? 'has-error' : ''}}">
    <label for="Code" class="col-md-2 control-label">{{ trans('agpplgroups.Code') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="Code" type="text" id="Code" value="{{ old('Code', isset($agpplgroup) ? $agpplgroup->Code : null) }}" maxlength="10">
        {!! $errors->first('Code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Name') ? 'has-error' : ''}}">
    <label for="Name" class="col-md-2 control-label">{{ trans('agpplgroups.Name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="Name" type="text" id="Name" value="{{ old('Name', isset($agpplgroup) ? $agpplgroup->Name : null) }}" maxlength="200">
        {!! $errors->first('Name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-10">
        <input class="btn btn-primary" type="submit" value="{{ isset($submitButtonLabel) ? $submitButtonLabel : 'Добавить' }}">
    </div>
</div>
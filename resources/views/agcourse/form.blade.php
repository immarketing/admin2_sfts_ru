
<div class="form-group {{ $errors->has('ShortName') ? 'has-error' : ''}}">
    <label for="ShortName" class="col-md-2 control-label">{{ trans('agcourses.ShortName') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="ShortName" type="text" id="ShortName" value="{{ old('ShortName', isset($agcourse) ? $agcourse->ShortName : null) }}" maxlength="100">
        {!! $errors->first('ShortName', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Name') ? 'has-error' : ''}}">
    <label for="Name" class="col-md-2 control-label">{{ trans('agcourses.Name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="Name" type="text" id="Name" value="{{ old('Name', isset($agcourse) ? $agcourse->Name : null) }}" maxlength="200">
        {!! $errors->first('Name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('googleDocID') ? 'has-error' : ''}}">
    <label for="googleDocID" class="col-md-2 control-label">{{ trans('agcourses.googleDocID') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="googleDocID" type="text" id="googleDocID" value="{{ old('googleDocID', isset($agcourse) ? $agcourse->googleDocID : null) }}" maxlength="50">
        {!! $errors->first('googleDocID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TOCJSON') ? 'has-error' : ''}}">
    <label for="TOCJSON" class="col-md-2 control-label">{{ trans('agcourses.TOCJSON') }}</label>
    <div class="col-md-10">
        <textarea class="form-control" name="TOCJSON" cols="50" rows="10" id="TOCJSON" maxlength="20000">{{ old('TOCJSON', isset($agcourse) ? $agcourse->TOCJSON : null) }}</textarea>
        {!! $errors->first('TOCJSON', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Code') ? 'has-error' : ''}}">
    <label for="Code" class="col-md-2 control-label">{{ trans('agcourses.Code') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="Code" type="text" id="Code" value="{{ old('Code', isset($agcourse) ? $agcourse->Code : null) }}" maxlength="10">
        {!! $errors->first('Code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-10">
        <input class="btn btn-primary" type="submit" value="{{ isset($submitButtonLabel) ? $submitButtonLabel : 'Add' }}">
    </div>
</div>
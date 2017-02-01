
<div class="form-group {{ $errors->has('ShortName') ? 'has-error' : ''}}">
    <label for="ShortName" class="col-md-2 control-label">{{ trans('agtests.ShortName') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="ShortName" type="text" id="ShortName" value="{{ old('ShortName', isset($agtest) ? $agtest->ShortName : null) }}" maxlength="100">
        {!! $errors->first('ShortName', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Name') ? 'has-error' : ''}}">
    <label for="Name" class="col-md-2 control-label">{{ trans('agtests.Name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="Name" type="text" id="Name" value="{{ old('Name', isset($agtest) ? $agtest->Name : null) }}" maxlength="200">
        {!! $errors->first('Name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Code') ? 'has-error' : ''}}">
    <label for="Code" class="col-md-2 control-label">{{ trans('agtests.Code') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="Code" type="text" id="Code" value="{{ old('Code', isset($agtest) ? $agtest->Code : null) }}" maxlength="10">
        {!! $errors->first('Code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('GoogleSheetID') ? 'has-error' : ''}}">
    <label for="GoogleSheetID" class="col-md-2 control-label">{{ trans('agtests.GoogleSheetID') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="GoogleSheetID" type="text" id="GoogleSheetID" value="{{ old('GoogleSheetID', isset($agtest) ? $agtest->GoogleSheetID : null) }}" maxlength="50">
        {!! $errors->first('GoogleSheetID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('JSON') ? 'has-error' : ''}}">
    <label for="JSON" class="col-md-2 control-label">{{ trans('agtests.JSON') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="JSON" type="text" id="JSON" value="{{ old('JSON', isset($agtest) ? $agtest->JSON : null) }}" maxlength="2147483647">
        {!! $errors->first('JSON', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-10">
        <input class="btn btn-primary" type="submit" value="{{ isset($submitButtonLabel) ? $submitButtonLabel : 'Add' }}">
    </div>
</div>
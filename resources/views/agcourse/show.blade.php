@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            AgCourse {{ $agcourse->id }}
        </span>

        <div class="btn-group btn-group-xs pull-right" role="group">


            <a href="{{ route('agcourse.agcourse.index') }}" class="btn btn-primary" title="Show all agcourses">
                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
            </a>

            <a href="{{ route('agcourse.agcourse.edit', $agcourse->id ) }}" class="btn btn-primary" title="Edit AgCourse">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>

            <form method="POST" action="{!! route('agcourse.agcourse.destroy', $agcourse->id) !!}" accept-charset="UTF-8" style="display: inline;" novalidate="novalidate">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-xs" title="Delete AgCourse" onclick="return confirm(&quot;Confirm delete?&quot;)" id="sometest">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete AgCourse"></span>
                </button>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('agcourses.ShortName') }}</dt>
            <dd>{{ $agcourse->ShortName }}</dd>
            <dt>{{ trans('agcourses.Name') }}</dt>
            <dd>{{ $agcourse->Name }}</dd>
            <dt>{{ trans('agcourses.googleDocID') }}</dt>
            <dd>{{ $agcourse->googleDocID }}</dd>
            <dt>{{ trans('agcourses.TOCJSON') }}</dt>
            <dd>{{ $agcourse->TOCJSON }}</dd>
            <dt>{{ trans('agcourses.Code') }}</dt>
            <dd>{{ $agcourse->Code }}</dd>

        </dl>

    </div>
</div>

@endsection
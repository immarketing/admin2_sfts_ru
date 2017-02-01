@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            AgTest {{ $agtest->id }}
        </span>

        <div class="btn-group btn-group-xs pull-right" role="group">


            <a href="{{ route('agtest.agtest.index') }}" class="btn btn-primary" title="Show all agtests">
                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
            </a>

            <a href="{{ route('agtest.agtest.edit', $agtest->id ) }}" class="btn btn-primary" title="Edit AgTest">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>

            <form method="POST" action="{!! route('agtest.agtest.destroy', $agtest->id) !!}" accept-charset="UTF-8" style="display: inline;" novalidate="novalidate">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-xs" title="Delete AgTest" onclick="return confirm(&quot;Confirm delete?&quot;)" id="sometest">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete AgTest"></span>
                </button>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('agtests.ShortName') }}</dt>
            <dd>{{ $agtest->ShortName }}</dd>
            <dt>{{ trans('agtests.Name') }}</dt>
            <dd>{{ $agtest->Name }}</dd>
            <dt>{{ trans('agtests.Code') }}</dt>
            <dd>{{ $agtest->Code }}</dd>
            <dt>{{ trans('agtests.GoogleSheetID') }}</dt>
            <dd>{{ $agtest->GoogleSheetID }}</dd>
            <dt>{{ trans('agtests.JSON') }}</dt>
            <dd>{{ $agtest->JSON }}</dd>

        </dl>

    </div>
</div>

@endsection
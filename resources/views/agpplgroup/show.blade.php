@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            AGPplGroup {{ $agpplgroup->id }}
        </span>

        <div class="btn-group btn-group-xs pull-right" role="group">


            <a href="{{ route('agpplgroup.agpplgroup.index') }}" class="btn btn-primary" title="Show all agpplgroups">
                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
            </a>

            <a href="{{ route('agpplgroup.agpplgroup.edit', $agpplgroup->id ) }}" class="btn btn-primary" title="Edit AGPplGroup">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>

            <form method="POST" action="{!! route('agpplgroup.agpplgroup.destroy', $agpplgroup->id) !!}" accept-charset="UTF-8" style="display: inline;" novalidate="novalidate">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-xs" title="Delete AGPplGroup" onclick="return confirm(&quot;Confirm delete?&quot;)" id="sometest">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete AGPplGroup"></span>
                </button>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('agpplgroups.Code') }}</dt>
            <dd>{{ $agpplgroup->Code }}</dd>
            <dt>{{ trans('agpplgroups.Name') }}</dt>
            <dd>{{ $agpplgroup->Name }}</dd>

        </dl>

    </div>
</div>

@endsection
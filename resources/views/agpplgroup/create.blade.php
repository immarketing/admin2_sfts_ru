@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading clearfix">
            
            <span class="pull-left">
                Create New AGPplGroup
            </span>

            <div class="btn-group btn-group-xs pull-right" role="group">
                <a href="{{ route('agpplgroup.agpplgroup.index') }}" class="btn btn-primary" title="Show all agpplgroups">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        <div class="panel-body">
        
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('agpplgroup.agpplgroup.store') }}" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            @include ('agpplgroup.form')
            </form>

        </div>
    </div>

@endsection



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

                <a href="{{ route('agcourse.agcourse.create') }}" class="btn btn-primary" title="Add AgCourse">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
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

            <form method="POST" action="{{ route('agcourse.agcourse.update', $agcourse->id) }}" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('agcourse.form', [
                                        'submitButtonLabel' => 'Update', 
                                        'agcourse' => $agcourse,
                                      ])
            </form>

        </div>
    </div>

@endsection
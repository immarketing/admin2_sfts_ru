@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <span class="pull-left">
                Agcourses
            </span>

            <div class="btn-group btn-group-xs pull-right" role="group">
                <a href="{{ route('agcourse.agcourse.create') }}" class="btn btn-primary" title="Add AgCourse">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        
        @if(count($agcourses) == 0)
            <div class="panel-body text-center">
                <h4>There are no records!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>{{ trans('agcourses.ShortName') }}</th>
                            <th>{{ trans('agcourses.Name') }}</th>
                            <th>{{ trans('agcourses.googleDocID') }}</th>
                            <th>{{ trans('agcourses.Code') }}</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($agcourses as $agcourse)
                        <tr>
                            <td>{{ $agcourse->ShortName }}</td>
                            <td>{{ $agcourse->Name }}</td>
                            <td>{{ $agcourse->googleDocID }}</td>
                            <td>{{ $agcourse->Code }}</td>

                            <td>
                                <a href="{{ route('agcourse.agcourse.show', $agcourse->id ) }}" class="btn btn-success btn-xs" title="View AgCourse">
                                    <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                                </a>
                                <a href="{{ route('agcourse.agcourse.edit', $agcourse->id ) }}" class="btn btn-primary btn-xs" title="Edit AgCourse">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>

                                <form method="POST" action="{!! route('agcourse.agcourse.destroy', $agcourse->id) !!}" accept-charset="UTF-8" style="display: inline;" novalidate="novalidate">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-xs" title="Delete AgCourse" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete AgCourse"></span>
                                    </button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $agcourses->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection
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
                Agtests
            </span>

            <div class="btn-group btn-group-xs pull-right" role="group">
                <a href="{{ route('agtest.agtest.create') }}" class="btn btn-primary" title="Add AgTest">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        
        @if(count($agtests) == 0)
            <div class="panel-body text-center">
                <h4>There are no records!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>{{ trans('agtests.ShortName') }}</th>
                            <th>{{ trans('agtests.Name') }}</th>
                            <th>{{ trans('agtests.Code') }}</th>
                            <th>{{ trans('agtests.GoogleSheetID') }}</th>
                            <th>{{ trans('agtests.JSON') }}</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($agtests as $agtest)
                        <tr>
                            <td>{{ $agtest->ShortName }}</td>
                            <td>{{ $agtest->Name }}</td>
                            <td>{{ $agtest->Code }}</td>
                            <td>{{ $agtest->GoogleSheetID }}</td>
                            <td>{{ $agtest->JSON }}</td>

                            <td>
                                <a href="{{ route('agtest.agtest.show', $agtest->id ) }}" class="btn btn-success btn-xs" title="View AgTest">
                                    <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                                </a>
                                <a href="{{ route('agtest.agtest.edit', $agtest->id ) }}" class="btn btn-primary btn-xs" title="Edit AgTest">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>

                                <form method="POST" action="{!! route('agtest.agtest.destroy', $agtest->id) !!}" accept-charset="UTF-8" style="display: inline;" novalidate="novalidate">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-xs" title="Delete AgTest" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete AgTest"></span>
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
            {!! $agtests->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection
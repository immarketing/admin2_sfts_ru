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
                Agpplgroups
            </span>

            <div class="btn-group btn-group-xs pull-right" role="group">
                <a href="{{ route('agpplgroup.agpplgroup.create') }}" class="btn btn-primary" title="Add AGPplGroup">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        
        @if(count($agpplgroups) == 0)
            <div class="panel-body text-center">
                <h4>There are no records!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>{{ trans('agpplgroups.Code') }}</th>
                            <th>{{ trans('agpplgroups.Name') }}</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($agpplgroups as $agpplgroup)
                        <tr>
                            <td>{{ $agpplgroup->Code }}</td>
                            <td>{{ $agpplgroup->Name }}</td>

                            <td>
                                <a href="{{ route('agpplgroup.agpplgroup.show', $agpplgroup->id ) }}" class="btn btn-success btn-xs" title="View AGPplGroup">
                                    <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                                </a>
                                <a href="{{ route('agpplgroup.agpplgroup.edit', $agpplgroup->id ) }}" class="btn btn-primary btn-xs" title="Edit AGPplGroup">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>

                                <form method="POST" action="{!! route('agpplgroup.agpplgroup.destroy', $agpplgroup->id) !!}" accept-charset="UTF-8" style="display: inline;" novalidate="novalidate">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-xs" title="Delete AGPplGroup" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete AGPplGroup"></span>
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
            {!! $agpplgroups->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection
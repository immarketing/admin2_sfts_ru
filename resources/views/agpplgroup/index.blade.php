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
                Группы обучающихся
            </span>

            <div class="btn-group btn-group-xs pull-right" role="group">
                <a href="{{ route('agpplgroup.agpplgroup.create') }}" class="btn btn-primary" title="Добавить группу">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        
        @if(count($agpplgroups) == 0)
            <div class="panel-body text-center">
                <h4>Записей нет!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>{{ trans('agpplgroups.id') }}</th>
                            <th>{{ trans('agpplgroups.Code') }}</th>
                            <th>{{ trans('agpplgroups.Name') }}</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($agpplgroups as $agpplgroup)
                        <tr>
                            <td>{{ $agpplgroup->id }}</td>
                            <td>{{ $agpplgroup->Code }}</td>
                            <td>{{ $agpplgroup->Name }}</td>

                            <td>
                                <a href="{{ route('agpplgroup.agpplgroup.show', $agpplgroup->id ) }}" class="btn btn-success btn-xs" title="Смотреть группу">
                                    <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                                </a>
                                <a href="{{ route('agpplgroup.agpplgroup.edit', $agpplgroup->id ) }}" class="btn btn-primary btn-xs" title="Редактировать группу">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>

                                <form method="POST" action="{!! route('agpplgroup.agpplgroup.destroy', $agpplgroup->id) !!}" accept-charset="UTF-8" style="display: inline;" novalidate="novalidate">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-xs" title="Удалить группу" onclick="return confirm(&quot;Подтверждаете удаление?&quot;)">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Удалить группу"></span>
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
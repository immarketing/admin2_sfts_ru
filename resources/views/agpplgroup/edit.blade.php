@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <span class="pull-left">
                Группа обучающихся №{{ $agpplgroup->id }}
            </span>

            <div class="btn-group btn-group-xs pull-right" role="group">

                <a href="{{ route('agpplgroup.agpplgroup.index') }}" class="btn btn-primary" title="Показать полный список (без сохранения)">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('agpplgroup.agpplgroup.create') }}" class="btn btn-primary" title="Добавить группу">
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

            <form method="POST" action="{{ route('agpplgroup.agpplgroup.update', $agpplgroup->id) }}" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('agpplgroup.form', [
                                        'submitButtonLabel' => 'Обновить данные',
                                        'agpplgroup' => $agpplgroup,
                                      ])
            </form>

        </div>
    </div>

@endsection
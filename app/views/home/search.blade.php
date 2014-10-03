@extends('layouts.master')

@section('content')

{{ Form::open(['route'=>'magazine', 'method'=>'get', 'class'=>'form-horizontal']) }}
    <div class="form-group">
        <legend>Search</legend>
    </div>

    <div class="form-group">
        {{ Form::label('Keyword', 'Keyword:', ['class'=>'col-sm-2 control-label']) }}
        <div class="col-sm-10">
            {{ Form::text('Keyword') }}
            {{ $errors->first('Keyword', '<p class="text-danger">:message</p>') }}
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </div>
{{ Form::close() }}

@stop
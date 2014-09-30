@extends('layouts.master')

@section('content')

    {{ Form::model($magazine, ['route'=>['admin.magazine.update', $magazine->id], 'method'=>'post', 'class'=>'form-horizontal']) }}
        <div class="form-group">
            <legend>Edit magazine</legend>
        </div>

        <div class="form-group">
            {{ Form::label('title', 'Title:', ['class'=>'col-sm-2 control-label']) }}
            <div class="col-sm-10">
                {{ Form::text('title') }}
                {{ $errors->first('title', '<p class="text-danger">:message</p>') }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    {{ Form::close() }}

@stop
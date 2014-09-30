@extends('layouts.master')

@section('content')

    {{ Form::model($magazine, ['route'=>'admin.magazine.store', 'method'=>'post', 'class'=>'form-horizontal']) }}
        <div class="form-group">
            <legend>Create magazine</legend>
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
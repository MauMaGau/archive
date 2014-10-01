@extends('layouts.master')

@section('content')


    {{ Form::model($page, ['route'=>['admin.page.update', $page->id], 'method'=>'post', 'class'=>'form-horizontal']) }}
        <div class="form-group">
            <legend>Edit page</legend>
        </div>

        <div class="form-group">
            {{ Form::label('number', 'Page Number:', ['class'=>'col-sm-2 control-label']) }}
            <div class="col-sm-10">
                {{ Form::text('number') }}
                {{ $errors->first('number', '<p class="text-danger">:message</p>') }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('body', 'Page Text:', ['class'=>'col-sm-2 control-label']) }}
            <div class="col-sm-10">
                {{ Form::textarea('body') }}
                {{ $errors->first('body', '<p class="text-danger">:message</p>') }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    {{ Form::close() }}

@stop
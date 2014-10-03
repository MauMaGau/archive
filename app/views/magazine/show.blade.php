@extends('layouts.master')

@section('content')

    <h1>{{ $magazine->title }}</h1>
    <p>
        {{ link_to_route('page.show', 'Start reading', $magazine->pages->first()->id, ['class'=>'btn btn-primary']) }}
    </p>

    <h3>Pages</h3>
    <ul class="list-group">
        @each('magazine.item-page', $magazine->pages, 'page', 'raw|<p>There are no pages</p>')
    </ul>

@stop
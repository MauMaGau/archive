@extends('layouts.master')

@section('content')

    {{ $magazine->title }}

    <ul>
        @each('magazine.item-page', $magazine->pages, 'page', 'raw|<p>There are no pages</p>')
    </ul>

@stop
@extends('layouts.master')

@section('content')

    {{ $page->number }}

    <p>{{ $page->body }}</p>

@stop
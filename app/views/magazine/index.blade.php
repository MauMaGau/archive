@extends('layouts.master')

@section('content')

    <ul>
        @each('magazine.item', $magazines, 'magazine')
    </ul>

@stop
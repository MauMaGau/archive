@extends('layouts.master')

@section('content')

    <ul>
        @each('admin.magazine.item', $magazines, 'magazine')
    </ul>

@stop
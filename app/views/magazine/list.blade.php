@extends('layouts.master')

@section('content')

    <h3>Magazines</h3>
    <ul class="list-group">
        @each('magazine.item-magazine', $magazines, 'magazine')
    </ul>

@stop
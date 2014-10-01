@extends('layouts.master')

@section('content')

    @each('magazine.item-magazine', $magazines, 'magazine')

@stop
@extends('template/default/layout')


@section('navbar')
    @parent
@endsection


@section('header')
    @parent
@endsection


@section('slidebar')
    @parent
@endsection


@section('main')
    @parent
@endsection


@section('content')
    @include('template/default/content')
@endsection


@section('footer')
    @parent
@endsection


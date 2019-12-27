@extends('template/default/layout')

@section('navbar')
    @parent
@endsection


@section('header')
    
@endsection


@section('slidebar')
    
@endsection


@section('main')
    @parent
@endsection


@section('content')
<div class="container">
    <h2 class="blog-post-title">{{$data->title}}</h2>
    <p class="blog-post-meta">{{$data->created_at}}<a href="#">{{$data->author}}</a></p>
    
    <p>{{$data->text}}</p>
</div>
@endsection


@section('aside')

@endsection


@section('footer')
    @parent
@endsection
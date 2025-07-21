@extends('index')

@section('main')

<x-breadscrumb pageName="Blogs"/>


@livewire('blog', ['blogs' => $blogs])

  
@endsection
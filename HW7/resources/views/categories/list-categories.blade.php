@extends('layout')

@section('title', 'Categories')

@section('breadcrumbs')
    @include('partials.breadcrumbs',[
        'links'=> [
            [
                'link'=>'/',
                'name'=>'Home'
            ],
            [
                'link'=>'/',
                'name'=>'Categories'
            ]
]
    ])
@endsection

@section('content')
    @include('categories.table-crud', [
        'list'=>$posts
    ])
@endsection
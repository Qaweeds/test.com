@extends('layout')

@section('title', 'Tags')

@section('breadcrumbs')
    @include('partials.breadcrumbs',[
        'links'=> [
            [
                'link'=>'/../HW7/public/',
                'name'=>'Home'
            ],
            [
                'link'=>'/',
                'name'=>'Tags'
            ]
]
    ])
@endsection

@section('content')
    @include('tags.table-crud', [
        'list'=>$posts
    ])
@endsection
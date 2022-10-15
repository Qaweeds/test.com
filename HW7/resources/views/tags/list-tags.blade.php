@extends('layout')

@section('title', 'Tags')

@section('breadcrumbs')
    @include('partials.breadcrumbs',[
        'links'=> [
            [
                'link'=>'/',
                'name'=>'Home'
            ],
            [
                'link'=>'/tags',
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
@extends('layout')

@section('title', 'Home page')

@section('content')
    @include('list', [
    'links' => [
        [
            'link'=>'/tags/list-tags.php',
            'name'=>'Tags'
        ], [
            'link'=>'/categories/list-categories.php',
            'name'=>'Categories'
        ]
]
])
@endsection
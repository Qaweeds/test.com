@extends('layout')

@section('breadcrumbs')
    @include('partials.breadcrumbs',[
        'links'=> [
            [
                'link'=>'/',
                'name'=>'Home'
            ],
            [
                'link'=>'/tags/list-tags.php',
                'name'=>'Tags'
            ],
            [
                'link'=>'/',
                'name'=>'Create'
            ]
]
    ])
@endsection

@section('content')
    <div class="container" class="mt-10">
        <form method="post" action="">
            <div class="row mb-3">
                <label for="input" class="col-sm-2 col-form-label" >Title</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="title" name="title">
                </div>
            </div>
            <div class="row mb-3">
                <label for="input" class="col-sm-2 col-form-label">Slug</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="slug" name="slug">
                </div>
            </div>
            <div class="row mb-3">
                <button type="submit" class="btn btn-primary col-sm-2 ">Create</button>
            </div>
        </form>
    </div>
@endsection
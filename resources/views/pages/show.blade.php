@extends('layouts.layout')

@section('content')
    <div class="main-content">
        <div class="container">
            <div class="card mb-3">
                <div class="card-body">
                    <img src="{{ Storage::url($page->image) }}" class="img-fluid mb-3 page-image card-img-top" alt="...">
                    <h1 class="card-title">{{ $page->title }}</h1>
                    <p class="card-text">{{ $page->text }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

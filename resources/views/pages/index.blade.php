@extends('home')

@section('home-content')

    @foreach($pages as $page)
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-2">
                <img src="{{ Storage::url($page->image) }}" class="card-img pages-card-image" alt="...">
            </div>
            <div class="col-md-10">
                <div class="card-body" style="box-shadow: none; height: 100%">
                    <h5 class="card-title">{{ $page->title }}</h5>
                    <p class="card-text">{{ Str::limit($page->text, 200, '...') }}</p>
                    <a href="{{ route('pages.show', $page->id) }}">Перейти на страницу</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection

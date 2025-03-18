@extends('layouts.layout')

@section('content')
    <div class="main-content">
        <div class="container">
            <h1>Добавить страницу</h1>
            <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Заголовок</label>
                    <textarea class="form-control" id="title" name="title" rows="2" style="resize: vertical" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Текст</label>
                    <textarea class="form-control" id="text" name="text" rows="5" style="resize: vertical"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Изображение</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>
@endsection

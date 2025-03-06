@extends('layouts.layout')

@section('content')
    <div class="main-content">
        <div class="container">
            <h1>Добавить продукт</h1>
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Название продукта</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="pdf" class="form-label">Файл PDF</label>
                    <input type="file" class="form-control" id="pdf" name="pdf" required>
                </div>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>
@endsection

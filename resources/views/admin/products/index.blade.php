@extends('layouts.layout')

@section('content')
    <div class="main-content">
        <div class="container">
            <h1>Продукты</h1>
            <p>Мы предлагаем широкий ассортимент продукции для геофизических исследований и нефтегазовой отрасли. Наши продукты отличаются высоким качеством и надежностью.</p>

            <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3" role="button">Добавить</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">PDF</th>
                        <th scope="col">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if($products->isEmpty())
                            <tr>
                                <td colspan="4" class="text-center">Нет продуктов для отображения</td>
                            </tr>
                        @else
                            @foreach($products as $index => $product)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $product->name }}</td>
                                    <td><a href="{{ asset('storage/' . $product->pdf) }}" target="_blank">Открыть файл</a></td>
                                    <td>
                                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Вы уверены, что хотите удалить этот продукт?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Удалить</button>
                                        </form>
                                    </td>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

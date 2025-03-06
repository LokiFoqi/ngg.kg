@extends('layouts.layout')

@section('content')
    <div class="main-content">
        <div class="container">
            <h1>Продукты</h1>
            <p>Мы предлагаем широкий ассортимент продукции для геофизических исследований и нефтегазовой отрасли. Наши продукты отличаются высоким качеством и надежностью.</p>

            <div class="table-responsive">
                @if($products->isEmpty())
                    <p>Нет продуктов для отображения.</p>
                @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название</th>
                            <th scope="col">PDF</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $index => $product)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $product->name }}</td>
                                <td><a href="{{ asset('storage/' . $product->pdf) }}" target="_blank">Открыть файл</a></td>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
            </div>
        </div>
    </div>
@endsection

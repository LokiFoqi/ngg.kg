@extends('layouts.layout')

@section('content')
    <div class="main-content">
        <div class="container">
            <h2>Менеджер страниц</h2>

            <hr>

            <a href="{{ route('admin.pages.create') }}" class="btn btn-primary mb-3" role="button">Добавить</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if($pages->isEmpty())
                            <tr>
                                <td colspan="4" class="text-center">Нет страниц</td>
                            </tr>
                        @else
                            @foreach($pages as $index => $item)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        <form action="{{ route('admin.pages.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Вы уверены, что хотите удалить этот продукт?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
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

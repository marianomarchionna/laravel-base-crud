@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Tutti i fumetti</h1>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale date</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <th scope="row">{{ $comic['id'] }}</th>
                                <td>{{ $comic['title'] }}</td>
                                <td>{{ $comic['price'] }} €</td>
                                <td>{{ $comic['series'] }}</td>
                                <td>{{ $comic['sale_date'] }}</td>
                                <td>
                                    <a href="{{ route('comics.show', $comic['id']) }}"
                                        class="btn btn-info">
                                        Details
                                    </a>
                                    <a href="{{ route('comics.edit', $comic['id']) }}"
                                        class="btn btn-warning">
                                        Modify
                                    </a>
                                    <form method="post" action="{{ route('comics.destroy', $comic['id']) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure you want to Delete?');" type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
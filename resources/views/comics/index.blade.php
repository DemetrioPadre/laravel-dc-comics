@extends('layouts.app')

@section('title', 'Lista Fumetti')

@section('main-content')
    <section>
        <div class="container py-4">

            <a class="btn btn-primary mb-2" href="{{ route('comics.create') }}">Aggiungi nuovo Fumetto</a>

            <h1 class="mb-3">Lista dei Fumetti</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Series</th>
                        <th>Sale Date</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <td>{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->get_price() }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td><a href="{{ route('comics.show', $comic) }}"><i class="fa-solid fa-eye"></i></a></td>
                            <td><a href="{{ route('comics.edit', $comic) }}"><i class="fa-solid fa-pencil"></i></a></td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="100%">
                                Nessun Risultato
                            </td>
                        </tr>
                    @endforelse
                    <tr></tr>
                </tbody>
            </table>
            {{ $comics->links() }}
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

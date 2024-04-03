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
                            <td>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-link" data-bs-toggle="modal"
                                    data-bs-target="#delete-comic-{{ $comic->id }}-modal ">
                                    <i class="fa-solid fa-trash text-danger"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete-comic-{{ $comic->id }}-modal" tabindex="-1"
                                    aria-labelledby="delete-comic-{{ $comic->id }}-modal" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina Fumetto
                                                    {{ $comic->title }}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Da qui in poi non si torna indietro, sei sicuro di ciò che stai facendo?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Indietro</button>
                                                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger">
                                                        Conferma l'eliminazione

                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </td>
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

{{-- @section('modal')
@endsection --}}

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

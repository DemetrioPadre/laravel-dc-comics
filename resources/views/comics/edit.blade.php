@extends('layouts.app')

@section('title', 'Modifica Fumetto' . $comic->name)

@section('main-content')
    <section>
        <div class="container py-4">
            <a class="btn btn-primary mb-2" href="{{ route('comics.index') }}">Torna alla lista</a>
            <a class="btn btn-primary mb-2" href="{{ route('comics.show', $comic) }}">Vai al dettaglio</a>

            <h1>Modifica Fumetto</h1>
            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST" class="row g-3">
                @csrf
                @method('PATCH')
                <div class="col-3">
                    <label class="form-label" for="name">Titolo</label>
                    <input value="{{ $comic->title }}" class="form-control" id="name" type="text" name="title"
                        required>
                </div>


                <div class="col-3">
                    <label class="form-label" for="thumb">url immagine</label>
                    <input value="{{ $comic->thumb }}" class="form-control" id="thumb" type="url" name="thumb">
                </div>
                <div class="col-3">
                    <label class="form-label" for="price">Prezzo</label>
                    <input value="{{ $comic->price }}" class="form-control" id="price" type="number" name="price"
                        required>
                </div>
                <div class="col-3">
                    <label class="form-label" for="series">serie</label>
                    <input value="{{ $comic->series }}" class="form-control" id="series" type="number" name="series"
                        required>
                </div>
                <div class="col-3">
                    <label class="form-label" for="sale_date">Data di vendita</label>
                    <input value="{{ $comic->sale_date }}" class="form-control" id="sale_date" type="date"
                        name="sale_date">
                </div>
                <div class="col-3">
                    <label for="form-label" for="type">Tipo di Fumetto</label>

                    <select name="type" id="type" class="form-select">
                        <option @if ($comic->type == 'graphic novel') selected @endif value="graphic novel">graphic novel
                        </option>
                        <option @if ($comic->type == 'comic book') selected @endif value="comic book">comic book</option>

                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label" for="description">Descrizione</label>
                    <textarea class="form-control " name="description" id="description" rows="5">{{ $comic->description }}</textarea>
                </div>
                <div class="col-3"><button class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>
                        Modifica</button>
                </div>

            </form>
        </div>
    </section>
@endsection


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

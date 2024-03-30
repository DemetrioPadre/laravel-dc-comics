@extends('layouts.app')

@section('title', 'Crea Nuovo Fumetto')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1>Crea Nuovo Fumetto</h1>
            <form action="{{ route('comics.store') }}" method="POST" class="row g-3">
                @csrf
                <div class="col-3">
                    <label class="form-label" for="name">Titolo</label>
                    <input class="form-control" id="name" type="text" name="title">
                </div>


                <div class="col-3">
                    <label class="form-label" for="thumb">url immagine</label>
                    <input class="form-control" id="thumb" type="url" name="thumb">
                </div>
                <div class="col-3">
                    <label class="form-label" for="price">Prezzo</label>
                    <input class="form-control" id="price" type="number" name="price">
                </div>
                <div class="col-3">
                    <label class="form-label" for="series">serie</label>
                    <input class="form-control" id="series" type="number" name="series">
                </div>
                <div class="col-3">
                    <label class="form-label" for="sale_date">Data di vendita</label>
                    <input class="form-control" id="sale_date" type="date" name="sale_date">
                </div>
                <div class="col-3">
                    <label for="form-label" for="type">Tipo di Fumetto</label>

                    <select name="type" id="type" class="form-select">
                        <option value="graphic novel">graphic novel</option>
                        <option value="comic book">comic book</option>

                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label" for="description">Descrizione</label>
                    <textarea class="form-control " name="description" id="description" rows="5"></textarea>
                </div>
                <div class="col-3"><button class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>
                        Aggiungi</button>
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

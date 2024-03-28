@extends('layouts.app')

@section('title', "Dettaglio fumetti $comic->id: $comic->title")


@section('main-content')

    <section>
        <div class="container py-4">
            <a class="btn btn-primary mb-2" href="{{ route('comics.index') }}">Torna alla lista</a>
            <h1>lista prodotti{{ $comic->id }}: {{ $comic->name }}</h1>
            <div class="row">
                <div class="col-3">
                    <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
                </div>
                <div class="col-7">
                    <h2 class="h4">

                        Descrizione
                    </h2>
                    <p>
                        {{ $comic->description }}</p>
                    <div class="row">
                        <div class="col-6">
                            <h2 class="h4">SERIE</h2>
                            <p>{{ $comic->series }}</p>
                        </div>
                        <div class="col-6">
                            <h2 class="h4">TIPO</h2>
                            <p>{{ $comic->type }}</p>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </section>

@endsection

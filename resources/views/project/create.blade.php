@extends('layouts.app')
@section('content')
    <div class="row">
        {{-- sidebar --}}
        <div class="dash-nav col-lg-2 p-md-4 py-4 text-center" id="sidebar" style="--bs-bg-opacity: .8;">
            <ul class="nav flex-column  gap-2">
                <li class="nav-item">
                    <a class="btn bg-body-secondary rounded-pill px-4" href="{{ route('dashboard') }}">
                        <i class="bi bi-house me-md-2"></i><span>Dashboard</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="col-lg-10 p-md-4 py-4 bg-body-secondary ">
            <h2>Nuovo proggetto</h2>
            <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row">
                    {{-- immagini proggetto --}}
                    <div class="col">
                        QUI VANNO LE IMMAGINI

                        {{-- <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div> --}}
                    </div>
                    {{-- informazioini del progetto,tipologia e linguaggi --}}
                    <div class="col">
                        {{-- info project --}}
                        <section class="py-4">
                            <h4>Info proggetto:</h4>
                            <label for="title">Titolo</label>
                            <br>
                            <input type="text" name="title" id="title">
                            <br>
                            <label for="publish_year">Anno di pubblicazione</label>
                            <br>
                            <input type="year" name="publish_year" id="publish_year">
                            <br>
                            <label for="description">Descrizione del proggetto</label>
                            <br>
                            <input type="text" name="description" id="description">
                            <br>
                            <label for="image" class="form-label">Selezionare immagine:</label>
                            <br>
                            <input required type="file" name="image" id="image" placeholder="selezionare immagine"
                                value="{{ old('image') }}">
                            <br>
                            <label for="link" class="form-label">Aggiungi link:</label>
                            <br>
                            <input type="text" name="link" id="link">

                        </section>

                        {{-- technologies --}}
                        <section class="py-4">
                            <h4>Linguaggi di proggrammazione utilizzati:</h4>

                            @foreach ($technologies as $technology)
                                <div>
                                    <input class="form-check-input" type="checkbox" value="{{ $technology->id }}"
                                        name="technologies[]" id="technology-{{ $technology->id }}">
                                    <label class="form-check-label" for="technology-{{ $technology->id }}">
                                        {{ $technology->name }}
                                    </label>
                                </div>
                            @endforeach
                        </section>

                        {{-- types --}}
                        <section class="py-4">
                            <h4>Tipologia di proggetto:</h4>

                            <select name="type_id" id="type_id">
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">
                                        {{ $type->name }}
                                    </option>
                                @endforeach
                            </select>
                        </section>

                        <input class="btn btn-primary rounded-pill px-4 my-4 " type="submit" value="CREATE">

                    </div>

                </div>


            </form>
        </div>

    </div>









    </div>
@endsection

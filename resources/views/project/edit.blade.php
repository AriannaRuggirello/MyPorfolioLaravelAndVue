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

        <div class="col-lg-10 p-md-4 py-4 bg-body-secondary">
            <div class="row">
                <div class="col">
                    
                </div>
                <div class="col"></div>
                
            </div>
            <h3>Modifica il progetto</h3>
            <form method="post" action="{{ route('project.update', $project->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- info --}}
                <section>
                    <!-- Anteprima dell'immagine corrente -->
                    <div class="mb-3">
                        <div class="py-4" style="width: 300px">
                            @if (!empty($project->image))
                                <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top"
                                    alt="Apartment Image">
                            @else
                                <img src="{{ asset('storage/defaultImage.jpg') }}" class="card-img-top" alt="Default Image">
                            @endif
                        </div>

                        <!-- Campo di input per il caricamento di una nuova immagine -->
                        <div class="mb-3">
                            <label class="form-label" for="image"></label>
                            <input type="file" id="image" name="image" class="form-control-file">
                        </div>

                        <div class="mb-3">
                            <label for="link" class="form-label">Aggiungi link:</label>
                            <br>
                            <input type="text" name="link" id="link" value="{{ $project->link }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="title">
                                <h6>Titolo:</h6>
                            </label>
                            <input class="form-control" type="text" name="title" id="title"
                                value="{{ $project->title }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="description">
                                <h6>Descrizione:</h6>
                            </label>
                            <textarea name="description" id="description" class="form-control" style="height: 300px">"{{ $project->description }}"</textarea>
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="publish_year">
                                <h6>Data di pubblicazione:</h6>
                            </label>
                            <input type="year" id="publish_year" name="publish_year" class="form-control"
                                value="{{ $project->publish_year }}">
                        </div>
                </section>

                <!-- tehnologies -->
                <section>
                    <label class="form-label" for="technologies" class="form-label">
                        <h6>Selezionare i linguaggi:</h6>
                    </label>

                    @foreach ($technologies as $technology)
                        <div class="form-check mx-auto">
                            <input class="form-check-input" type="checkbox" value="{{ $technology->id }}"
                                name="technologies[]" id="technology-{{ $technology->id }}"
                                @foreach ($project->technologies as $projectTech)
                                                    @checked($technology -> id === $projectTech -> id) @endforeach>
                            <label class="form-check-label" for="technology-{{ $technology->id }}">
                                {{ $technology->name }}
                            </label>
                        </div>
                    @endforeach


                </section>

                {{-- types --}}
                <section class="py-4">
                    <h6>Tipologia di proggetto:</h6>

                    <select name="type_id" id="type_id">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">
                                {{ $type->name }}
                            </option>
                        @endforeach
                    </select>
                </section>

                <button type="submit" class="btn btn-success px-4 rounded-pill my-4">Save</button>

            </form>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="row">

        {{-- sidebar --}}
        <div class="dash-nav vh-100 col-lg-2 p-md-4 py-4 text-center" id="sidebar" style="--bs-bg-opacity: .8;">
            <ul class="nav flex-column  gap-2">
                <li class="nav-item">
                    <a class="btn bg-body-secondary rounded-pill px-4" href="{{ route('dashboard') }}">
                        <i class="bi bi-house me-md-2"></i><span>Dashboard</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="col-lg-10 p-md-4 py-4 bg-body-secondary">
            <h3>Modifica il linguaggio</h3>
            <form method="post" action="{{ route('technology.update', $technology->id) }}">
                @csrf
                @method('PUT')
                {{-- info --}}
                <section>
                    <div class="mb-3">
                        <label class="form-label" for="name">
                            <h6>Name:</h6>
                        </label>
                        <input class="form-control" name="name" id="name" value="{{ $technology->name }}">
                        <br>
                        <label for="icon">Icona</label>
                        <br>
                        <input type="text" name="icon" id="icon">
                        <br>

                    </div>


                </section>


                <button type="submit" class="btn btn-success px-4 rounded-pill my-4">Save</button>

            </form>
        </div>
    </div>
@endsection

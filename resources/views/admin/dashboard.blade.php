@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row my-3">

            {{-- i miei linguaggi --}}
            <section class="col-lg-4">

                <h3>I miei linguaggi
                    <a class="mx-4 btn btn-primary " href="{{ route('technology.create') }}">
                        +
                    </a>
                </h3>

                @foreach ($technologies as $technology)
                    <div class="row py-1">
                        <div class="col">
                            {{-- link linguaggi --}}
                            <span> {{ $technology->name }}</span><br>

                        </div>
                        {{-- pulsanti --}}
                        <div class="col d-flex justify-content-around">
                            {{-- show --}}
                            <a class="btn bg-secondary-subtle link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                href="{{ route('technology.show', $technology->id) }}">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            {{-- edit --}}
                            <a class="btn btn-warning" href="{{ route('technology.edit', $technology->id) }}"><i
                                    class="fa-solid fa-pen"></i>
                            </a>
                            {{-- delete --}}
                            <form method="POST" action="{{ route('technology.destroy', $technology->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" value="">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                            </form>

                        </div>



                    </div>
                @endforeach

            </section>


            <section class="col-lg-8">
                {{-- projects cards --}}
                <h3>I miei progetti <a class="mx-4 btn btn-primary" href="{{ route('project.create') }}">
                        +
                    </a>
                </h3>
                {{-- card --}}
                <div class="row justify-content-between ">
                    @foreach ($projects as $project)
                        <div class="card mb-3">
                            <div class="row row-cols-lg-2 g-0 justify-content-between align-items-start">
                                <div class="col-lg-7 overflow-y-auto" style="max-height: 300px;">
                                    @if (!empty($project->image))
                                        <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top"
                                            alt="">
                                    @else
                                        <img src="{{ asset('storage/defaultImage.jpg') }}" class="card-img-top"
                                            alt="Default Image">
                                    @endif
                                </div>
                                <div class="col-lg-5 text-center">
                                    <div class="card-body">
                                        <h5 class="card-title"> {{ $project->title }}</h5>

                                        <p class="card-text"><small class="text-body-secondary">
                                                {{ $project->publish_date }}</small>
                                        </p>
                                    </div>

                                    {{-- pulsanti --}}
                                    <div class="d-flex justify-content-center gap-5">
                                        {{-- show --}}
                                        <a class="link-offset-2 link-underline link-underline-opacity-0 link-light"
                                            href="{{ route('project.show', $project->id) }}">
                                            <button type="button" class="btn text-black">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </button>
                                        </a>
                                        {{-- edit --}}
                                        <a class=" link-offset-2 link-underline link-underline-opacity-0 link-light"
                                            href="{{ route('project.edit', $project->id) }}">
                                            <button type="button" class="btn text-black">
                                                <i class="fa-solid fa-pen"></i>
                                            </button>
                                        </a>
                                        {{-- delete --}}
                                        <form method="POST" action="{{ route('project.destroy', $project->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn text-danger" value="">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>

                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

            </section>
        </div>
    </div>
@endsection

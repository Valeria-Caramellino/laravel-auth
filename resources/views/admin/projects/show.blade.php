@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <a href="{{route('admin.project.edit',$project)}}" class="btn">Modifica campo</a>
            <form action="{{ route('admin.project.destroy', $project) }}" method="post">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger" type="submit" value="Cancella il prodotto">
            </form>
            <div class="col-6 p-5">
                <img class="w-100" src="{{ $project->image }}" alt="{{ $project->title }}">
            </div>
            <div class="col-6 p-5 d-flex flex-column justify-content-center">
                <h2>{{ $project->title }}</h2>
                <hr>
                <p><span class="fw-bold">Descrizione: </span>: {{ $project->content }}</p>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
<section>
    <div class="container">

        <h2 class="fs-4 text-secondary my-4">{{$project->title}}</h2>
    
    </div>
</section>

<section>
    <div class="container">
        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
        
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{old('title') ?? $project->title }}">
                <span class="invalid-feedback">@error('title') {{$message}} @enderror</span>
            </div>

            <div class="mb-3">
                <label for="description"  class="form-label">Descrizione</label>
                <textarea class="form-control @error('title') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') ?? $project->description }}</textarea>
                <span class="invalid-feedback">@error('description') {{$message}} @enderror</span>
            </div>

            <div class="mb-3">
               <input type="submit" class="btn btn-secondary" value="Modifica">
            </div>
        </form>
    </div>
</section>
@endsection
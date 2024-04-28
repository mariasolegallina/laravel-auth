@extends('layouts.app')

@section('content')
<section>
    <div class="container">

        <h2 class="fs-4 text-secondary my-4">Aggiungi un progetto</h2>
    
    </div>
</section>

<section>
    <div class="container">
        <form action="{{ route('admin.projects.store') }}" method="POST">
        
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{old('title')}}">
                <span class="invalid-feedback">@error('title') {{$message}} @enderror</span>
            </div>

            <div class="mb-3">
                <label for="description"  class="form-label">Descrizione</label>
                <textarea class="form-control @error('title') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                <span class="invalid-feedback">@error('description') {{$message}} @enderror</span>
            </div>

            {{-- <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" required class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{old('title')}}">
                <span>@error('title') {{$message}} @enderror</span>
            </div>

            <div class="mb-3">
                <label for="description"  class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                <span>@error('description') {{$message}} @enderror</span>
            </div> --}}

            <div class="mb-3">
               <input type="submit" class="btn btn-primary" value="Aggiungi">
            </div>
        </form>
    </div>
</section>
@endsection
@extends('layouts.app')

@section('content')
<section>
    <div class="container">

        <h2 class="fs-4 text-secondary my-4">{{$project->title}}</h2>

        @if ($project->cover_image)
        <img src="{{ asset('storage/' . $project->cover_image) }}" alt="immagine di copertina">
        @endif

        <p>{{$project->description}}</p>

        <div class="my-4">
            <a class="btn btn-secondary" href="{{route('admin.projects.edit', $project)}}">Modifica</a>

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                Elimina
            </button>
                      
            <!-- Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
          
                  <div class="modal-header">
                      <h1 class="modal-title fs-5" id="deleteModalLabel">Elimina il progetto</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
          
                  <div class="modal-body">
                      Confermi l'eliminazione?
                  </div>
          
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                      <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                          @csrf
                          @method("DELETE")
                          <button class="btn btn-danger">Elimina</button>
                      </form>
                  </div>
          
                </div>
              </div>
            </div>

        </div>
    
    </div>
</section>
@endsection
@extends('layouts.app')

@section('content')
<section>
    <div class="container">
<div class="d-flex justify-content-between my-4">
    <h2 class="fs-4 text-secondary">Progetti</h2>
    <a class="btn btn-primary" href="{{route('admin.projects.create')}}">Aggiungi</a>
</div>
    
    </div>
</section>

<section>
    <div class="container">

        <table class="table my-4">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Descrizione</th>
                <th scope="col"></th>
                {{-- <th scope="col"></th> --}}
              </tr>
            </thead>

            <tbody>
              <tr>
               @forelse ($projects as $project)
                   <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>
                        <a href="{{route('admin.projects.show', $project)}}">{{$project->title}}</a></td>
                    <td>{{$project->description}}</td>
                    <td>
                        <a href="{{route('admin.projects.edit', $project)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                   </tr>
               @empty
                   <tr>
                    <td>Nessun progetto</td>
                   </tr>
               @endforelse
            </tbody>
          </table>
    </div>
</section>
@endsection
@extends('layouts.app')

@section('content')
<section>
    <div class="container">

        <h2 class="fs-4 text-secondary my-4">Lista dei progetti</h2>
    
    </div>
</section>

<section>
    <div class="container">
        <table class="table">
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
                    {{-- <td>
                        <form action="{{ route('admin.projects.destroy',$project)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            
                            <button class="btn btn-link" type="submit">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td> --}}
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
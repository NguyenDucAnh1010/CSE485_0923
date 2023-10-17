@extends('layouts.base')

@section('title','AUTHOR LIST')

@section('header','authors')

@section('main')
    <a href="{{ route('authors.create') }}">
        <button type="button" class="btn btn-success mb-3">Add</button>
    </a>
    <table class="table mb-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">bio</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($authors as $author)
                <tr>
                    <th scope="row">{{$author->id}}</th>
                    <td>{{$author->name}}</td>
                    <td>{{$author->bio}}</td>
                    <td>{{$author->created_at}}</td>
                    <td>{{$author->updated_at}}</td>
                    <td>
                        <a class="fs-4 color-primary" href="{{ route('authors.edit',$author->id) }}">
                            <i class="bi bi-journal-plus"></i>
                        </a>
                    </td>
                    <td>
                        <a class="fs-4 color-primary user-delete-link" href="" data-bs-toggle="modal" data-bs-target="#modal{{$author->id}}">
                            <i class="bi bi-trash-fill"></i>
                        </a>
                    </td>
                    <!-- Modal -->
                    <div class="modal fade" id="modal{{$author->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE AUTHOR</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete the author with id: {{$author->id}}?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <form action="{{ route('authors.destroy',$author->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="sbmit" class="btn btn-primary">Yes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination justify-content-center">
        {{ $authors->links() }}
    </div>

@endsection
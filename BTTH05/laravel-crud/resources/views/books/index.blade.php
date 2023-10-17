@extends('layouts.base')

@section('title','BOOK LIST')

@section('header','books')

@section('main')
    <a href="{{ route('books.create') }}">
        <button type="button" class="btn btn-success mb-3">Add</button>
    </a>
    <table class="table mb-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">author_id</th>
                <th scope="col">title</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->author_id}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->created_at}}</td>
                    <td>{{$book->updated_at}}</td>
                    <td>
                        <a class="fs-4 color-primary" href="{{ route('books.edit',$book->id) }}">
                            <i class="bi bi-journal-plus"></i>
                        </a>
                    </td>
                    <td>
                        <a class="fs-4 color-primary user-delete-link" href="" data-bs-toggle="modal" data-bs-target="#modal{{$book->id}}">
                            <i class="bi bi-trash-fill"></i>
                        </a>
                    </td>
                    <!-- Modal -->
                    <div class="modal fade" id="modal{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE AUTHOR</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete the book with id: {{$book->id}}?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <form action="{{ route('books.destroy',$book->id) }}" method="POST">
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
        {{ $books->links() }}
    </div>

@endsection
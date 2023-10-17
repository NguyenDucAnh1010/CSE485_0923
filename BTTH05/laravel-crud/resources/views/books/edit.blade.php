@extends('layouts.base')

@section('title','EDIT BOOK')

@section('header','books')

@section('main')
    <div class="m-5 text-center">
        <div class="mx-5">
            <form action="{{ route('books.update',$book->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text ms-5" id="addon-wrapping">id</span>
                    <input type="text" class="form-control me-5" aria-describedby="addon-wrapping" name="id" value="{{$book->id}}" readonly>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text ms-5" for="inputGroupSelect01">author_id</label>
                    <select class="form-select me-5" id="inputGroupSelect01" name="author_id">
                        @foreach ($authors as $author)
                            @if($author->id==$book->author_id)
                                <option value="{{$author->id}}" selected>
                                    {{$author->id}}: {{$author->name}}
                                </option>
                            @else
                                <option value="{{$author->id}}">
                                    {{$author->id}}: {{$author->name}}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text ms-5" id="addon-wrapping">title</span>
                    <input type="text" class="form-control me-5" aria-describedby="addon-wrapping" name="title" value="{{$book->title}}">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end me-5">
                    <button type="submit" class="btn btn-success px-4 m-0">Edit</button>
                    <a href="{{ route('books.index') }}">
                        <button type="button" class="btn btn-warning px-4 m-0">Return</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
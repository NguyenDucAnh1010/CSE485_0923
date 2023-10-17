@extends('layouts.base')

@section('title','ADD NEW BOOK')

@section('header','books')

@section('main')
    <div class="m-5 text-center">
        <div class="mx-5">
            <form action="{{ route('books.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="input-group mb-3">
                    <label class="input-group-text ms-5" for="inputGroupSelect01">author_id</label>
                    <select class="form-select me-5" id="inputGroupSelect01" name="author_id">
                        @foreach ($authors as $author)
                            <option value="{{$author->id}}">
                                {{$author->id}}: {{$author->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text ms-5" id="addon-wrapping">title</span>
                    <input type="text" class="form-control me-5" aria-describedby="addon-wrapping" name="title">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end me-5">
                    <button type="submit" class="btn btn-success px-4 m-0">Add</button>
                    <a href="{{ route('books.index') }}">
                        <button type="button" class="btn btn-warning px-4 m-0">Return</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
@extends('layouts.base')

@section('title','ADD NEW AUTHOR')

@section('header','authors')

@section('main')
    <div class="m-5 text-center">
        <div class="mx-5">
            <form action="{{ route('authors.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text ms-5" id="addon-wrapping">name</span>
                    <input type="text" class="form-control me-5" aria-describedby="addon-wrapping" name="name">
                </div>
                <div class="form-floating mx-5 mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="bio"></textarea>
                    <label for="floatingTextarea2">bio</label>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end me-5">
                    <button type="submit" class="btn btn-success px-4 m-0">Add</button>
                    <a href="{{ route('authors.index') }}">
                        <button type="button" class="btn btn-warning px-4 m-0">Return</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
<header class="bg-light-subtle w-80 mx-5 p-4 shadow">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="authors" href="{{route('authors.index')}}">Authors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="books" href="{{route('books.index')}}">Books</a>
                </li>
                <li class="nav-item">
            </ul>
        </div>
    </nav>
</header>

<div class="h1 text-center text-primary m-4">
    @yield('title')
</div>
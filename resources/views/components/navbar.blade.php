<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/img/JL_Logomaker-removebg-preview.png" alt="logoJL" width="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active navbarButton" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active navbarButton" href="#products">Products</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navbarButton" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($category as $cat)
                        <li><a class="dropdown-item" onclick="window.location.href='{{ route('category.action', ['id' => $cat->id]) }}#products'">{{ $cat->categoryName }}</a></li>
                        @endforeach
                        {{-- <li>
                            <hr class="dropdown-divider">
                        </li> --}}
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search" action="{{ route('search') }}" method="GET" id="searchForm">
                <input class="form-control me-2" type="search" name="query" placeholder="Search Product" aria-label="Search">
                <a href="#products">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </a>
            </form>
            <script>
                document.getElementById('searchForm').addEventListener('submit', function(event) {
                    this.action += '#products';
                });
            </script>
        </div>
    </div>
</nav>

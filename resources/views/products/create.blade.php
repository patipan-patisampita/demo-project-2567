<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg shadow bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">DevOps{Admin}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Hello, {{ Auth::guard('admin')->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Post
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('posts.create') }}">Create post</a></li>
                            <li><a class="dropdown-item" href="#">Show posts</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow my-4">
                    <div class="card-header bg-primary">
                        <h3 class="text-white">Create Product</h3>
                    </div>
                    <div class="card-body p-1">
                        <form enctype="multipart/form-data" action="#" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="" class="form-label h5">Title</label>
                                    <input value="{{ old('title') }}" type="text"
                                        class="form-control-lg form-control" name="title" placeholder="Title">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label h5">Detail</label>
                                    <textarea class="form-control" name="detail" cols="30" rows="5"  placeholder="Detail">{{ old('detail') }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label h5">Image</label>
                                    <input type="file" class="form-control form-control-lg" name="image" placeholder="Image">
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-lg btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

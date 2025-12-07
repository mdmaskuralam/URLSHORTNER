<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortner</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4" style="max-width: 500px; width: 100%;">
        <h1 class="card-title text-center mb-4">URL Shortner</h1>

        <!-- Display success message -->
        @if(session('short_url'))
            <div class="alert alert-success text-center">
                Short URL: 
                <a href="{{ session('short_url') }}" target="_blank">
                    {{ session('short_url') }}
                </a>
            </div>
        @endif

        <!-- Display errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- URL submission form -->
        <form action="{{ route('short.url') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input 
                    type="url" 
                    name="url" 
                    class="form-control form-control-lg" 
                    placeholder="Enter your URL here" 
                    required
                >
            </div>
            <button type="submit" class="btn btn-primary btn-lg w-100">Short URL</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

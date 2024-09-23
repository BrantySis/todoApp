<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="h-full">
<div class="min-h-full">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" width="30" height="30" class="d-inline-block align-top">
      Your Company
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
        </li>
    </ul>
</div>
  </nav>

  <header class="bg-white shadow">
    <div class="container py-4">
      <h1 class="display-4">{{ $heading }}</h1>
    </div>
  </header>
  <main>
    <div class="container py-4">
      {{ $slot }}
    </div>
  </main>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body { background-color: #f4f7fb; }
    footer { background-color: #003f91; color: white; text-align: center; padding: 16px; font-size: 16px; }
  </style>

  @yield('head')
</head>
<body>

<header class="sticky-top bg-white shadow-sm">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container d-flex justify-content-center">
      <a class="navbar-brand mx-auto" href="/">
        <img src="https://www.srilankahosting.lk/logo.svg" alt="Logo" height="40" />
      </a>
    </div>
  </nav>
</header>


<main class="container py-4">
  @yield('content')
</main>

<footer>
  Powered By ServerClub.LK PVT Ltd - 24/7 Customer Support
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@yield('scripts')

</body>
</html>

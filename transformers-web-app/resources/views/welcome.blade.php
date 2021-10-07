<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Transformers.Community</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Spartan:wght@800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/app.css">
    </head>
    <body class="antialiased c-text-font">
        {{-- All the content for the navbar. --}}
        <nav class="navbar navbar-expand-lg navbar-light c-bg-purple c-tw">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#">
                <img src="./images/logo.svg" class="c-logo-80 d-none d-lg-block">
              </a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link c-tw"  href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link c-tw" href="/feed">Feed</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link c-tw" href="#">Over Ons</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link c-tw" href="#">Word Transformer!</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link c-tw" href="#">Contact</a>
                  </li>
                </ul>
                <div class="d-flex justify-content-end align-items-center">
                    @if (Route::has('login'))
                        <div class="d-flex align-items-center">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                            @else
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn c-titles-font c-link-cw">Register</a>
                                @endif
                                    <a href="{{ route('login') }}" class="btn c-titles-font c-imp-button m-2">Log in</a>
                            @endauth
                        </div>
                    @endif
                </div>
              </div>
            </div>
          </nav>


        {{-- Hero content of main page. --}}
        <div class="d-flex c-bg-purple p-20">
            <div >
                <span class="c-titles-font">
                    <h2>Life sucks sometimes.</h2>
                    <h3>Maar je staat er niet alleen voor.</h3>
                </span>
                <p class="c-text-font">
                    De Transformers Community is er voor jongeren die zelfverzekerd willen zijn en tegenslagen omzetten in kracht. We doen dit samen: zo leren we meer en helpen we elkaar om te groeien.
                </p>
            </div>
        </div>
        <img src="./images/wave1.svg">


        {{--  --}}
    </body>
</html>

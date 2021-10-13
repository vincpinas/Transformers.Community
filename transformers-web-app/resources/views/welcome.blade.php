<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Transformers.Community</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&family=Spartan:wght@800;900&display=swap" rel="stylesheet">
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
                                <a href="{{ url('/dashboard') }}" class="btn c-titles-font c-imp-button m-2">Dashboard</a>
                            @else
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn c-titles-font c-link-cw">Register</a>
                                @endif
                                    <a href="{{ route('login') }}" class="btn c-titles-font c-imp-button m-2">Login</a>
                            @endauth
                        </div>
                    @endif
                </div>
              </div>
            </div>
          </nav>


        {{-- Hero content of main page. --}}
        <div class="d-flex c-bg-purple pt-20 pl-20 c-tw">
            <div>
                <span class="c-titles-font">
                    <h1>Life sucks <br> sometimes.</h1>
                    <h3>Maar je staat er niet alleen voor.</h3>
                </span>
                <p class="c-text-font">
                    De Transformers Community is er voor jongeren die zelfverzekerd willen zijn <br> en tegenslagen omzetten in kracht. <br> We doen dit samen: zo leren we meer en helpen we elkaar om te groeien.
                </p>
                <a href="{{ route('login') }}" class="btn c-titles-font c-imp-button mt-10 pt-2 pb-2 ps-5 pe-5">Naar community</a>
            </div>

            <div id="carouselExampleCaptions" class="carousel slide d-sm-none d-md-block ps-2 pe-2" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://static.wixstatic.com/media/e72157_db107074d02f49ee85c5460d7358244e~mv2.png/v1/fill/w_796,h_450,al_c,q_85,usm_0.66_1.00_0.01/e72157_db107074d02f49ee85c5460d7358244e~mv2.webp" class="d-block mx-auto w-auto" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Lisa (24 jaar)</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://static.wixstatic.com/media/e72157_eaee7f30427e47e0893180b6a2cac833~mv2.png/v1/fill/w_796,h_450,al_c,q_85,usm_0.66_1.00_0.01/e72157_eaee7f30427e47e0893180b6a2cac833~mv2.webp" class="d-block mx-auto w-auto" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Elwin (29 jaar)</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://static.wixstatic.com/media/e72157_c01472345d2b461381e28a781dc86d9f~mv2.png/v1/fill/w_796,h_450,al_c,q_85,usm_0.66_1.00_0.01/e72157_c01472345d2b461381e28a781dc86d9f~mv2.webp" class="d-block mx-auto w-auto" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Yasmine (22 jaar)</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <img src="./images/wave1.svg">


        {{--  --}}
        <div class="c-tb text-center pb-2 pt-2">
          <h2 class="c-titles-font fw-bold">Wij zijn een groeiende beweging van jongeren die zich <br> inzet voor <span class="c-underline">mentale gezondheid.</span></h2>
          <br>
          <p>
            We leven in een samenleving waar onvoldoende ruimte is voor onze mentale gezondheid.<br>
            <span class="fw-bold">Daar willen wij samen verandering in brengen!</span> We zijn een community van jongeren die<br>
            <span class="fw-bold">ervaringen en tips</span> uitwisselt op het gebied van <span class="fw-bold">mentale gezondheid</span> en persoonlijke<br>
            ontwikkeling. Zo creëren we meer openheid <span class="fw-bold">en helpen we elkaar om te groeien.</span>
          </p>
          <a href="#}" class="btn c-titles-font c-imp-button mt-10 pt-2 pb-2 ps-5 pe-5">Onze missie en visie</a>
        </div>

        {{-- --}}
        <img src="./images/wave2.svg">
    </body>
</html>

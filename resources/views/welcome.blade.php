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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="antialiased c-text-font">
        {{-- Overlay --}}
        <div id="overlay">
          <div class="overlay-inner c-tb">
            <button class="close-btn" onclick="removeOverlay()">&#10005;</button>
            <div class="popup-headers">
              <h3>Make A Post!</h3>
                @if (Auth::check())
                      <h4 style="text-align:center;">Maak hier een post die alleen te zien is door andere transformers.</h4>
                @else
                      <h4 style="text-align:center;">Maak hier een anonieme post voor iedereen om te zien.</h4>
                @endif
            </div>
            <form method="POST" action="{{ route("post.save") }}" id="anoForm">
              @csrf
              <input type="text" name="title" placeholder="Title" required/>
              <input type="text" name="excerpt" placeholder="excerpt" required/>
              <input type="text" name="body" placeholder="Type your question/advice here..." required/>
              <input list="categoriesList" name="category" required>
              <input type="submit" value="Submit" style="margin-top:10px;" class="btn c-imp-button">
            </form>
            <datalist id="categoriesList">
              @foreach ($categories as $category)
                <option value="{{ $category->name }}"></option>
              @endforeach
            </datalist>
          </div>
        </div>

        {{-- Anonymous button --}}
        <button class="hoverbutton" onclick="setOverlay()">
          <i class="fas fa-comment-dots"></i>
        </button>

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
                    <a class="nav-link c-tw"  href="/">Home</a>
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
                              <div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="btn c-titles-font c-imp-button">{{ __('Log Out') }}</button>
                                </form>
                              </div>
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
        <div class="d-flex c-bg-purple pt-20 c-tw justify-content-around align-items-center">
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

            <div id="carouselExampleCaptions" class="carousel slide d-sm-none d-lg-block ps-2 pe-2" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner" style="border-radius:25px;">
                <div class="carousel-item active">
                  <img src="https://static.wixstatic.com/media/e72157_db107074d02f49ee85c5460d7358244e~mv2.png/v1/fill/w_796,h_450,al_c,q_85,usm_0.66_1.00_0.01/e72157_db107074d02f49ee85c5460d7358244e~mv2.webp" class="d-block mx-auto w-auto" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Lisa (24 jaar):</h5>
                    <p>Ik kan mij zo gemakkelijk aanpassen aan anderen, dat ik mijzelf op een gegeven moment kwijt was geraakt.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://static.wixstatic.com/media/e72157_eaee7f30427e47e0893180b6a2cac833~mv2.png/v1/fill/w_796,h_450,al_c,q_85,usm_0.66_1.00_0.01/e72157_eaee7f30427e47e0893180b6a2cac833~mv2.webp" class="d-block mx-auto w-auto" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Elwin (29 jaar):</h5>
                    <p>Ik ben opgegroeid met de overtuiging dat wat ik vond er toch niet toe deed, maar ook dat wat ik voelde niet gehoord hoefde te worden.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://static.wixstatic.com/media/e72157_c01472345d2b461381e28a781dc86d9f~mv2.png/v1/fill/w_796,h_450,al_c,q_85,usm_0.66_1.00_0.01/e72157_c01472345d2b461381e28a781dc86d9f~mv2.webp" class="d-block mx-auto w-auto" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Yasmine (22 jaar):</h5>
                    <p>Ik heb gewoon bijna het gevoel dat het niet meer oké is om eerst jezelf op nummer één te zetten.</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <img src="./images/wave1.svg">


        {{-- Mission / Vision Section  --}}
        <div class="c-tb text-center" style="display:flex;justify-content:center;align-items:center;flex-direction:column;">
          <h2 class="c-titles-font">Wij zijn een groeiende beweging van jongeren die zich <br> inzet voor <span class="c-underline">mentale gezondheid.</span></h2>
          <br>
          <p style="max-width:60%">
            We leven in een samenleving waar onvoldoende ruimte is voor onze mentale gezondheid.
            <span class="fw-bold">Daar willen wij samen verandering in brengen!</span> We zijn een community van jongeren die
            <span class="fw-bold">ervaringen en tips</span> uitwisselt op het gebied van <span class="fw-bold">mentale gezondheid</span> en persoonlijke
            ontwikkeling. Zo creëren we meer openheid <span class="fw-bold">en helpen we elkaar om te groeien.</span>
          </p>
          <a href="#" class="btn c-titles-font c-imp-button mt-10 pt-2 pb-2 ps-5 pe-5">Onze missie en visie</a>
        </div>
        <div class="c-tb d-flex justify-content-around align-items-center" style="margin-top: 8rem">
          <div class="wi-sm-50 wi-md-30">
            <h3>De online community</h3>
            <h2 class="c-titles-font pt-3">Praat over dingen die je eerder nergens kwijt kon.</h2>
            <p class="pt-3">In onze online community kan je binnen een veilige omgeving (anoniem) jouw ervaringen
               en gevoelens delen. Hier helpen en steunen we elkaar. 
               Ook worden er wekelijks praktische tips gedeeld die jou helpen om zelfverzekerd te zijn
               en om te gaan met moeilijke situaties.
            </p>
            <a href="#" class="btn c-titles-font c-imp-button mt-10 pt-2 pb-2 ps-5 pe-5">Meld je gratis aan!</a>
          </div>
          <div style="padding:15rem;background-color:var(--purple-90op);border-radius:5px;" class="d-sm-none d-md-block"></div>
        </div>
        <img src="./images/wave2.svg">


        {{-- Want to make a impact section --}}
        <img src="./images/wave3.svg">
        <div class="d-flex p-5 justify-content-center align-items-center flex-column">
          <div class="text-center wi-sm-50 wi-md-30">
            <h2 class="c-titles-font">Wil je een impact maken?</h2>
            <p class="pt-3">Het is onze missie om kennis over mentale gezondheid mainsteam te maken en jongeren te empoweren om mentaal gezond te zijn. <span class="fw-bold">En daar hebben wij jou bij nodig!</span></p>
            <br>
            <p>Wil jij je ook inzetten voor een samenleving waarin onze mentale gezondheid centraal staat?
               Meld je dan aan als vrijwilliger! Heb je daar geen tijd voor maar wil je toch een beetje bijdragen?
               Dan kan je altijd nog doneren!
            </p>
          </div>
          <div class="d-flex flex-sm-column flex-md-row justify-content-between">
            <a href="#" class="btn c-titles-font c-imp-button mt-10 pt-2 pb-2 ps-5 pe-5 m-4">Word Transformer</a>
            <a href="#" class="btn c-titles-font c-imp-button mt-10 pt-2 pb-2 ps-5 pe-5 m-4">Doneer</a>
          </div>
        </div>

        <script>
          function setOverlay() {
            document.getElementById("overlay").style.display = "flex";
          }
          function removeOverlay() {
            document.getElementById("overlay").style.display = "none";
          }
        </script>
    </body>
</html>

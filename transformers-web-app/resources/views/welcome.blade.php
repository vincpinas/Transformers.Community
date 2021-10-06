<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Transformers.Community</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        {{-- All the content for the navbar. --}}
        <nav class="navbar navbar-expand-lg flex-row d-flex">
            <div class="container-fluid">
                <?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
 "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="156.000000pt" height="40.000000pt" viewBox="0 0 156.000000 40.000000"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,40.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M160 350 c0 -5 7 -10 15 -10 12 0 15 -13 15 -55 0 -42 3 -55 15 -55
11 0 15 12 15 50 0 36 4 52 15 56 30 12 14 24 -30 24 -25 0 -45 -4 -45 -10z"/>
<path d="M693 338 c-14 -32 -5 -108 13 -108 9 0 14 12 14 34 0 19 6 37 13 39
9 4 8 8 -3 17 -11 9 -12 13 -2 17 18 7 14 23 -6 23 -11 0 -23 -10 -29 -22z"/>
<path d="M270 275 c0 -33 4 -45 15 -45 10 0 15 10 15 31 0 22 5 32 20 36 32 9
23 23 -15 23 -35 0 -35 0 -35 -45z"/>
<path d="M354 293 c-10 -39 7 -58 55 -60 l41 -2 0 45 0 44 -45 0 c-40 0 -45
-3 -51 -27z m63 -9 c3 -8 1 -20 -5 -26 -15 -15 -43 8 -35 28 7 19 32 18 40 -2z"/>
<path d="M480 276 c0 -25 5 -46 10 -46 6 0 10 14 10 30 0 19 6 33 16 37 19 7
34 -13 34 -44 0 -13 5 -23 11 -23 6 0 9 17 7 43 -3 42 -3 42 -45 45 l-43 3 0
-45z"/>
<path d="M600 299 c0 -12 8 -23 20 -26 11 -3 20 -9 20 -14 0 -5 -12 -6 -27 -3
-26 7 -27 6 -14 -10 19 -23 55 -17 59 10 2 15 -3 23 -17 27 -12 3 -21 10 -21
15 0 6 10 8 22 4 14 -3 19 -2 14 6 -4 7 -18 12 -32 12 -18 0 -24 -5 -24 -21z"/>
<path d="M772 308 c-15 -15 -15 -51 0 -66 15 -15 51 -15 66 0 28 28 7 78 -33
78 -12 0 -26 -5 -33 -12z m54 -19 c10 -17 -23 -46 -37 -32 -7 7 -9 19 -6 27 7
18 33 21 43 5z"/>
<path d="M870 275 c0 -33 4 -45 15 -45 10 0 15 10 15 31 0 22 5 32 20 36 32 9
23 23 -15 23 -35 0 -35 0 -35 -45z"/>
<path d="M960 275 c0 -52 17 -61 22 -12 2 20 8 32 18 32 10 0 16 -12 18 -32 5
-47 32 -44 32 3 0 28 3 35 18 32 11 -2 18 -14 20 -36 5 -48 24 -39 20 11 l-3
42 -72 3 -73 2 0 -45z"/>
<path d="M1152 308 c-15 -15 -15 -51 0 -66 15 -15 54 -16 63 -2 3 6 -5 10 -19
10 -14 0 -28 5 -31 10 -4 6 8 10 29 10 23 0 36 5 36 13 0 19 -21 37 -45 37
-12 0 -26 -5 -33 -12z m58 -19 c0 -5 -12 -9 -26 -9 -22 0 -24 2 -14 14 12 15
40 11 40 -5z"/>
<path d="M1250 275 c0 -33 4 -45 15 -45 10 0 15 10 15 30 0 18 6 33 15 36 25
10 17 24 -15 24 -29 0 -30 -2 -30 -45z"/>
<path d="M1334 305 c-7 -18 3 -35 22 -35 8 0 14 -5 14 -11 0 -6 -9 -8 -21 -4
-15 5 -20 3 -17 -6 6 -19 49 -24 59 -7 14 21 11 28 -17 38 -14 6 -23 14 -19
20 3 5 12 7 20 3 8 -3 15 0 15 6 0 16 -50 13 -56 -4z"/>
<path d="M1150 160 c0 -13 5 -18 15 -14 8 4 15 12 15 20 0 8 -7 14 -15 14 -8
0 -15 -9 -15 -20z"/>
<path d="M202 147 c-28 -29 -28 -57 -1 -91 26 -33 68 -34 97 -3 12 13 22 26
22 30 0 11 -28 8 -49 -5 -24 -15 -51 -4 -51 21 0 29 34 45 54 26 17 -17 46
-20 46 -5 0 20 -41 50 -68 50 -17 0 -37 -10 -50 -23z"/>
<path d="M1210 109 c0 -45 14 -79 34 -79 9 0 12 15 11 53 -3 70 -2 67 -25 67
-17 0 -20 -7 -20 -41z"/>
<path d="M356 109 c-23 -33 0 -79 40 -79 14 0 30 10 40 25 15 23 15 27 0 50
-20 31 -59 33 -80 4z m54 -29 c0 -11 -7 -20 -15 -20 -8 0 -15 9 -15 20 0 11 7
20 15 20 8 0 15 -9 15 -20z"/>
<path d="M472 82 c2 -34 7 -47 18 -47 10 0 16 12 18 33 4 42 26 37 30 -6 2
-19 9 -32 17 -32 8 0 15 13 17 32 4 43 26 48 30 6 4 -46 38 -53 38 -8 0 60
-12 68 -95 69 l-76 1 3 -48z"/>
<path d="M670 80 c0 -37 4 -50 14 -50 9 0 16 12 18 33 2 20 8 32 18 32 10 0
16 -12 18 -32 5 -47 32 -44 32 2 0 24 5 35 15 35 11 0 15 -11 15 -36 0 -28 3
-35 18 -32 20 4 28 48 13 76 -9 16 -22 20 -86 20 l-75 1 0 -49z"/>
<path d="M870 99 c0 -51 15 -68 60 -67 l40 0 0 49 c0 36 -4 49 -14 49 -9 0
-16 -12 -18 -32 -2 -21 -8 -33 -18 -33 -10 0 -16 12 -18 33 -4 43 -32 44 -32
1z"/>
<path d="M1010 80 c0 -37 4 -50 14 -50 9 0 16 12 18 33 2 20 8 32 18 32 10 0
16 -12 18 -32 5 -49 32 -44 32 5 0 48 -14 62 -62 62 l-38 0 0 -50z"/>
<path d="M1150 80 c0 -38 4 -50 15 -50 11 0 15 12 15 50 0 38 -4 50 -15 50
-11 0 -15 -12 -15 -50z"/>
<path d="M1280 125 c0 -3 9 -24 20 -46 18 -34 19 -40 5 -45 -19 -8 -20 -34 -2
-34 20 0 43 29 66 83 19 45 20 47 2 47 -12 0 -21 -10 -26 -27 l-7 -28 -14 28
c-12 23 -44 39 -44 22z"/>
</g>
</svg>

                <form class="d-flex justify-content-end align-items-center">
                    @if (Route::has('login'))
                        <div class="d-flex">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                            @else
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="">Register</a>
                                @endif
                                    <a href="{{ route('login') }}" class="btn btn-outline-success">Log in</a>
                            @endauth
                        </div>
                    @endif
                </form>
            </div>
        </nav>
    </body>
</html>

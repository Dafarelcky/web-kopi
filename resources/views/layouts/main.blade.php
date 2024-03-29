<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ngopi Kuy</title>
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
        rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
        rel="stylesheet"
    />
    <style>
        * {
            font-family: 'Poppins', sans-serif
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body class="relative">
    @yield('content')
    
    @include('partials.footer')

    
</body>
</html>
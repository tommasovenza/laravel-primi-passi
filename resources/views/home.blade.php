<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- google font --}}
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Prima pagina Laravel</title>
</head>
<body>
    
    @include('partials.header')

    <main>
        <h1>prova</h1>
    </main>


    @include('partials.footer')
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/accueil.css">
    <link rel="stylesheet" href="css/app.css">
    {{--  <link rel="stylesheet" href="css/contact.css">  --}}
    <title>Document</title>
</head>
<body>

    @section('navAccueil')
<div class="menu">   
    <ul>
        <a href="#"></a>
        <li><a href="about">About</a></li>
        <li><a href="#">My Projects</a></li>
        <li><a href="contact">Contact</a></li>
    </ul>
</div>

    @yield('navAccueil')

    @yield('container')
</body>
</html>
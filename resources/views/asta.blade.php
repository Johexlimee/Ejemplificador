<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asta</title>
</head>
<body>



    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae, molestiae dolorem esse ipsa quo, provident nihil at et cumque aut atque necessitatibus harum, distinctio animi debitis ducimus facilis. Recusandae, fugit?</p><br>
    <h1><?php echo $msj ?></h1>
    <h1><?= $msj ?></h1>
    <h1>{{ $msj }} {{$num}} </h1>

    <a href="/venida">Bienvenida</a>
    <a href="http://ejemplificador.test/venida">Bienvenida</a>
    <a href="{{ route('venida') }}">venida</a>






</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        @foreach ($prodotti as $prodotto)
            <p>Nome prodotto : {{$prodotti->name}}</p>
            <p>Descrizione : {{$prodotti->description}}</p>
            <p>Prezzo : {{$prodotti->price}}</p>
        @endforeach
    </body>
</html>

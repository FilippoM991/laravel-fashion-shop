<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Tutti i vestiti</h1>
        <a href="{{route('create-product')}}">Crea un nuovo vestito</a>
        @foreach ($prodotti as $prodotto)
            <p>Descrizione : {{$prodotto->description}}</p>
            <p>Genere prodotto : {{$prodotto->gender}}</p>
            <p>Taglia : {{$prodotto->size}}</p>
            <p>Colore : {{$prodotto->color}}</p>
        @endforeach
    </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Creazione nuovo vestito</h1>
        {{-- mi collego al url della rotta che mi porta dalla funzione che gestisce i dati --}}
        <form class="" action="{{ route('store-product')}}" method="post">
            {{-- devo aggiungere un token che serve a laravel per convalidare i form --}}
            @csrf
            <p>
                {{-- stessi name della tabella --}}
                <input type="text" name="description" placeholder="descrizione">
            </p>
            <p>
                <input type="text" name="gender" placeholder="male/female">
            </p>
            <p>
                <input type="text" name="size" placeholder="taglia">
            </p>
            <p>
                <input type="text" name="color" placeholder="colore">
            </p>
            <p>
                <input type="submit" name="invia" value="crea vestito">
            </p>
        </form>
    </body>
</html>

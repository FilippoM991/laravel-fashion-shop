<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;

class ClothController extends Controller
{
    public function index(){
        $prodotti = Cloth::all();
        // dd($prodotti);
        return view("home", ["prodotti"=> $prodotti]);
    }
    public function create(){

        return view("create");
    }
    public function store(Request $request){
        // dentro a $request c è il mio oggettone
        // dd($request->all());
        $dati = $request->all();
        // dd($request->description);
        // istanzio un nuovo oggetto della classe Cloth
        $nuovo_vestito = new Cloth();
        // $nuovo_vestito->description = $dati['description'];
        // $nuovo_vestito->gender = $dati['gender'];
        // $nuovo_vestito->size = $dati['size'];
        // $nuovo_vestito->color = $dati['color'];
        // dopo aver aggiunto nel model le propietà che posso autocompilare in questo modo posso usare la funzione fill così non devo fare la parte sopra
        $nuovo_vestito->fill($dati);

        $nuovo_vestito->save();
        return redirect()->route('all-products');

    }
}

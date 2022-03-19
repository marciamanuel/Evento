<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function index(){
$search = request ('search');

if($search){
$evento = Evento::where([
['title','like', '%'.$search.'%']
])->get();
} else{
    $evento = Evento::all();
}

        return view('welcome',['evento'=> $evento, 'search' => $search]);

    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $evento = new  Evento;
        $evento->title = $request->title;
        $evento->date = $request->date;
        $evento->description = $request->description;
        $evento->private = $request->private;
        $evento->city = $request->city;
        $evento->itens = $request->itens;

        if($request->hasfile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension =$requestImage->extension();
            $imageName =md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
            $evento->image = $imageName;
        }

$evento->save();
return redirect('/');
    }

    public function show($id){
        $evento = Evento::findOrfail($id);
        return view('events.show',['evento'=>$evento]);
    }

}


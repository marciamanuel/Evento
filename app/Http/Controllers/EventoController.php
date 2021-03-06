<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\User;

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
$user = auth()->user();
$evento-> user_id = $user->id;
$evento->save();
return redirect('/');
    }

    public function show($id){
        $evento = Evento::findOrfail($id);
        $eventoOwner = User::where('id', $evento->user_id)->first()
        ->toArray();


        return view('events.show',['evento'=>$evento, 'eventoOwner'=>$eventoOwner]);
    }

    public function dashboard(){
        $user = auth()->user();
        $evento = Evento::where('user_id', $user->id)->get();
        return view('events.dashboard', compact('evento'));
    }

    public function destroy($id){
        Evento::where('id',$id)->delete();

        return redirect('/dashboard');
    }
    public function edit($id){

        $evento=Evento::where('id',$id)->first();


           return  view('events.editar', compact('evento'));

         }
         public function update(Request $request){
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
   
            return redirect('/dashboard');
        }

}


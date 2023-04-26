<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Feira;

class EventController extends Controller
{
    public function index() {

        $search = request('search');

        if($search) {

            $feiras = Feira::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $feiras = Feira::all();
        }        
    
        return view('welcome',['feiras' => $feiras, 'search' => $search]);
    }

    public function create() {
        return view('feiras.create');
    }

    public function store(Request $request) {

        $feiras = new Feira();

        $feiras->title = $request->title;
        $feiras->date = $request->date;
        $feiras->city = $request->city;
        $feiras->segmento = $request->segmento;
        $feiras->items = $request->items;

         // Image Upload
         if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/feiras'), $imageName);

            $feiras->image = $imageName;
        }

        $feiras->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id) {

        $feiras = Feira::findOrFail($id);

        return view('feiras.show', ['feira' => $feiras]);
        
    }

    public function destroy($id) {
        
        Feira::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Evento excluído com sucesso!');
    }
}
<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Siege;
use App\Http\Requests\siegeRequest;

class SiegeController extends Controller
{
public function __construct(){ // cette method sert a : pour  voir cet page tu doit etre authentifier

          $this->middleware('auth');
        }
     //pour lister les reservations
    public function index(){

$listsiege= Siege::all();

return view('siege.index',['sieges'=>$listsiege]);

   }
//afficher le formulaire de creation des reservations
   public function create(){

  return view('siege.create');
   }
//enregistrer les reservations
   public function store(Request $request){

   $siege =new Siege();

   $siege->id_salle=$request->input('id_salle');
   $siege->prix_siege=$request->input('prix_siege');
   $siege->nom_siege=$request->input('nom_siege');
   $siege->id_categorie=$request->input('id_categorie');

        $siege->save();
        return redirect('sieges');

   }
//pour recuperer une reservation puis le mettre dans le formulaire

    public function edit($id){
    
    $siege = Siege::find($id);
    return view('siege.edit',['siege'=>$siege]);

     return redirect('sieges');

   }
//pour modifier les reservations
       public function update(Request $request){

 $siege = Siege::findOrFail($request->idsiege);
        $siege->update($request->all());
       
        return back();

   }
//pour supprimer les reservations
   public function destroy(Request $request){
     
      $siege = Siege::findOrFail($request->idsiege);

      $siege->delete();
       
       return back();

}
}

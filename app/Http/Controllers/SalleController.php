<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\UploadedFile;

use Illuminate\Http\Request;
use App\Salle;
use App\Http\Requests\salleRequest;

class SalleController extends Controller
{
public function __construct(){ // cette method sert a : pour  voir cet page tu doit etre authentifier

          $this->middleware('auth');
        }
     //pour lister les reservations
   public function index(){

$listsalle= Salle::all();

return view('salle.index',['salles'=>$listsalle]);

   }
//afficher le formulaire de creation des reservations
   public function create(){

  return view('salle.create');
   }
//enregistrer les reservations
   public function store(salleRequest $request){

   $salle =new Salle();

   $salle->num_salle=$request->input('num_salle');
    $salle->nbre_place=$request->input('nbre_place');

    if($request->hasFile('images_salle')){
     $salle->images_salle= $request->images_salle->store('images');
        }
        $salle->save();
        return redirect('salles');
   }
  

//pour recuperer une reservation puis le mettre dans le formulaire

    public function edit($id){
    
    $salle = Salle::find($id);
    return view('salle.edit',['salle'=>$salle]);

     return redirect('salles');

   }
//pour modifier les reservations
       public function update(salleRequest $request, $id){

 $salle = Salle::find($id);
 
       $salle->num_salle=$request->input('num_salle');
    $salle->nbre_place=$request->input('nbre_place');

    if($request->hasFile('images_salle')){
     $salle->images_salle= $request->images_salle->store('images');
        }
       
        $salle->save();
        return redirect('salles');

   }
//pour supprimer les reservations
   public function destroy(Request $request, $id){
     
      $salle = Salle::find($id);

      $salle->delete();
       
       return redirect('salles');


}
}

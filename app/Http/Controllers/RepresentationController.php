<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

use App\Representation;
use App\Http\Requests\representationRequest;
class RepresentationController extends Controller
{

    public function __construct() // cette method sert a : pour  voir cet page tu doit etre authentifier
    {
        $this->middleware('auth');
    }
     //pour lister les reservations
    public function index(){

  $listrepresentation= Representation::all();

return view('representation.index',['representations'=>$listrepresentation]);

   }
//afficher le formulaire de creation des reservations
   public function create(){

  return view('representation.create');

   }
//enregistrer les reservations
   public function store(representationRequest $request){

      $representation =new Representation();

   $representation->id_piece_theatre=$request->input('id_piece_theatre');
   $representation->date_representation = date('Y-m-d H:i:s', strtotime("$request->date_rep  $request->heure_rep"));
     $representation->id_salle=$request->input('id_salle');
     
      
        $representation->save();
        return redirect('representations'); 

   
   }
//pour recuperer un paiement puis le mettre dans le formulaire
   
     public function edit($id){
    
    $representation = Representation::find($id);
    return view('representation.edit',['representation'=>$representation]);

     return redirect('representations');

   }
//pour modifier les paiement
       public function update(representationRequest  $request, $id){

         $representation = Representation::find($id);
      
      $representation->id_piece_theatre=$request->input('id_piece_theatre');
   // $representation->date_representation=$request->input('date_representation');
      $representation->date_representation = date('Y-m-d H:i:s', strtotime("$request->date_rep $request->heure_rep"));
     $representation->id_salle=$request->input('id_salle');
            
        $representation->save();
        return redirect('representations'); 

   }
//pour supprimer les reservations
   public function destroy(Request $request, $id){

      $representation = Representation::find($id);

      $representation->delete();
       
       return redirect('representations');
 

}
}

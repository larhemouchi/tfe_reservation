<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Paiement;
use App\Http\Requests\paiementRequest;

class PaiementController extends Controller
{
      public function __construct() // cette method sert a : pour  voir cet page tu doit etre authentifier
    {
        $this->middleware('auth');
    }
     //pour lister les paiements
   public function index(){


      $listpaiement = Paiement::all();

    return view('paiement.index',['paiements'=>$listpaiement]);

   }

   //afficher le formulaire de creation des reservations
   public function create(){

  return view('paiement.create');

   }
//enregistrer les reservations
   public function store(paiementRequest  $request){

   	 $paiement =new Paiement();

  // $paiement->id_user=$request->input('id_user');
   $paiement->id_user=Auth::user()->id;

    $paiement->numero_compte=$request->input('numero_compte');
     $paiement->numero_carte=$request->input('numero_carte');
      $paiement->nom=$request->input('nom');
       $paiement->prenom=$request->input('prenom');   
        $paiement->date_expiration = $request->input('date_expiration') ;
        $paiement->type_carte=$request->input('type_carte');

        $paiement->save();
        return redirect('paiements'); 

   
   }
//pour recuperer un paiement puis le mettre dans le formulaire
   
     public function edit($id){
    
    $paiement = Paiement::find($id);

    $this->authorize('update',$paiement);
    return view('paiement.edit',['paiement'=>$paiement]);

    

   }
//pour modifier les paiement
       public function update(paiementRequest $request, $id){

         $paiement = Paiement::find($id);
         
        $paiement->id_user=Auth::user()->id;

         $paiement->numero_compte=$request->input('numero_compte');
         $paiement->numero_carte=$request->input('numero_carte');
         $paiement->nom=$request->input('nom');
         $paiement->prenom=$request->input('prenom');   
          $paiement->date_expiration = $request->input('date_expiration') ;
         $paiement->type_carte=$request->input('type_carte');

         $paiement->save();
        return redirect('paiements');

   }
//pour supprimer les reservations
   public function destroy(Request $request, $id){
       $paiement = Paiement::find($id);

      $paiement->delete();
       
       return redirect('paiements');
 


}}

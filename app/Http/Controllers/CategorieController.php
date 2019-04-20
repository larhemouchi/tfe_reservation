<?php

namespace App\Http\Controllers;
use Auth;
use App\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\categorieRequest;

class CategorieController extends Controller
{
     public function __construct() // cette method sert a : pour  voir cet page tu doit etre authentifier
    {
        $this->middleware('auth');
    }
     //pour lister les reservations
   public function index(){

$listcategorie= Categorie::all();

return view('categorie.index',['categories'=>$listcategorie]);

   }
//afficher le formulaire de creation des reservations
   public function create(){

  return view('categorie.create');
   }
//enregistrer les reservations
   public function store(categorieRequest $request){

   $categorie =new Categorie();


    $categorie->nom_categorie=$request->input('nom_categorie');
     $categorie->prix_categorie=$request->input('prix_categorie');

     
       
      
        $categorie->save();
        return redirect('categories');

   }
//pour recuperer une reservation puis le mettre dans le formulaire

    public function edit($id){
    
    $categorie = Categorie::find($id);
    return view('categorie.edit',['categorie'=>$categorie]);

     return redirect('categories');

   }
//pour modifier les reservations
       public function update(categorieRequest $request, $id){

     $categorie = Categorie::find($id);

     
    $categorie->nom_categorie=$request->input('nom_categorie');
     $categorie->prix_categorie=$request->input('prix_categorie');


            $categorie->save();
            return redirect('categories');

   }
//pour supprimer les reservations
   public function destroy(Request $request, $id){
     
      $categorie = Categorie::find($id);

      $categorie->delete();
       
       return redirect('categories');
       


}
}

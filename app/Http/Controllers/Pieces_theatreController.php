<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Pieces_theatre;
use App\Http\Requests\pieces_theatreRequest;
class Pieces_theatreController extends Controller
{
    public function __construct(){ // cette method sert a : pour  voir cet page tu doit etre authentifier

          $this->middleware('auth');
        }
     //pour lister les reservations


   public function index(){

  $listpieces_theatre= Pieces_theatre::all();

return view('pieces_theatre.index',['pieces_theatres'=>$listpieces_theatre]);

   }
//afficher le formulaire de creation des reservations
   public function create(){

  return view('pieces_theatre.create');

   }
//enregistrer les reservations
   public function store(pieces_theatreRequest  $request){

     $pieces_theatre =new Pieces_theatre();

   $pieces_theatre->slug=$request->input('slug');
    $pieces_theatre->titre=$request->input('titre');
    // $pieces_theatre->image_poster=$request->input('image_poster');

     if($request->hasFile('image_poster')){
     $pieces_theatre->image_poster= $request->image_poster->store('images');
        }

      $pieces_theatre->description=$request->input('description');
       
        $pieces_theatre->save();
        return redirect('pieces_theatres'); 

   
   }
//pour recuperer un paiement puis le mettre dans le formulaire
   
     public function edit($id){
    
    $pieces_theatre = Pieces_theatre::find($id);
    return view('pieces_theatre.edit',['pieces_theatre'=>$pieces_theatre]);

     return redirect('pieces_theatres');

   }
//pour modifier les paiement
       public function update(pieces_theatreRequest  $request, $id){

         $pieces_theatre = Pieces_theatre::find($id);
      
      $pieces_theatre->slug=$request->input('slug');
    $pieces_theatre->titre=$request->input('titre');
   //  $pieces_theatre->image_poster=$request->input('image_poster');
    if($request->hasFile('image_poster')){
     $pieces_theatre->image_poster= $request->image_poster->store('images');
        }
      $pieces_theatre->description=$request->input('description');
       
        $pieces_theatre->save();
        return redirect('pieces_theatres'); 

   }
//pour supprimer les reservations
   public function destroy(Request $request, $id){

      $pieces_theatre = Pieces_theatre::find($id);

      $pieces_theatre->delete();
       
       return redirect('pieces_theatres');
 
}}

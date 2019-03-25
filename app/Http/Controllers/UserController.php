<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\userRequest;

use App\User;

class UserController extends Controller
{

	 public function __construct(){

          $this->middleware('auth');

        }

 public function index(){

  $listuser= User::all();

return view('user.index',['users'=>$listuser]);

   }
//afficher le formulaire de creation des reservations
   public function create(){

  return view('user.create');

   }
//enregistrer les reservations
   public function store(userRequest $request){

      $user =new User();

   $user->login=$request->input('login');
    $user->password=$request->input('password');
     $user->role_id=$request->input('role_id');
      $user->nom=$request->input('nom');
       $user->prenom=$request->input('prenom');
      $user->email=$request->input('email');
        $user->telephone=$request->input('telephone');

        $user->save();
        return redirect('users'); 

   
   }
//pour recuperer un paiement puis le mettre dans le formulaire
   
     public function edit($id){
    
    $user = User::find($id);
    return view('user.edit',['user'=>$user]);

     return redirect('users');

   }
//pour modifier les paiement
       public function update(userRequest $request, $id){

         $user = User::find($id);
      
        $user->login=$request->input('login');
        $user->password=$request->input('password');
        $user->id_role=$request->input('id_role');
        $user->nom=$request->input('nom');
        $user->prenom=$request->input('prenom');
        $user->email=$request->input('email');
        $user->telephone=$request->input('telephone');
            
        $user->save();
        return redirect('users'); 

   }
//pour supprimer les reservations
   public function destroy(Request $request, $id){

      $user = User::find($id);

      $user->delete();
       
       return redirect('users');
 

}
}



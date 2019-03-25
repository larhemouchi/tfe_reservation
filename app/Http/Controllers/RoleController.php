<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Role;
use App\Http\Requests\roleRequest;
class RoleController extends Controller
{
public function __construct(){ // cette method sert a : pour  voir cet page tu doit etre authentifier

          $this->middleware('auth');
        }
     //pour lister les reservations
    public function index(){

$listrole= Role::all();

return view('role.index',['roles'=>$listrole]);

   }
//afficher le formulaire de creation des reservations
   public function create(){

  return view('role.create');
   }
//enregistrer les reservations
   public function store(roleRequest $request){

   $role =new Role();

   $role->role=$request->input('role');

        $role->save();
        return redirect('roles');

   }
//pour recuperer une reservation puis le mettre dans le formulaire

    public function edit($id){
    
    $role = Role::find($id);
    return view('role.edit',['role'=>$role]);

     return redirect('roles');

   }
//pour modifier les reservations
       public function update(roleRequest $request, $id){

 $role = Role::find($id);
    $role->role=$request->input('role');

      

            $role->save();
            return redirect('roles');

   }
//pour supprimer les reservations
   public function destroy(Request $request, $id){
     
      $role = Role::find($id);

      $role->delete();
       
       return redirect('roles');

}
}

<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Reservation;
use App\Http\Requests\reservationRequest;

class ReservationController extends Controller
{

    public function __construct() // cette method sert a : pour  voir cet page tu doit etre authentifier
    {
        $this->middleware('auth');
    }
     //pour lister les reservations
   public function index(){

$listreservation= Reservation::all();

return view('reservation.index',['reservations'=>$listreservation]);

   }
//afficher le formulaire de creation des reservations
   public function create(){

  return view('reservation.create');
   }
//enregistrer les reservations
   public function store(Request $request){

   $reservation =new Reservation();

   $reservation->id_representation=$request->input('id_representation');
   $reservation->id_user=$request->input('id_user');
   $reservation->id_paiement=$request->input('id_paiement');
   $reservation->tarif_total=$request->input('tarif_total');
   $reservation->nbre_place_reserve=$request->input('nbre_place_reserve');
   $reservation->date_reservation=$request->input('date_reservation');



        $reservation->save();
        return redirect('reservations');

   }
//pour recuperer une reservation puis le mettre dans le formulaire

   public function edit($id){
    
    $reservation = Reservation::find($id);
    return view('reservation.edit',['reservation'=>$reservation]);

     return redirect('reservations');

   }
//pour modifier les reservations
       public function update(Request $request){

 $reservation = Reservation::findOrFail($request->idreservation);
        $reservation->update($request->all());
       
        return back();

   }
//pour supprimer les reservations
   public function destroy(Request $request){
     
  
      $reservation = Reservation::findOrFail($request->idreservation);

      $reservation->delete();
       
       return back();
}
}

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

    
      $listreservation = Reservation::all();

    return view('reservation.index',['reservations'=>$listreservation]);

   }

//afficher le formulaire de creation des reservations
   public function create(){

  return view('reservation.create');
   }
//enregistrer les reservations
   public function store(reservationRequest $request){

   $reservation =new Reservation();

   $reservation->id_representation=$request->input('id_representation');
   $reservation->id_user=Auth::user()->id;
   // $reservation->id_user=$request->input('id_user');
     $reservation->tarif_total=$request->input('tarif_total');
      $reservation->nbre_place_reserve=$request->input('nbre_place_reserve');
       $reservation->id_paiement=$request->input('id_paiement');
       $reservation->date_reservation = $request->input('date_reservation');
       

        $reservation->save();
        return redirect('reservations');

   }
//pour recuperer une reservation puis le mettre dans le formulaire

    public function edit($id){
    
    $reservation = Reservation::find($id);
    
   $this->authorize('update',$reservation);
return view('reservation.edit',['reservation'=>$reservation]);
  

   }
//pour modifier les reservations
       public function update(reservationRequest $request, $id){

 $reservation = Reservation::find($id);

    $reservation->id_representation=$request->input('id_representation');
     //$reservation->id_user=$request->input('id_user');
     $reservation->id_user=Auth::user()->id;
     $reservation->tarif_total=$request->input('tarif_total');
     $reservation->nbre_place_reserve=$request->input('nbre_place_reserve');
     $reservation->id_paiement=$request->input('id_paiement');
     $reservation->date_reservation = $request->input('date_reservation');
      

            $reservation->save();
            return redirect('reservations');

   }
//pour supprimer les reservations
   public function destroy(Request $request, $id){
     
      $reservation = Reservation::find($id);

      $reservation->delete();       
       return redirect('reservations');
       
}
}

<?php

namespace App\Policies;

use App\User;
use App\Reservation;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReservationPolicy
{
    use HandlesAuthorization;

   public function before($user,$ability){
        if($user->id_role==1){  // si le user est un admin le code s'arrete ici
                                 // et n'execute pas le code en bas
              return true;       //$ability == donner tous les droit au admin
                     //if($user->role_id==1 and $ability != 'delete')
                     // comme ca on retire le delete a les droit de l'admin(il peut pas supprimer ce qui lui appartient)
            
        }
    }

    /**
     * Determine whether the user can view the reservation.
     *
     * @param  \App\User  $user
     * @param  \App\Reservation  $reservation
     * @return mixed
     */
    public function view(User $user, Reservation $reservation)
    {
        return true;
    }

    /**
     * Determine whether the user can create reservations.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
         return true;
    }

    /**
     * Determine whether the user can update the reservation.
     *
     * @param  \App\User  $user
     * @param  \App\Reservation  $reservation
     * @return mixed
     */
    public function update(User $user, Reservation $reservation)
    {
         return $user->id === $reservation->id_user;
    }

    /**
     * Determine whether the user can delete the reservation.
     *
     * @param  \App\User  $user
     * @param  \App\Reservation  $reservation
     * @return mixed
     */
    public function delete(User $user, Reservation $reservation)
    {
          return $user->id === $reservation->id_user;
    }
}

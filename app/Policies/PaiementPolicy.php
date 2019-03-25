<?php

namespace App\Policies;

use App\User;
use App\Paiement;
use Illuminate\Auth\Access\HandlesAuthorization;

class PaiementPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the paiement.
     *
     * @param  \App\User  $user
     * @param  \App\Paiement  $paiement
     * @return mixed
     */
    public function view(User $user, Paiement $paiement)
    {
        return true;
            }

    /**
     * Determine whether the user can create paiements.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
         return true;    }

    /**
     * Determine whether the user can update the paiement.
     *
     * @param  \App\User  $user
     * @param  \App\Paiement  $paiement
     * @return mixed
     */
    public function update(User $user, Paiement $paiement)
    {
        return $user->id === $paiement->id_user;
    }

    /**
     * Determine whether the user can delete the paiement.
     *
     * @param  \App\User  $user
     * @param  \App\Paiement  $paiement
     * @return mixed
     */
    public function delete(User $user, Paiement $paiement)
    {
        //
    }
}

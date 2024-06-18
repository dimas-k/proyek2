<?php

namespace App\Observers;

use App\Models\User;

class UmumObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
       echo "user dengan nama {$user->nama_lengkap} dan dengan username {$user->username} berhasil dibuat";

    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        echo "user dengan nama {$user->nama_lengkap} dan dengan username {$user->username} berhasil diupdate";
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        echo "user dengan nama {$user->nama_lengkap} dan dengan username {$user->username} berhasil dihapus";
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}

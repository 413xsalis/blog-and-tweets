<?php

namespace App\Policies;

use App\Models\User;

use App\Models\Entry;

class EntryPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update($user, Entry $entry) {
        return $user->id === $entry->user_id;
    }
}

<?php

namespace Lasseeee\Info\Traits;

trait GetsInformed
{
    /**
     * Save timestamp this user was informed.
     */
    public function inform()
    {
        return $this->update([
            'informed_at' => now(),
        ]);
    }

    /**
     * Determine whether this user is not informed.
     */
    public function isNotInformed()
    {
        return is_null($this->informed_at);
    }
}

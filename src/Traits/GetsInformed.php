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
}

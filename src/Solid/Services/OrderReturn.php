<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

class OrderReturn
{
    public int $returnLimit = 4;

    public function calculateLastReturnDay(): \DateTime
    {
        return new \DateTime("now +$this->returnLimit day");
    }
}
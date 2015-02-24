<?php

namespace Morse\Impulsions;

use Morse\Impulsion;

class DotAndDash implements Impulsion
{
    public function getShort()
    {
        return '.';
    }

    public function getLong()
    {
        return '-';
    }
}

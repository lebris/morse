<?php

namespace Morse;

class Translator
{
    private
        $impulsion;

    public function __construct(Impulsion $impulsion)
    {
        $this->impulsion = $impulsion;
    }

    public function morsify($message)
    {
        $converters = $this->getConverters();

        foreach($converters as $pattern => $converter)
        {
            $message = preg_replace_callback('~(['.$pattern.'])~u', $converter, $message);
        }

        return $message;
    }

    private function getConverters()
    {
        return array(
            'AaÀà@ÂâÄä' => function() {
                return $this->impulsion->getShort() . $this->impulsion->getLong();
            },
            'Bb' => function() {
                return $this->impulsion->getLong() . $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getShort();
            },
            'CcCcÇç' => function() {
                return $this->impulsion->getLong() . $this->impulsion->getShort() . $this->impulsion->getLong() . $this->impulsion->getShort();
            },
            'Dd' => function() {
                return $this->impulsion->getLong() . $this->impulsion->getShort() . $this->impulsion->getShort();
            },
            'EeÉéÈèÊêËë' => function() {
                return $this->impulsion->getShort();
            },
            'Ff' => function() {
                return $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getLong() . $this->impulsion->getShort();
            },
            'Gg' => function() {
                return $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getShort();
            },
            'Hh' => function() {
                return $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getShort();
            },
            'IiÎîÏïÌì' => function() {
                return $this->impulsion->getShort() . $this->impulsion->getShort();
            },
            'Jj' => function() {
                return $this->impulsion->getShort() . $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getLong();
            },
            'Kk' => function() {
                return $this->impulsion->getLong() . $this->impulsion->getShort() . $this->impulsion->getLong();
            },
            'Ll' => function() {
                return $this->impulsion->getShort() . $this->impulsion->getLong() . $this->impulsion->getShort() . $this->impulsion->getShort();
            },
            'Mm' => function() {
                return $this->impulsion->getLong() . $this->impulsion->getLong();
            },
            'Nn' => function() {
                return $this->impulsion->getLong() . $this->impulsion->getShort();
            },
            'OoÖöÔô' => function() {
                return $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getLong();
            },
            'Pp' => function() {
                return  $this->impulsion->getShort() . $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getShort();
            },
            'Qq' => function() {
                return  $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getShort() . $this->impulsion->getLong();
            },
            'Rr' => function() {
                return  $this->impulsion->getShort() . $this->impulsion->getLong() . $this->impulsion->getShort();
            },
            'Ss' => function() {
                return  $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getShort();
            },
            'Tt' => function() {
                return  $this->impulsion->getLong();
            },
            'UuÛûÜüÙù' => function() {
                return  $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getLong();
            },
            'Vv' => function() {
                return  $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getLong();
            },
            'Ww' => function() {
                return  $this->impulsion->getShort() . $this->impulsion->getLong() . $this->impulsion->getLong();
            },
            'Xx' => function() {
                return  $this->impulsion->getLong() . $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getLong();
            },
            'Yy' => function() {
                return  $this->impulsion->getLong() . $this->impulsion->getShort() . $this->impulsion->getLong() . $this->impulsion->getLong();
            },
            'Zz' => function() {
                return  $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getShort() . $this->impulsion->getShort();
            },
            '1' => function() {
                return  $this->impulsion->getShort() . $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getLong();
            },
            '2' => function() {
                return  $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getLong();
            },
            '3' => function() {
                return  $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getLong() . $this->impulsion->getLong();
            },
            '4' => function() {
                return  $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getLong();
            },
            '5' => function() {
                return  $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getShort();
            },
            '6' => function() {
                return  $this->impulsion->getLong() . $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getShort();
            },
            '7' => function() {
                return  $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getShort();
            },
            '8' => function() {
                return  $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getShort() . $this->impulsion->getShort();
            },
            '9' => function() {
                return  $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getShort();
            },
            '0' => function() {
                return  $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getLong() . $this->impulsion->getLong();
            },
        );
    }
}

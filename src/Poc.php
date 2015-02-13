<?php

class Translator
{
    private
        $impulsion;
    
    public function __construct(Impulsion $impulsion)
    {
        $this->impulsion = $impulsion;
    }
    
    public function morsify($value)
    {
        $converters = array(
            'Aaà@' => function() {
                return $this->impulsion->getShort() . $this->impulsion->getLong();
            },
            'Bb' => function() {
                return $this->impulsion->getLong() . $this->impulsion->getShort() . $this->impulsion->getShort() . $this->impulsion->getShort();
            },
            'Cc' => function() {
                return $this->impulsion->getLong() . $this->impulsion->getShort() . $this->impulsion->getLong() . $this->impulsion->getShort();
            },
        );
        
        'AB KI';
        
        foreach($converters as $pattern => $converter)
        {
            $value = preg_replace_callback('~['.$pattern.']~', $converter, $value);
        }
        
        return $value;
    }
}

interface Impulsion
{
    public function getLong();
    public function getShort();
}

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


$string = 'abcdefg';

$impulsion = new DotAndDash();

$translator = new Translator($impulsion);
$translated = $translator->morsify($string);


var_dump($translated);


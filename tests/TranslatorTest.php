<?php

namespace Morse;

class TranslatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerTestTranslate
     */
    public function testTranslate($expected, $message)
    {
        $translator = new Translator(new Impulsions\DotAndDash());

        $this->assertSame($expected, $translator->morsify($message));
    }

    public function providerTestTranslate()
    {
        return array(
            array('.--.----..-.--', 'poney'),
            array('-.....-.-.--...-.', 'burger'),
            array('', ''),
            array('', null),
            array('.----...--...----...', 1337),
            array('..-.-..-.-..-.-.. .....-....-..-. ..-..-.---.-.', 'Internal server error'),
        );
    }

    /**
     * @dataProvider providerTestTranslateAlphabet
     */
    public function testTranslateAlphabet($expected, $letters)
    {
        $translator = new Translator(new Impulsions\DotAndDash());

        $separedtedLetters = preg_split('~~u', $letters, -1, PREG_SPLIT_NO_EMPTY);
        foreach($separedtedLetters as $letter)
        {
            $this->assertSame($expected, $translator->morsify($letter));
        }
    }

    public function providerTestTranslateAlphabet()
    {
        return array(
            array('.-', 'AaÀà@ÂâÄä'),
            array('-...', 'Bb'),
            array('-.-.', 'CcÇç'),
            array('-..', 'Dd'),
            array('.', 'EeÉéÈèÊêËë'),
            array('..-.', 'Ff'),
            array('--.', 'Gg'),
            array('....', 'Hh'),
            array('..', 'IiÎîÏïÌì'),
            array('.---', 'Jj'),
            array('-.-', 'Kk'),
            array('.-..', 'Ll'),
            array('--', 'Mm'),
            array('-.', 'Nn'),
            array('---', 'OoÖöÔô'),
            array('.--.', 'Pp'),
            array('--.-', 'Qq'),
            array('.-.', 'Rr'),
            array('...', 'Ss'),
            array('-', 'Tt'),
            array('..-', 'UuÛûÜüÙù'),
            array('...-', 'Vv'),
            array('.--', 'Ww'),
            array('-..-', 'Xx'),
            array('-.--', 'Yy'),
            array('--..', 'Zz'),
            array('.----', '1'),
            array('..---', '2'),
            array('...--', '3'),
            array('....-', '4'),
            array('.....', '5'),
            array('-....', '6'),
            array('--...', '7'),
            array('---..', '8'),
            array('----.', '9'),
            array('-----', '0'),
        );
    }
}

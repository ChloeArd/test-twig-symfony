<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class SmileyTwigExtension extends AbstractExtension {

    public function getFilters() {
        return [
            new TwigFilter('smile', [$this, 'addSmileySmile']),
            new TwigFilter('winking', [$this, 'addSmileyWinking']),
            new TwigFilter('neutral', [$this, 'addSmileyNeutral'])
        ];
    }

    /**
     * Replace :-) by 🙂
     * @param string $text
     * @return string
     */
    public function addSmileySmile(string $text): string {
        $trans = array(":-)" => "🙂");
        return strtr($text, $trans);
    }

    /**
     * Replace ;-) by 😉
     * @param string $text
     * @return string
     */
    public function addSmileyWinking(string $text): string {
        $trans = array(";-)" => "😉");
        return strtr($text, $trans);
    }

    /**
     * Replace :-| by 😐
     * @param string $text
     * @return string
     */
    public function addSmileyNeutral(string $text): string {
        $trans = array(":-|" => "😐");
        return strtr($text, $trans);
    }
}
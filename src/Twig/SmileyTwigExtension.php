<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class SmileyTwigExtension extends AbstractExtension {

    public function getFilters() {
        return [
            new TwigFilter('smile', [$this, 'addSmileySmile']),
            new TwigFilter('winking', [$this, 'addSmileyWinking']),
            new TwigFilter('neutral', [$this, 'addSmileyNeutral']),
            new TwigFilter('grinning', [$this, 'addSmileyGrinning']),
            new TwigFilter('fun', [$this, 'addSmileyFun']),
            new TwigFilter('sad', [$this, 'addSmileySad'])


        ];
    }

    /**
     * Replace :-) by đ
     * @param string $text
     * @return string
     */
    public function addSmileySmile(string $text): string {
        $trans = array(":-)" => "đ");
        return strtr($text, $trans);
    }

    /**
     * Replace ;-) by đ
     * @param string $text
     * @return string
     */
    public function addSmileyWinking(string $text): string {
        $trans = array(";-)" => "đ");
        return strtr($text, $trans);
    }

    /**
     * Replace :-| by đ
     * @param string $text
     * @return string
     */
    public function addSmileyNeutral(string $text): string {
        $trans = array(":-|" => "đ");
        return strtr($text, $trans);
    }

    /**
     * Replace :-D by đ
     * @param string $text
     * @return string
     */
    public function addSmileyGrinning(string $text): string {
        $trans = array(":-D" => "đ");
        return strtr($text, $trans);
    }

    /**
     * Replace xD by đ
     * @param string $text
     * @return string
     */
    public function addSmileyFun(string $text): string {
        $trans = array("xD" => "đ");
        return strtr($text, $trans);
    }

    /**
     * Replace :-( by âš
     * @param string $text
     * @return string
     */
    public function addSmileySad(string $text): string {
        $trans = array(":-(" => "âšī¸");
        return strtr($text, $trans);
    }
}
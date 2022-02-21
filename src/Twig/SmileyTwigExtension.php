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

    /**
     * Replace :-D by 😀
     * @param string $text
     * @return string
     */
    public function addSmileyGrinning(string $text): string {
        $trans = array(":-D" => "😀");
        return strtr($text, $trans);
    }

    /**
     * Replace xD by 😆
     * @param string $text
     * @return string
     */
    public function addSmileyFun(string $text): string {
        $trans = array("xD" => "😆");
        return strtr($text, $trans);
    }

    /**
     * Replace :-( by ☹
     * @param string $text
     * @return string
     */
    public function addSmileySad(string $text): string {
        $trans = array(":-(" => "☹️");
        return strtr($text, $trans);
    }
}
<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class FunctionExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('formatWord', [$this, 'formatWord']),
            new TwigFunction('getValidCodeBlock', [$this, 'getValidCodeBlock']),
            new TwigFunction('getPathTemplateForBlock', [$this, 'getPathTemplateForBlock']),
        ];
    }

    public function formatWord($number, $titles, $full = true) {
        $cases = [2, 0, 1, 1, 1, 2];
        $result = '';
        if ($full) {
            $result = $number . ' ';
        }
        $result .= $titles[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[($number % 10 < 5) ? $number % 10 : 5]];
        return $result;
    }

    public function getValidCodeBlock($codeBlock) {
        $codeBlock[0] = strtolower($codeBlock[0]);
        for($i = 0; $i < strlen($codeBlock); $i++) {
            if (ctype_upper($codeBlock[$i])) {
                $codeBlock[$i] = strtolower($codeBlock[$i]);
                $codeBlock = substr($codeBlock, 0, $i) . '_' . substr($codeBlock, $i);
            }
        }
        return $codeBlock;
    }

    public function getPathTemplateForBlock($codeBlock) {
        $codeBlock = $this->getValidCodeBlock($codeBlock);
        return '/main/blocks/' . $codeBlock . '.html.twig';
    }
}

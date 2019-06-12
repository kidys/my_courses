<?php

namespace App\Http\CodeHighlight;

/**
 * Interface ICodeHighlight
 * @package App\Http\CodeHighlight
 */
interface ICodeHighlight
{
    /**
     * @param string $data
     * @return string
     */
    static public function transform($data);
}
<?php

namespace App\Http\CodeHighlight;

/**
 * Class CodeHighlight
 * @package App\Http\CodeHighlight
 */
class CodeHighlight implements ICodeHighlight
{
    /**
     * @param string $data
     * @return string
     */
    static public function transform($data)
    {
        $data = (string)$data;

        return preg_replace('/~~~\n(.*\n[^~]+)\n~~~\n{\:([a-z\-\_]+)}/im', '<pre class="kidys-code"><code class="hljs kidys-code__hljs $2">$1</code><span class="kidys-code__title-class">$2</span></pre>',
            $data);
    }
}
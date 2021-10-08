<?php

class characters
{
    /**
     * @param $matches
     * @return string
     */
    public static function revertCharacters($matches): string
    {
        $rev_word = '';
        $str_len = mb_strlen($matches[1]);

        for ($i = $str_len; $i >= 0; $i--) {
            $rev_word .= mb_substr($matches[1], $i, 1);
        }

        if (preg_match('/([[:upper:]]+)/u', $rev_word)) {
            return mb_convert_case($rev_word, MB_CASE_TITLE, 'UTF-8');
        }

        return $rev_word;
    }
}
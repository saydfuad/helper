<?php
//Pacentage Increase or Decrease Between Two values
if (!function_exists('percentageDiff')) {
    function percentageDiff($current, $original): array
    {
        if ($original == 0) {
            $original++;
            $current++;
        }
        $diff = $current - $original;
        $more_less = $diff > 0;
        $diff = abs($diff);
        $percentChange = ($diff / $original) * 100;


        return round($percentChange);
    }

}

//Abbrivate Given string
if (!function_exists('abbrvWords')) {
    function abbrvWords($word): string
    {
        if (preg_match_all('/\b(\w)/', strtoupper($word), $m)) {
            return implode('', $m[1]);
        }

        return '';
    }
}

//Number Pattern like 0001 instead of 1
if (!function_exists('numPat')) {
    function numPat($input, $pad_len = 7, $prefix = null)
    {
        if ($pad_len <= strlen($input))
            trigger_error('<strong>$pad_len</strong> cannot be less than or equal to the length of <strong>$input</strong> to generate pattern number', E_USER_ERROR);

        if (is_string($prefix))
            return sprintf("%s%s", $prefix, str_pad($input, $pad_len, "0", STR_PAD_LEFT));

        return str_pad($input, $pad_len, "0", STR_PAD_LEFT);
    }
}

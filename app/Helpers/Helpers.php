<?php

use Illuminate\Support\Str;

/**
 * BLADE VIEW HELPER
 */

if (!function_exists('wp_asset')) {
    /**
     * Format number
     *
     * @param $value string
     * @param $attribute
     * @param $data
     * @return boolean
     */
    function wp_asset($value)
    {

        if (!Str::contains($value, ['http://www.gulliver.univpm.it/wp-content/uploads/'])) {
           return "http://www.gulliver.univpm.it/wp-content/uploads/{$value}";
        }
        return $value;

    }

}
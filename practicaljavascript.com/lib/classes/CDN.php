<?php

/*  PracticalJavaScript.com
    Andrew Hedges, andrew@hedges.name
    2010-10-01
*/

class CDN
{
    /**
     * Put a resource on a CDN
     *
     * @param $path string Path from the root of the web server (e.g., '/-/styles.css')
     *
     * @return string
     */
    public static function url($path = null)
    {
        if (strstr($_SERVER['SERVER_NAME'], '.local')) {
            return $path;
        }

        $pieces = array(
            'http://',
            $_SERVER['SERVER_NAME'],
            '.nyud.net',
            $path,
            '?',
            filemtime('.' . $path),
        );
        return implode('', $pieces);
    }
}

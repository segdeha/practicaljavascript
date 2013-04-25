<?php

/*  PracticalJavaScript.com
    Andrew Hedges, andrew@hedges.name
    2010-10-01
*/

class PJ
{
    // only includes pages we want to show up in the nav
    private static $page_nav = array(
        'home',
        'environment',
        'basics',
        'primitives',
        'variables',
        'arrays',
        'objects',
        'loops',
        'conditionals',
        'functions',
        'built-ins',
        'advanced',
        'resources',
    );

    private static $page_titles = array(
        'home'         => 'Home',
        'environment'  => 'Development environment',
        'basics'       => 'JavaScript basics',
        'primitives'   => 'Primitives',
        'variables'    => 'Variables',
        'arrays'       => 'Arrays',
        'objects'      => 'Objects',
        'loops'        => 'Loops',
        'conditionals' => 'Conditionals',
        'functions'    => 'Functions',
        'built-ins'    => 'Built-in objects &amp; methods',
        'advanced'     => 'Advanced topics',
        'resources'    => 'Resources for further learning',
        'colophon'     => 'Colophon',
    );

    /**
     * Main controller
     */
    public static function index($page = 'home')
    {
        $vars = array(
            'page' => $page,
        );

        if (isset(self::$page_titles[$page])) {
            $vars['page_title'] = self::$page_titles[$page];
            $vars['nav']        = self::buildNav($page);
        }

        EpiCode::display('header.php', $vars);
        EpiCode::display('index.php', $vars);
        EpiCode::display('footer.php', $vars);
    }

    /**
     * Post a comment
     */
    public static function comment()
    {
        //
    }

    /**
     * Build-up the next/previous nav
     */
    private static function buildNav($page)
    {
        $nav = array();
        $idx = array_search($page, self::$page_nav);
        if (is_numeric($idx)) {
            if ($idx < count(self::$page_nav) - 1) {
                $nav['next'] = array(
                    'uri'   => self::$page_nav[$idx + 1],
                    'label' => self::$page_titles[self::$page_nav[$idx + 1]],
                );
            }
            if ($idx > 0) {
                $nav['previous'] = array(
                    'uri'   => self::$page_nav[$idx - 1],
                    'label' => self::$page_titles[self::$page_nav[$idx - 1]],
                );
            }
        }
        return $nav;
    }

    /**
     * Check whether the current request was made via Ajax
     */
    private static function isAjax()
    {
        return ((isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')));
    }
}

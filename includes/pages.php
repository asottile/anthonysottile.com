<?php

$navList = array(
    'index' => array(
        'text' => 'Home',
        'title' => 'AnthonySottile.com',
        'scripts' => array(),
        'blurb' =>
            'Currently showcasing the projects that I am working on.
            You can browse through them using the links at the top.',
        'link' => '/index.htm',
        'body' => 'index.body.php',
        'enabled' => TRUE
    ),
    'websites' => array(
        'text' => 'Websites',
        'title' => 'Websites',
        'scripts' => array(),
        'blurb' => 'Here are a few of the websites I\'ve designed and programmed.',
        'body' => 'websites.body.php',
        'link' => '/websites.htm',
        'body' => 'websites.body.php',
        'enabled' => TRUE
    ),
    'android' => array(
        'text' => '<img src="/images/android.png" alt="Android" /> Android',
        'title' => 'Android Applications',
        'scripts' => array(),
        'blurb' => 'The Android applications that I\'ve been working on.',
        'link' => '/android.htm',
        'body' => 'android.body.php',
        'enabled' => TRUE
    ),
    'android_kenken' => array(
        'text' => '',
        'title' => 'KenSquared - KenKen for Android',
        'scripts' => array(),
        'blurb' => 'How to play and information about KenSquared - KenKen for Android',
        'link' => '/android_kenken.htm',
        'body' => 'kenken.body.php',
        'enabled' => FALSE
    ),
    'javascript' => array(
        'text' => 'JavaScript',
        'title' => 'JavaScript',
        'scripts' => array(),
        'blurb' => '',
        'link' => '/javascript.htm',
        'body' => 'javascript.body.php',
        'enabled' => FALSE
    ),
    'applications' => array(
        'text' => 'Applications',
        'title' => 'Applications',
        'scripts' => array(),
        'blurb' => '',
        'link' => '/applications.htm',
        'body' => 'applications.body.php',
        'enabled' => FALSE
    ),
    'aboutme' => array(
        'text' => 'About Me',
        'title' => 'About Me',
        'scripts' => array(),
        'blurb' => 'Just a bit about me.',
        'link' => '/aboutme.htm',
        'body' => 'aboutme.body.php',
        'enabled' => TRUE
    ),
    '404' => array(
        'text' => '',
        'title' => '404 Not Found!',
        'scripts' => array(),
        'blurb' => 'Oops looks like we couldn\'t find that page!',
        'link' => '/404.htm',
        'body' => '404.body.php',
        'enabled' => FALSE
    )
);

function sanitize($page) {
    global $navList;

    if (empty($page)) {
        return 'index';
    }

    if (!array_key_exists($page, $navList)) {
        return '404';
    }

    return $page;
}

function url($page) {
    global $navList;

    return $navList[$page]['link'];
}

function printTitle($page) {
    global $navList;

    echo '<title>';
    echo $navList[$page]['title'];
    echo '</title>';
}

function printScripts($page) {
    global $navList;

    if (count($navList[$page]['scripts']) === 0) {
        return;
    }

    foreach ($navList[$page]['scripts'] as $i => $value) {
        echo '<script src="' . $value . '"></script>';
    }
}

function printNavigation($page) {
    global $navList;

    $pageExplodes = explode('_', $page);
    $pageToCompare = $pageExplodes[0];

    echo '<ul class="navigation">';

    foreach ($navList as $pagePath => $value) {
        if ($value['enabled']) {
            $classText = '';
            if ($pageToCompare === $pagePath) {
                $classText = ' class="active"';
            }

            echo '<li><a' . $classText . ' href="' . url($pagePath) . '">';
            echo $value['text'];
            echo '</a></li>';
        }
    }

    echo '</ul>';
}

function printBlurb($page) {
    global $navList;

    echo $navList[$page]['blurb'];
}

function getBodyPath($page) {
    global $navList;

    return 'includes/' . $navList[$page]['body'];
}

?>

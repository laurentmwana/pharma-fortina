<?php




function linkPaginate (int $pages, int $check, int $limit = 2): ?string {


    if ($pages <= 0 || $check <= 1) return null;

    if ($check > $pages) {
        $check = $pages;
    }

    $link = "";


    for ($i = ($check - $limit); $i <= $check - 1; $i++) {
        $uri = "?page=" . $i;
        if ($i > 0) {
            $link .= <<< HTML
            <a href="{$uri}" class="items-link">{$i}</a>
    HTML;
        }
    }

    $link .= <<< HTML
        <a href="{$uri}" class="items-link active">{$check}</a>
    HTML;
    


    for ($i = ($check+ 1); $i <= ($check + $limit); $i++) {
        $uri = "?page=" . $i;
        if ($i <= $pages) {
            $link .= <<< HTML
            <a href="{$uri}" class="items-link">{$i}</a>
    HTML;
        }
        
    }


    // for ($i = 1; $i <= $pages; $i++) {
    //     $uri = "?page=" . $i;

    //     if ($check === $i) {

    //         $link .= <<< HTML
    //         <a href="{$uri}" class="items-link active">{$i}</a>
    // HTML;

    //     }

    //     else {
    //         $link .= <<< HTML
    //         <a href="{$uri}" class="items-link">{$i}</a>
    // HTML;
    //     }
    // }

    return $link;
}


function nextPage (int $pages, int $check, string $uri): ?string {
    $link = null;

    if ($check > $pages) {
        $check = $pages;
    }

    if ($pages > 1 && $check < $pages) {
        $uri = "?page=" . ($check + 1);
        $link = <<< HTML
        <a href="{$uri}" class="link-paginate"><span class="fa fa-arrow-right"></span></a>
HTML;
    }


    return $link;
}




function prevPage (int $pages, int $check, string $uri): ?string {

    $link = null;

    if ($check > $pages) {
        $check = $pages;
    }

    if ($check > 1) {
        $uri = "?page=" . ($check - 1);
        $link = <<< HTML
        <a href="{$uri}" class="link-paginate"><span class="fa fa-arrow-left"></span></a>
HTML;
    }


    return $link;
}


function e (string $string, int $limit = 20) {

    if (mb_strlen($string) <= $limit) {
        return $string;
    }

    return substr($string, 0, $limit) . "...";
}




function redirect (string $path) {
    header("Location: $path");
    exit();
}


function startSession (): void {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

function writeSession (string $key, string $value): void {
    $_SESSION["flash"][$key] = $value;
}


function readSession (string $key): array {

    if (!isset($_SESSION[$key])) return [];

    $message = $_SESSION[$key];
    unset($_SESSION[$key]);
    return $message;
}

function hasSession (string $key) {    
    return isset($_SESSION[$key]);
}
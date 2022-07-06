<?php




function linkActive (string $link, string $title): string {

    $classe = "link-menu";
    $link = "/" . $link . ".php";

    if ($_SERVER["SCRIPT_NAME"] === $link):
        $classe .= " active";
    endif;

    return <<< HTML
    <li class="list-menu"><a href="{$link}" class="{$classe}">{$title}</a></li>
HTML;
}

require_once "inc/function.php"; 
require_once "inc/pdo.php";
require_once "inc/query/query.php";


startSession();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/pharma.css">
    <link rel="stylesheet" href="../assets/icons/fontawesome-free-6.1.1-web/css/all.css">
    <title>pharma - <?= isset($title) ? $title : "" ?> </title>
</head>
<body>
    <!-- header (en tête) -->
    <div class="header" id="header">
        <!-- title -->
        <div class="title">
            <!-- logo -->
            <a href="#" class="logo"> Phar<span>Ma</span></a>
            <!-- pour le mobile -->
            <a href="#" class="responsive" id="responsive"><i class="fa fa-bars" id="fa"></i></a>
        </div>

        <!-- menu -->
        <div class="menu" id="menu">
            <ul>
                <?=  linkActive("index", "Accueil") ?>
                <?=  linkActive("propos", "A propos") ?>
                <?=  linkActive("stock", "Stock") ?>
                <?=  linkActive("product", "Produit") ?>
                <?=  linkActive("admin", "Se connecter") ?>
            </ul>
        </div>
        <!--  end menu -->

    </div>
    <!-- end header -->

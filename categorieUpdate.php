
<?php require_once "elements/header.php"; ?>

<?php
$id = "";
$categorie = "";

if (empty($_GET['upd']) || (!preg_match("(^[0-9]+$)", $_GET['upd']) && (int)$_GET['upd'] >= 1)) {
    writeSession("success", "Impossible de retrouver les informations de la categorie");
    redirect("categories.php");
}

else {
    $id = (int)$_GET['upd'];
    $check = selectQuery($pdo, "SELECT * FROM categories WHERE id = $id");

    if (empty($check)) {
        writeSession("success", "Nous avons pas trouver la categorie");
        redirect("categories.php");
    }

    else {
        $categorie = $check[0];
    }

}


var_dump($_POST);
?>

<div class="container">
    
    <a href="categories.php" class="link-return"><span class="fa fa-arrow-left"></span></a>

    <h1 class="c-title"> Editer la categorie # <?=  $id ?></h1>
    <form action="#" class="form" method="POST">
        <div class="group-field">
            <label for="categorie" class="field-label"> Nom de la categorie</label>
            <input type="text" name="categorie" id="categorie" class="field" value="<?= $categorie["categorie"] ?? "" ?>">
        </div>
        <div class="group-field">
            <label for="type" class="field-label"> Type de categorie </label>
            <input type="text" name="type" id="type" class="field" value="<?= $categorie["type"] ?? "" ?>">
        </div>
        <div class="group-field">
            <label for="createAt" class="field-label"> Date de création  </label>
            <input type="text" name="createAt" id="createAt" class="field" value="<?= $categorie["createAt"] ?? "" ?>">
        </div>
        
        <button type="submit" class="form-btn"><span class="fa fa-edit"></span> Connexion</button>
    </form>
</div>


<?php require_once "elements/footer.php";
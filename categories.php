
<?php 
require_once "elements/header.php"; 

?>


<?php 
$message = [];
$query = "SELECT * FROM categories";
$count = "SELECT COUNT(id) FROM categories";
$page = 1;
$q = "";
$del = "";
$uri = explode("?", $_SERVER['REQUEST_URI'])[0];

if (!empty($_GET['page'])) {

    if (!(preg_match("(^[0-9]+$)", $page) && (int)$page <= 0)) {
       $page = (int)$_GET['page'];
    }
}

if (!empty($_GET['q'])) {
    $q = $_GET['q'];
    $query = "SELECT * FROM categories WHERE categorie LIKE '%$q%'";
    $count = "SELECT COUNT(id) FROM categories  WHERE categorie LIKE '%$q%'";
}


$categories = pagination($pdo, $page, $count, $query);



if (!empty($_GET['del'])) {
    $del = $_GET['del'];

    $exist = exist($pdo, "SELECT * FROM categories WHERE id = ?", $del);
    
    if (!(preg_match("(^[0-9]+$)", $del) && (int)$del >= 1)):
 

    else:
        if ($exist):
            $delete = delete($pdo, "DELETE FROM categories WHERE id = ? ", $del);
            if ($delete) :
                writeSession("success", "Vous avez supprimer la categorie #" . $del . " avec succès.");
                redirect($uri);
            else:
                writeSession("error", " Vous avons pas pu supprimer la categorie #" . $del);
                redirect($uri);
               
            endif;
        else:
            writeSession("error", "La categorie #$del n'existe pas ");
        endif;
    endif;
}


?>
<div class="container">
    <?php if (hasSession("flash")) : 
    $message = readSession("flash");
    ?>
        <?php if (isset($message['success'])) : ?>

            <div class="message" id="message-alert"><span class="fa fa-check"></span> <?= $message['success'] ?></div>
        <?php endif; ?>
        <?php if (isset($message['error'])) : ?>
        <div class="message" id="message-alert"><span class="fa fa-check"></span> <?= $message['error'] ?></div>
        <?php endif; ?>
    <?php endif;  ?>
    <h1 class="c-title">Categories</h1>
    <div class="group-btn">
        <a href="addCategorie.html" class="link-btn"><span class="fa fa-plus"></span> Ajouter</a>
        <a href="product.html" class="link-btn"><span class="fa fa-table"></span> produit</a>
    </div>
    <div class="group-option">
        <form action="" class="form">
            <div class="group-field">
                <label for="q" class="field-label"> je veux faire une recherche</label>
                <input type="search" name="q" id="q" class="field" placeholder="quelle est le nom de cette categorie ?" value="<?= $q ?>">
            </div>
            <button type="submit" class="form-btn"><span class="fa fa-search"></span> rechercher</button>
        </form>
    </div>
    <!-- listing -->
    <table class="table" id="table-responsive">
        <tr class="tr">
            <th class="th">#</th>
            <th class="th">Nom de la categorie</th>
            <th class="th">Type de categorie</th>
            <th class="th">Date de création</th>
            <th class="th">Action</th>
        </tr>

        <?php foreach ($categories['data'] as $categorie): ?>
        <tr class="tr">
            <td class="td"><?= e($categorie['id'], 12) ?></td>
            <td class="td"><?= e($categorie["categorie"], 12) ?></td>
            <td class="td"><?= e($categorie["type"], 12) ?></td>
            <td class="td"><?= e($categorie["createAt"], 12) ?></td>
            <td class="td">
                <div class="tabs-group">
                    <a href="<?=  "categorieUpdate.php". "?upd=" . $categorie['id'] ?>" class="tab-btn"><span class="fa fa-edit"></span> editer</a>
                    <a href="<?=  $uri . "?del=" . $categorie['id'] ?>" class="tab-btn"><span class="fa fa-trash"></span> supprimer</a>
                </div>
            </td>
        </tr>
        <?php endforeach ?>
        
        
    </table>
    <!-- end listing -->
    <nav class="pagination d-flex">
        <?=   prevPage($categories['pages'], $page, $uri) ?>
        <div class="paginate-items"> <?= linkPaginate($categories['pages'], $page) ?></div>
        <?=   nextPage($categories['pages'], $page, $uri) ?>
    </nav>
</div>

<?php require_once "elements/footer.php"; ?>
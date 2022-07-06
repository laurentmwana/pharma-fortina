
<?php require_once "elements/header.php"; ?>

<div class="container">
    
    <a href="stock.html" class="link-return"><span class="fa fa-arrow-left"></span></a>

    <h1 class="c-title"> Se connecter</h1>
    <form action="#" class="form">
        <div class="group-field">
            <label for="name" class="field-label"> Nom d'utilisateur</label>
            <input type="text" name="name" id="" class="field">
        </div>
        <div class="group-field">
            <label for="name" class="field-label"> Mot de passe </label>
            <input type="text" name="name" id="" class="field">
        </div>
        <div class="form-check">
            <input type="checkbox" name="checkbox" id="name" class="field-check">
            <label for="name" class="check-label"> Je veux rester connecté</label>
        </div>
        
        <button type="submit" class="form-btn"><span class="fa fa-user"></span> Connexion</button>
    </form>
</div>


<?php require_once "elements/footer.php";
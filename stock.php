<?php require_once "elements/header.php"; ?>


    <div class="container">
        <div class="message bg-success" id="message-alert"><span class="fa fa-check"></span>  Vous avez ajouter un  produit dans le stock</div>
        <h1 class="c-title">Stock</h1>

        <div class="group-btn">
            <a href="addStock.html" class="link-btn"><span class="fa fa-plus"></span> Ajouter</a>
            <a href="product.html" class="link-btn"><span class="fa fa-table"></span> produit</a>
        </div>

        <div class="group-option">
            <form action="" class="form">
                <div class="group-field">
                    <label for="q" class="field-label"> je veux faire une recherche</label>
                    <input type="search" name="q" id="q" class="field" placeholder="quel est le nom de ce produit ?">
                </div>
                <button type="submit" class="form-btn"><span class="fa fa-search"></span> rechercher</button>
            </form>
        </div>
        <!-- listing -->
        <table class="table" id="table-responsive">
            <tr class="tr">
                <th class="th">Nom du produit</th>
                <th class="th">Categorie du produit</th>
                <th class="th">Nombre de carton</th>
                <th class="th">Unité</th>
                <th class="th">Prix unitaire</th>
                <th class="th">Action</th>
            </tr>
            <tr class="tr">
                <td class="td">Docteur col</td>
                <td class="td">Douleur</td>
                <td class="td">15</td>
                <td class="td">100mg</td>
                <td class="td">100 Fc</td>
                <td class="td">
                    <div class="tabs-group">
                        <a href="" class="tab-btn"><span class="fa fa-edit"></span> editer</a>
                        <a href="" class="tab-btn"><span class="fa fa-info"></span> info</a>
                        <a href="" class="tab-btn"><span class="fa fa-trash"></span> supprimer</a>
                    </div>
                </td>
            </tr>
            <tr class="tr">
                <td class="td">Docteur col</td>
                <td class="td">Douleur</td>
                <td class="td">15</td>
                <td class="td">100mg</td>
                <td class="td">100 Fc</td>
                <td class="td">
                    <div class="tabs-group">
                        <a href="" class="tab-btn"><span class="fa fa-edit"></span> editer</a>
                        <a href="" class="tab-btn"><span class="fa fa-info"></span> info</a>
                        <a href="" class="tab-btn"><span class="fa fa-trash"></span> supprimer</a>
                    </div>
                </td>
            </tr>
            <tr class="tr">
                <td class="td">Docteur col</td>
                <td class="td">Douleur</td>
                <td class="td">15</td>
                <td class="td">100mg</td>
                <td class="td">100 Fc</td>
                <td class="td">
                    <div class="tabs-group">
                        <a href="" class="tab-btn"><span class="fa fa-edit"></span> editer</a>
                        <a href="" class="tab-btn"><span class="fa fa-info"></span> info</a>
                        <a href="" class="tab-btn"><span class="fa fa-trash"></span> supprimer</a>
                    </div>
                </td>
            </tr>
            <tr class="tr">
                <td class="td">Docteur col</td>
                <td class="td">Douleur</td>
                <td class="td">15</td>
                <td class="td">100mg</td>
                <td class="td">100 Fc</td>
                <td class="td">
                    <div class="tabs-group">
                        <a href="" class="tab-btn"><span class="fa fa-edit"></span> editer</a>
                        <a href="" class="tab-btn"><span class="fa fa-info"></span> info</a>
                        <a href="" class="tab-btn"><span class="fa fa-trash"></span> supprimer</a>
                    </div>
                </td>
            </tr>
            <tr class="tr">
                <td class="td">Docteur col</td>
                <td class="td">Douleur</td>
                <td class="td">15</td>
                <td class="td">100mg</td>
                <td class="td">100 Fc</td>
                <td class="td">
                    <div class="tabs-group">
                        <a href="" class="tab-btn"><span class="fa fa-edit"></span> editer</a>
                        <a href="" class="tab-btn"><span class="fa fa-info"></span> info</a>
                        <a href="" class="tab-btn"><span class="fa fa-trash"></span> supprimer</a>
                    </div>
                </td>
            </tr>
            <tr class="tr">
                <td class="td">Docteur col</td>
                <td class="td">Douleur</td>
                <td class="td">15</td>
                <td class="td">100mg</td>
                <td class="td">100 Fc</td>
                <td class="td">
                    <div class="tabs-group">
                        <a href="" class="tab-btn"><span class="fa fa-edit"></span> editer</a>
                        <a href="" class="tab-btn"><span class="fa fa-info"></span> info</a>
                        <a href="" class="tab-btn"><span class="fa fa-trash"></span> supprimer</a>
                    </div>
                </td>
            </tr>
            <tr class="tr">
                <td class="td">Docteur col</td>
                <td class="td">Douleur</td>
                <td class="td">15</td>
                <td class="td">100mg</td>
                <td class="td">100 Fc</td>
                <td class="td">
                    <div class="tabs-group">
                        <a href="" class="tab-btn"><span class="fa fa-edit"></span> editer</a>
                        <a href="" class="tab-btn"><span class="fa fa-info"></span> info</a>
                        <a href="" class="tab-btn"><span class="fa fa-trash"></span> supprimer</a>
                    </div>
                </td>
            </tr>
        </table>
        <!-- end listing -->
        <nav class="pagination d-flex">
            <a href="#" class="link-paginate"><span class="fa fa-arrow-left"></span></a>
            <div class="paginate-items">
                <a href="" class="items-link active">1</a>
                <a href="" class="items-link">2</a>
                <a href="" class="items-link">3</a>
                <a href="" class="items-link">4</a>
                <a href="" class="items-link">5</a>
            </div>
            <a href="#" class="link-paginate"> <span class="fa fa-arrow-right"></span></a>
        </nav>


    </div>
  

<?php require_once "elements/footer.php";  ?>
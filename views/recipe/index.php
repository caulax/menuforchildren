<?php include ROOT . '/views/layouts/header.php'; ?>

<div>
    <a href="/recipe/add"><button type="button" class="btn btn-primary btn-add">Добавить блюдо</button></a>
</div>
<hr>
<?
    foreach($recipeList as $rL):?>
        <div class="recipe_card col-xs-6 col-sm-4 col-md-3">
            <a href="/recipe/<?=$rL['id']?>">
                <img class="recipe_img" src="/template/images/<?=$rL['image']?>" alt="">
                <h3 ><?=$rL['name']?></h3>
            </a>
            <p class="recipe_description"><?=$rL['description']?></p>
        </div>

    <? endforeach; 
?>

<?php include ROOT . '/views/layouts/footer.php'; ?>

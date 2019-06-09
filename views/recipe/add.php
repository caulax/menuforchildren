<?php include ROOT . '/views/layouts/header.php'; ?>
<h3 class="add_header">Добавить новое блюдо</h3>
<div class="col-md-6">

    <form action="" method="post" class="create" enctype="multipart/form-data">
        <input type="text" class="form-control" name="name" placeholder="Название" value="">
        <input type="text" class="form-control" name="description" placeholder="Описание" value="">
        <input type="file" class="form-control" accept="image/*" name="image">
        <h4 class="ing">Ингредиенты</h4>
        <? foreach($allIngredients as $iL): ?>
        <!-- <br> -->
            <input type="checkbox" name="ingredient_choice" value="<?=$iL['id']?>"> <?=$iL['name']?>,
            <?=$iL['measure']?>
            <input type="text" class="form-control" name="name" placeholder="Количество" value="">
        <? endforeach; ?>
        <input type="submit" class="form-control" name="submit" class="" value="Добавить">
    </form>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

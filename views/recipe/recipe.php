<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="col-md-6">
    <h3 class="title_one_recipe"><?=$recipe['name']?></h3>
    <img class="recipe_img" src="/template/images/<?=$recipe['image']?>" alt="">
    <p class="recipe_description"><?=$recipe['description']?></p>   
</div>
<div class="col-md-6">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Название</th>
        <th>Количество</th>
        <th>На складе</th>
      </tr>
    </thead>
    <tbody>
    <?
        foreach($recipeIngredient as $rI):?>
        <tr>
            <td class="col-md-6"><?=$rI['name']?></td>
            <td class="col-md-6 count_for_recipe"><?=$rI['count']?> <?=$rI['measure']?> 
            <?
            if ($rI['count'] > $rI['stock_count']): ?>
                <span class="glyphicon glyphicon-remove"></span>
            <? else: ?>
                <span class="glyphicon glyphicon-ok"></span>
            <? endif ?>            
            </td>
            <td class="col-md-6 count_at_stock"><?=$rI['stock_count']?> <?=$rI['measure']?></td>
        </tr>
        <? endforeach
    ?>
    </tbody>
</table>
<form class="form-inline" role="form">
    <div class="form-group">
        <span>Кол порций:</span>
        <input class="form-control" id="input_count_person" type="number" name="t" value="35" min="0" max="40" step="1">
        <button type="button" class="count_value btn btn-primary">Рассчитать</button>
        <a href="#" class="cook_action"><button type="button" class="btn btn-success">Приготовить</button></a>
    </div>
    <div class="form-group">
        <a href="/recipe/delete/<?=$recipe['ID']?>" class="count_action"><button type="button" class="btn btn-danger">Удалить</button></a>
    </div>
</form>

<?php include ROOT . '/views/layouts/footer.php'; ?>

<!-- $("#input_count_person").val()
$(".count_action").attr("href", "/recipe/1/count/30") -->
<?php include ROOT . '/views/layouts/header.php'; ?>
<div class="add">
    <a href="/stock/add"><button type="button" class="btn btn-primary">Добавить ингредиенты на склад</button></a>
</div>
<div class="col-md-6">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Название</th>
            <th>Количество</th>
            <th>Изменить</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
            <? foreach($ingredientList as $iL): ?>
                <tr>
                    <td class="col-md-6"><?=$iL['name']?></td>
                    <td class="col-md-6"><?=$iL['count']?> <?=$iL['measure']?></td>
                    <td class="col-md-6"><a href="/stock/update/<?=$iL['id']?>"><button type="button" class="btn btn-primary">Изменить</button></a></td>
                    <td class="col-md-6"><a href="/stock/delete/<?=$iL['id']?>"><button type="button" class="btn btn-danger">Удалить</button></a></td>
                </tr>
            <? endforeach; ?>
        </tbody>
    </table>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>

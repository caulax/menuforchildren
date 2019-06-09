<?php include ROOT . '/views/layouts/header.php'; ?>
<div class="col-md-6">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Название</th>
            <th>Количество</th>
            <th>Мера измерения</th>
            <th>Добавить</th>
        </tr>
        </thead>
        <tbody>
            <? foreach($ingredientList as $iL): ?>
                <tr>
                    <form action="" method="post" class="create navbar-form navbar-left" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id" placeholder="" value="<?=$iL['id']?>">
                        <td class="col-md-6"><?=$iL['name']?></td>
                        <td class="col-md-6"><input type="text" class="form-control" name="count" placeholder="" value=""></td>
                        <td class="col-md-6"><?=$iL['measure']?></td>
                        <td class="col-md-6"><input type="submit" class="form-control" name="submit" class="btn btn-default" value="Добавить"></td>
                    </form>
                </tr>
            <? endforeach; ?>
        </tbody>
    </table>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>

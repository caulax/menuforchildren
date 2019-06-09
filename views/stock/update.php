<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="col-md-6">
    <form action="" method="post" class="create navbar-form navbar-left" enctype="multipart/form-data">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Количество</th>
                    <th>Мера измерения</th>
                    <th>Обновить</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <input type="hidden" class="form-control" name="id" placeholder="" value="<?=$ingredient['id']?>">
                        <td class="col-md-6"><?=$ingredient['name']?></td>
                        <td class="col-md-6"><input type="text" class="form-control" name="count" placeholder="" value="<?=$ingredient['count']?>"></td>
                        <td class="col-md-6"><?=$ingredient['measure']?></td>
                        <td class="col-md-6"><input type="submit" class="form-control" name="submit" class="btn btn-default" value="Обновить"></td>
                    </tr>
                
            </tbody>
        </table>
    </form>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>

<?php include ROOT . '/views/layouts/header.php'; ?>

<form action="" method="post" class="create navbar-form navbar-left" enctype="multipart/form-data">
    
    <div class="form-group">
        <p>Название ингридиента</p>
        <input type="text" class="form-control" name="name" placeholder="" value="">

        <p>Мера измерения</p>
        <input type="text" class="form-control" name="measure" placeholder="" value="">
    </div>

    <div class="submit_btn">
        <span class="input-group-btn">
            <input type="submit" class="form-control" name="submit" class="btn btn-default" value="Добавить">
        </span>
    </div>
    
</form>

<?php include ROOT . '/views/layouts/footer.php'; ?>

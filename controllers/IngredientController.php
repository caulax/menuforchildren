<?php

class IngredientController{

	public function actionView(){

		$ingredientList = array();
		$ingredientList = Stock::getIngredientList();

		include_once(ROOT . '/views/ingredient/view.php');
    }
    
    public function actionAdd() {

        if (isset($_POST['submit'])) {

            $options['name'] = $_POST['name'];
            $options['measure'] = $_POST['measure'];

            $id = Stock::createIngredient($options);
                // if ($id) {
                //     if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                //         move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                //     }
                // };
            header("Location: /ingredients");
        }
        require_once(ROOT . '/views/ingredient/create.php');
    }
    
    public function actionDelete($id) {
        Stock::deleteIngredient($id);
        header("Location: /ingredients");
    }

}
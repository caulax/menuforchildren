<?php

class StockController{

	public function actionView(){

		$ingredientList = array();
		$ingredientList = Stock::getStockIngredientList();

		include_once(ROOT . '/views/stock/view.php');

		return $ingredientList;
	}
	
	public function actionAdd(){
        if (isset($_POST['submit'])) {

            $id = $_POST['id'];
			$count = $_POST['count'];

			$id = Stock::addIngredientToStock($id, $count);
			
            header("Location: /stock/add");
		}
		else {
			$ingredientList = array();
			$ingredientList = Stock::getNonStockIngredientList();
		}
		include_once(ROOT . '/views/stock/add.php');
	}

	public function actionUpdate($id) {

        if (isset($_POST['submit'])) {

			$count = $_POST['count'];

			Stock::addIngredientToStock($id, $count);
			
            header("Location: /stocks");
		}
		else {
			$ingredient = array();
			$ingredient = Stock::getIngredient($id);
			include_once(ROOT . '/views/stock/update.php');
		}
		
	}

	public function actionDelete($id) {

		$ingredientList = array();
		$ingredientList = Stock::addIngredientToStock($id, NULL);
		
		header("Location: /stocks");
	}
}

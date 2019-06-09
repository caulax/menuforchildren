<?php

class RecipeController{

	public function actionIndex(){
		$recipeList = array();
		$recipeList = Recipe::getRecipeList();

		require_once(ROOT . '/views/recipe/index.php');
		return true;
	}

	public function actionView($id) {
		$recipeIngredient = RecipeIngredient::getListIngredientByRecipe($id);
		$recipe = Recipe::getRecipeById($id);
		require_once(ROOT . '/views/recipe/recipe.php');
	}

	public function actionRedirect() {
		header('Location: /recipes');
	}

	public function actionAdd() {
		$allIngredients = Stock::getIngredientList();
		
		require_once(ROOT . '/views/recipe/add.php');
	}
	
	public function actionDelete($id) {
		Recipe::deleteRecipeById($id);
		header('Location: /recipes');

	}

}
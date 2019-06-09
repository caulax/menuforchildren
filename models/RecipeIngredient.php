<?php

class RecipeIngredient {

	public static function getListIngredientByRecipe($recipe_id){

		$db = Db::getConnetion();

		$ingredientList = array();

		$result = $db->prepare('select recipe_ingredient.count as count, stock.ID as id, stock.name as name, stock.measure as measure, stock.count as stock_count from recipe_ingredient join stock on stock.ID = recipe_ingredient.ID_ingredient where ID_recipe = :recipe_id');
		
		$result->bindParam(':recipe_id', $recipe_id, PDO::PARAM_INT);
		$result->execute();

		$i = 0;
		while($row = $result->fetch()){
			$ingredientList[$i]['id'] = $row['id'];
			$ingredientList[$i]['name'] = $row['name'];
			$ingredientList[$i]['count'] = $row['count'];
			$ingredientList[$i]['measure'] = $row['measure'];
			$ingredientList[$i]['stock_count'] = $row['stock_count'];
			$i++;
		}
		return $ingredientList;
	}

	public static function getNewsItemById($id) {

		$id = intval($id);

		if($id){
			$db = Db::getConnetion();

			$result = $db->query('SELECT * FROM pizza WHERE id=' . $id);

			$result->setFetchMode(PDO::FETCH_ASSOC);

			$newsItem = $result->fetch();

			return $newsItem;

		}
	}
}
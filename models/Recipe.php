<?php

class Recipe {

	public static function getRecipeList() {
		$db = Db::getConnetion();

		$recipeList = array();

		$result = $db -> query('SELECT * FROM recipe');

		$i = 1;

		while($row = $result->fetch()) {
			$recipeList[$i]['id'] = $row['ID'];
			$recipeList[$i]['name'] = $row['name'];
			$recipeList[$i]['description'] = $row['description'];
			$recipeList[$i]['image'] = $row['image'];
			$i++;
		}
		return $recipeList;
	}
	
	public static function getRecipeById($id) {
		$db = Db::getConnetion();

		$recipeList = array();

		$result = $db -> prepare('SELECT * FROM recipe where id = :id');
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->execute();

		return $result->fetch();
	}
	
	public static function deleteRecipeById($id) {
		$db = Db::getConnetion();

		$recipeList = array();

		$result = $db -> prepare('DELETE from recipe where id = :id');
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->execute();

		$result = $db -> prepare('DELETE from recipe_ingredient where ID_recipe = :id');
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->execute();

		return TRUE;

		// return $result->fetch();
	}

}

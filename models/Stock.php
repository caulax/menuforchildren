<?php

class Stock {

	public static function getIngredientList() {

		$db = Db::getConnetion();

		$productList = array();

		$result = $db -> query('SELECT * FROM stock');

		$i = 0;
		while($row = $result -> fetch()){
			$productList[$i]['id'] = $row['ID'];
			$productList[$i]['name'] = $row['name'];
			$productList[$i]['measure'] = $row['measure'];
			$productList[$i]['count'] = $row['count'];
			$i++;
		}
		return $productList;
	}

	public static function getIngredient($id) {

		$db = Db::getConnetion();

		$productList = array();

		$sql = 'SELECT * FROM stock WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

		$result->setFetchMode(PDO::FETCH_ASSOC);
		
		$result->execute();
		
        return $result->fetch();
	}

	public static function getStockIngredientList() {

		$db = Db::getConnetion();

		$productList = array();

		$result = $db -> query('SELECT * FROM stock where stock.count is not NULL');

		$i = 0;
		while($row = $result -> fetch()){
			$productList[$i]['id'] = $row['ID'];
			$productList[$i]['name'] = $row['name'];
			$productList[$i]['measure'] = $row['measure'];
			$productList[$i]['count'] = $row['count'];
			$i++;
		}
		return $productList;
	}

	public static function getNonStockIngredientList() {

		$db = Db::getConnetion();

		$productList = array();

		$result = $db -> query('SELECT * FROM stock where stock.count is NULL or stock.count = 0');

		$i = 0;
		while($row = $result -> fetch()){
			$productList[$i]['id'] = $row['ID'];
			$productList[$i]['name'] = $row['name'];
			$productList[$i]['measure'] = $row['measure'];
			$productList[$i]['count'] = $row['count'];
			$i++;
		}
		return $productList;
	}

	public static function createIngredient($options) {
		$db = Db::getConnetion();
	
		$sql = 'INSERT INTO stock '
				. '(name, measure)'
				. 'VALUES '
				. '(:name, :measure)';

		$result = $db->prepare($sql);
		$result->bindParam(':name', $options['name'], PDO::PARAM_STR);
		$result->bindParam(':measure', $options['measure'], PDO::PARAM_STR);

		if ($result->execute()) {
			return $db->lastInsertId();
		}
		return 0;
	}

	public static function addIngredientToStock($id, $count) {
		
		$db = Db::getConnetion();
	
		$sql = 'UPDATE stock SET stock.count = :count_ WHERE id = :id';

		$result = $db->prepare($sql);
		$result->bindParam(':count_', $count, PDO::PARAM_INT);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->execute();
		return TRUE;
	}
	
	public static function deleteIngredient($id) {
		$db = Db::getConnetion();
	
		$sql = 'DELETE from stock where id = :id';

		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_STR);
		$result->execute();

		$sql = 'DELETE from recipe_ingredient where ID_ingredient = :id';

		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_STR);
		$result->execute();

		return TRUE;
	}


}
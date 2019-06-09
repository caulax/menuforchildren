<?php

return array(

	'recipe/([0-9]+)' => 'recipe/view/$1',
	'recipe/add' => 'recipe/add',
	'recipe/delete/([0-9]+)' => 'recipe/delete/$1',
	'recipes' => 'recipe/index',

	'ingredient/delete/([0-9]+)'=> 'ingredient/delete/$1',
	'ingredient/add'=> 'ingredient/add',
	'ingredients'=> 'ingredient/view',
	
	'stock/add' => 'stock/add',
	'stock/update/([0-9]+)' => 'stock/update/$1',
	'stock/delete/([0-9]+)' => 'stock/delete/$1',
	'stocks' => 'stock/view',

	
	'' => 'recipe/redirect'

);

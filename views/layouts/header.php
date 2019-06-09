<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="ru" xml:lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Aleš Trunda alestrunda.cz">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/template/styles/style.css" type="text/css">

    <link rel="stylesheet" href="/template/font-awesome/font-awesome/css/font-awesome.min.css" type="text/css">

    <link href='http://fonts.googleapis.com/css?family=Vollkorn:400,700,400italic,700italic%7CPlayfair+Display:400,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="/template/bootstrap/css/bootstrap.min.css" type="text/css">
    
    <title>Меню для детских садов</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand title-site" href="/">Меню для детских садов</a>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                
                <li class="
                <? if (strpos($_SERVER['REQUEST_URI'], 'recipe')) {
                    echo "active";
                } ?>
                "><a href="/">Блюда</a></li>
                <li class = "
                <? if (strpos($_SERVER['REQUEST_URI'], 'stock')) {
                    echo "active";
                } ?>
                "
                ><a href="/stocks">Склад</a></li>
                <li class="
                <? 
                if (strpos($_SERVER['REQUEST_URI'], 'ingredient')) {
                    echo "active";
                }
                ?>"><a href="/ingredients">Ингредиенты</a></li>
            </ul>
            </div>
        </div>
        </nav>
    </header>

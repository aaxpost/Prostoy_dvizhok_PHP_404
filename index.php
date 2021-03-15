<?php
	//45.11.1
	//index.php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	
	//Получаем название страницы из гет запроса и формируем путь
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 'index';	
	}
		
		
	$path = "pages/$page.php";
	if (file_exists($path)) {
		$content = file_get_contents($path);
	} else {
		$content = file_get_contents("pages/404.php");
		//Сообщаем поисковику, что страница не найдена
		header("HTTP/1.0 404 Not Found");
	}
	
	//Регулярка для поиска тайтла
	$reg = '#\{\{title:(.*?)\}\}#';
	//Ищем значение в контенте и помещаем в массив
	if (preg_match($reg, $content, $match)) {
			//Забираем тайтл из кармана
			$title = $match[1];
			//Обрезаем пробелы, и вырезаем тайтл
			$content = trim(preg_replace($reg, '', $content));
			//Или выводим ошибку
		} else {
			//$title = '';
			echo '<font color="red">title not found</font>';
		}
	
	//Тоже для дискрипшина
	$reg = '#\{\{desc:(.*?)\}\}#';
	if (preg_match($reg, $content, $match)) {
			$desc = $match[1];
			$content = trim(preg_replace($reg, '', $content));
		} else {
			echo '<font color="red">desc not found</font>';
		}	
			
	include 'layout.php';


	


	

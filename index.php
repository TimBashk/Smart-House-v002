<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="">
    <title>Test site</title>    
    <link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/functions.js"></script>
</head>
<body>
 <?
 include_once('Classes/Score/Score.php');
 ?>
 <h1>Тестовые задания</h1>
</br>

<?
$score = new Score();



$score->addNewAccountComposition("Тетрадь общая, 48 листов",18,20);
$score->addNewAccountComposition("Тетрадь простая, 12 листов",4,45);
$score->addNewAccountComposition("Тетрадь общая, 96 листов",45,10);

echo $score->getAccountComposition();
echo "</br>";
?>
</body>
</html>
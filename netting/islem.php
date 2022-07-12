<?php 
session_start();
require_once 'baglan.php';

echo "<pre>";
print_r($_POST);
echo "</pre>";


if (isset($_POST['income_add'])) {
	$sql_income=$db->prepare("INSERT INTO income SET 
		income_price=:income_price,
		income_category=:income_category,
		income_date=:income_date
		");

	$sql_insert=$sql_income->execute(
		[
			'income_price' => $_POST['income_price'],
			'income_category' => $_POST['income_category'],
			'income_date' => $_POST['income_date']
		]	
	);

	if ($sql_insert) {
		header("Location: ../income-add.php?durum=ok");
		exit();
	}else {
		header("Location: ../income-add.php?durum=no");
		exit();
	}
}


if (isset($_POST['expenses_add'])) {
	$sql_expenses=$db->prepare("INSERT INTO expenses SET 
		expenses_price=:expenses_price,
		expenses_category=:expenses_category,
		expenses_date=:expenses_date
		");

	$sql_insert=$sql_expenses->execute(
		[
			'expenses_price' => $_POST['expenses_price'],
			'expenses_category' => $_POST['expenses_category'],
			'expenses_date' => $_POST['expenses_date']
		]	
	);

	if ($sql_insert) {
		header("Location: ../expenses-add.php?durum=ok");
		exit();
	}else {
		header("Location: ../expenses-add.php?durum=no");
		exit();
	}

}





	//SESSİON İLE GÖNDERME İŞLEMİ YAPMAK İSTERSEK!!!

	// if ($sql_insert) {
	// 	$_SESSION['sql_income_insert']="ok";
	// 	header("Location: ../income-add.php");
	// 	exit();
	// }else {
	// 	$_SESSION['sql_income_insert']="no";
	// 	header("Location: ../income-add.php");
	// 	exit();
	// }

?>
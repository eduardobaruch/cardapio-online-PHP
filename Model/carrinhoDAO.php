<?php

function getProducts($pdo)
{
	$sql = "SELECT *  FROM itens";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductsByIds($pdo, $ids)
{
	$sql = "SELECT * FROM itens WHERE id_item IN (" . $ids . ")";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

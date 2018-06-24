<?php
if (!defined('FLUX_ROOT')) exit;

$this->loginRequired();

if ($server->cart->isEmpty()) {
	$session->setMessageData('你的购物车没有物品。');
	$this->redirect($this->url('purchase'));
}

$title = 'Shopping Cart';

require_once 'Flux/ItemShop.php';
$items = $server->cart->getCartItems();
?>

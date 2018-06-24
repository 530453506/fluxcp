<?php
if (!defined('FLUX_ROOT')) exit;

$this->loginRequired();

require_once 'Flux/ItemShop.php';

if ($server->cart && $server->cart->clear()) {
	$session->setMessageData("购物车清空完毕。");
}
else {
	$session->setMessageData("无法清空购物车，本来就是空的。");
}

$this->redirect($this->url('purchase'));
?>

<?php
require_once "Buyer.php";
require_once "guns.php";
require_once "Store.php";
require_once "GunStoreView.php";

$guns = new GunStore([
    new Guns('Glock', 560, "LIGHT"),
    new Guns('AK-47', 2700, "HEAVY"),
    new Guns('Famas', 1700, "HEAVY"),
]);

$gun = new GunStoreView($guns);
echo $gun->displayGuns();
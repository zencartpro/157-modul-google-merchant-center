<?php
// add backorder to products_availability
$sql = "ALTER TABLE ".TABLE_PRODUCTS." MODIFY COLUMN products_availability ENUM( 'in stock', 'out of stock', 'preorder', 'backorder') NOT NULL DEFAULT 'in stock'";
$db->Execute($sql);
// add products_availability_date
$sql2 = "ALTER TABLE ".TABLE_PRODUCTS." ADD products_availability_date DATETIME NULL DEFAULT NULL AFTER products_availability";
$db->Execute($sql2);
// update version number
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '3.8.0' WHERE configuration_key = 'GMCDE_MODUL_VERSION' LIMIT 1;");
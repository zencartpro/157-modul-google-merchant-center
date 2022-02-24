<?php
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '3.6.2' WHERE configuration_key = 'GMCDE_MODUL_VERSION' LIMIT 1;");
<?php
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '3.5.1' WHERE configuration_key = 'GMCDE_MODUL_VERSION' LIMIT 1;");
<?php
$db->Execute(" SELECT @gid:=configuration_group_id
FROM ".TABLE_CONFIGURATION_GROUP."
WHERE configuration_group_title= 'Google Merchant Center Deutschland'
LIMIT 1;");
$db->Execute("INSERT IGNORE INTO ".TABLE_CONFIGURATION." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, use_function, set_function) VALUES
('Sprache aufnehmen', 'GOOGLE_MCDE_LANGUAGE_DISPLAY', 'false', 'Soll die Sprache ins Produktfeed übernommen werden? Falls ja, wird an die Artikellinks im Feed das Kürzel für die Sprache angehängt.<br/>Nur sinnvoll falls es im Shop verschiedene Sprachen gibt.', @gid, 14, NOW(), NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),')");
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '3.6.0' WHERE configuration_key = 'GMCDE_MODUL_VERSION' LIMIT 1;");
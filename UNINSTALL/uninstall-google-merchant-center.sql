##################################################################################
# UNINSTALL Google Merchant Center Deutschland 3.7.0 - 2022-02-24 - webchills
# UNINSTALL - NUR AUSFÜHREN WENN SIE DAS MODUL KOMPLETT ENTFERNEN WOLLEN!
##################################################################################

SET @gid=0;
SELECT @gid:=configuration_group_id
FROM configuration_group
WHERE configuration_group_title = 'Google Merchant Center Deutschland' LIMIT 1;
DELETE FROM configuration WHERE configuration_group_id = @gid;
DELETE FROM configuration_group WHERE configuration_group_id = @gid;
DELETE FROM admin_pages WHERE page_key='configProdGoogleMCDE';
DELETE FROM admin_pages WHERE page_key='googlemcde';
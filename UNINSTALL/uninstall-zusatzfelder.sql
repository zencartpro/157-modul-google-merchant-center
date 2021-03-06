##################################################################################
# Zusatzfelder für Google Merchant Center Deutschland - 2022-04-30 - webchills
# UNINSTALL - NUR AUSFÜHREN WENN SIE DIE ZUSATZFELDER ENTFERNEN WOLLEN!
##################################################################################

ALTER TABLE products DROP products_ean;
ALTER TABLE products DROP products_isbn;
ALTER TABLE products DROP products_brand;
ALTER TABLE products DROP products_condition;
ALTER TABLE products DROP products_availability;
ALTER TABLE products DROP products_taxonomy;
ALTER TABLE products DROP products_availability_date;

DELETE FROM product_type_layout WHERE configuration_key = 'SHOW_PRODUCT_INFO_EAN';
DELETE FROM product_type_layout WHERE configuration_key = 'SHOW_PRODUCT_INFO_ISBN';
DELETE FROM product_type_layout WHERE configuration_key = 'SHOW_PRODUCT_INFO_BRAND';

DELETE FROM product_type_layout_language WHERE configuration_key = 'SHOW_PRODUCT_INFO_EAN';
DELETE FROM product_type_layout_language WHERE configuration_key = 'SHOW_PRODUCT_INFO_ISBN';
DELETE FROM product_type_layout_language WHERE configuration_key = 'SHOW_PRODUCT_INFO_BRAND';
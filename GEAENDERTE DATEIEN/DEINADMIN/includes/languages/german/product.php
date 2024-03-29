<?php
/** 
 * Zen Cart German Specific (158 code in 157 / zencartpro adaptations)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: product.php for GMCDE 2023-11-03 13:01:04Z webchills $
 */

define('TEXT_PRODUCTS_STATUS', 'Artikelstatus:');
define('TEXT_PRODUCTS_VIRTUAL', 'Virtueller Artikel:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Immer versandkostenfrei:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Mengeneingabefeld anzeigen:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Erscheinungsdatum:');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Ja, keine Versandadresse abfragen');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'Nein, Versandadresse ist notwendig');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Ja, immer versandkostenfrei');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Nein, normale Versandkosten gelten');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', 'Sonderangebote, Artikel/Download benötigt eine Lieferadresse');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Ja, zeige Mengeneingabefeld für Stückzahl');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Nein, zeige kein Mengeneingabefeld für Stückzahl');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT', 'Warnung: Mengeneingabefeld wird nicht gezeigt, Menge 1 ist voreingestellt');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW', 'Warnung: Mengeneingabefeld wird nicht angezeigt, Menge 1 wird voreingestellt');

define('TEXT_PRODUCTS_MANUFACTURER', 'Artikelhersteller:');
define('TEXT_PRODUCTS_NAME', 'Artikelname:');
define('TEXT_PRODUCTS_MERKMALE', 'Merkmale für Buttonlösung:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Artikelbeschreibung:');
define('TEXT_PRODUCTS_QUANTITY', 'Lagerbestand:');

define('TEXT_PRODUCTS_IMAGE', 'Artikelbild:');
define('TEXT_EDIT_PRODUCTS_IMAGE', 'Artikelbild bearbeiten:');

define('TEXT_PRODUCTS_URL', 'Herstellerlink:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(Ohne führendes http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Nettopreis:');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Bruttopreis:');
define('TEXT_PRODUCTS_WEIGHT', 'Versandgewicht:');
define('TEXT_PRODUCT_IS_FREE', 'Artikel ist kostenlos:');
define('TEXT_PRODUCTS_IS_FREE_PREVIEW', '*Artikel ist als KOSTENLOS markiert');
define('TEXT_PRODUCTS_IS_FREE_EDIT', '*Artikel ist als KOSTENLOS markiert');

define('TEXT_PRODUCT_IS_CALL', 'Artikel ist für Preis anrufen:');
define('TEXT_PRODUCTS_IS_CALL_PREVIEW', '*Artikel ist als FÜR PREIS ANRUFEN markiert');
define('TEXT_PRODUCTS_IS_CALL_EDIT', '*Artikel ist als FÜR PREIS ANRUFEN markiert');

define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES', 'Artikelpreis durch Attribute festgelegt:');
define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW', '*Der angezeigte Preis enthält den niedrigsten Gruppenattributspreis plus dem Grundpreis');
define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT', '*Der angezeigte Preis enthält den niedrigsten Gruppenattributspreis plus dem Grundpreis');

define('TEXT_PRODUCTS_TAX_CLASS', 'Steuerklasse:');

define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL', 'Artikel Mindestabnahmemenge:');
define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL', 'Artikel Einheiten:');
define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL', 'Artikel Maximalabnahmemenge:');
define('TEXT_PRODUCTS_QTY_MIN_UNITS_PREVIEW', 'Warnung: Minimum ist weniger als Einheiten');
define('TEXT_PRODUCTS_QTY_MIN_UNITS_MISMATCH_PREVIEW', 'Warnung: Minimum ist kein Vielfaches der Einheiten');

define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT', '0 = Unlimitiert, 1 = kein Mengeneingabefeld');

define('TEXT_PRODUCTS_MIXED', 'Artikel Mindestabnahme/Anzahl Mix:');

define('TEXT_PRODUCTS_SORT_ORDER', 'Sortierung:');

define('TEXT_PRODUCT_MORE_INFORMATION', 'Für weitere Informationen besuchen Sie bitte diese <a href="http://%s" target="blank">Webseite</a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Dieser Artikel wurde am %s hinzugefügt.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Artikel wird ab %s wieder angeboten.');



define('TEXT_META_TAG_TITLE_INCLUDES', '<strong>Wählen Sie aus, welche Informationen die Metatags des Artikels enthalten sollen:</strong>');
define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS', '<strong>Artikelname:</strong>');
define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS', '<strong>Titel:</strong>');
define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS', '<strong>Artikelnummer:</strong>');
define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS', '<strong>Preis:</strong>');
define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS', '<strong>Titelüberschrift:</strong>');
define('TEXT_META_TAGS_TITLE', '<strong>Meta Tag Titel:</strong>');
define('TEXT_META_TAGS_KEYWORDS', '<strong>Meta Tag Schlüsselwörter:</strong>');
define('TEXT_META_TAGS_DESCRIPTION', '<strong>Meta Tag Beschreibung:</strong>');
define('TEXT_META_EXCLUDED', '<span class="alert">AUSGESCHLOSSEN</span>');
define('TEXT_TITLE_PLUS_TAGLINE', 'Store Title+Tagline'); // this refers to whatever rules the storeowner has built into customizing their catalog /includes/modules/meta_tags.php and its lang file.

define('TEXT_PRODUCTS_PRICE_INFO', 'Preis:');
define('WARNING_PRODUCT_DOES_NOT_EXIST' , 'Warnung: Artikel ID#%u kann nicht bearbeitet werden, sie existiert nicht.');
define('TEXT_ADDITIONAL_FIELDS_MERCHANT_CENTER', 'Zusatzfelder für Google Merchant Center - Verfügbarkeitsdatum nur ausfüllen, wenn Verfügbarkeit vorbestellt oder nachbestellt!');
define('TEXT_ADDITIONAL_FIELDS_MERCHANT_CENTER_INFO', 'Nur ausfüllen, wenn Sie das Google Merchant Center Modul nutzen');
define('TEXT_PRODUCTS_TAXONOMY', 'Google Produktkategorie:');
define('TEXT_PRODUCTS_EAN', 'EAN (13stellig):');
define('TEXT_PRODUCTS_ISBN', 'ISBN (13stellig oder 10stellig):');
define('TEXT_PRODUCTS_CONDITION', 'Zustand:');
define('TEXT_PRODUCTS_AVAILABILITY', 'Verfügbarkeit:');
define('TEXT_PRODUCTS_BRAND', 'Marke (nur falls anders als Hersteller):');
define('TEXT_PRODUCTS_AVAILABILITY_DATE', 'Verfügbarkeitsdatum:');
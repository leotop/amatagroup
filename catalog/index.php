<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$filterView = (COption::GetOptionString("main", "wizard_template_id", "eshop_adapt_horizontal", SITE_ID) == "eshop_adapt_vertical" ? "HORIZONTAL" : "VERTICAL");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"catalog", 
	array(
		"IBLOCK_TYPE" => "1c_catalog",
		"IBLOCK_ID" => "5",
		"TEMPLATE_THEME" => "site",
		"HIDE_NOT_AVAILABLE" => "Y",
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/catalog/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "Y",
		"ADD_SECTION_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"SET_STATUS_404" => "Y",
		"DETAIL_DISPLAY_NAME" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PRICE_CODE" => array(
		),
		"FILTER_OFFERS_FIELD_CODE" => array(
			0 => "XML_ID",
			1 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"USE_REVIEW" => "N",
		"MESSAGES_PER_PAGE" => "10",
		"USE_CAPTCHA" => "Y",
		"REVIEW_AJAX_POST" => "Y",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"FORUM_ID" => "1",
		"URL_TEMPLATES_READ" => "",
		"SHOW_LINK_TO_FORUM" => "Y",
		"USE_COMPARE" => "N",
		"PRICE_CODE" => array(
			0 => "������� 1 ��� �����",
		),
		"USE_PRICE_COUNT" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"USE_PRODUCT_QUANTITY" => "Y",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"QUANTITY_FLOAT" => "N",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"SHOW_TOP_ELEMENTS" => "N",
		"SECTION_COUNT_ELEMENTS" => "N",
		"SECTION_TOP_DEPTH" => "1",
		"SECTIONS_VIEW_MODE" => "LIST",
		"SECTIONS_SHOW_PARENT_NAME" => "N",
		"PAGE_ELEMENT_COUNT" => "24",
		"LINE_ELEMENT_COUNT" => "3",
		"ELEMENT_SORT_FIELD" => "desc",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "shows",
		"ELEMENT_SORT_ORDER2" => "asc",
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "NEWPRODUCT",
			2 => "SALELEADER",
			3 => "SPECIALOFFER",
			4 => "",
		),
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "SORT",
			5 => "PREVIEW_TEXT",
			6 => "PREVIEW_PICTURE",
			7 => "DETAIL_TEXT",
			8 => "DETAIL_PICTURE",
			9 => "DATE_ACTIVE_FROM",
			10 => "ACTIVE_FROM",
			11 => "DATE_ACTIVE_TO",
			12 => "ACTIVE_TO",
			13 => "IBLOCK_ID",
			14 => "DATE_CREATE",
			15 => "",
		),
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "ARTNUMBER",
			2 => "COLOR_REF",
			3 => "SIZES_SHOES",
			4 => "SIZES_CLOTHES",
			5 => "",
		),
		"LIST_OFFERS_LIMIT" => "0",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "BREND",
			2 => "NEWPRODUCT",
			3 => "MANUFACTURER",
			4 => "",
		),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "ARTNUMBER",
			2 => "COLOR_REF",
			3 => "SIZES_SHOES",
			4 => "SIZES_CLOTHES",
			5 => "",
		),
		"LINK_IBLOCK_TYPE" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"USE_ALSO_BUY" => "Y",
		"ALSO_BUY_ELEMENT_COUNT" => "4",
		"ALSO_BUY_MIN_BUYES" => "1",
		"OFFERS_SORT_FIELD" => "shows",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "shows",
		"OFFERS_SORT_ORDER2" => "asc",
		"PAGER_TEMPLATE" => "catalog_pager",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "������",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"ADD_PICT_PROP" => "-",
		"LABEL_PROP" => "-",
		"PRODUCT_DISPLAY_MODE" => "N",
		"OFFER_ADD_PICT_PROP" => "-",
		"OFFER_TREE_PROPS" => array(
			0 => "SEMNAYA_PEREDNYAYA_STENKA",
			1 => "OBYEM",
			2 => "SILIKONOVYE_NAKLADKI",
			3 => "MAKSIMALNYY_ROST",
			4 => "VYNIMAYUSHCHIESYA_REYKI",
			5 => "TSVET",
			6 => "SLIV",
			7 => "RAZMER",
			8 => "CML2_MANUFACTURER",
			9 => "SHASSI",
			10 => "LYULKA",
			11 => "PROGULOCHNYY_BLOK",
			12 => "KOLICHESTVO_STVOROK",
			13 => "AVTOKRESLO",
			14 => "KOLICHESTVO_VERTIKALNYKH_OTDELENIY",
			15 => "STRANA_BRENDA",
			16 => "SHTANGA_DLYA_PLECHIKOV",
			17 => "STRANA_PROIZVODITEL",
			18 => "VNUTRENNIE_POLKI",
			19 => "OTKRYTYE_POLKI",
			20 => "TIP_KROVATI",
			21 => "VYDVIZHNYE_YASHCHIKI",
			22 => "RAZMER_SPALNOGO_MESTA",
			23 => "DOVODCHIKI_VYDVIZHNYKH_YASHCHIKOV",
			24 => "MATERIAL",
			25 => "MEKHANIZM_KACHANIYA",
			26 => "VIDY_TRANSFORMATSII",
			27 => "VOZRAST_MES",
			28 => "KOLICHESTVO_UROVNEY_LOZHA",
			29 => "OPUSKAYUSHCHAYASYA_PEREDNYAYA_STENKA",
			30 => "RAZMER_SPALNOGO_MESTA_DKHSH_SM",
			31 => "KOLESA",
			32 => "YASHCHIKI_POD_KROVATYU",
			33 => "SOSTAV_KOMPLEKTA",
			34 => "DOVODCHIKI_YASHCHIKOV_POD_KROVATYU",
			35 => "PODUSHKA",
			36 => "VSTROENNYY_KOMOD",
			37 => "GABARITY_VSTROENNOGO_KOMODA",
			38 => "SOSTAV",
			39 => "YASHIKI_V_KOMODE",
			40 => "DOVODCHIKI_YASHCHIKOV_KOMODA",
			41 => "OTKRYTYE_POLKI_V_KOMODE",
			42 => "KOLICHESTVO_CHASTEY_BORTIKOV",
			43 => "SEMNYY_CHEKHOL_U_ZASHCHITNYKH_BORTIKOV",
			44 => "POL",
			45 => "GARANTIYA_PROIZVODITELYA",
			46 => "RAZMER_DLYA_KROVATKI_DKHSH_SM",
			47 => "MATERIAL_1",
			48 => "VYSOTA_MATRASA",
			49 => "VOZRAST",
			50 => "PRUZHINY_SISTEMA_BONNEL",
			51 => "GARANTIYA_PROIZVODITELYA_1",
			52 => "NEZAVISIMYE_PRUZHINY",
			53 => "TIP_KOMODA",
			54 => "KOLICHESTVO_PRUZHIN_NA_M2",
			55 => "OTKIDNOY_PELENALNYY_STOLIK",
			56 => "ZHESTKIE_KRAYA_MATRASA",
			57 => "STORONY_ZIMA_LETO",
			58 => "VANNOCHKA",
			59 => "RAZNAYA_ZHESTKOST_STORON",
			60 => "SEMNYY_CHEKHOL",
			61 => "OTKRYTYE_POLKI_1",
			62 => "MATERIAL_CHEKHLA",
			63 => "SISTEMA_VENTILYATSII",
			64 => "NALICHIE_KOLESIKOV",
			65 => "ZASHCHITA_OT_PROMOKANIYA",
			66 => "AROMATIZIROVANNYE_KAPSULY",
			67 => "BREND",
		),
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"MESS_BTN_BUY" => "������",
		"MESS_BTN_ADD_TO_BASKET" => "� �������",
		"MESS_BTN_COMPARE" => "���������",
		"MESS_BTN_DETAIL" => "���������",
		"MESS_NOT_AVAILABLE" => "��� � �������",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DETAIL_VOTE_DISPLAY_AS_RATING" => "rating",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_BLOG_USE" => "Y",
		"DETAIL_VK_USE" => "N",
		"DETAIL_FB_USE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"USE_STORE" => "N",
		"USE_STORE_PHONE" => "Y",
		"USE_STORE_SCHEDULE" => "Y",
		"USE_MIN_AMOUNT" => "N",
		"STORE_PATH" => "/store/#store_id#",
		"MAIN_TITLE" => "������� �� �������",
		"MIN_AMOUNT" => "10",
		"DETAIL_BRAND_USE" => "Y",
		"DETAIL_BRAND_PROP_CODE" => array(
			0 => "",
			1 => "-",
			2 => "BRAND_REF",
			3 => "",
		),
		"SIDEBAR_SECTION_SHOW" => "Y",
		"SIDEBAR_DETAIL_SHOW" => "N",
		"SIDEBAR_PATH" => "/catalog/sidebar.php",
		"COMPONENT_TEMPLATE" => "catalog",
		"COMMON_SHOW_CLOSE_POPUP" => "Y",
		"DETAIL_SHOW_MAX_QUANTITY" => "Y",
		"DETAIL_BLOG_URL" => "catalog_comments",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "N",
		"DETAIL_FB_APP_ID" => "",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"USE_SALE_BESTSELLERS" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
		"COMMON_ADD_TO_BASKET_ACTION" => "",
		"TOP_ADD_TO_BASKET_ACTION" => "BUY",
		"SECTION_ADD_TO_BASKET_ACTION" => "BUY",
		"DETAIL_ADD_TO_BASKET_ACTION" => array(
		),
		"DETAIL_SHOW_BASIS_PRICE" => "Y",
		"SECTIONS_HIDE_SECTION_NAME" => "N",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"SHOW_DEACTIVATED" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => "IMG",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "H",
		"STORES" => "",
		"USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_EMPTY_STORE" => "Y",
		"SHOW_GENERAL_STORE_INFORMATION" => "N",
		"USE_BIG_DATA" => "N",
		"BIG_DATA_RCM_TYPE" => "bestsell",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
		"CACHE_NOTES" => "",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
			"compare" => "compare/",
			"smart_filter" => "#SECTION_CODE#/filter/#SMART_FILTER_PATH#/apply/",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
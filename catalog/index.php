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
		"HIDE_NOT_AVAILABLE" => "N",
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
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "Y",
		"ADD_SECTION_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"SET_STATUS_404" => "Y",
		"DETAIL_DISPLAY_NAME" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "catalog_filter",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "TSVET",
			1 => "CML2_MANUFACTURER",
			2 => "BREND",
			3 => "",
		),
		"FILTER_PRICE_CODE" => array(
			0 => "������� 1 ��� �����",
		),
		"FILTER_OFFERS_FIELD_CODE" => array(
			0 => "XML_ID",
			1 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(
			0 => "TSVET",
			1 => "CML2_MANUFACTURER",
			2 => "BREND",
			3 => "",
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
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_PROPERTIES" => array(
			0 => "UD_TSVET",
		),
		"USE_PRODUCT_QUANTITY" => "Y",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"QUANTITY_FLOAT" => "N",
		"OFFERS_CART_PROPERTIES" => array(
			0 => "ARTIKUL_KHARAKTERISTIKI",
			1 => "TSVET",
			2 => "CML2_ARTICLE",
			3 => "BREND",
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
			0 => "ARTIKUL_KHARAKTERISTIKI",
			1 => "VYNIMAYUSHCHIESYA_REYKI",
			2 => "OBYEM",
			3 => "KODPOSTAVSHCHIKAKHARAKTERISTIKI",
			4 => "KOLESA",
			5 => "MAKSIMALNYY_ROST",
			6 => "SLIV",
			7 => "TSVET",
			8 => "YASHCHIKI_POD_KROVATYU",
			9 => "DOVODCHIKI_YASHCHIKOV_POD_KROVATYU",
			10 => "KOMPLEKTATSIYA",
			11 => "RAZMER",
			12 => "BLOG_POST_ID",
			13 => "CML2_ARTICLE",
			14 => "CML2_BASE_UNIT",
			15 => "VSTROENNYY_KOMOD",
			16 => "BLOG_COMMENTS_CNT",
			17 => "MODEL",
			18 => "CML2_MANUFACTURER",
			19 => "CML2_TRAITS",
			20 => "CML2_TAXES",
			21 => "CML2_ATTRIBUTES",
			22 => "SHASSI",
			23 => "CML2_BAR_CODE",
			24 => "GABARITY_VSTROENNOGO_KOMODA",
			25 => "LYULKA",
			26 => "TIP_KROVATI",
			27 => "OBSHCHIY_OBEM_UPAKOVKI_M3",
			28 => "PROGULOCHNYY_BLOK",
			29 => "RAZMER_SPALNOGO_MESTA",
			30 => "AVTOKRESLO",
			31 => "KOLICHESTVO_STVOROK",
			32 => "MATERIAL",
			33 => "KOLICHESTVO_VERTIKALNYKH_OTDELENIY",
			34 => "MEKHANIZM_KACHANIYA",
			35 => "STRANA_BRENDA",
			36 => "VIDY_TRANSFORMATSII",
			37 => "STRANA_PROIZVODITEL",
			38 => "SHTANGA_DLYA_PLECHIKOV",
			39 => "VNUTRENNIE_POLKI",
			40 => "VOZRAST_MES",
			41 => "KOLICHESTVO_UROVNEY_LOZHA",
			42 => "OTKRYTYE_POLKI",
			43 => "VYDVIZHNYE_YASHCHIKI",
			44 => "OPUSKAYUSHCHAYASYA_PEREDNYAYA_STENKA",
			45 => "DOVODCHIKI_VYDVIZHNYKH_YASHCHIKOV",
			46 => "SEMNAYA_PEREDNYAYA_STENKA",
			47 => "VNESHNIE_GABARITY_DKHSHKHV_SM",
			48 => "SILIKONOVYE_NAKLADKI",
			49 => "VES_TOVARA_S_UPAKOVKOY_KG",
			50 => "YASHIKI_V_KOMODE",
			51 => "DOVODCHIKI_YASHCHIKOV_KOMODA",
			52 => "KOLICHESTVO_KOROBOK_V_UPAKOVKE",
			53 => "GABARITY_UPAKOVKI_DKHSHKHV_SM",
			54 => "OTKRYTYE_POLKI_V_KOMODE",
			55 => "VNESHNIE_GABARITY_DKHSHKHV",
			56 => "OBSHCHIY_OBEM_UPAKOVKI_M3_1",
			57 => "OBEM_UPAKOVKI_M_KUB",
			58 => "RAZMER_SPALNOGO_MESTA_DKHSH_SM",
			59 => "VES_UPAKOVKI_KG",
			60 => "KOLICHESTVO_PREDMETOV",
			61 => "GARANTIYA_PROIZVODITELYA",
			62 => "SOSTAV_KOMPLEKTA",
			63 => "MATERIAL_1",
			64 => "PODUSHKA",
			65 => "VOZRAST_MES_1",
			66 => "RAZMER_NAVOLOCHKI_DKHSH_SM",
			67 => "GARANTIYA_PROIZVODITELYA_1",
			68 => "SOSTAV",
			69 => "RAZMER_PODODEYALNIKA_DKHSH_SM",
			70 => "TIP_KOMODA",
			71 => "OTKIDNOY_PELENALNYY_STOLIK",
			72 => "RAZMER_PROSTYNKI_DKHSH_SM",
			73 => "KOLICHESTVO_CHASTEY_BORTIKOV",
			74 => "RAZMER_PELENALNOGO_STOLIKA_SHKHD_SM",
			75 => "VANNOCHKA",
			76 => "OBSHCHIY_RAZMER_ZASHCHITNYKH_BORTIKOV_DKHV_SM",
			77 => "KOLICHESTVO_YASHCHIKOV",
			78 => "SEMNYY_CHEKHOL_U_ZASHCHITNYKH_BORTIKOV",
			79 => "OTKRYTYE_POLKI_1",
			80 => "POL",
			81 => "KOLICHESTVO_POLOK",
			82 => "RAZMER_DLYA_KROVATKI_DKHSH_SM",
			83 => "VYSOTA_MATRASA",
			84 => "NALICHIE_KOLESIKOV",
			85 => "VNESHNIE_GABARITY_DKHSHKHV_SM_2",
			86 => "PRUZHINY_SISTEMA_BONNEL",
			87 => "VES_TOVARA_S_UPAKOVKOY_KG_2",
			88 => "NEZAVISIMYE_PRUZHINY",
			89 => "KOLICHESTVO_KOROBOK_V_UPAKOVKE_1",
			90 => "KOLICHESTVO_PRUZHIN_NA_M2",
			91 => "GABARITY_UPAKOVKI_DKHSHKHV_SM_2",
			92 => "ZHESTKIE_KRAYA_MATRASA",
			93 => "STORONY_ZIMA_LETO",
			94 => "RAZNAYA_ZHESTKOST_STORON",
			95 => "SEMNYY_CHEKHOL",
			96 => "MATERIAL_CHEKHLA",
			97 => "SISTEMA_VENTILYATSII",
			98 => "ZASHCHITA_OT_PROMOKANIYA",
			99 => "AROMATIZIROVANNYE_KAPSULY",
			100 => "VNESHNIE_GABARITY_DKHSHKHV_SM_1",
			101 => "VES_TOVARA_S_UPAKOVKOY_KG_1",
			102 => "GABARITY_UPAKOVKI_DKHSHKHV_SM_1",
			103 => "OBSHCHIY_OBEM_UPAKOVKI_M3_2",
			104 => "KOD_POSTAVSHCHIKA",
			105 => "BREND",
			106 => "NEWPRODUCT",
			107 => "SALELEADER",
			108 => "SPECIALOFFER",
			109 => "",
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
			0 => "ARTIKUL_KHARAKTERISTIKI",
			1 => "OBYEM",
			2 => "SEMNAYA_PEREDNYAYA_STENKA",
			3 => "KODPOSTAVSHCHIKAKHARAKTERISTIKI",
			4 => "MAKSIMALNYY_ROST",
			5 => "SILIKONOVYE_NAKLADKI",
			6 => "VYNIMAYUSHCHIESYA_REYKI",
			7 => "SLIV",
			8 => "TSVET",
			9 => "VES_TOVARA_S_UPAKOVKOY_KG",
			10 => "KOMPLEKTATSIYA",
			11 => "RAZMER",
			12 => "CML2_ARTICLE",
			13 => "CML2_BASE_UNIT",
			14 => "MORE_PHOTO",
			15 => "KOLICHESTVO_KOROBOK_V_UPAKOVKE",
			16 => "CML2_MANUFACTURER",
			17 => "CML2_TRAITS",
			18 => "CML2_TAXES",
			19 => "FILES",
			20 => "CML2_ATTRIBUTES",
			21 => "SHASSI",
			22 => "CML2_BAR_CODE",
			23 => "GABARITY_UPAKOVKI_DKHSHKHV_SM",
			24 => "LYULKA",
			25 => "OBSHCHIY_OBEM_UPAKOVKI_M3",
			26 => "PROGULOCHNYY_BLOK",
			27 => "AVTOKRESLO",
			28 => "KOLICHESTVO_STVOROK",
			29 => "KOLICHESTVO_VERTIKALNYKH_OTDELENIY",
			30 => "STRANA_BRENDA",
			31 => "STRANA_PROIZVODITEL",
			32 => "SHTANGA_DLYA_PLECHIKOV",
			33 => "VNUTRENNIE_POLKI",
			34 => "MODEL",
			35 => "OTKRYTYE_POLKI",
			36 => "TIP_KROVATI",
			37 => "VYDVIZHNYE_YASHCHIKI",
			38 => "RAZMER_SPALNOGO_MESTA",
			39 => "DOVODCHIKI_VYDVIZHNYKH_YASHCHIKOV",
			40 => "MATERIAL",
			41 => "VNESHNIE_GABARITY_DKHSHKHV_SM",
			42 => "MEKHANIZM_KACHANIYA",
			43 => "VES_TOVARA_S_UPAKOVKOY_KG_1",
			44 => "VIDY_TRANSFORMATSII",
			45 => "VOZRAST_MES",
			46 => "KOLICHESTVO_KOROBOK_V_UPAKOVKE_1",
			47 => "GABARITY_UPAKOVKI_DKHSHKHV_SM_1",
			48 => "KOLICHESTVO_UROVNEY_LOZHA",
			49 => "OBSHCHIY_OBEM_UPAKOVKI_M3_1",
			50 => "OPUSKAYUSHCHAYASYA_PEREDNYAYA_STENKA",
			51 => "KOLESA",
			52 => "RAZMER_SPALNOGO_MESTA_DKHSH_SM",
			53 => "KOLICHESTVO_PREDMETOV",
			54 => "YASHCHIKI_POD_KROVATYU",
			55 => "DOVODCHIKI_YASHCHIKOV_POD_KROVATYU",
			56 => "SOSTAV_KOMPLEKTA",
			57 => "VSTROENNYY_KOMOD",
			58 => "PODUSHKA",
			59 => "GABARITY_VSTROENNOGO_KOMODA",
			60 => "RAZMER_NAVOLOCHKI_DKHSH_SM",
			61 => "SOSTAV",
			62 => "YASHIKI_V_KOMODE",
			63 => "DOVODCHIKI_YASHCHIKOV_KOMODA",
			64 => "RAZMER_PODODEYALNIKA_DKHSH_SM",
			65 => "OTKRYTYE_POLKI_V_KOMODE",
			66 => "RAZMER_PROSTYNKI_DKHSH_SM",
			67 => "VNESHNIE_GABARITY_DKHSHKHV",
			68 => "KOLICHESTVO_CHASTEY_BORTIKOV",
			69 => "OBSHCHIY_RAZMER_ZASHCHITNYKH_BORTIKOV_DKHV_SM",
			70 => "OBEM_UPAKOVKI_M_KUB",
			71 => "VES_UPAKOVKI_KG",
			72 => "SEMNYY_CHEKHOL_U_ZASHCHITNYKH_BORTIKOV",
			73 => "GARANTIYA_PROIZVODITELYA",
			74 => "POL",
			75 => "MATERIAL_1",
			76 => "RAZMER_DLYA_KROVATKI_DKHSH_SM",
			77 => "VOZRAST",
			78 => "VYSOTA_MATRASA",
			79 => "GARANTIYA_PROIZVODITELYA_1",
			80 => "PRUZHINY_SISTEMA_BONNEL",
			81 => "NEZAVISIMYE_PRUZHINY",
			82 => "TIP_KOMODA",
			83 => "KOLICHESTVO_PRUZHIN_NA_M2",
			84 => "OTKIDNOY_PELENALNYY_STOLIK",
			85 => "ZHESTKIE_KRAYA_MATRASA",
			86 => "RAZMER_PELENALNOGO_STOLIKA_SHKHD_SM",
			87 => "VANNOCHKA",
			88 => "STORONY_ZIMA_LETO",
			89 => "KOLICHESTVO_YASHCHIKOV",
			90 => "RAZNAYA_ZHESTKOST_STORON",
			91 => "OTKRYTYE_POLKI_1",
			92 => "SEMNYY_CHEKHOL",
			93 => "KOLICHESTVO_POLOK",
			94 => "MATERIAL_CHEKHLA",
			95 => "NALICHIE_KOLESIKOV",
			96 => "SISTEMA_VENTILYATSII",
			97 => "VNESHNIE_GABARITY_DKHSHKHV_SM_2",
			98 => "ZASHCHITA_OT_PROMOKANIYA",
			99 => "AROMATIZIROVANNYE_KAPSULY",
			100 => "VNESHNIE_GABARITY_DKHSHKHV_SM_1",
			101 => "VES_TOVARA_S_UPAKOVKOY_KG_2",
			102 => "GABARITY_UPAKOVKI_DKHSHKHV_SM_2",
			103 => "OBSHCHIY_OBEM_UPAKOVKI_M3_2",
			104 => "KOD_POSTAVSHCHIKA",
			105 => "BREND",
			106 => "ARTNUMBER",
			107 => "COLOR_REF",
			108 => "SIZES_SHOES",
			109 => "SIZES_CLOTHES",
			110 => "",
		),
		"LIST_OFFERS_LIMIT" => "0",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "ARTIKUL_KHARAKTERISTIKI",
			1 => "VYNIMAYUSHCHIESYA_REYKI",
			2 => "OBYEM",
			3 => "KODPOSTAVSHCHIKAKHARAKTERISTIKI",
			4 => "KOLESA",
			5 => "MAKSIMALNYY_ROST",
			6 => "SLIV",
			7 => "TSVET",
			8 => "YASHCHIKI_POD_KROVATYU",
			9 => "DOVODCHIKI_YASHCHIKOV_POD_KROVATYU",
			10 => "RAZMER",
			11 => "CML2_ARTICLE",
			12 => "CML2_BASE_UNIT",
			13 => "VSTROENNYY_KOMOD",
			14 => "MODEL",
			15 => "CML2_MANUFACTURER",
			16 => "CML2_TRAITS",
			17 => "SHASSI",
			18 => "GABARITY_VSTROENNOGO_KOMODA",
			19 => "LYULKA",
			20 => "TIP_KROVATI",
			21 => "OBSHCHIY_OBEM_UPAKOVKI_M3",
			22 => "PROGULOCHNYY_BLOK",
			23 => "RAZMER_SPALNOGO_MESTA",
			24 => "AVTOKRESLO",
			25 => "KOLICHESTVO_STVOROK",
			26 => "MATERIAL",
			27 => "KOLICHESTVO_VERTIKALNYKH_OTDELENIY",
			28 => "MEKHANIZM_KACHANIYA",
			29 => "STRANA_BRENDA",
			30 => "VIDY_TRANSFORMATSII",
			31 => "STRANA_PROIZVODITEL",
			32 => "SHTANGA_DLYA_PLECHIKOV",
			33 => "VNUTRENNIE_POLKI",
			34 => "VOZRAST_MES",
			35 => "KOLICHESTVO_UROVNEY_LOZHA",
			36 => "OTKRYTYE_POLKI",
			37 => "VYDVIZHNYE_YASHCHIKI",
			38 => "OPUSKAYUSHCHAYASYA_PEREDNYAYA_STENKA",
			39 => "DOVODCHIKI_VYDVIZHNYKH_YASHCHIKOV",
			40 => "SEMNAYA_PEREDNYAYA_STENKA",
			41 => "VNESHNIE_GABARITY_DKHSHKHV_SM",
			42 => "SILIKONOVYE_NAKLADKI",
			43 => "VES_TOVARA_S_UPAKOVKOY_KG",
			44 => "YASHIKI_V_KOMODE",
			45 => "DOVODCHIKI_YASHCHIKOV_KOMODA",
			46 => "KOLICHESTVO_KOROBOK_V_UPAKOVKE",
			47 => "GABARITY_UPAKOVKI_DKHSHKHV_SM",
			48 => "OTKRYTYE_POLKI_V_KOMODE",
			49 => "VNESHNIE_GABARITY_DKHSHKHV",
			50 => "OBSHCHIY_OBEM_UPAKOVKI_M3_1",
			51 => "OBEM_UPAKOVKI_M_KUB",
			52 => "RAZMER_SPALNOGO_MESTA_DKHSH_SM",
			53 => "VES_UPAKOVKI_KG",
			54 => "KOLICHESTVO_PREDMETOV",
			55 => "GARANTIYA_PROIZVODITELYA",
			56 => "MATERIAL_1",
			57 => "PODUSHKA",
			58 => "VOZRAST_MES_1",
			59 => "RAZMER_NAVOLOCHKI_DKHSH_SM",
			60 => "GARANTIYA_PROIZVODITELYA_1",
			61 => "RAZMER_PODODEYALNIKA_DKHSH_SM",
			62 => "TIP_KOMODA",
			63 => "OTKIDNOY_PELENALNYY_STOLIK",
			64 => "RAZMER_PROSTYNKI_DKHSH_SM",
			65 => "KOLICHESTVO_CHASTEY_BORTIKOV",
			66 => "RAZMER_PELENALNOGO_STOLIKA_SHKHD_SM",
			67 => "VANNOCHKA",
			68 => "OBSHCHIY_RAZMER_ZASHCHITNYKH_BORTIKOV_DKHV_SM",
			69 => "KOLICHESTVO_YASHCHIKOV",
			70 => "SEMNYY_CHEKHOL_U_ZASHCHITNYKH_BORTIKOV",
			71 => "OTKRYTYE_POLKI_1",
			72 => "POL",
			73 => "KOLICHESTVO_POLOK",
			74 => "RAZMER_DLYA_KROVATKI_DKHSH_SM",
			75 => "VYSOTA_MATRASA",
			76 => "NALICHIE_KOLESIKOV",
			77 => "VNESHNIE_GABARITY_DKHSHKHV_SM_2",
			78 => "PRUZHINY_SISTEMA_BONNEL",
			79 => "VES_TOVARA_S_UPAKOVKOY_KG_2",
			80 => "NEZAVISIMYE_PRUZHINY",
			81 => "KOLICHESTVO_KOROBOK_V_UPAKOVKE_1",
			82 => "KOLICHESTVO_PRUZHIN_NA_M2",
			83 => "GABARITY_UPAKOVKI_DKHSHKHV_SM_2",
			84 => "ZHESTKIE_KRAYA_MATRASA",
			85 => "STORONY_ZIMA_LETO",
			86 => "RAZNAYA_ZHESTKOST_STORON",
			87 => "SEMNYY_CHEKHOL",
			88 => "MATERIAL_CHEKHLA",
			89 => "SISTEMA_VENTILYATSII",
			90 => "ZASHCHITA_OT_PROMOKANIYA",
			91 => "AROMATIZIROVANNYE_KAPSULY",
			92 => "VNESHNIE_GABARITY_DKHSHKHV_SM_1",
			93 => "VES_TOVARA_S_UPAKOVKOY_KG_1",
			94 => "GABARITY_UPAKOVKI_DKHSHKHV_SM_1",
			95 => "OBSHCHIY_OBEM_UPAKOVKI_M3_2",
			96 => "KOD_POSTAVSHCHIKA",
			97 => "BREND",
			98 => "NEWPRODUCT",
			99 => "MANUFACTURER",
			100 => "",
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
			0 => "CML2_TRAITS",
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
		"PRODUCT_DISPLAY_MODE" => "Y",
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
		"SHOW_OLD_PRICE" => "N",
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
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "Y",
		"COMMON_ADD_TO_BASKET_ACTION" => "BUY",
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
		"USE_GIFTS_DETAIL" => "Y",
		"USE_GIFTS_SECTION" => "Y",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "3",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_BLOCK_TITLE" => "�������� ���� �� ��������",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "�������",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "3",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "������� � ������� ����� �������",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "�������",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_MESS_BTN_BUY" => "�������",
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "3",
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "�������� ���� �� �������, ����� �������� �������",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
			"compare" => "compare/",
			"smart_filter" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
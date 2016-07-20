<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("���������");
?><?
    $favouriteList = Favorite::getListForUser(); 
    global $favouriteFilter;
    $favouriteFilter = array(
        "=ID" => $favouriteList,
    );

    $catalogParams = getCatalogViewParams();  //sets in init.php
    $arParams["ELEMENT_SORT_FIELD"] = $catalogParams["ELEMENT_SORT_FIELD"];
    $arParams["ELEMENT_SORT_ORDER"] = $catalogParams["ELEMENT_SORT_ORDER"];
    $arParams["ELEMENT_SORT_FIELD2"] = $catalogParams["ELEMENT_SORT_FIELD2"];
    $arParams["ELEMENT_SORT_ORDER2"] = $catalogParams["ELEMENT_SORT_ORDER2"];

    ?> <?$APPLICATION->IncludeComponent(
            "bitrix:catalog.section",
            "favourite",
            Array(
                "ACTION_VARIABLE" => "action",
                "ADD_PICT_PROP" => "-",
                "ADD_PROPERTIES_TO_BASKET" => "Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "ADD_TO_BASKET_ACTION" => "ADD",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "BACKGROUND_IMAGE" => "-",
                "BASKET_URL" => "/personal/cart/",
                "BROWSER_TITLE" => "-",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "N",
                "CACHE_TIME" => "360000000",
                "CACHE_TYPE" => "A",
                "COMPARE_PATH" => "",
                "CONVERT_CURRENCY" => "N",
                "CURRENCY_ID" => "RUB",
                "DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_COMPARE" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
                "ELEMENT_SORT_FIELD2" => $arParams["ELEMENT_SORT_FIELD2"],
                "ELEMENT_SORT_ORDER" => $arParams["ELEMENT_SORT_ORDER"],
                "ELEMENT_SORT_ORDER2" => $arParams["ELEMENT_SORT_ORDER2"],
                "FILTER_NAME" => "favouriteFilter",
                "HIDE_NOT_AVAILABLE" => "N",
                "IBLOCK_ID" => "5",
                "IBLOCK_TYPE" => "1c_catalog",
                "INCLUDE_SUBSECTIONS" => "Y",
                "LABEL_PROP" => "-",
                "LINE_ELEMENT_COUNT" => "",
                "MESSAGE_404" => "",
                "MESS_BTN_ADD_TO_BASKET" => "",
                "MESS_BTN_BUY" => "������",
                "MESS_BTN_COMPARE" => "",
                "MESS_BTN_DETAIL" => "",
                "MESS_BTN_SUBSCRIBE" => "",
                "MESS_NOT_AVAILABLE" => "",
                "META_DESCRIPTION" => "",
                "META_KEYWORDS" => "",
                "OFFERS_CART_PROPERTIES" => array("ARTIKUL_KHARAKTERISTIKI","OBYEM","SEMNAYA_PEREDNYAYA_STENKA","KODPOSTAVSHCHIKAKHARAKTERISTIKI","MAKSIMALNYY_ROST","SILIKONOVYE_NAKLADKI","VYNIMAYUSHCHIESYA_REYKI","SLIV","TSVET","VES_TOVARA_S_UPAKOVKOY_KG","KOMPLEKTATSIYA","RAZMER","CML2_ARTICLE","CML2_BASE_UNIT","KOLICHESTVO_KOROBOK_V_UPAKOVKE","CML2_MANUFACTURER","CML2_TRAITS","CML2_TAXES","CML2_ATTRIBUTES","SHASSI","CML2_BAR_CODE","GABARITY_UPAKOVKI_DKHSHKHV_SM","LYULKA","OBSHCHIY_OBEM_UPAKOVKI_M3","PROGULOCHNYY_BLOK","AVTOKRESLO","KOLICHESTVO_STVOROK","KOLICHESTVO_VERTIKALNYKH_OTDELENIY","STRANA_BRENDA","STRANA_PROIZVODITEL","SHTANGA_DLYA_PLECHIKOV","VNUTRENNIE_POLKI","MODEL","OTKRYTYE_POLKI","TIP_KROVATI","VYDVIZHNYE_YASHCHIKI","RAZMER_SPALNOGO_MESTA","DOVODCHIKI_VYDVIZHNYKH_YASHCHIKOV","MATERIAL","VNESHNIE_GABARITY_DKHSHKHV_SM","MEKHANIZM_KACHANIYA","VES_TOVARA_S_UPAKOVKOY_KG_1","VIDY_TRANSFORMATSII","VOZRAST_MES","KOLICHESTVO_KOROBOK_V_UPAKOVKE_1","GABARITY_UPAKOVKI_DKHSHKHV_SM_1","KOLICHESTVO_UROVNEY_LOZHA","OBSHCHIY_OBEM_UPAKOVKI_M3_1","OPUSKAYUSHCHAYASYA_PEREDNYAYA_STENKA","KOLESA","RAZMER_SPALNOGO_MESTA_DKHSH_SM","KOLICHESTVO_PREDMETOV","YASHCHIKI_POD_KROVATYU","DOVODCHIKI_YASHCHIKOV_POD_KROVATYU","SOSTAV_KOMPLEKTA","VSTROENNYY_KOMOD","PODUSHKA","GABARITY_VSTROENNOGO_KOMODA","RAZMER_NAVOLOCHKI_DKHSH_SM","SOSTAV","YASHIKI_V_KOMODE","DOVODCHIKI_YASHCHIKOV_KOMODA","RAZMER_PODODEYALNIKA_DKHSH_SM","OTKRYTYE_POLKI_V_KOMODE","RAZMER_PROSTYNKI_DKHSH_SM","VNESHNIE_GABARITY_DKHSHKHV","KOLICHESTVO_CHASTEY_BORTIKOV","OBSHCHIY_RAZMER_ZASHCHITNYKH_BORTIKOV_DKHV_SM","OBEM_UPAKOVKI_M_KUB","VES_UPAKOVKI_KG","SEMNYY_CHEKHOL_U_ZASHCHITNYKH_BORTIKOV","GARANTIYA_PROIZVODITELYA","POL","MATERIAL_1","RAZMER_DLYA_KROVATKI_DKHSH_SM","VOZRAST","VYSOTA_MATRASA","GARANTIYA_PROIZVODITELYA_1","PRUZHINY_SISTEMA_BONNEL","NEZAVISIMYE_PRUZHINY","TIP_KOMODA","KOLICHESTVO_PRUZHIN_NA_M2","OTKIDNOY_PELENALNYY_STOLIK","ZHESTKIE_KRAYA_MATRASA","RAZMER_PELENALNOGO_STOLIKA_SHKHD_SM","VANNOCHKA","STORONY_ZIMA_LETO","KOLICHESTVO_YASHCHIKOV","RAZNAYA_ZHESTKOST_STORON","OTKRYTYE_POLKI_1","SEMNYY_CHEKHOL","KOLICHESTVO_POLOK","MATERIAL_CHEKHLA","NALICHIE_KOLESIKOV","SISTEMA_VENTILYATSII","VNESHNIE_GABARITY_DKHSHKHV_SM_2","ZASHCHITA_OT_PROMOKANIYA","AROMATIZIROVANNYE_KAPSULY","VNESHNIE_GABARITY_DKHSHKHV_SM_1","VES_TOVARA_S_UPAKOVKOY_KG_2","GABARITY_UPAKOVKI_DKHSHKHV_SM_2","OBSHCHIY_OBEM_UPAKOVKI_M3_2","KOD_POSTAVSHCHIKA","BREND"),
                "OFFERS_FIELD_CODE" => array("ID","CODE","XML_ID","NAME","SORT","PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_TEXT","DETAIL_PICTURE","DATE_ACTIVE_FROM","ACTIVE_FROM","DATE_ACTIVE_TO","ACTIVE_TO","IBLOCK_ID","DATE_CREATE",""),
                "OFFERS_LIMIT" => "",
                "OFFERS_PROPERTY_CODE" => array("ARTIKUL_KHARAKTERISTIKI","OBYEM","SEMNAYA_PEREDNYAYA_STENKA","KODPOSTAVSHCHIKAKHARAKTERISTIKI","MAKSIMALNYY_ROST","SILIKONOVYE_NAKLADKI","VYNIMAYUSHCHIESYA_REYKI","SLIV","TSVET","VES_TOVARA_S_UPAKOVKOY_KG","KOMPLEKTATSIYA","RAZMER","CML2_ARTICLE","CML2_BASE_UNIT","MORE_PHOTO","KOLICHESTVO_KOROBOK_V_UPAKOVKE","CML2_MANUFACTURER","CML2_TRAITS","CML2_TAXES","FILES","CML2_ATTRIBUTES","SHASSI","CML2_BAR_CODE","GABARITY_UPAKOVKI_DKHSHKHV_SM","LYULKA","OBSHCHIY_OBEM_UPAKOVKI_M3","PROGULOCHNYY_BLOK","AVTOKRESLO","KOLICHESTVO_STVOROK","KOLICHESTVO_VERTIKALNYKH_OTDELENIY","STRANA_BRENDA","STRANA_PROIZVODITEL","SHTANGA_DLYA_PLECHIKOV","VNUTRENNIE_POLKI","MODEL","OTKRYTYE_POLKI","TIP_KROVATI","VYDVIZHNYE_YASHCHIKI","RAZMER_SPALNOGO_MESTA","DOVODCHIKI_VYDVIZHNYKH_YASHCHIKOV","MATERIAL","VNESHNIE_GABARITY_DKHSHKHV_SM","MEKHANIZM_KACHANIYA","VES_TOVARA_S_UPAKOVKOY_KG_1","VIDY_TRANSFORMATSII","VOZRAST_MES","KOLICHESTVO_KOROBOK_V_UPAKOVKE_1","GABARITY_UPAKOVKI_DKHSHKHV_SM_1","KOLICHESTVO_UROVNEY_LOZHA","OBSHCHIY_OBEM_UPAKOVKI_M3_1","OPUSKAYUSHCHAYASYA_PEREDNYAYA_STENKA","KOLESA","RAZMER_SPALNOGO_MESTA_DKHSH_SM","KOLICHESTVO_PREDMETOV","YASHCHIKI_POD_KROVATYU","DOVODCHIKI_YASHCHIKOV_POD_KROVATYU","SOSTAV_KOMPLEKTA","VSTROENNYY_KOMOD","PODUSHKA","GABARITY_VSTROENNOGO_KOMODA","RAZMER_NAVOLOCHKI_DKHSH_SM","SOSTAV","YASHIKI_V_KOMODE","DOVODCHIKI_YASHCHIKOV_KOMODA","RAZMER_PODODEYALNIKA_DKHSH_SM","OTKRYTYE_POLKI_V_KOMODE","RAZMER_PROSTYNKI_DKHSH_SM","VNESHNIE_GABARITY_DKHSHKHV","KOLICHESTVO_CHASTEY_BORTIKOV","OBSHCHIY_RAZMER_ZASHCHITNYKH_BORTIKOV_DKHV_SM","OBEM_UPAKOVKI_M_KUB","VES_UPAKOVKI_KG","SEMNYY_CHEKHOL_U_ZASHCHITNYKH_BORTIKOV","GARANTIYA_PROIZVODITELYA","POL","MATERIAL_1","RAZMER_DLYA_KROVATKI_DKHSH_SM","VOZRAST","VYSOTA_MATRASA","GARANTIYA_PROIZVODITELYA_1","PRUZHINY_SISTEMA_BONNEL","NEZAVISIMYE_PRUZHINY","TIP_KOMODA","KOLICHESTVO_PRUZHIN_NA_M2","OTKIDNOY_PELENALNYY_STOLIK","ZHESTKIE_KRAYA_MATRASA","RAZMER_PELENALNOGO_STOLIKA_SHKHD_SM","VANNOCHKA","STORONY_ZIMA_LETO","KOLICHESTVO_YASHCHIKOV","RAZNAYA_ZHESTKOST_STORON","OTKRYTYE_POLKI_1","SEMNYY_CHEKHOL","KOLICHESTVO_POLOK","MATERIAL_CHEKHLA","NALICHIE_KOLESIKOV","SISTEMA_VENTILYATSII","VNESHNIE_GABARITY_DKHSHKHV_SM_2","ZASHCHITA_OT_PROMOKANIYA","AROMATIZIROVANNYE_KAPSULY","VNESHNIE_GABARITY_DKHSHKHV_SM_1","VES_TOVARA_S_UPAKOVKOY_KG_2","GABARITY_UPAKOVKI_DKHSHKHV_SM_2","OBSHCHIY_OBEM_UPAKOVKI_M3_2","KOD_POSTAVSHCHIKA","BREND","ARTNUMBER","COLOR_REF","SIZES_SHOES","SIZES_CLOTHES",""),
                "OFFERS_SORT_FIELD" => "name",
                "OFFERS_SORT_FIELD2" => "id",
                "OFFERS_SORT_ORDER" => "asc",
                "OFFERS_SORT_ORDER2" => "asc",
                "OFFER_ADD_PICT_PROP" => "-",
                "OFFER_TREE_PROPS" => array(),
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "catalog_pager",
                "PAGER_TITLE" => "��������� ������",
                "PAGE_ELEMENT_COUNT" => "999",
                "PARTIAL_PRODUCT_PROPERTIES" => "N",
                "PRICE_CODE" => array("������� 1 ��� �����"),
                "PRICE_VAT_INCLUDE" => "Y",
                "PRODUCT_DISPLAY_MODE" => "Y",
                "PRODUCT_ID_VARIABLE" => "id",
                "PRODUCT_PROPERTIES" => array("VYNIMAYUSHCHIESYA_REYKI","OBYEM","KOLESA","MAKSIMALNYY_ROST","SLIV","TSVET","YASHCHIKI_POD_KROVATYU","DOVODCHIKI_YASHCHIKOV_POD_KROVATYU","RAZMER","VSTROENNYY_KOMOD","CML2_MANUFACTURER","CML2_TRAITS","CML2_TAXES","CML2_ATTRIBUTES","SHASSI","GABARITY_VSTROENNOGO_KOMODA","LYULKA","TIP_KROVATI","PROGULOCHNYY_BLOK","RAZMER_SPALNOGO_MESTA","AVTOKRESLO","KOLICHESTVO_STVOROK","MATERIAL","KOLICHESTVO_VERTIKALNYKH_OTDELENIY","MEKHANIZM_KACHANIYA","STRANA_BRENDA","VIDY_TRANSFORMATSII","STRANA_PROIZVODITEL","SHTANGA_DLYA_PLECHIKOV","VNUTRENNIE_POLKI","VOZRAST_MES","KOLICHESTVO_UROVNEY_LOZHA","OTKRYTYE_POLKI","VYDVIZHNYE_YASHCHIKI","OPUSKAYUSHCHAYASYA_PEREDNYAYA_STENKA","DOVODCHIKI_VYDVIZHNYKH_YASHCHIKOV","SEMNAYA_PEREDNYAYA_STENKA","SILIKONOVYE_NAKLADKI","YASHIKI_V_KOMODE","DOVODCHIKI_YASHCHIKOV_KOMODA","OTKRYTYE_POLKI_V_KOMODE","RAZMER_SPALNOGO_MESTA_DKHSH_SM","GARANTIYA_PROIZVODITELYA","SOSTAV_KOMPLEKTA","MATERIAL_1","PODUSHKA","VOZRAST_MES_1","GARANTIYA_PROIZVODITELYA_1","SOSTAV","TIP_KOMODA","OTKIDNOY_PELENALNYY_STOLIK","KOLICHESTVO_CHASTEY_BORTIKOV","VANNOCHKA","SEMNYY_CHEKHOL_U_ZASHCHITNYKH_BORTIKOV","OTKRYTYE_POLKI_1","POL","RAZMER_DLYA_KROVATKI_DKHSH_SM","VYSOTA_MATRASA","NALICHIE_KOLESIKOV","PRUZHINY_SISTEMA_BONNEL","NEZAVISIMYE_PRUZHINY","KOLICHESTVO_PRUZHIN_NA_M2","ZHESTKIE_KRAYA_MATRASA","STORONY_ZIMA_LETO","RAZNAYA_ZHESTKOST_STORON","SEMNYY_CHEKHOL","MATERIAL_CHEKHLA","SISTEMA_VENTILYATSII","ZASHCHITA_OT_PROMOKANIYA","AROMATIZIROVANNYE_KAPSULY","BREND"),
                "PRODUCT_PROPS_VARIABLE" => "",
                "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                "PRODUCT_SUBSCRIPTION" => "N",
                "PROPERTY_CODE" => array("ARTIKUL_KHARAKTERISTIKI","VYNIMAYUSHCHIESYA_REYKI","OBYEM","KODPOSTAVSHCHIKAKHARAKTERISTIKI","KOLESA","MAKSIMALNYY_ROST","SLIV","TSVET","YASHCHIKI_POD_KROVATYU","DOVODCHIKI_YASHCHIKOV_POD_KROVATYU","KOMPLEKTATSIYA","RAZMER","BLOG_POST_ID","CML2_ARTICLE","CML2_BASE_UNIT","VSTROENNYY_KOMOD","BLOG_COMMENTS_CNT","MODEL","CML2_MANUFACTURER","CML2_TRAITS","CML2_TAXES","CML2_ATTRIBUTES","SHASSI","CML2_BAR_CODE","GABARITY_VSTROENNOGO_KOMODA","LYULKA","TIP_KROVATI","OBSHCHIY_OBEM_UPAKOVKI_M3","PROGULOCHNYY_BLOK","RAZMER_SPALNOGO_MESTA","AVTOKRESLO","KOLICHESTVO_STVOROK","MATERIAL","KOLICHESTVO_VERTIKALNYKH_OTDELENIY","MEKHANIZM_KACHANIYA","STRANA_BRENDA","VIDY_TRANSFORMATSII","STRANA_PROIZVODITEL","SHTANGA_DLYA_PLECHIKOV","VNUTRENNIE_POLKI","VOZRAST_MES","KOLICHESTVO_UROVNEY_LOZHA","OTKRYTYE_POLKI","VYDVIZHNYE_YASHCHIKI","OPUSKAYUSHCHAYASYA_PEREDNYAYA_STENKA","DOVODCHIKI_VYDVIZHNYKH_YASHCHIKOV","SEMNAYA_PEREDNYAYA_STENKA","VNESHNIE_GABARITY_DKHSHKHV_SM","SILIKONOVYE_NAKLADKI","VES_TOVARA_S_UPAKOVKOY_KG","YASHIKI_V_KOMODE","DOVODCHIKI_YASHCHIKOV_KOMODA","KOLICHESTVO_KOROBOK_V_UPAKOVKE","GABARITY_UPAKOVKI_DKHSHKHV_SM","OTKRYTYE_POLKI_V_KOMODE","VNESHNIE_GABARITY_DKHSHKHV","OBSHCHIY_OBEM_UPAKOVKI_M3_1","OBEM_UPAKOVKI_M_KUB","RAZMER_SPALNOGO_MESTA_DKHSH_SM","VES_UPAKOVKI_KG","KOLICHESTVO_PREDMETOV","GARANTIYA_PROIZVODITELYA","SOSTAV_KOMPLEKTA","MATERIAL_1","PODUSHKA","VOZRAST_MES_1","RAZMER_NAVOLOCHKI_DKHSH_SM","GARANTIYA_PROIZVODITELYA_1","SOSTAV","RAZMER_PODODEYALNIKA_DKHSH_SM","TIP_KOMODA","OTKIDNOY_PELENALNYY_STOLIK","RAZMER_PROSTYNKI_DKHSH_SM","KOLICHESTVO_CHASTEY_BORTIKOV","RAZMER_PELENALNOGO_STOLIKA_SHKHD_SM","VANNOCHKA","OBSHCHIY_RAZMER_ZASHCHITNYKH_BORTIKOV_DKHV_SM","KOLICHESTVO_YASHCHIKOV","SEMNYY_CHEKHOL_U_ZASHCHITNYKH_BORTIKOV","OTKRYTYE_POLKI_1","POL","KOLICHESTVO_POLOK","RAZMER_DLYA_KROVATKI_DKHSH_SM","VYSOTA_MATRASA","NALICHIE_KOLESIKOV","VNESHNIE_GABARITY_DKHSHKHV_SM_2","PRUZHINY_SISTEMA_BONNEL","VES_TOVARA_S_UPAKOVKOY_KG_2","NEZAVISIMYE_PRUZHINY","KOLICHESTVO_KOROBOK_V_UPAKOVKE_1","KOLICHESTVO_PRUZHIN_NA_M2","GABARITY_UPAKOVKI_DKHSHKHV_SM_2","ZHESTKIE_KRAYA_MATRASA","STORONY_ZIMA_LETO","RAZNAYA_ZHESTKOST_STORON","SEMNYY_CHEKHOL","MATERIAL_CHEKHLA","SISTEMA_VENTILYATSII","ZASHCHITA_OT_PROMOKANIYA","AROMATIZIROVANNYE_KAPSULY","VNESHNIE_GABARITY_DKHSHKHV_SM_1","VES_TOVARA_S_UPAKOVKOY_KG_1","GABARITY_UPAKOVKI_DKHSHKHV_SM_1","OBSHCHIY_OBEM_UPAKOVKI_M3_2","KOD_POSTAVSHCHIKA","BREND","NEWPRODUCT","SALELEADER","SPECIALOFFER",""),
                "SECTION_CODE" => "",
                "SECTION_CODE_PATH" => "",
                "SECTION_ID" => "",
                "SECTION_ID_VARIABLE" => "",
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array("",""),
                "SEF_MODE" => "Y",
                "SEF_RULE" => "",
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SHOW_ALL_WO_SECTION" => "Y",
                "SHOW_CLOSE_POPUP" => "N",
                "SHOW_DISCOUNT_PERCENT" => "N",
                "SHOW_OLD_PRICE" => "N",
                "SHOW_PRICE_COUNT" => "1",
                "TEMPLATE_THEME" => "",
                "USE_MAIN_ELEMENT_SECTION" => "N",
                "USE_PRICE_COUNT" => "N",
                "USE_PRODUCT_QUANTITY" => "Y"
            ),
            $arResult["THEME_COMPONENT"],
            Array(
                'HIDE_ICONS' => 'Y'
            )
        );?>  <!--viewedElementBlock-->
<div class="viewedElementBlock">
    <div class="widthWrapper">
        <!--viewedBlock-->
        <div class="viewedBlock productCarousel elmentsList">
            <h2>������������� ������</h2>
            <!--jcarousel-wrapper-->
            <div class="jcarousel-wrapper">
                <!--jcarousel-->
                <div class="jcarousel ">
                    <?$APPLICATION->IncludeComponent(
                            "bitrix:catalog.viewed.products",
                            "section_viewed",
                            Array(
                                "ACTION_VARIABLE" => "action",
                                "ADDITIONAL_PICT_PROP_5" => "MORE_PHOTO",
                                "ADDITIONAL_PICT_PROP_6" => "MORE_PHOTO",
                                "ADD_PROPERTIES_TO_BASKET" => "Y",
                                "BASKET_URL" => "/personal/basket.php",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "CART_PROPERTIES_5" => array(0=>"",1=>"",),
                                "CART_PROPERTIES_6" => array(0=>"",1=>"",),
                                "CONVERT_CURRENCY" => "N",
                                "DEPTH" => "",
                                "DETAIL_URL" => "",
                                "HIDE_NOT_AVAILABLE" => "N",
                                "IBLOCK_ID" => "5",
                                "IBLOCK_TYPE" => "1c_catalog",
                                "LABEL_PROP_5" => "-",
                                "LINE_ELEMENT_COUNT" => "3",
                                "MESS_BTN_BUY" => "������",
                                "MESS_BTN_DETAIL" => "���������",
                                "MESS_BTN_SUBSCRIBE" => "�����������",
                                "OFFER_TREE_PROPS_6" => array(0=>"OBYEM",1=>"SEMNAYA_PEREDNYAYA_STENKA",2=>"MAKSIMALNYY_ROST",3=>"SILIKONOVYE_NAKLADKI",4=>"VYNIMAYUSHCHIESYA_REYKI",5=>"SLIV",6=>"TSVET",7=>"RAZMER",8=>"CML2_MANUFACTURER",9=>"SHASSI",10=>"LYULKA",11=>"PROGULOCHNYY_BLOK",12=>"AVTOKRESLO",13=>"KOLICHESTVO_STVOROK",14=>"KOLICHESTVO_VERTIKALNYKH_OTDELENIY",15=>"STRANA_BRENDA",16=>"STRANA_PROIZVODITEL",17=>"SHTANGA_DLYA_PLECHIKOV",18=>"VNUTRENNIE_POLKI",19=>"OTKRYTYE_POLKI",20=>"TIP_KROVATI",21=>"VYDVIZHNYE_YASHCHIKI",22=>"RAZMER_SPALNOGO_MESTA",23=>"DOVODCHIKI_VYDVIZHNYKH_YASHCHIKOV",24=>"MATERIAL",25=>"MEKHANIZM_KACHANIYA",26=>"VIDY_TRANSFORMATSII",27=>"VOZRAST_MES",28=>"KOLICHESTVO_UROVNEY_LOZHA",29=>"OPUSKAYUSHCHAYASYA_PEREDNYAYA_STENKA",30=>"KOLESA",31=>"RAZMER_SPALNOGO_MESTA_DKHSH_SM",32=>"YASHCHIKI_POD_KROVATYU",33=>"DOVODCHIKI_YASHCHIKOV_POD_KROVATYU",34=>"SOSTAV_KOMPLEKTA",35=>"VSTROENNYY_KOMOD",36=>"PODUSHKA",37=>"GABARITY_VSTROENNOGO_KOMODA",38=>"SOSTAV",39=>"YASHIKI_V_KOMODE",40=>"DOVODCHIKI_YASHCHIKOV_KOMODA",41=>"OTKRYTYE_POLKI_V_KOMODE",42=>"KOLICHESTVO_CHASTEY_BORTIKOV",43=>"SEMNYY_CHEKHOL_U_ZASHCHITNYKH_BORTIKOV",44=>"GARANTIYA_PROIZVODITELYA",45=>"POL",46=>"MATERIAL_1",47=>"RAZMER_DLYA_KROVATKI_DKHSH_SM",48=>"VOZRAST",49=>"VYSOTA_MATRASA",50=>"GARANTIYA_PROIZVODITELYA_1",51=>"PRUZHINY_SISTEMA_BONNEL",52=>"NEZAVISIMYE_PRUZHINY",53=>"TIP_KOMODA",54=>"KOLICHESTVO_PRUZHIN_NA_M2",55=>"OTKIDNOY_PELENALNYY_STOLIK",56=>"ZHESTKIE_KRAYA_MATRASA",57=>"VANNOCHKA",58=>"STORONY_ZIMA_LETO",59=>"RAZNAYA_ZHESTKOST_STORON",60=>"OTKRYTYE_POLKI_1",61=>"SEMNYY_CHEKHOL",62=>"MATERIAL_CHEKHLA",63=>"NALICHIE_KOLESIKOV",64=>"SISTEMA_VENTILYATSII",65=>"ZASHCHITA_OT_PROMOKANIYA",66=>"AROMATIZIROVANNYE_KAPSULY",67=>"BREND",),
                                "PAGE_ELEMENT_COUNT" => "20",
                                "PARTIAL_PRODUCT_PROPERTIES" => "N",
                                "PRICE_CODE" => array(0=>"������� 1 ��� �����",),
                                "PRICE_VAT_INCLUDE" => "Y",
                                "PRODUCT_ID_VARIABLE" => "id",
                                "PRODUCT_PROPS_VARIABLE" => "prop",
                                "PRODUCT_QUANTITY_VARIABLE" => "",
                                "PRODUCT_SUBSCRIPTION" => "N",
                                "PROPERTY_CODE_5" => array(0=>"CML2_LINK",1=>"ARTIKUL_KHARAKTERISTIKI",9=>"TSVET",13=>"CML2_ARTICLE",14=>"CML2_BASE_UNIT",15=>"MORE_PHOTO",17=>"CML2_MANUFACTURER",18=>"CML2_TRAITS",19=>"CML2_TAXES",20=>"FILES",21=>"CML2_ATTRIBUTES",23=>"CML2_BAR_CODE",35=>"MODEL",106=>"BREND",),
                                "PROPERTY_CODE_6" => array(0=>"CML2_LINK",1=>"ARTIKUL_KHARAKTERISTIKI",9=>"TSVET",13=>"CML2_ARTICLE",14=>"CML2_BASE_UNIT",15=>"MORE_PHOTO",17=>"CML2_MANUFACTURER",18=>"CML2_TRAITS",19=>"CML2_TAXES",20=>"FILES",21=>"CML2_ATTRIBUTES",23=>"CML2_BAR_CODE",35=>"MODEL",106=>"BREND",),
                                "SECTION_CODE" => "",
                                "SECTION_ELEMENT_CODE" => "",
                                "SECTION_ELEMENT_ID" => "",
                                "SECTION_ID" => "",
                                "SHOW_DISCOUNT_PERCENT" => "Y",
                                "SHOW_FROM_SECTION" => "N",
                                "SHOW_IMAGE" => "Y",
                                "SHOW_NAME" => "Y",
                                "SHOW_OLD_PRICE" => "Y",
                                "SHOW_PRICE_COUNT" => "1",
                                "SHOW_PRODUCTS_5" => "Y",
                                "TEMPLATE_THEME" => "blue",
                                "USE_PRODUCT_QUANTITY" => "N"
                            )
                        );?>
                </div>
                <a href="" class="jcarousel-control-prev"></a> <a href="" class="jcarousel-control-next"></a>
            </div>
            <!--END jcarousel-wrapper-->
        </div>
        <!--END viewedBlock-->
    </div>
</div>
    <!--END viewedElementBlock-->
    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
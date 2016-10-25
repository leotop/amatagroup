<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
//$[filter]View = (COption::GetOptionString("main", "wizard_template_id", "eshop_adapt_horizontal", SITE_ID) == "eshop_adapt_vertical" ? "HORIZONTAL" : "VERTICAL");
?>
<?
  global $arrFilter;
  $curr_date = mktime(date('d.m.Y G:i:s'));
  $date_create_date = $curr_date - (604800 * 2);
  $arrFilter[] = array(
        ">DATE_CREATE" => date('d.m.Y H:i:s', $date_create_date)
    );
?>
<div class="backgroundColor news_wrap">
    <!--widthWrapper-->
    <div class="widthWrapper">
        <!--productBlockWrapper-->
        <div class="productBlockWrapper">

            <div class="newsBlock">
    <?$APPLICATION->IncludeComponent("bitrix:catalog", "catalog_new_product", Array(
	"IBLOCK_TYPE" => "catalog",	// ��� ���������
		"IBLOCK_ID" => "5",	// ��������
		"TEMPLATE_THEME" => "site",	// �������� ����
		"HIDE_NOT_AVAILABLE" => "L",	// ������, �� ��������� ��� �������
		"BASKET_URL" => "/personal/cart/",	// URL, ������� �� �������� � �������� ����������
		"ACTION_VARIABLE" => "action",	// �������� ����������, � ������� ���������� ��������
		"PRODUCT_ID_VARIABLE" => "id",	// �������� ����������, � ������� ���������� ��� ������ ��� �������
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// �������� ����������, � ������� ���������� ��� ������
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// �������� ����������, � ������� ���������� ���������� ������
		"PRODUCT_PROPS_VARIABLE" => "prop",	// �������� ����������, � ������� ���������� �������������� ������
		"SEF_MODE" => "Y",	// �������� ��������� ���
		"SEF_FOLDER" => "/catalog/news_product/",	// ������� ��� (������������ ����� �����)
		"AJAX_MODE" => "N",	// �������� ����� AJAX
		"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
		"AJAX_OPTION_STYLE" => "N",	// �������� ��������� ������
		"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
		"CACHE_TYPE" => "A",	// ��� �����������
		"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
		"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
		"CACHE_GROUPS" => "N",	// ��������� ����� �������
		"SET_TITLE" => "N",	// ������������� ��������� ��������
		"ADD_SECTION_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",	// �������� �������� �������� � ������� ���������
		"SET_STATUS_404" => "Y",	// ������������� ������ 404
		"DETAIL_DISPLAY_NAME" => "N",	// �������� �������� ��������
		"USE_ELEMENT_COUNTER" => "Y",	// ������������ ������� ����������
		"USE_FILTER" => "Y",	// ���������� ������
		"FILTER_NAME" => "arrFilter",	// ������
		"FILTER_VIEW_MODE" => "VERTICAL",	// ��� ����������� ������ �������
		"FILTER_FIELD_CODE" => array(	// ����
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(	// ��������
			0 => "",
			1 => "",
		),
		"FILTER_PRICE_CODE" => "",	// ��� ����
		"FILTER_OFFERS_FIELD_CODE" => array(	// ���� �����������
			0 => "",
			1 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(	// �������� �����������
			0 => "",
			1 => "",
		),
		"USE_REVIEW" => "N",	// ��������� ������
		"MESSAGES_PER_PAGE" => "10",
		"USE_CAPTCHA" => "Y",
		"REVIEW_AJAX_POST" => "Y",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"FORUM_ID" => "1",
		"URL_TEMPLATES_READ" => "",
		"SHOW_LINK_TO_FORUM" => "Y",
		"USE_COMPARE" => "N",	// ��������� ��������� �������
		"PRICE_CODE" => "",	// ��� ����
		"USE_PRICE_COUNT" => "N",	// ������������ ����� ��� � �����������
		"SHOW_PRICE_COUNT" => "1",	// �������� ���� ��� ����������
		"PRICE_VAT_INCLUDE" => "Y",	// �������� ��� � ����
		"PRICE_VAT_SHOW_VALUE" => "N",	// ���������� �������� ���
		"PRODUCT_PROPERTIES" => "",	// �������������� ������, ����������� � �������
		"USE_PRODUCT_QUANTITY" => "Y",	// ��������� �������� ���������� ������
		"CONVERT_CURRENCY" => "Y",	// ���������� ���� � ����� ������
		"CURRENCY_ID" => "RUB",	// ������, � ������� ����� ��������������� ����
		"QUANTITY_FLOAT" => "N",
		"OFFERS_CART_PROPERTIES" => "",	// �������� �����������, ����������� � �������
		"SHOW_TOP_ELEMENTS" => "N",	// �������� ��� ���������
		"SECTION_COUNT_ELEMENTS" => "N",	// ���������� ���������� ��������� � �������
		"SECTION_TOP_DEPTH" => "1",	// ������������ ������������ ������� ��������
		"SECTIONS_VIEW_MODE" => "LIST",	// ��� ������ �����������
		"SECTIONS_SHOW_PARENT_NAME" => "N",	// ���������� �������� �������
		"PAGE_ELEMENT_COUNT" => "24",	// ���������� ��������� �� ��������
		"LINE_ELEMENT_COUNT" => "3",	// ���������� ���������, ��������� � ����� ������ �������
		"ELEMENT_SORT_FIELD" => "desc",	// �� ������ ���� ��������� ������ � �������
		"ELEMENT_SORT_ORDER" => "asc",	// ������� ���������� ������� � �������
		"ELEMENT_SORT_FIELD2" => "shows",	// ���� ��� ������ ���������� ������� � �������
		"ELEMENT_SORT_ORDER2" => "asc",	// ������� ������ ���������� ������� � �������
		"LIST_PROPERTY_CODE" => array(	// ��������
			0 => "",
			1 => "NEWPRODUCT",
			2 => "SALELEADER",
			3 => "SPECIALOFFER",
			4 => "",
		),
		"INCLUDE_SUBSECTIONS" => "Y",	// ���������� �������� ����������� �������
		"LIST_META_KEYWORDS" => "-",	// ���������� �������� ����� �������� �� �������� �������
		"LIST_META_DESCRIPTION" => "-",	// ���������� �������� �������� �� �������� �������
		"LIST_BROWSER_TITLE" => "-",	// ���������� ��������� ���� �������� �� �������� �������
		"LIST_OFFERS_FIELD_CODE" => array(	// ���� �����������
			0 => "",
			1 => "",
		),
		"LIST_OFFERS_PROPERTY_CODE" => array(	// �������� �����������
			0 => "",
			1 => "ARTNUMBER",
			2 => "COLOR_REF",
			3 => "SIZES_SHOES",
			4 => "SIZES_CLOTHES",
			5 => "",
		),
		"LIST_OFFERS_LIMIT" => "0",	// ������������ ���������� ����������� ��� ������ (0 - ���)
		"DETAIL_PROPERTY_CODE" => array(	// ��������
			0 => "",
			1 => "NEWPRODUCT",
			2 => "MANUFACTURER",
			3 => "",
		),
		"DETAIL_META_KEYWORDS" => "-",	// ���������� �������� ����� �������� �� ��������
		"DETAIL_META_DESCRIPTION" => "-",	// ���������� �������� �������� �� ��������
		"DETAIL_BROWSER_TITLE" => "-",	// ���������� ��������� ���� �������� �� ��������
		"DETAIL_OFFERS_FIELD_CODE" => array(	// ���� �����������
			0 => "",
			1 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(	// �������� �����������
			0 => "",
			1 => "ARTNUMBER",
			2 => "COLOR_REF",
			3 => "SIZES_SHOES",
			4 => "SIZES_CLOTHES",
			5 => "",
		),
		"LINK_IBLOCK_TYPE" => "",	// ��� ���������, �������� �������� ������� � ������� ���������
		"LINK_IBLOCK_ID" => "",	// ID ���������, �������� �������� ������� � ������� ���������
		"LINK_PROPERTY_SID" => "",	// ��������, � ������� �������� �����
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",	// URL �� ��������, ��� ����� ������� ������ ��������� ���������
		"USE_ALSO_BUY" => "N",	// ���������� ���� "� ���� ������� ��������"
		"ALSO_BUY_ELEMENT_COUNT" => "4",
		"ALSO_BUY_MIN_BUYES" => "1",
		"OFFERS_SORT_FIELD" => "shows",	// �� ������ ���� ��������� ����������� ������
		"OFFERS_SORT_ORDER" => "asc",	// ������� ���������� ����������� ������
		"OFFERS_SORT_FIELD2" => "shows",	// ���� ��� ������ ���������� ����������� ������
		"OFFERS_SORT_ORDER2" => "asc",	// ������� ������ ���������� ����������� ������
		"PAGER_TEMPLATE" => ".default",	// ������ ������������ ���������
		"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
		"DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
		"PAGER_TITLE" => "������",	// �������� ���������
		"PAGER_SHOW_ALWAYS" => "N",	// �������� ������
		"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",	// ����� ����������� ������� ��� �������� ���������
		"PAGER_SHOW_ALL" => "N",	// ���������� ������ "���"
		"ADD_PICT_PROP" => "-",	// �������������� �������� ��������� ������
		"LABEL_PROP" => "-",	// �������� ����� ������
		"PRODUCT_DISPLAY_MODE" => "N",	// ����� �����������
		"OFFER_ADD_PICT_PROP" => "-",	// �������������� �������� �����������
		"OFFER_TREE_PROPS" => "",	// �������� ��� ������ �����������
		"SHOW_DISCOUNT_PERCENT" => "Y",	// ���������� ������� ������
		"SHOW_OLD_PRICE" => "N",	// ���������� ������ ����
		"MESS_BTN_BUY" => "������",	// ����� ������ "������"
		"MESS_BTN_ADD_TO_BASKET" => "� �������",	// ����� ������ "�������� � �������"
		"MESS_BTN_COMPARE" => "���������",	// ����� ������ "���������"
		"MESS_BTN_DETAIL" => "���������",	// ����� ������ "���������"
		"MESS_NOT_AVAILABLE" => "��� � �������",	// ��������� �� ���������� ������
		"DETAIL_USE_VOTE_RATING" => "N",	// �������� ������� ������
		"DETAIL_VOTE_DISPLAY_AS_RATING" => "rating",
		"DETAIL_USE_COMMENTS" => "N",	// �������� ������ � ������
		"DETAIL_BLOG_USE" => "Y",
		"DETAIL_VK_USE" => "N",
		"DETAIL_FB_USE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
		"USE_STORE" => "N",	// ���������� ���� "���������� ������ �� ������"
		"USE_STORE_PHONE" => "Y",
		"USE_STORE_SCHEDULE" => "Y",
		"USE_MIN_AMOUNT" => "N",
		"STORE_PATH" => "/store/#store_id#",
		"MAIN_TITLE" => "������� �� �������",
		"MIN_AMOUNT" => "10",
		"DETAIL_BRAND_USE" => "Y",	// ������������ ��������� "������"
		"DETAIL_BRAND_PROP_CODE" => array(	// ������� � ��������
			0 => "",
			1 => "-",
			2 => "BRAND_REF",
			3 => "",
		),
		"SIDEBAR_SECTION_SHOW" => "Y",	// ���������� ������ ���� � ������ �������
		"SIDEBAR_DETAIL_SHOW" => "N",	// ���������� ������ ���� �� ��������� ��������
		"SIDEBAR_PATH" => "/catalog/sidebar.php",	// ���� � ���������� ������� ��� ������ ���������� � ������ �����
		"COMPONENT_TEMPLATE" => "catalog",
		"COMMON_SHOW_CLOSE_POPUP" => "Y",	// ���������� ������ ����������� ������� �� ����������� �����
		"DETAIL_SHOW_MAX_QUANTITY" => "Y",	// ���������� ����� ���������� ������
		"DETAIL_BLOG_URL" => "catalog_comments",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "N",
		"DETAIL_FB_APP_ID" => "",
		"USE_MAIN_ELEMENT_SECTION" => "Y",	// ������������ �������� ������ ��� ������ ��������
		"SET_LAST_MODIFIED" => "N",	// ������������� � ���������� ������ ����� ����������� ��������
		"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
		"USE_SALE_BESTSELLERS" => "N",	// ���������� ������ ������� ������
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// ��������� � ������� �������� ������� � �����������
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",	// ��������� ��������� � ������� ������, � ������� ��������� �� ��� ��������������
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "Y",	// ���������� ��������� ������ ������ ���������� � ������� ��� ������� �� ���� ���������
		"COMMON_ADD_TO_BASKET_ACTION" => "BUY",	// ���������� ������ ���������� � ������� ��� �������
		"TOP_ADD_TO_BASKET_ACTION" => "BUY",	// ���������� ������ ���������� � ������� ��� ������� �� �������� � top'�� �������
		"SECTION_ADD_TO_BASKET_ACTION" => "BUY",	// ���������� ������ ���������� � ������� ��� ������� �� �������� ������ �������
		"DETAIL_ADD_TO_BASKET_ACTION" => "",	// ���������� ������ ���������� � ������� � ������� �� ��������� �������� ������
		"DETAIL_SHOW_BASIS_PRICE" => "Y",	// ���������� �� ��������� �������� ���� �� ������� ������
		"SECTIONS_HIDE_SECTION_NAME" => "N",
		"DETAIL_SET_CANONICAL_URL" => "N",	// ������������� ������������ URL
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",	// ������������ ��� ������ �� ����������, ���� �� ����� ������ ��������
		"SHOW_DEACTIVATED" => "N",	// ���������� ���������������� ������
		"DETAIL_DETAIL_PICTURE_MODE" => "IMG",	// ����� ������ ��������� ��������
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "Y",	// ��������� ��������� �������� � �������
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "H",	// ����� �������� ��� ������ �� ��������� ��������
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
		"USE_BIG_DATA" => "N",	// ���������� ������������ ������������
		"BIG_DATA_RCM_TYPE" => "bestsell",
		"PAGER_BASE_LINK_ENABLE" => "N",	// �������� ��������� ������
		"SHOW_404" => "N",	// ����� ����������� ��������
		"MESSAGE_404" => "",	// ��������� ��� ������ (�� ��������� �� ����������)
		"SECTION_BACKGROUND_IMAGE" => "-",	// ���������� ������� �������� ��� ������� �� ��������
		"DETAIL_BACKGROUND_IMAGE" => "-",	// ���������� ������� �������� ��� ������� �� ��������
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",	// �� ���������� js-���������� � ����������
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",	// �������� ���������� ���������� � ��������� ������ �� ��������� �������� ��� ������ ��������
		"CACHE_NOTES" => "",
		"USE_GIFTS_DETAIL" => "N",	// ���������� ���� "�������" � ��������� ���������
		"USE_GIFTS_SECTION" => "Y",	// ���������� ���� "�������" � ������
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",	// ���������� ���� "������ � �������" � ��������� ���������
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "3",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_BLOCK_TITLE" => "�������� ���� �� ��������",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "�������",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "3",	// ���������� ��������� � ����� "�������" ������ � ������
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",	// ������ ��������� "�������" � ������
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "������� � ������� ����� �������",	// ����� ��������� "�������" � ������
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "�������",	// ����� ����� "�������" � ������
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",	// ���������� ������� ������
		"GIFTS_SHOW_OLD_PRICE" => "Y",	// ���������� ������ ����
		"GIFTS_SHOW_NAME" => "Y",	// ���������� ��������
		"GIFTS_SHOW_IMAGE" => "Y",	// ���������� �����������
		"GIFTS_MESS_BTN_BUY" => "�������",	// ����� ������ "�������"
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "3",	// ���������� ��������� � ����� "������ � �������" � ������ � ��������� ���������
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",	// ������ ��������� "������ � �������" � ��������� ���������
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "�������� ���� �� �������, ����� �������� �������",	// ����� ��������� "������ � �������"
		"INSTANT_RELOAD" => "N",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "#ELEMENT_CODE#/",
			"compare" => "compare/",
			"smart_filter" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/",
		)
	),
	false
);?>

            </div>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?php
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

    /**
    * @global CMain $APPLICATION
    */

    global $APPLICATION;

    //delayed function must return a string
    if(empty($arResult))
        return "";

    $strReturn = '';    
    $strReturn .= '<div class="breadcrumb">';

    $itemSize = count($arResult);
    for($index = 0; $index < $itemSize; $index++) {
        $title = htmlspecialcharsex($arResult[$index]["TITLE"]);

        $nextRef = ($index < $itemSize-2 && $arResult[$index+1]["LINK"] <> ""? ' itemref="bx_breadcrumb_'.($index+1).'"' : '');
        $child = ($index > 0? ' itemprop="child"' : '');
        $arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');

        if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1) {
            $strReturn .= '
            <span>
            <a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="url">'.$title.'</a>
            </span>';
        } else {
            $strReturn .= '
            <span class="lasrBreadCrump">
            <a href="'.$arResult[$index]["LINK"].'">
            '.$title.'
            </a>
            </span>';
        }
    }

    $strReturn .= '</div>';

    return $strReturn;





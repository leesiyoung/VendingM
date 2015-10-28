<?php
/**
 * Created by PhpStorm.
 * User: JongYoon
 * Date: 2015-10-26
 * Time: ���� 1:29
 */



function search_product($argCode)
{
    $qurey = "select * from product where code in(select p_code from stock_001 where p_code = $argCode)";
    $valueTemp = getDBValue(transmit_query(DB_Connect(), $qurey));
}

function search_sales(){

}

function search_bills(){

}


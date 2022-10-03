<?php

    function format_price($price){

        $newprice = "0";

        
        if(isset($price) && !empty($price)){
            $newprice = number_format($price, 2, ".", ",");
        }


        return $newprice;
    }

    // echo format_price("0");

?>
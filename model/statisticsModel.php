<?php
    function dataDoneOrder() {
        $arr = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $arrMonth = ["January", "February","March","April","May","June","July","August","September","October","November","December",];
        for($i = 0; $i < count($arr); $i++) {
            $sql = "select SUM(b.quantityProduct) FROM buy as b WHERE b.isCompleted = 3 and buyDate like '%".$arrMonth[$i]."%'";
            $value = pdo_query_value($sql);
            if($value == null) {
                $value = 0;
            }
            $arr[$i] = $value;
        }
        return $arr;
    }


    function dataTotalAmountDoneOrder() {
        $arr = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $arrMonth = ["January", "February","March","April","May","June","July","August","September","October","November","December",];
        for($i = 0; $i < count($arr); $i++) {
            $sql = "select SUM(b.totalAmount) FROM buy as b WHERE b.isCompleted = 3 and buyDate like '%".$arrMonth[$i]."%'";
            $value = pdo_query_value($sql);
            if($value == null) {
                $value = 0;
            }
            $arr[$i] = $value;
        }
        return $arr;
    }

    function dataAVGProduct() {
        $arr = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $arrMonth = ["January", "February","March","April","May","June","July","August","September","October","November","December",];
        for($i = 0; $i < count($arr); $i++) {
            $sql = "select AVG(b.quantityProduct) FROM buy as b WHERE b.isCompleted = 3 and buyDate like '%".$arrMonth[$i]."%'";
            $value = pdo_query_value($sql);
            if($value == null) {
                $value = 0;
            }
            $arr[$i] = $value;
        }
        return $arr;
    }

    function dataAVGAmount() {
        $arr = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $arrMonth = ["January", "February","March","April","May","June","July","August","September","October","November","December",];
        for($i = 0; $i < count($arr); $i++) {
            $sql = "select AVG(b.totalAmount) FROM buy as b WHERE b.isCompleted = 3 and buyDate like '%".$arrMonth[$i]."%'";
            $value = pdo_query_value($sql);
            if($value == null) {
                $value = 0;
            }
            $arr[$i] = $value;
        }
        return $arr;
    }
?>
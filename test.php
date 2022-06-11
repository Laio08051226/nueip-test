<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nueip_test</title>
</head>
<body>
    <h1>上機測驗-物件&演算法</h1>
    <h2>一、物件導向-繼承/介面</h2>
    <p>今有車輛「汽車」和「機車」，請使用物件的繼承/介面描述二者相同與差異，及二物件的執行程式碼</p>
    <?php
        //車輛介面
        interface VehicleInterface {
            function setUp(); //共同規則 啟動方式
        }

        // 汽車物件
        class Car implements VehicleInterface{
            function setUp() {
                echo "汽車啟動";
            }
        }
        // 機車物件
        class Scooter implements VehicleInterface{
            function setUp() {
                echo "機車啟動";
            }
        }
        // 車輛物件
        class Vehicle {
            function setUpNow(VehicleInterface $vehicleType) {
                $vehicleType->setUp();
            }
        }
        $vehicleType = new Scooter();
        $vehicle = new Vehicle();
        $vehicle->setUpNow($vehicleType);
        //介面可以建立共同規則的方式，繼承只能繼承父class的方法
    ?>
    <h2>二、資料處理-字串</h2>
    <?php
        $str = "人易科技:上 機 測 驗 - 演算法";
        $str = getString($str);
        function getString($str) {
            // 1.字元「:」改成全型
            $str = str_replace(":","：",$str);
            // 2.去掉中文字間的空白(保留-號二側空白)
            $pattern = '/\s+/';
            $str = preg_replace($pattern, '', $str, 3);
            // 3. 列印出符號:到-之間的字元
            $indexStart = (strpos($str,"："))+3;
            $indexEnd = (strpos($str,"-"));
            $length = $indexEnd - $indexStart;
            $str = substr($str,$indexStart,$length);
            return $str;
        }
        echo $str;
    ?>
    <h2>三、資料處理-陣列</h2>
    <?php
    $numArr = array("0","1","2","3","4","5","6","7","8","9");
    $oddArr = array();
    $evenArr = array();
    $sum=0;
    for ($i=0; $i<count($numArr); $i++) {
        if ($numArr[$i]%2==1) {
            array_push($oddArr,$numArr[$i]);
            $sum+=$numArr[$i];
        } else {
            array_push($evenArr,$numArr[$i]);
            $sum-=$numArr[$i];
        }
    }
    echo "<br>";
    echo "Q1:".$sum."<br>";
    echo "Q2:<br>";
    echo "偶數陣列:<br>";
    print_r($evenArr);
    echo "奇數陣列:<br>";
    print_r($oddArr);
    ?>
</body>
</html>

<?php
?>
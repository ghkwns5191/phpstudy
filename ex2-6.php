<?php
    $pay = 5000;
    $price = 1000;
    $qty = 3;

    $change = $pay - $price * $qty;
    
    echo "지불금액 : $pay<br>";
    echo "구매수량 : $qty<br>";
    echo "구매가격 : $price<br>";
    echo "거스름돈 : $change";

?>
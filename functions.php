<?php
    function getPrice($price) {
      $ceil_price = ceil($price);
      $fromated_price = $ceil_price <= 1000 ? $ceil_price : number_format($ceil_price, 0, ',', ' ');
      $rouble = ' <b class="rub">р</b>';

      return strval($fromated_price) . $rouble;
    };
?>

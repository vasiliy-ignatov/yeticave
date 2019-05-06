<?php
/**
 * Форматирует переданное число, к стилю цены с разделитем тысяч и знаком рубля
 * @param string $price Число в виде строки
 * @return string Результат со знаком рубля и проблелами
 */
function getPrice($price) {
    $ceil_price = ceil($price);
    $fromated_price = $ceil_price <= 1000 ? $ceil_price : number_format($ceil_price, 0, ',', ' ');
    $rouble = ' <b class="rub">р</b>';

    return strval($fromated_price) . $rouble;
};

/**
 * Возвращает разницу между сутками в формате 'ЧЧ:MM'
 * @param string $date_current флаг для таймштампа меньшей даты
 * @param string $date_next флаг для таймштампа будущей даты
 * @return string Итоговая строка
*/
function getRestTime($date_current, $date_next) {
    $rest_in_seconds = strtotime($date_next) - strtotime($date_current);

    return floor($rest_in_seconds / 3600) .':'. floor($rest_in_seconds / 60 % 60);
};

/**
 * Проверяет разницу времени между двумя датами
 *
 * @param string $date_current флаг для таймштампа меньшей даты
 * @param string $date_next флаг для таймштампа будущей даты
 * @return bool true если разница меньше 60 минут
*/
function isLastHour($date_current, $date_next) {
    $rest_in_seconds = strtotime($date_next) - strtotime($date_current);
    $rest_in_minutes = floor($rest_in_seconds / 60);

    return $rest_in_minutes <= 60;
};
?>

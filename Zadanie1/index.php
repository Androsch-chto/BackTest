<?php
if(ctype_digit($_POST['year']) && intval($_POST['year']) != 0) {
    $year = intval($_POST['year']);
    if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0) {
        $result = 'Да';
    } else {
        $result = 'Нет';
    }
}
else{
    $result = 'Ошибка входных данных';
}

header('Content-Type: text/json; charset=utf-8');

echo json_encode($result);



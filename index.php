<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>DZ_3-2</title>
</head>

<body>

    <?php 
    echo '<b>TASK 1</b></br>';
    $a = 10;
    echo ($a == 10) ? 'верно' : 'не верно';

    echo '</br></br><b>TASK 2</b></br>';
    $a = '1';
    echo ($a == '1') ? 'верно' : 'не верно','</br>';
    echo ($a == 1) ? 'верно' : 'не верно','</br>';
    echo ($a == 3) ? 'верно' : 'не верно';

    echo '</br></br><b>TASK 3</b></br>';
    $a = '';
    echo ($a == 1) ? 'верно' : 'не верно','</br>';
    echo ($a == 3) ? 'верно' : 'не верно','</br>';
    echo ($a == -3) ? 'верно' : 'не верно','</br>';
    echo ($a == 0) ? 'верно' : 'не верно','</br>';
    echo ($a == NULL) ? 'верно' : 'не верно','</br>';
    echo ($a == true) ? 'верно' : 'не верно','</br>';
    echo ($a == '') ? 'верно' : 'не верно','</br>';
    echo ($a == '0') ? 'верно' : 'не верно';


    echo '</br></br><b>TASK 4</b></br>';
    $a;
    echo ($a == 3) ? 'верно' : 'не верно','</br>';
    echo ($a == NULL) ? 'верно' : 'не верно';

    echo '</br></br><b>TASK 5</b></br>';
    $a = 10;
    echo $a%3,'</br>';
    echo $a%5;

    echo '</br></br><b>TASK 6</b></br>';
    $a = 9;
    if ($a >= 10) {
        echo $a*100;
    } else {
        echo $a/30;
    }

    echo '</br></br><b>TASK 7</b></br>';
    $a = 954;
    $b = (string)$a;
    $b[1] = 0;
    echo +$b;

    echo '</br></br><b>TASK 8</b></br>';
    $a = 5;
    $b = 0;
    $c = -3;
    $d = 2;
    for ($i=0; $i<5; $i++) {
        if ($a == $i) {
            echo 'верно','</br>';
        } elseif ($b == $i) {
            echo 'верно','</br>';
        } elseif ($c == $i) {
            echo 'верно','</br>';
        } elseif ($d == $i) {
            echo 'верно','</br>';
        } else {
            echo 'не верно','</br>';
        }
    }

    echo '</br></br><b>TASK 9</b></br>';
    $a = 1;
    $b = 3;
    if ($a <= 1 && $b >=3) {
        echo $a + $b;
    } else {
        echo $a - $b;
    }
    echo '</br>';
    $a = 0;
    $b = 6;
    if ($a <= 1 && $b >=3) {
        echo $a + $b;
    } else {
        echo $a - $b;
    }
    echo '</br>';
    $a = 3;
    $b = 5;
    if ($a <= 1 && $b >=3) {
        echo $a + $b;
    } else {
        echo $a - $b;
    }

    echo '</br></br><b>TASK 10</b></br>';
    $a = 4;
    $b = 9;
    $c = 7;
    echo ($a + $b + $c) / 3 ,'</br>';
    echo (($a + $c) * 2) - ($a + $b) ,'</br>';
    echo $b * 3;

    echo '</br></br><b>TASK 11</b></br>';
    $c = 21;
    echo (9/5)*$c+32;

    echo '</br></br><b>TASK 12</b></br>';
    $string = 'abcde';
    echo ($string[0] == 'a') ? 'да' : 'нет';

    echo '</br></br><b>TASK 13</b></br>';
    $a = 16;
    $b = 7;
    echo ($a >= 30 || $b >= 30) ? 'yes' : 'no';

    echo '</br></br><b>TASK 14</b></br>';
    $a = 9;
    $b = 6;
    $c = 12;
    $d = 6;
    echo $a > 5 && $b > 5 && $c%6 && !$d%3 ? 'yes' : 'no';

    echo '</br></br><b>TASK 15</b></br>';
    for ($i=0; $i<10; $i++) {
    echo $i . 'You are welcome!</br>';
    }

    echo '</br></br><b>TASK 16</b></br>';
    $a = 734437;
    $b = (string)$a;
    $c = +$b[0] + +$b[1] + +$b[2];
    $d = +$b[3] + +$b[4] + +$b[5];
    echo ($c == $d) ? 'да' : 'нет';

    echo '</br></br><b>TASK 17</b></br>';
    $a = 9;
    $b = 6;
    $c = 12;
    
    $s = 0;
    if ($a > 0){$s += 1;}
    if ($b > 0){$s += 1;}
    if ($c > 0){$s += 1;}
    echo $s;

    echo '</br></br><b>TASK 18</b></br>';
    $num = 3;
    switch ($num) {
        case 1:
            echo 'Зима';
        break;
        case 2:
            echo 'Весна';
        break;
        case 3:
            echo 'Лето';
        break;
        case 4:
            echo 'Осень';
        break;
        default:
            echo 'Введите число от 1 до 4';
        break;
    }

    echo '</br></br><b>TASK 19</b></br>';
    $year = 2020;
    echo $year%4 && !$year%100 || $year%400 ? 'Високосный' : 'Невисокосный';

    echo '</br></br><b>TASK 20</b></br>';
    $lang = 'ru';
    $arrru = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
    $arren = ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'];
    switch ($lang) {
        case 'ru':
            foreach($arrru as $value) {
                echo $value . '</br>';
            }
        break;
        case 'en':
            echo '<pre>';
            print_r($arren);
            echo '</pre>';
        break;
        default:
            echo 'Введите ru или en';
        break;
    }

    echo '</br></br><b>TASK 21</b></br>';
    $degree = 157;
    $ch = round($degree / 30);
    $mii = round($degree / 30, 2);
    if (!$degree%30) {$mii = 0;}
    else {$mi = explode(".", $mii);}
    echo $ch, ':', round($mi[1]*0.6, 0) ;
// почему не работает время 150, 180 и тд ? 
    
    // echo '</br></br><b>TASK 22</b></br>';
    // $num = 10;
    // echo $num%4 && $num%5 && $num%6 ? 'Красный' : 'Зелёный';
    // Не успел я дальше сделать, если будет время доделаю, для себя.







    ?>

</body>
</html>
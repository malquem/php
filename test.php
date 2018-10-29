<?php
$substring = substr($string, $start, $length);
$username = substr($_REQUEST['username'], 0, 8);
print substr('watch out for that treee', 6, 7);
// out for

//Все, начиная с позиции $start до конца строки $old_string,
// заносится в $new_substring
$new_string = substr_replace($old_string, $new_string, $new_substring, $start);

// $length символов, начиная с позиции $start, заменяется на $new_substring
$new_string = substr_replace($old_string, $new_substring, $start, $length);

$string = "This weekend, I'm going shooping for a pet chiken.";
$vowels = 0;
for ($i = 0, $j = strlen($string); $i < $j; $i++) {
    if (strstr('aeiouAEIOU', $string[$i])) {
        $vowels++;
    }

}
print strrev('This is not a palindrome.');

$s = "Once upon a time there was a turtle.";
// разбиваем строку на слвоа
$words = explode(' ', $s);
// обраешаем массив слов
$words = array_reverse($words);
// $s = join(' ', $words);
print $s;
echo '<br/>';

print ucfirst("how do you do today?");
print ucwords("the prince of wales");
echo '<br/>';

$delta = 0.00001;

$a = 1.00000001;
$b = 1.00000000;
if (abs($a - $b) < $delta);
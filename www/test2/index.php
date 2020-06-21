<?php

$s = 'Example Text String';

/* Заменить все буквы T на N, вывести результат на экран. */
$str = str_replace('T', 'N', $s);

echo $str;

/* Разбить строку $s на слова и поместить эти слова в массив. Вывести полученный массив на экран. */
$str = explode(' ', $s);

echo'<pre>';
print_r($str);
echo'</pre>';

/* Написать функцию, которая получает в качестве входного параметра строку, и делает все строчные буквы в ней прописными, а прописные — строчными. */

function transform($str) {
	$length = strlen($str);
	for ($i = 0; $i <= $length-1; $i++) {
		$str[$i] = (ctype_upper($str[$i]))
			? mb_strtolower($str[$i])
			: mb_strtoupper($str[$i])
		;
		yield $str[$i];
	}
}

$generator = transform($s);
foreach ($generator as $value) {
	echo $value;
}

/* Написать функцию, которая производит замену строки $s на значение, переданное программе в качестве GET-параметра. */

function replacementFromGetRequest(&$s) {
	if (empty($_GET['str'])) {
		throw new Exception('Нет GET параметра: str');
	}
	$s = $_GET['str'];
}

try {
	replacementFromGetRequest($s);
	echo "<br><br>" . $s;
} catch (Exception $e) {
	echo '<br><br>Выброшено исключение: ',  $e->getMessage(), "\n";
}





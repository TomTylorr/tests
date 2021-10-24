<?php
require ("src/StringsUnits.php");

if (StringsUnits\capitalize('hello') !== 'Hello') {
  throw new \Exception('Функция работает неверно!');
}

if (StringsUnits\capitalize('') !== '') {
  throw new \Exception('Функция работает неверно!');
}


echo 'Все тесты пройдены!';
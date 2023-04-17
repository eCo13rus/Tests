<?php

require_once __DIR__ . "/../src/StringUtils.php";
require_once "vendor/autoload.php";

use Webmozart\Assert\Assert;
use function StringUtils\capitalize;

if (StringUtils\capitalize('hello') !== 'Hello') {
    throw new \Exception('Функция работает неверно!');
}

if (StringUtils\capitalize('') !== '') {
    throw new \Exception('Функция работает неверно!');
}


Assert::eq(capitalize('hello'), 'Hello');
Assert::notEq(true, false);

echo 'Все тесты пройдены!';

?>
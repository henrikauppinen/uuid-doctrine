<?php

xdebug_start_code_coverage(XDEBUG_CC_UNUSED | XDEBUG_CC_DEAD_CODE);

include dirname(__FILE__).'/vendor/autoload.php';

use Doctrine\DBAL\Types\Type;

Type::addType('uuid_binary', 'Ramsey\Uuid\Doctrine\UuidBinaryType');
$type = Type::getType('uuid_binary');

$xdebugData = xdebug_get_code_coverage();

print_r(
    $xdebugData
);
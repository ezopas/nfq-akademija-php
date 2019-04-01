<?php

require "vendor/autoload.php";
//require "src/functions.php";

echo calculateHomeWorkSum(3, 2.2, '1') . PHP_EOL;
echo Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3, 2.2, '1') . PHP_EOL;
echo Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1') . PHP_EOL;
echo Nfq\Akademija\Strict\callerToStrict(3, 2.2, '1') . PHP_EOL;

<?php

declare(strict_types=1);

namespace Nfq\Akademija\Strict {
    function calculateHomeWorkSum(int ... $numbers) : int{
        $sum = 0;
        foreach($numbers as $numb){
            $sum += $numb;
        }
        echo "Nfq\Akademija\Strict\calculateHomeWorkSum";
        return $sum;
    }

    function callerToStrict(){
        calculateHomeWorkSum(3, 2.2, '1');
    }
}

?>
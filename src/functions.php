<?php

namespace {
    function calculateHomeWorkSum(... $numbers){
        $sum = 0;
        foreach($numbers as $numb){
            $sum += $numb;
        }
        echo "calculateHomeWorkSum: ";
        return $sum;
    }
}

namespace Nfq\Akademija\Not_Typed{
    function calculateHomeWorkSum(... $numbers): int{
        $sum = 0;
        foreach($numbers as $numb){
            $sum += $numb;
        }
        echo "Nfq\Akademija\Not_Typed\calculateHomeWorkSum: ";
        return $sum;
    }
}

namespace Nfq\Akademija\Soft{
    function calculateHomeWorkSum(int ... $numbers): int{
        $sum = 0;
        foreach($numbers as $numb){
            $sum += $numb;
        }

        echo "Nfq\Akademija\Soft\calculateHomeWorkSum: ";
        return $sum;
    }
}

?>
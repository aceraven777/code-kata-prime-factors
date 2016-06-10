<?php

class PrimeFactors
{

    public function generate($number)
    {
        $primes = [];

        if ($number <= 1) {
            return $primes;
        }
        
        for ($factor = 2; $number > 1; $factor++) {
            for (; $number % $factor == 0; $number /= $factor) {
                $primes[] = $factor;
            }
        }

        return $primes;
    }

}

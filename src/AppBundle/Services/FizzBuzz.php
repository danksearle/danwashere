<?php 

namespace AppBundle\Services;

class FizzBuzz
{
    /**
     * Return an array or integers and strings containing the answers for FizzBuzz for the numbers 1 to 100.
     * @return array
     */
    public function getFizzBuzzArray(){

        $return = array();

        for($n = 1; $n <= 100; $n++){
            if($n % 5 == 0 && $n % 3 == 0){
                $return[] = 'FizzBuzz';
            }else if($n % 5 == 0) {
                $return[] = 'Buzz';
            }else if($n % 3 == 0){
                $return[] = 'Fizz';
            }else{
                $return[] = $n;
            }
        }

        return $return;
    }
}

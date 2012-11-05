<?php

class StringLimit {
    
    public function __construct() {
        
    }
    
    public function sliceString($string, $limit) {
        $arrayString = explode(' ', $string);
        $return = '';
        $count = count($arrayString);
        for ($i = 0; $i < $count; $i++) {
            $spaces = ($i < 2) ? 0 : $i-1;
            if (strlen($return.$arrayString[$i])+$spaces < $limit){
                $return .= (strlen($return) > 0) ? ' '.$arrayString[$i] : $arrayString[$i];
            }else {
                return $return;
            }
        }
    }
}

?>
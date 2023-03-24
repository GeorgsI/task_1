<?php
namespace classes;

class Formatting {
    function formatting($number){ 
        $pattern = '/^(\d{3})(\d{2})(\d{3})(\d{2})(\d{2})$/';
        $replacement = '+\1(\2)\3-\4-\5';
        $out = preg_replace($pattern, $replacement, (string)$number);
        
        return $out; 
    }  
}

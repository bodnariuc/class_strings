<?php

class StringsBodnariuc {
    
    public static function substrBodnariuc() {
        $string = 'abcdef';
        $start = -3;
        return substr($string, $start);
    }
    
    public static function substr_replaceBodnariuc() {
        $string = 'abcdef';
        $replacement = '666';
        $start = 1;
        $end = 3; 
        return substr_replace($string, $replacement, $start, $end);
    }
    
    public static function strtrBodnariuc() {
        $string = 'ababba';
        $trans = array("ab" => "01");
        return strtr($string, $trans);
    }
    
    public static function strtoupperBodnariuc() {
        $string = "ahoj";
        return strtoupper($string);
    }
    
    public static function strtolowerBodnariuc() {
        $string = "Ahoj";
        return strtolower($string);
    }
    
    public static function strrposBodnariuc() {
        $string = "Ahoj";
        $hledanaVec = "ho";
        return strrpos($string, $hledanaVec);
    }

    public static function strriposBodnariuc() {
        $string = "Ahoj";
        $hledanaVec = "ho";
        return strripos($string, $hledanaVec);
    }

    public static function strposBodnariuc() {
        $string = "Ahoj";
        $hledanaVec = "h";
        return strpos($string, $hledanaVec);
    }

    public static function strlenBodnariuc() {
        $string = "Test";
        return strlen($string);
    }

    public static function strchrBodnariuc() {
        $string = "Co ja vim";
        $needle = "vim";
        return strchr($string, $needle);
    }
 
    public static function str_replaceBodnariuc() {
        $search = array('A', 'B', 'C', 'D', 'E', 'F');
        $replace = array('B', 'C', 'D', 'E', 'F', 'G');
        $subject = 'A';
        return str_replace($search, $replace, $subject);
    }
 
    public static function md5Bodnariuc() {
        $string = 12345;
        return md5($string);
    }

    public static function implodeBodnariuc() {
        $glue = array('jmeno', 'prijmeni', 'cislo');
        $doplneni = " , ";
        return implode($glue, $doplneni);
    }

    public static function explodeBodnariuc() {
        $delimiter = '""';
        $string = "jmeno prijmeni cislo"; 
        return explode($delimiter, $string);
    }

    public static function addcslashesBodnariuc() {
        $str = "Nevim co sem psat";
        $charlist = 'A..z'; 
        return addcslashes($str, $charlist);
    }

    public static function addslashesBodnariuc() {
        $string = "Co ja' vim"; 
        return addslashes($string);
    }

    public static function trimBodnariuc() {
        $string = "\atrimtest\a";
        $string2 = "\a";
        return trim($string, $string2);
    }

    public static function ucfirstBodnariuc() {
        $string = "ahoj";  
        return ucfirst($string);
    }

    public static function ucwordsBodnariuc() {
        $string = "Co ja vim"; 
        return ucwords($string);
    }
}
var_dump(StringsBodnariuc::substrBodnariuc());
var_dump(StringsBodnariuc::substr_replaceBodnariuc());
var_dump(StringsBodnariuc::strtrBodnariuc());
var_dump(StringsBodnariuc::strtoupperBodnariuc());
var_dump(StringsBodnariuc::strtolowerBodnariuc());
var_dump(StringsBodnariuc::strrposBodnariuc());
var_dump(StringsBodnariuc::strriposBodnariuc());
var_dump(StringsBodnariuc::strposBodnariuc());
var_dump(StringsBodnariuc::strlenBodnariuc());
var_dump(StringsBodnariuc::strchrBodnariuc());
var_dump(StringsBodnariuc::str_replaceBodnariuc());
var_dump(StringsBodnariuc::md5Bodnariuc());
var_dump(StringsBodnariuc::implodeBodnariuc());
var_dump(StringsBodnariuc::explodeBodnariuc());
var_dump(StringsBodnariuc::addcslashesBodnariuc());
var_dump(StringsBodnariuc::addslashesBodnariuc());
var_dump(StringsBodnariuc::trimBodnariuc());
var_dump(StringsBodnariuc::ucfirstBodnariuc());
var_dump(StringsBodnariuc::ucwordsBodnariuc());
?>


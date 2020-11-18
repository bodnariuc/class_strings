<?php

declare(strict_types = 1);

class StringsLukasBodnariuc{
    
    /**
     * 
     * @param string $retezec
     * @param int $pozice
     * @return type
     */
    public static function substrLukasBodnariuc(string $retezec, int $pozice) {
        
        return substr($retezec, $pozice);
    }
    
    /**
     * 
     * @param string $retezec
     * @param string $retezec2
     * @param int $zacatek
     * @param type $konec
     * @return string
     */
    public static function substr_replaceLukasBodnariuc(string $retezec, string $retezec2, int $zacatek, $konec = NULL): string {
        
        if (is_null($konec)) {
            return substr_replace($retezec, $retezec2, $zacatek);
        }
        else {
            return substr_replace($retezec, $retezec2, $zacatek, $konec); 
        }
    }
    
    /**
     * 
     * @param string $retezec
     * @param string $z_retezce
     * @param string $do_retezce
     * @return string
     */
    public static function strtrLukasBodnariuc(string $retezec, string $z_retezce, string $do_retezce): string {
        
        return strtr($retezec, $z_retezce, $do_retezce);
    }
    
    /**
     * 
     * @param string $retezec
     * @return string
     */
    public static function strtoupperLukasBodnariuc(string $retezec): string {
        
        return strtoupper($retezec);
    }
    
    /**
     * 
     * @param string $retezec
     * @return string
     */
    public static function strtolowerLukasBodnariuc(string $retezec): string {
        
        return strtolower($retezec);
    }
    
    /**
     * 
     * @param string $retezec
     * @param string $podretezec
     * @param type $pozice
     * @return int
     */
    public static function strrposLukasBodnariuc(string $retezec, string $podretezec, $pozice = NULL): int {
        
        if (is_null($pozice)){
            return strrpos($retezec, $podretezec);
        }
        else {
            return strrpos($retezec, $podretezec, $pozice);
        }
    }
    
    /**
     * 
     * @param string $retezec
     * @param string $podretezec
     * @param type $pozice
     * @return type
     */
    public static function strriposLukasBodnariuc(string $retezec, string $podretezec, $pozice = NULL) {
        
        if (is_null($pozice)){
            return strripos($retezec, $podretezec);
        }
        else {
            return strripos($retezec, $podretezec, $pozice);
        }
    }
    
    /**
     * 
     * @param string $retezec
     * @param string $podretezec
     * @param type $pozice
     * @return type
     */
    public static function strposLukasBodnariuc(string $retezec, string $podretezec, $pozice = NULL) {
        
        if (is_null($pozice)){
            return strpos($retezec, $podretezec);
        }
        else {
            return strpos($retezec, $podretezec, $pozice);
        }
    }
        
    /**
     * 
     * @param string $retezec
     * @return int
     */
    public static function strlenLukasBodnariuc(string $retezec): int {
        
        return strlen($retezec);
    }
    
    /**
     * 
     * @param string $retezec
     * @param string $retezec2
     * @param type $zarazka
     * @return string
     */
    public static function strchrLukasBodnariuc(string $retezec, string $retezec2, $zarazka=FALSE): string {
        
        if ($zarazka){
            return strchr($retezec, $retezec2, $zarazka);
        }
        else {
            return strchr($retezec, $retezec2);
        }
    }
    
    /**
     * 
     * @param string $vyhledavano
     * @param string $nahrazovano
     * @param string $retezec
     * @param type $pocet
     * @return string
     */
    public static function str_replaceLukasBodnariuc(string $vyhledavano, string $nahrazovano, string $retezec, $pocet=NULL): string {
        
        if (is_null($pocet)){
            return str_replace($vyhledavano, $nahrazovano, $retezec);
        }
        else {
            return str_replace($vyhledavano, $nahrazovano, $retezec, $pocet);
        }
    }
    
    /**
     * 
     * @param string $retezec
     * @return string
     */
    public static function md5LukasBodnariuc(string $retezec): string {
        
        return md5($retezec);
    }
    
    /**
     * 
     * @param string $separator
     * @param array $pole
     * @return string
     */
    public static function implodeLukasBodnariuc(string $separator, array $pole): string {
        
        return implode($separator, $pole);
    }
    
    /**
     * 
     * @param string $separator
     * @param string $retezec
     * @return array
     */
    public static function explodeLukasBodnariuc(string $separator, string $retezec): array {
        
        return explode($separator, $retezec);
    }
    
    /**
     * 
     * @param string $retezec
     * @param string $char_list
     * @return string
     */
    public static function addcslashesLukasBodnariuc(string $retezec, string $char_list): string {
        
        return addcslashes($retezec, $char_list);
    }
    
    /**
     * 
     * @param string $retezec
     * @return string
     */
    public static function addslashesLukasBodnariuc(string $retezec): string {
        
        return addslashes($retezec);
    }
    
    /**
     * 
     * @param string $retezec
     * @return string
     */
    public static function trimLukasBodnariuc(string $retezec): string {
        
        return trim ($retezec);
    }
    
    /**
     * 
     * @param string $retezec
     * @return string
     */
    public static function ucfirstLukasBodnariuc(string $retezec): string {
        
        return ucfirst($retezec);
    }
    
    /**
     * 
     * @param string $retezec
     * @return string
     */
    public static function ucwordsLukasBodnariuc(string $retezec): string {
        
        return ucwords($retezec);
    }
}

?>

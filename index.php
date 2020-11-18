<?php

include("class_strings.php");

var_dump(StringsLukasBodnariuc::substrLukasBodnariuc("Randomtext", 6));
var_dump(StringsLukasBodnariuc::substr_replaceLukasBodnariuc("Cojavimcosempsat", "000", 3, 3));
var_dump(StringsLukasBodnariuc::strtrLukasBodnariuc("Nejakejrandomtext", "random", "divnej"));
var_dump(StringsLukasBodnariuc::strtoupperLukasBodnariuc("ahoj"));
var_dump(StringsLukasBodnariuc::strtolowerLukasBodnariuc("Nazdar"));
var_dump(StringsLukasBodnariuc::strrposLukasBodnariuc("Hodnedivnejbarak", "divnej"));
var_dump(StringsLukasBodnariuc::strriposLukasBodnariuc("barak", "rak"));
var_dump(StringsLukasBodnariuc::strposLukasBodnariuc("zahrada", "Hra"));
var_dump(StringsLukasBodnariuc::strlenLukasBodnariuc("Baf"));
var_dump(StringsLukasBodnariuc::strchrLukasBodnariuc("randommail@gmail.com", "@", TRUE));
var_dump(StringsLukasBodnariuc::str_replaceLukasBodnariuc("bez", "bezhlubsiho", "textbezvyznamu"));
var_dump(StringsLukasBodnariuc::md5LukasBodnariuc("Kocka"));
var_dump(StringsLukasBodnariuc::implodeLukasBodnariuc(" & ", ["ananas", "banan", "meloun"]));
var_dump(StringsLukasBodnariuc::explodeLukasBodnariuc(" & ", "ananas & banan & meloun"));
var_dump(StringsLukasBodnariuc::addcslashesLukasBodnariuc("boo[ ]", "A..z"));
var_dump(StringsLukasBodnariuc::addslashesLukasBodnariuc("the who o'reilly"));
var_dump(StringsLukasBodnariuc::trimLukasBodnariuc("\t \t text"));
var_dump(StringsLukasBodnariuc::ucfirstLukasBodnariuc("ahoj"));
var_dump(StringsLukasBodnariuc::ucwordsLukasBodnariuc("bodnariuc lukas"));

?>

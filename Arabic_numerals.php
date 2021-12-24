<?php

///////////////////////////////////////////
//                                       //
// دالة التحويل من أرقام إلى حروف عربية  //
//                                       //
//               برمجة                   //
//    عدنــان عبـدالرحمن - ميــلاد -      //
///////////////////////////////////////////



function numtoarb ($total)
{
$total=explode(".",$total);
$j= strlen($total[0]);
$je=$j;
$je--;
$de=1;
for($i=1;$i<$j;$i++)
$de=$de*10;

$t=$total[0];

for($i=0;$i<$j;$i++)
{
$te[$je]=$t/$de;
$t=$t%$de;
$de=$de/10;
$temp=explode(".",$te[$je]);
$te[$je]=$temp[0];
$je--;

}



for($i=0;$i<$j;$i++)
{
if ($i == 0)
{
if ($j<3)
switch($te[$i])
{
case "0" : $arb[0]=" ";
break;
case "1" :  $arb[0]= " واحد"  ;
break;
case "2" : if($te[1]=="1") $arb[0]=" اثنا "; else $arb[0]=" اثنان" ;
break;
case "3" : $arb[0]=" ثلاثة";
break;
case "4" : $arb[0]=" اربعة" ;
break;
case "5" : $arb[0]=" خمسة"   ;
break;
case "6" : $arb[0]=" ستة"     ;
break;
case "7" : $arb[0]=" سبعة"     ;
break;
case "8" : $arb[0]=" ثمانية"    ;
break;
case "9" : $arb[0]=" تسعة"       ;
break;
}
else
switch($te[$i])
{
case "0" : $arb[0]=" ";
break;
case "1" :  $arb[0]=" و واحد"  ;
break;
case "2" : if($te[1]=="1") $arb[0]=" و اثنا "; else $arb[0]=" و اثنان" ;
break;
case "3" : $arb[0]=" و ثلاثة";
break;
case "4" : $arb[0]=" و اربعة" ;
break;
case "5" : $arb[0]=" و خمسة"   ;
break;
case "6" : $arb[0]=" و ستة"     ;
break;
case "7" : $arb[0]=" و سبعة"     ;
break;
case "8" : $arb[0]=" و ثمانية"    ;
break;
case "9" : $arb[0]=" و تسعة"       ;
break;
}
}



if ($i == 1)
{
if ($j==2 )
{
if($te[$i]==1){if($te[0]=="1") {$arb[0]=" " ;$arb[1]=" أحد عشر";}  elseif($te[0]=="0")$arb[1]=" عشرة"; else $arb[1]=" عشر"    ; }
if ( $te[0]=="0")
switch($te[$i])
{
case "0" : $arb[1]=" "      ;
break;
case "1" : if($te[0]=="1") {$arb[0]=" " ;$arb[1]=" أحد عشر";} elseif($te[0]=="0")$arb[1]=" عشرة"; else $arb[1]="عشر"    ;
break;
case "2" : $arb[1]=" عشرون"    ;
break;
case "3" : $arb[1]=" ثلاثون"    ;
break;
case "4" : $arb[1]=" اربعون"     ;
break;
case "5" : $arb[1]=" خمسون"       ;
break;
case "6" : $arb[1]=" ستون"         ;
break;
case "7" : $arb[1]=" سبعون"         ;
break;
case "8" : $arb[1]=" ثمانون"         ;
break;
case "9" : $arb[1]=" تسعون"           ;
break;
}

}
else
switch($te[$i])
{
case "0" : $arb[1]=" "      ;
break;
case "1" : if($te[0]=="1") {$arb[0]=" " ;$arb[1]=" و أحد عشر";}elseif($te[0]=="0")$arb[1]=" و عشرة"; else $arb[1]=" عشر"  ;
break;
case "2" : $arb[1]=" و عشرون"    ;
break;
case "3" : $arb[1]=" و ثلاثون"    ;
break;
case "4" : $arb[1]=" و اربعون"     ;
break;
case "5" : $arb[1]=" و خمسون"       ;
break;
case "6" : $arb[1]=" و ستون"         ;
break;
case "7" : $arb[1]=" و سبعون"         ;
break;
case "8" : $arb[1]=" و ثمانون"         ;
break;
case "9" : $arb[1]=" و تسعون"           ;
break;
}
}


if ($i == 2)
{
if ($j==3)
switch($te[$i])
{
case "0" : $arb[2]=" "      ;
break;
case "1" : $arb[2]=" مائة"    ;
break;
case "2" : $arb[2]=" مائتان"    ;
break;
case "3" : $arb[2]=" ثلاثمائة"    ;
break;
case "4" : $arb[2]=" اربعمائة"     ;
break;
case "5" : $arb[2]=" خمسمائة"       ;
break;
case "6" : $arb[2]=" ستمائة"         ;
break;
case "7" : $arb[2]=" سبعمائة"         ;
break;
case "8" : $arb[2]=" ثمانمائة"         ;
break;
case "9" : $arb[2]=" تسعمائة"           ;
break;
}
else
switch($te[$i])
{
case "0" : $arb[2]=" "      ;
break;
case "1" : $arb[2]=" و مائة"    ;
break;
case "2" : $arb[2]=" و مائتان"    ;
break;
case "3" : $arb[2]=" و ثلاثمائة"    ;
break;
case "4" : $arb[2]=" واربعمائة"     ;
break;
case "5" : $arb[2]=" و خمسمائة"       ;
break;
case "6" : $arb[2]=" و ستمائة"         ;
break;
case "7" : $arb[2]=" و سبعمائة"         ;
break;
case "8" : $arb[2]=" و ثمانمائة"         ;
break;
case "9" : $arb[2]=" و تسعمائة"           ;
break;
}
}

if ($i == 3)
{
if($j==4)
switch($te[$i])
{
case "0" : $arb[$i]=" "      ;
break;
case "1" : $arb[$i]=" ألف"    ;
break;
case "2" : $arb[$i]=" ألفان"    ;
break;
case "3" : $arb[$i]=" ثلاثة آلاف"    ;
break;
case "4" : $arb[$i]=" اربعة آلاف"     ;
break;
case "5" : $arb[$i]=" خمسة آلاف"       ;
break;
case "6" : $arb[$i]=" ستة آلاف"         ;
break;
case "7" : $arb[$i]=" سبعة آلاف"         ;
break;
case "8" : $arb[$i]=" ثمانية آلاف "         ;
break;
case "9" : $arb[$i]=" تسعة آلاف "           ;
break;
}
elseif ($j==5)

switch($te[$i])
{
case "0" : $arb[$i]=" "      ;
break;
case "1" : $arb[$i]=" واحد "    ;
break;
case "2" : if($te[6]=="1") $arb[$i]=" اثنا "; else $arb[$i]=" اثنان" ;
break;
case "3" : $arb[$i]=" ثلاثة "    ;
break;
case "4" : $arb[$i]=" اربعة "     ;
break;
case "5" : $arb[$i]=" خمسة "       ;
break;
case "6" : $arb[$i]=" ستة "         ;
break;
case "7" : $arb[$i]=" سبعة "         ;
break;
case "8" : $arb[$i]=" ثمانية "         ;
break;
case "9" : $arb[$i]=" تسعة "           ;
}

else
switch($te[$i])
{
case "0" : $arb[$i]=" "      ;
break;
case "1" : $arb[$i]=" و واحد "    ;
break;
case "2" : if($te[4]=="1") $arb[$i]=" و اثنا "; else $arb[$i]=" و اثنان" ;
break;
case "3" : $arb[$i]=" و ثلاثة "    ;
break;
case "4" : $arb[$i]=" واربعة "      ;
break;
case "5" : $arb[$i]=" و خمسة "       ;
break;
case "6" : $arb[$i]=" و ستة "         ;
break;
case "7" : $arb[$i]=" و سبعة "         ;
break;
case "8" : $arb[$i]=" و ثمانية "         ;
break;
case "9" : $arb[$i]=" و تسعة "           ;
}
}
if ($i == 4)
{
if($j==5 )
switch($te[$i])
{
case "0" : $arb[$i]=" "      ;
break;
case "1" : if($te[3]=="1") {$arb[3]=" " ;$arb[4]=" أحد عشر الفا";} elseif($te[3]=="0")$arb[4]=" عشرة آلاف";else$arb[$i]=" عشر الفا"    ;
break;
case "2" : $arb[$i]="و عشرون  "    ;
break;
case "3" : $arb[$i]=" و ثلاثون "    ;
break;
case "4" : $arb[$i]="  و اربعون "     ;
break;
case "5" : $arb[$i]=" و خمسون "       ;
break;
case "6" : $arb[$i]="و ستون  "         ;
break;
case "7" : $arb[$i]=" و سبعون "         ;
break;
case "8" : $arb[$i]=" و ثمانون  "         ;
break;
case "9" : $arb[$i]=" و تسعون "           ;
break;
}
else
switch($te[$i])
{
case "0" : $arb[$i]=" "      ;
break;
case "1" : if($te[3]=="1") {$arb[3]=" " ;$arb[4]=" و أحد عشر الفا";} elseif($te[3]=="0")$arb[4]=" و عشرة آلاف";else$arb[$i]=" عشر الفا"    ;
break;
case "2" : $arb[$i]=" و عشرون "     ;
break;
case "3" : $arb[$i]=" و ثلاثون "    ;
break;
case "4" : $arb[$i]=" و اربعون "     ;
break;
case "5" : $arb[$i]=" و خمسون "       ;
break;
case "6" : $arb[$i]=" و ستون "         ;
break;
case "7" : $arb[$i]=" و سبعون "         ;
break;
case "8" : $arb[$i]=" و ثمانون "         ;
break;
case "9" : $arb[$i]=" و تسعون "           ;
break;
}
}
if ($i == 5)
{
if ($j==6)
switch($te[$i])
{
case "0" : $arb[$i]=" "      ;
break;
case "1" : $arb[$i]=" مائة "    ;
break;
case "2" : $arb[$i]=" مائتان "    ;
break;
case "3" : $arb[$i]=" ثلاثمائة "    ;
break;
case "4" : $arb[$i]=" اربعمائة "     ;
break;
case "5" : $arb[$i]=" خمسمائة "       ;
break;
case "6" : $arb[$i]=" ستمائة "         ;
break;
case "7" : $arb[$i]=" سبعمائة "           ;
break;
case "8" : $arb[$i]=" ثمانمائة "         ;
break;
case "9" : $arb[$i]=" تسعمائة "           ;
break;
}
else
switch($te[$i])
{
case "0" : $arb[$i]=" "      ;
break;
case "1" : $arb[$i]=" و مائة "    ;
break;
case "2" : $arb[$i]=" و مائتان "    ;
break;
case "3" : $arb[$i]=" و ثلاثمائة "    ;
break;
case "4" : $arb[$i]=" و اربعمائة "     ;
break;
case "5" : $arb[$i]=" و خمسمائة "       ;
break;
case "6" : $arb[$i]=" و ستمائة "         ;
break;
case "7" : $arb[$i]=" و سبعمائة "           ;
break;
case "8" : $arb[$i]=" و ثمانمائة "         ;
break;
case "9" : $arb[$i]=" و تسعمائة "           ;
break;
}
}

if ($i == 6)
switch($te[$i])
{
case "0" : $arb[$i]=" "      ;
break;
case "1" : $arb[$i]=" مليون "    ;
break;
case "2" : $arb[$i]=" مليونان "    ;
break;
case "3" : $arb[$i]=" ثلاثة ملايين "    ;
break;
case "4" : $arb[$i]=" اربعة ملايين "     ;
break;
case "5" : $arb[$i]=" خمسة ملايين "       ;
break;
case "6" : $arb[$i]=" تة ملايين "         ;
break;
case "7" : $arb[$i]=" سبعة ملايين "           ;
break;
case "8" : $arb[$i]=" ثمانية ملايين "         ;
break;
case "9" : $arb[$i]=" تسعة ملايين "           ;
break;
}
}




if($j>4 && $te[4]!="1")
$arb[4]=$arb[4]." الفا ";


@$strarb=$arb[6].$arb[5].$arb[3].$arb[4].$arb[2].$arb[0].$arb[1];
return $strarb;
}

?>
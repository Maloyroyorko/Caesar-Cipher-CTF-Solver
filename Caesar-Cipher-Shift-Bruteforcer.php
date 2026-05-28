<?php

$ciphertext="HZXFHF{FDHVDU_FLSKHU_LV_ROG}";

$str=str_split($ciphertext);

for($backward_shift=1;$backward_shift<26;$backward_shift++){

$flag="";

$forward_shift=26-$backward_shift;

foreach($str as $s){

if(ctype_alpha($s)){

$add= ctype_upper($s) ? 65 : 97; //to calculate position from 0-25 easily arki bhai

$ans= (ord($s) - $add + $forward_shift) % 26;

$printed_ans= chr($ans+$add);

$flag .= $printed_ans;

}else{

$flag .= $s;

}

}
echo $backward_shift."-->".$flag."<br><br>";

}

?>

<?php

$s=5;      //宣告一個變數為列數
for($i=0 ; $i<($s*2-1) ; $i++){
    if($i<$s){   //反向的判斷
       for($j=$i ; $j<($s-1) ; $j++){
          echo "&nbsp&nbsp";
       }
       for($k=0 ; $k<($i*2-1) ; $k++){
          echo "*";
        }
      }else{
       for($j=0 ; $j<($i-$s)+1 ; $j++){
         echo "&nbsp&nbsp";
       }
       $r=(($s*2-1)-$i)-1; //總列數減去目前第幾列再減去一列
       $starts=($r*2-1); //根據列數計算要印出的星星數
      for($k=0 ; $k<$starts ; $k++){
       echo "*";
       }
   }
  echo "<br>";
}
?>
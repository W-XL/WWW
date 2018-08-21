<?php
$z[0]=Array("array","-->\n                <!--if(@me['courseid']==\"11\")@me=\"HR.png\";-->\n                <!--else if(@me['courseid']==\"10\")@me=\"D.png\";-->\n                <!--else if(@me['courseid']==\"8\")@me=\"AA.png\";-->\n                <!--",4,262);
$z[0][4]['runphp']="yes";
$z[1]=Array("array","if(@me['courseid']=='11')@me='none';else @me='display'",301,395);
$z[1][4]['runphp']="yes";
$z[2]=Array("courseid","",517,534);
$z[3]=Array("arcurl","",587,602);
$z[4]=Array("coursephoto","",655,675);
$z[5]=Array("name","",730,743);
$z[6]=Array("description","",788,837);
$z[6][4]['function']="cn_substr(@me,50)";
$z[7]=Array("pubdate","",1156,1206);
$z[7][4]['function']="strftime('%Y-%m-%d',@me)";

?>
<?php
$z[0]=Array("array","if(@me['courseid']=='10' || @me['courseid']=='11' || @me['courseid']=='12' || @me['courseid']=='8' || @me['courseid']=='20' || @me['courseid']=='40')@me='none';else @me=\"<a href='{@me['courseid']}' class='preview'><img src='{@me['courseid']}'/></a>\";",0,290);
$z[0][4]['runphp']="yes";
$z[1]=Array("array","if(@me['courseid']=='10' || @me['courseid']=='11' || @me['courseid']=='12' || @me['courseid']=='8' || @me['courseid']=='20' || @me['courseid']=='40')@me='none';else @me='black';",326,543);
$z[1][4]['runphp']="yes";
$z[2]=Array("courseid","",619,636);
$z[3]=Array("arcurl","",660,675);
$z[4]=Array("coursephoto","",699,719);
$z[5]=Array("name","",745,758);
$z[6]=Array("description","",770,819);
$z[6][4]['function']="cn_substr(@me,50)";
$z[7]=Array("pubdate","",977,1027);
$z[7][4]['function']="strftime('%Y-%m-%d',@me)";

?>
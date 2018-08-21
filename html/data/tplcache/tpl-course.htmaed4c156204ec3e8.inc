<?php
$z[0]=Array("field","",166,191);
$z[0][4]['name']="description";
$z[1]=Array("field","",228,250);
$z[1][4]['name']="keywords";
$z[2]=Array("field","",370,393);
$z[2][4]['name']="seotitle";
$z[3]=Array("global","",394,420);
$z[3][4]['name']="cfg_webname";
$z[4]=Array("include","",432,478);
$z[4][4]['filename']="tpl/common/head.php";
$z[5]=Array("sql","\r\n<li>\r\n        <div class=\"am-gallery-item\">\r\n           <a href=\"/nvasystem/index.php/courseview?id=[field:courseid/]\" class=\"\">\r\n            <!--<a href=\"[field:arcurl/]\" class=\"\">-->\r\n              <img src=\"[field:coursephoto/]\">\r\n                <h3 class=\"am-gallery-title\">[field:name/]</h3>\r\n                \r\n            </a>\r\n        </div>\r\n      </li>\r\n",1084,1541);
$z[5][4]['sql']="SELECT * FROM course_list ORDER BY time DESC";
$z[5][4]['appname']="console";
$z[6]=Array("include","",1788,1836);
$z[6][4]['filename']="tpl/common/footer.php";

?>
<?php
$z[0]=Array("global","",167,197);
$z[0][4]['name']="cfg_description";
$z[1]=Array("global","",235,262);
$z[1][4]['name']="cfg_keywords";
$z[2]=Array("global","",384,410);
$z[2][4]['name']="cfg_webname";
$z[3]=Array("include","",423,469);
$z[3][4]['filename']="tpl/common/head.php";
$z[4]=Array("sql","\n                <li>\n                    <img src=\"[field:url/]\" class=\"am-hide-sm\" width=\"100%\">\n                </li>\n                ",721,970);
$z[4][4]['sql']="SELECT * FROM photos_url WHERE pid=1513309707895 ORDER BY rank ASC";
$z[4][4]['appname']="console";
$z[5]=Array("sql","\n                <li>\n                    <img src=\"[field:url/]\" class=\"am-show-sm\" width=\"100%\">\n                </li>\n                ",1201,1450);
$z[5][4]['sql']="SELECT * FROM photos_url WHERE pid=1513326670947 ORDER BY rank ASC";
$z[5][4]['appname']="console";
$z[6]=Array("sql","\n                [field:array runphp='yes']if(@me['courseid']=='10' || @me['courseid']=='11' || @me['courseid']=='12' || @me['courseid']=='8' || @me['courseid']=='20' || @me['courseid']=='40')@me='';\n                else\n                @me=\"<li><div class='am-gallery-item'><a href='/nvasystem/index.php/courseview?id={@me['courseid']}'><img src='{@me['coursephoto']}'><div class='zxzxzx'><h3>{@me['name']}</h3><br><button type='button' class='am-btn am-btn-default am-btn-xs am-round am-center '>查看课程-></button></div></a></div></li>\";\n                [/field:array]\n                ",6665,7347);
$z[6][4]['sql']="SELECT * FROM course_list ORDER BY time DESC";
$z[6][4]['appname']="console";
$z[7]=Array("sql","\n\n\n        ",11857,11965);
$z[7][4]['sql']="Select * from cake_archives where typeid=6 limit 0,4";
$z[7][4]['appname']="phpb2b";
$z[8]=Array("sql","\n\n                                        <li>\n                                            <a href=\"[field:id runphp='yes'] \$id=@me;@me='';\$url=GetOneArchive(\$id);@me=\$url['arcurl'];[/field:id]\"\n                                               class=\"am-text-truncate\">[field:title function=\"cn_substr(@me,30)\"/]</a>\n                                        </li>\n\n                                        ",13107,13644);
$z[8][4]['sql']="Select * from cake_archives where typeid=6 limit 5";
$z[8][4]['appname']="phpb2b";
$z[9]=Array("arclist","\n\n                                        <li><a href=\"[field:arcurl/]\" class=\"am-text-truncate\">[field:title/]</a></li>\n                                        ",14807,15053);
$z[9][4]['titlelen']="100";
$z[9][4]['typeid']="7";
$z[9][4]['row']="5";
$z[9][4]['orderby']="";
$z[9][4]['keyword']="";
$z[10]=Array("arclist","\n\n                                        <li><a href=\"[field:arcurl/]\" class=\"am-text-truncate\">[field:title/]</a></li>\n                                        ",16137,16383);
$z[10][4]['titlelen']="100";
$z[10][4]['typeid']="8";
$z[10][4]['row']="5";
$z[10][4]['orderby']="";
$z[10][4]['keyword']="";
$z[11]=Array("arclist","\n\n                        <option value=\"[field:title/]\">[field:title/]</option>\n                        ",28945,29123);
$z[11][4]['typeid']="2";
$z[11][4]['titlelen']="";
$z[11][4]['infolen']="";
$z[11][4]['row']="99";
$z[12]=Array("include","",29614,29663);
$z[12][4]['filename']="tpl/common/footer.php";

?>
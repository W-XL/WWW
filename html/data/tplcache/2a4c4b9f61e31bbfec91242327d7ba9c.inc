[field:array runphp='yes']if(@me['courseid']=='10' || @me['courseid']=='11' || @me['courseid']=='12' || @me['courseid']=='8' || @me['courseid']=='20' || @me['courseid']=='40')@me='';
                else
                @me="<li><div class='am-gallery-item'><a href='/nvasystem/index.php/courseview?id={@me['courseid']}'><img src='{@me['coursephoto']}'><div class='zxzxzx'><h3>{@me['name']}</h3><br><button type='button' class='am-btn am-btn-default am-btn-xs am-round am-center '>查看课程-></button></div></a></div></li>";
                [/field:array]
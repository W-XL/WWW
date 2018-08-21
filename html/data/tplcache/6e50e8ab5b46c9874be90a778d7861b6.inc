[field:array runphp='yes']if(@me['courseid']=='10' || @me['courseid']=='11' || @me['courseid']=='12' || @me['courseid']=='8' || @me['courseid']=='20' || @me['courseid']=='40')@me='';
                else
                @me="
                <li>
                    <div class='am-gallery-item'>
                        <a href="/nvasystem/index.php/courseview?id=[field:courseid/]">
                            <!--<a href="[field:arcurl/]" class="">-->
                            <img src="[field:coursephoto/]">
                            <div class='zxzxzx'>
                                <h3>[field:name/]</h3>
                                <!--<p>[field:description function="cn_substr(@me,50)"/]...</p>-->
                                <br>
                                <button type='button' class='am-btn am-btn-default am-btn-xs am-round am-center '>查看课程-></button>
                            </div>
                            <!--<div class="am-gallery-desc">[field:pubdate function=strftime('%Y-%m-%d',@me)/]</div>-->
                        </a>
                    </div>
                </li>"
                [/field:array]
[field:chazhi runphp='yes']$cateid=@me;if($cateid['courseid']=11)@me="up";elseif($cateid['courseid']>0)@me="dowm";else @me="ping";[/field:chazhi]
                <li >
                    <div class="am-gallery-item">
                        <a href="/nvasystem/index.php/courseview?id=[field:courseid/]" class="">
                            <!--<a href="[field:arcurl/]" class="">-->
                            <img src="[field:coursephoto/]">
                            <div class="zxzxzx"><h3>[field:name/]</h3>
                                <!--<p>[field:description function="cn_substr(@me,50)"/]...</p>--><br>
                                <button type="button" class="am-btn am-btn-default am-btn-xs am-round am-center ">查看课程
                                    ->
                                </button>
                            </div>
                            <!--<div class="am-gallery-desc">[field:pubdate function=strftime('%Y-%m-%d',@me)/]</div>-->
                        </a>
                    </div>
                </li>
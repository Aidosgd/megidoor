	<!--******************** START BOTTOMBOXES ********************-->
<div class="ot-bottomboxes" id="ot-bottomboxes">
    <div class="ot-bottomboxes-i" id="ot-bottomboxes-i">
        <div class="bottom-box bottom-box-1 firstbox width25">
            <div class="otRounded module about">
                <div class="otRounded-topLeft-bg"></div>
                <div class="otRounded-topRight-bg"></div>
                <div class="otRounded-mid" style="height: 161px;">
                    <h3><span class="title-module"><span class="first-word">о</span> нас</span></h3>
                    <div class="otRounded-mid-i">
                        <div class="otRounded-i">
                            <div class="otModuleContent-i clearfix">
                                <div class="custom">
                                    <div style="padding: 10px 0; font-style: italic;">Компания Новые Двери существует на рынке Казахстана с 2012 года и является одним из крупнейших импортеров межкомнатных и входных дверей производства России и Белоруссии.</div>
                                    <p><a class="readmore" href="/pages/o_nas">Подробнее</a></p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="otRounded-bottomLeft-bg"></div>
                <div class="otRounded-bottomRight-bg"></div>
            </div>
        </div>
        <div class="bottom-box bottom-box-2 midbox width25">
            <div class="otRounded module service">
                <div class="otRounded-topLeft-bg"></div>
                <div class="otRounded-topRight-bg"></div>
                <div class="otRounded-mid" style="height: 161px;">
                    <h3><span class="title-module"><span class="first-word">Карта</span> сайта</span></h3>
                    <div class="otRounded-mid-i">
                        <div class="otRounded-i">
                            <div class="otModuleContent-i clearfix">
                                <ul class="menu level0">
                                    <li id="item-435" class="current active level0  first">
                                        <a href="/"><span>Главная</span></a>
                                    </li>
                                    <li id="item-510" class="level0">
                                        <a href="/pages/news"><span>Новости</span></a>
                                    </li>
                                    <li id="item-521" class="level0">
                                        <a href="/pages/sotrudnichestvo"><span>Сотрудничество</span></a>
                                    </li>
                                    <li id="item-511" class="level0">
                                        <a href="/doors/metalicheskie-dveri/"><span>Каталог</span></a>
                                    </li>
                                    <li id="item-512" class="level0  last">
                                        <a href="/pages/kontakty"><span>Контакты</span></a>
                                    </li>
                                </ul>                                  </div>
                        </div>
                    </div>
                </div>
                <div class="otRounded-bottomLeft-bg"></div>
                <div class="otRounded-bottomRight-bg"></div>
            </div>
        </div>
        <div class="bottom-box bottom-box-3 midbox width25">
            <div class="otRounded module newsletter">
                <div class="otRounded-topLeft-bg"></div>
                <div class="otRounded-topRight-bg"></div>
                <div class="otRounded-mid" style="height: 161px;">
                    <h3><span class="title-module"><span class="first-word">Получать</span> новости</span></h3>
                    <div class="otRounded-mid-i">
                        <div class="otRounded-i">
                            <div class="otModuleContent-i clearfix">
                                <div class="custom">
                                    <div style="padding: 5px 0px 10px; font-style: italic;">Вы можете подписаться на наши новости оставив свой электронный адрес.</div>
                                    <div>
                                        <form class="newsletter" action="/subscribers" method="post">
                                            {{ csrf_field() }}
                                            <input class="email" type="email" name="email" placeholder="Введите Ваш Email">
                                            @if (count($errors) > 0)
                                                @foreach ($errors->all() as $error)
                                                    <br> {{ $error }} <br>
                                                @endforeach
                                            @endif
                                            <input class="submit" type="submit" value="Подписаться">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="otRounded-bottomLeft-bg"></div>
                <div class="otRounded-bottomRight-bg"></div>
            </div>
        </div>
        <div class="bottom-box bottom-box-4 lastbox width25">
            <div class="otRounded module">
                <div class="otRounded-topLeft-bg"></div>
                <div class="otRounded-topRight-bg"></div>
                <div class="otRounded-mid" style="height: 161px;">
                    <h3><span class="title-module"><span class="first-word">Удобная</span> доставка</span></h3>
                    <div class="otRounded-mid-i">
                        <div class="otRounded-i">
                            <div class="otModuleContent-i clearfix">
                                <div class="custom">
                                    <div style="width: 100%; padding: 10px 0 15px; font-size: 16px; font-style: italic; color: #cf8639;"><img src="/css/images/ship.png" border="0" alt="" style="float: left; margin-right: 7px;">Доставка в срок и с гарантией</div>
                                    <div style="width: 100%; padding: 10px 0; font-style: italic; border-top: 1px solid #716463;">Мы осуществляем доставку в любой город казахстана</div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="otRounded-bottomLeft-bg"></div>
                <div class="otRounded-bottomRight-bg"></div>
            </div>
        </div>
    </div>
</div>
<!--******************** END BOTTOMBOXES ********************-->
</div>
<!--******************** START BOTTOM EXTENDS ********************-->
<!--******************** END BOTTOM EXTENDS ********************-->

</div>
</div>
</div>
<!--******************** END MAINBODY********************-->
<!--******************** START FOOTER ********************-->
<div class="ot-footer">
    <div class="ot-footer-i">
        <div class="ot-widthTemp">
            <div class="ot-widthTemp-i">
                <div class="ot-footer-i-i">
                    <div class="ot-bottom-1">
                        <div class="ot-bottom-1-i">
                            <div class="otModule module">
                                <div class="otModule-i">
                                    <div class="otModuleContent-i clearfix">


                                        <div class="custom">
                                            <table width="1000px">
                                                <tbody>
                                                <tr>
                                                    <td><a href="/index.php/shop-store/mezhkomnatnye-dveri">Межкомнатные двери</a></td>
                                                    <td>&nbsp;</td>
                                                    <td><a href="/index.php/shop-store/metallicheskie-dveri">металлические двери</a></td>
                                                    <td>&nbsp;</td>
                                                    <td>
                                                        <p style="color: white; text-align: center;">Разработка сайтов <strong>Grav.kz</strong></p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript">
    var yaParams = {};
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'http://ip.up66.ru/', true);
    xhr.onload = function() {
    	
    	yaParams.ip = this.responseText;
    }
    xhr.send();
    </script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(31758386, "init", {
        params:window.yaParams,
		clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/31758386" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!--******************** END FOOTER ********************-->
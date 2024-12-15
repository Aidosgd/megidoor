<style>
    @media (max-width: 768px) {
        .ot-logo{
            width: 100% !important;
            padding: 20px 10px 0;
            top: 0 !important;
            font-size: 30px !important;
        }
    }
</style>
<!--******************** START HEADER ********************-->
<div class="ot-header">
    <div class="ot-header-i">
        <div class="ot-widthTemp">
            <div class="ot-widthTemp-i">
                <div class="ot-logo" style="
                font-size: 60px;
                position: relative;
                top: 30px;">
                    <a href="/">Новые Двери</a>
                </div>
                <div class="phone"
                     style="float: left;padding: 10px 10px 0;font-size: 20px !important;color: rgb(255, 255, 255);">
                    <p style="margin: 0"> г. Алматы, ул. Ауэзова 2</p>
                    <p style="margin: 0">+ 7 (777) 162 1103, +7 (747) 997-76-27</p>
                </div>
                <div class="ot-mainmenu">
                    <div id="ot-mainmenu" class="ot-mainmenu-i">
                        <ul class="menu level0">
                            <li id="item-510" class="level0">
                                <a target="_blank" href="https://www.instagram.com/new_doors2024/profilecard/?igsh=Z2t2YW52Nm41NTN3">
                                    <img style="width: 30px" src="/images/img/insta.png" alt="">
                                </a>
                            </li>
                            <li id="item-521" class="level0">
                                <a href="/pages/sotrudnichestvo">
                                    <span>Сотрудничество</span>
                                </a>
                            </li>
                            <li id="item-512" class="level0  last">
                                <a href="/pages/kontakty">
                                    <span>Контакты</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session()->has('message'))
    <div class="alert alert-success">
        <h1 style="text-align: center">{{ session()->get('message') }}</h1>
    </div>
@endif
<!--******************** END HEADER ********************-->
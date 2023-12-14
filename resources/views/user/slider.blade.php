


@extends('user.layout')
@section('slider')

<div id="main">

    <!-- **Slider Section** -->
    <div id="slider">

        <div id="layerslider_6" class="ls-wp-container"
            style=" width:100%; height:600px; max-width:1920px; margin:0 auto; margin-bottom: 0;">

            <div class="ls-slide slide1" data-ls="slidedelay:10000;transition2d:4;">
                <img src="{{ asset('assets1/images/slider/layerslider/blank.gif')}}"
                    data-src="http://via.placeholder.com/1920x600" class="ls-bg" alt="Slide background" />

            </div>

            <div class="ls-slide slide2" data-ls="slidedelay:10000;transition2d:4;">
                <img src="{{ asset('assets1/images/slider/layerslider/blank.gif')}}"
                    data-src="http://via.placeholder.com/1920x600" class="ls-bg" alt="Slide background" />

                <img class="ls-l" style="top:0px;left:610px;z-index:0;white-space: nowrap;"
                    data-ls="offsetxin:100;delayin:1000;" src="images/slider/layerslider/blank.gif"
                    data-src="http://via.placeholder.com/939x600/000" alt="">
                <p class="ls-l"
                    style="top:290px;left:640px;z-index:3 display:block;width:520px;height:5px;border-bottom:1px solid #fff;background:#ffffff;white-space: nowrap;"
                    data-ls="delayin:2500;"> <br></p>
                <img class="ls-l" style="top:330px;left:645px;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:50;delayin:4000;" src="images/slider/layerslider/blank.gif"
                    data-src="images/slider/layerslider/icon11.png" alt="">
                <img class="ls-l" style="top:330px;left:840px;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:50;delayin:5000;" src="images/slider/layerslider/blank.gif"
                    data-src="images/slider/layerslider/icon2.png" alt="">

                <div class="ls-l"
                    style="top:465px;left:1035px;z-index:3;font-family:'Ubuntu';font-size:20px;color:#ffffff;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:-50;durationin:2000;delayin:6500;">
                    <div class="round-list"> <i class="fa fa-circle-o" style="color:#da4b27"> </i> VPS Hosting
                    </div>
                </div>

                <img class="ls-l" style="top:330px;left:1030px;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:50;delayin:6000;" src="images/slider/layerslider/blank.gif"
                    data-src="images/slider/layerslider/icon3.png" alt="">
                <div class="ls-l"
                    style="top:465px;left:825px;z-index:3;font-family:'Ubuntu';font-size:20px;color:#ffffff;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:-50;durationin:2000;delayin:5500;">
                    <div class="round-list"> <i class="fa fa-circle-o" style="color:#da4b27"> </i> Dedicated
                        Hosting </div>
                </div>
            </div>

            <div class="ls-slide slide3" data-ls="slidedelay:10000;transition2d:4;">
                <img src="images/slider/layerslider/blank.gif" data-src="http://via.placeholder.com/1920x600"
                    class="ls-bg" alt="Slide background" />
                <div class="ls-l"
                    style="top:100px;left:30px;font-weight:700; z-index:5;padding-left:640px;font-family:'Ubuntu', 'Open Sans', sans-serif;font-size:40px;line-height:46px;color:#101017;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:-100;durationin:2500;delayin:1000;transformoriginin:left 50% 0;offsetxout:0;rotateyout:-90;transformoriginout:left 50% 0;">
                    High <span style="color:#3575b9;">Performance</span> Servers</div>
                <div class="ls-l"
                    style="top:165px;left:920px;font-weight:100; z-index:3;font-family:'Ubuntu', sans-serif;font-size:30px;line-height:26px;color:#101017;white-space: nowrap;"
                    data-ls="offsetxin:-100;durationin:2000;delayin:1500;">@</div>
                <div class="ls-l"
                    style="top:210px;left:820px;font-weight:100; z-index:3;font-family:'Ubuntu', sans-serif;font-size:30px;line-height:26px;color:#3575b9;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:100;durationin:2000;delayin:2000;">Unbeatable Price</div>
                <div class="ls-l"
                    style="top:265px;left:715px; border: 1px solid; font-family: 'Ubuntu', sans-serif; float: left; position: relative; width: 100%; border-radius: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; -ms-border-radius: 5px; -o-border-radius: 5px; border-color: #3575b9; width:440px;height:155px;white-space: nowrap;"
                    data-ls="offsetxin:100;delayin:3000;">
                    <div class="dt-sc-promo-box"></div>
                </div>

                <div class="ls-l"
                    style="top:285px;left:741px;color: #020203; float: left; line-height: 28px; text-transform: capitalize; ;width:520px;font-family:'Ubuntu';font-size:16px;white-space: nowrap;"
                    data-ls="delayin:3500;"><i style="color:#3575b9" class="fa fa-arrow-circle-o-right"> </i>
                    Unlimited <span style="color:#3575b9">Domain Hosting</span> </div>

                <div class="ls-l"
                    style="top:315px;left:741px;color: #020203; float: left; line-height: 28px; text-transform: capitalize; ;font-family:'Ubuntu';font-size:16px;white-space: nowrap;"
                    data-ls="delayin:4000;"><i style="color:#3575b9" class="fa fa-arrow-circle-o-right"> </i>
                    Unlimited <span style="color:#3575b9"> Hosting Space</span> </div>

                <div class="ls-l"
                    style="top:345px;left:741px;color: #020203; float: left; line-height: 28px; text-transform: capitalize; ;font-family:'Ubuntu';font-size:16px;white-space: nowrap;"
                    data-ls="delayin:4500;"><i style="color:#3575b9" class="fa fa-arrow-circle-o-right"> </i>
                    Unlimited <span style="color:#3575b9"> File Transfer</span> </div>

                <div class="ls-l"
                    style="top:375px;left:741px;color: #020203; float: left; line-height: 28px; text-transform: capitalize; ;font-family:'Ubuntu';font-size:16px;white-space: nowrap;"
                    data-ls="delayin:5000;"><i style="color:#3575b9" class="fa fa-arrow-circle-o-right"> </i>
                    Unlimited <span style="color:#3575b9"> Email Accounts</span> </div>

                <p class="ls-l"
                    style="top:300px;left:352px;font-weight:400; z-index:5;padding-left:640px;font-family:'Ubuntu', 'Open Sans', sans-serif;font-size:50px;line-height:46px;color:#3575b9;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:-100;durationin:1500;delayin:5000;transformoriginin:left 50% 0;offsetxout:0;rotateyout:-90;transformoriginout:left 50% 0;">
                    $2.50*</p>
                <div class="ls-l"
                    style="top:360px;left:1000px;font-weight:100; z-index:3;font-family:'Ubuntu';font-size:24px;line-height:26px;color:#020203;white-space: nowrap;"
                    data-ls="offsetxin:700;durationin:1500;delayin:5500;">Per Month</div>
                <div class="ls-l"
                    style="top:435px;left:850px;font-weight:100; z-index:3;font-family:'Ubuntu';font-size:14px;line-height:26px;color:#020203;white-space: nowrap;"
                    data-ls="offsetxin:100;delayin:6500;">*Offer for a limited period</div>
                <div class="ls-l" style="top:0px;left:0px;white-space: nowrap;"></div>

                <div class="ls-l ls-button" style="top:470px;left:807px;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:100;delayin:7000;">
                    <a href="#" class="dt-sc-button ico-button"> <span> View Plans </span> <i
                            class="ico-btn-image icon-eye"></i></a>

                </div>

                <p class="ls-l"
                    style="top:266px;left:970px;width:1px;height:155px;background:#3575b9;white-space: nowrap;"
                    data-ls="delayin:5000;"> </p>

            </div>
        </div>
    </div>
</div>


@endsection

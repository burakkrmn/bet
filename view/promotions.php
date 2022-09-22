<main>
    <router-outlet>
    </router-outlet>
    <static-content>
        <div extroutelink="">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Allura&amp;subset=latin" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
            <style>
                .fb_reset {
                    display: none;
                }

                .promo-title {
                    background: #000;
                    width: 100%;
                    margin: 0;
                    height: 48px;
                }

                .promo-icon {
                    float: left;
                    line-height: 46px;
                    color: #ecc018;
                    font-size: 20px;
                    font-weight: 600;
                    margin: 0;
                }

                .promo-title ul {
                    float: right;
                    margin: 0;
                }

                .promo-title ul li {
                    float: left;
                }

                .promo-title ul li a {
                    line-height: 44px;
                    font-size: 18px;
                    color: #8e8e8e;
                    margin-left: 15px;
                    display: inline-block;
                }

                .promo-title ul li a:hover,
                .promo-title ul li a.active {
                    color: #ecc018;
                    border-bottom: 3px solid #ecc018;
                }

                .promo-content {
                    text-align: center;
                    margin: 20px 0 0;
                }

                .promo-content .container {
                    width: 1090px;
                }

                .goldenbahis-mobile figure {
                    max-width: 92%;
                }

                .modal-content {
                    color: #000;
                }

                .modal-content h2 {
                    color: #ecc018;
                    font-weight: 700;
                    font-size: 34px;
                }

                /*snip1554*/
                .snip1554 {
                    background-color: #045e78;
                    color: #ffffff;
                    display: inline-block;
                    font-family: 'Poppins', sans-serif;
                    font-size: 16px;
                    margin: 8px;
                    max-width: 497px;
                    min-width: 240px;
                    overflow: hidden;
                    position: relative;
                    text-align: left;
                    width: 100%;
                }

                .snip1554 * {
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    -webkit-transition: all 0.45s ease;
                    transition: all 0.45s ease;
                }

                .snip1554:after {
                    background-color: white;
                    opacity: 0.6;
                    top: 0;
                    bottom: 0;
                    content: '';
                    left: -100%;
                    position: absolute;
                    width: 200px;
                    box-shadow: 0 0 100px white;
                    -webkit-transform: skew(-20deg);
                    transform: skew(-20deg);
                    -webkit-transition: all 0.6s ease;
                    transition: all 0.6s ease;
                }

                .snip1554 img {
                    vertical-align: top;
                    max-width: 100%;
                    backface-visibility: hidden;
                }

                .snip1554 figcaption {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    z-index: 1;
                    line-height: 1em;
                    opacity: 0;
                }

                .snip1554 h3 {
                    position: absolute;
                    left: 10px;
                    bottom: 10px;
                    font-size: 1.4em;
                    font-weight: 400;
                    line-height: 1.1em;
                    margin: 0;
                    text-transform: uppercase;
                }

                .snip1554 h3 span {
                    font-weight: 700;
                }

                .snip1554 a {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    z-index: 1;
                }

                .snip1554:hover>img,
                .snip1554.hover>img {
                    opacity: 0.4;
                    -webkit-filter: grayscale(100%);
                    filter: grayscale(100%);
                }

                .snip1554:hover:after,
                .snip1554.hover:after {
                    left: 200%;
                }

                .snip1554:hover figcaption,
                .snip1554.hover figcaption {
                    opacity: 1;
                }

                /*snip1573*/
                .snip1573 {
                    background-color: #000;
                    display: inline-block;
                    font-family: 'Open Sans', sans-serif;
                    font-size: 16px;
                    margin: 15px;
                    max-width: 497px;
                    min-width: 240px;
                    overflow: hidden;
                    position: relative;
                    text-align: center;
                    width: 100%;
                    float: left;
                }

                .snip1573 * {
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    -webkit-transition: all 0.35s ease;
                    transition: all 0.35s ease;
                }

                .snip1573:before,
                .snip1573:after {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    -webkit-transition: all 0.35s ease;
                    transition: all 0.35s ease;
                    background-color: #000000;
                    border-left: 3px solid #fff;
                    border-right: 3px solid #fff;
                    content: '';
                    opacity: 0.9;
                    z-index: 1;
                }

                .snip1573:before {
                    -webkit-transform: skew(45deg) translateX(-155%);
                    transform: skew(45deg) translateX(-155%);
                }

                .snip1573:after {
                    -webkit-transform: skew(45deg) translateX(155%);
                    transform: skew(45deg) translateX(155%);
                }

                .snip1573 img {
                    backface-visibility: hidden;
                    max-width: 100%;
                    vertical-align: top;
                }

                .snip1573 figcaption {
                    top: 50%;
                    left: 50%;
                    position: absolute;
                    z-index: 2;
                    -webkit-transform: translate(-50%, -50%) scale(0.5);
                    transform: translate(-50%, -50%) scale(0.5);
                    opacity: 0;
                    -webkit-box-shadow: 0 0 10px #000000;
                    box-shadow: 0 0 10px #000000;
                }

                .snip1573 h3 {
                    background-color: #000000;
                    border: 2px solid #fff;
                    color: #fff;
                    font-size: 1em;
                    font-weight: 600;
                    letter-spacing: 1px;
                    margin: 0;
                    padding: 5px 10px;
                    text-transform: uppercase;
                }

                .snip1573 a {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    z-index: 3;
                }

                .snip1573:hover>img,
                .snip1573.hover>img {
                    opacity: 0.5;
                }

                .snip1573:hover:before,
                .snip1573.hover:before {
                    -webkit-transform: skew(45deg) translateX(-55%);
                    transform: skew(45deg) translateX(-55%);
                }

                .snip1573:hover:after,
                .snip1573.hover:after {
                    -webkit-transform: skew(45deg) translateX(55%);
                    transform: skew(45deg) translateX(55%);
                }

                .snip1573:hover figcaption,
                .snip1573.hover figcaption {
                    -webkit-transform: translate(-50%, -50%) scale(1);
                    transform: translate(-50%, -50%) scale(1);
                    opacity: 1;
                }

                @media (max-width:1060px) {
                    .promo-desktop .promo-content .container {
                        width: 846px;
                    }

                    .promo-desktop .snip1573 {
                        max-width: 400px;
                        margin: 10px;
                    }
                }

                @media (max-width:870px) {
                    .promo-desktop .promo-content .container {
                        width: 445px;
                    }

                    .promo-desktop .snip1573 {
                        max-width: 400px;
                        margin: 10px;
                    }
                }

                .promo-mobile .promo-content .container {
                    width: inherit;
                }

                .promo-mobile .snip1573 {
                    max-width: 92%;
                    margin: 4%;
                }

                .mobile-container .container {
                    width: 100%;
                    display: inline-block;
                }

                .mobile-container .promo-title {
                    height: auto;
                }

                .mobile-container .promo-title .promo-icon {
                    margin-left: 20%;
                }

                .mobile-container .promo-title ul {
                    float: left;
                    margin-left: 15%;
                }

                .modal .modal-close i.fa {
                    font-size: 26px !important;
                    color: #ecc018 !important;
                }
            </style>
            <div class="promo-desktop">
                <div class="promo-container">
                    <div class="promo-title">
                        <div class="container">
                            <p class="promo-icon">
                                <i>
                                </i> PROMOSYONLAR
                            </p>
                            <a href="https://goldencarkifelek.com">
                                <img class="carkifelek" src="/assets/static/images/views/desktop/trader/goldenbahis/assets/images/passion-flower.gif">
                            </a>
                            <ul class="tab-list grids-wrap">
                                <li>
                                    <a href="javascript:void(0);" rel="hepsi" class="active">HEPSİ</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" rel="spor">SPOR</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" rel="canli">CANLI CASINO</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" rel="slot">SLOT CASINO</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="promo-content" onclick="loginorpay();event.preventDefault()">
                        <div class="container">
                            <ul class="list-type">
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/goldenpeple" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/goldenpeplepromosyon.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/mft" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/promosyonmft.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/heetpay" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/heetpay-promo.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/aninda-btc" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/golden-btc-promo.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/kkpromo" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/golden-kk-promo.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/arkadasinigetir" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/arkadasbonusupromosyon.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/hgpromo500" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/golden-hosgeldin-promo500.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/spor-kayip" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/golden-sporkayip-promo.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/sanal25" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/golden-sanal-25.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/payfixpromo" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/golden-payfix-promosyon2.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/papara_cerimli" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/ppromonew6.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/yenipromo3" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/ppromonew11.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/glanindahavale15" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/glanindapromosyon.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/havale_cevrimli" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/havaleeft15.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/ypc-10" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/yppromo.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/ypc" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/golden-promo-ypc.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/cmt-promo" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/cmt15p.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/qr_cevrimli" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/ppromonew7.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/15cevrimsiz" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/ppromonew8.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/neropaypromo" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/golden-neropaypromo.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/yenipromo1" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/ppromonew9.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/yenipromo2" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/ppromonew10.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/yenipromo4" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/ppromonew7_2.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi spor" style="display: list-item;">
                                    <a href="/pages/yenipromo6" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/ppromonew14.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi canli" style="display: list-item;">
                                    <a href="/pages/20accd" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/golden-canli-promo.png" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi canli" style="display: list-item;">
                                    <a href="/pages/cc20" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/canli-casinoiyatirim.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi slot" style="display: list-item;">
                                    <a href="/pages/carkifelek" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/golden-cark-promo.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi slot" style="display: list-item;">
                                    <a href="/pages/aviator1" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/gold-avi-promo.jpg" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi slot" style="display: list-item;">
                                    <a href="/pages/20accdf" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/golden-slot-promo.png" class="flashes">
                                    </a>
                                </li>
                                <li class="hepsi slot" style="display: list-item;">
                                    <a href="/pages/slot25" class="top-layer">
                                        <img src="/assets/static/images/goldenbahis/upload_files/slot-casino-yatirim.jpg" class="flashes">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-mobile" style="display:none;">
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">view_headline</i>TÜM BONUSLAR
                        </div>
                        <div class="collapsible-body" style="display: block;">
                            <a href="/pages/goldenpeple">
                                <img src="/assets/static/images/goldenbahis/upload_files/goldenpeplepromosyon.jpg" class="flashes">
                            </a>
                            <a href="/pages/mft">
                                <img src="/assets/static/images/goldenbahis/upload_files/promosyonmft.jpg" class="flashes">
                            </a>
                            <a href="/pages/heetpay">
                                <img src="/assets/static/images/goldenbahis/upload_files/heetpay-promo.jpg" class="flashes">
                            </a>
                            <a href="/pages/carkifelek">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-cark-promo.jpg" class="flashes">
                            </a>
                            <a href="/pages/aninda-btc">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-btc-promo.jpg" class="flashes">
                            </a>
                            <a href="/pages/20accd">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-canli-promo.png" class="flashes">
                            </a>
                            <a href="/pages/20accdf">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-slot-promo.png" class="flashes">
                            </a>
                            <a href="/pages/kkpromo">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-kk-promo.jpg" class="flashes">
                            </a>
                            <a href="/pages/hgpromo500">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-hosgeldin-promo500.jpg" class="flashes">
                            </a>
                            <a href="/pages/spor-kayip">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-sporkayip-promo.jpg" class="flashes">
                            </a>
                            <a href="/pages/sanal25">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-sanal-25.jpg" class="flashes">
                            </a>
                            <a href="/pages/payfixpromo">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-payfix-promosyon2.jpg" class="flashes">
                            </a>
                            <a href="/pages/papara_cerimli">
                                <img src="/assets/static/images/goldenbahis/upload_files/ppromonew6.jpg" class="flashes">
                            </a>
                            <a href="/pages/yenipromo3">
                                <img src="/assets/static/images/goldenbahis/upload_files/ppromonew11.jpg" class="flashes">
                            </a>
                            <a href="/pages/glanindahavale15">
                                <img src="/assets/static/images/goldenbahis/upload_files/glanindapromosyon.jpg" class="flashes">
                            </a>
                            <a href="/pages/havale_cevrimli">
                                <img src="/assets/static/images/goldenbahis/upload_files/havaleeft15.jpg" class="flashes">
                            </a>
                            <a href="/pages/ypc-10">
                                <img src="/assets/static/images/goldenbahis/upload_files/yppromo.jpg" class="flashes">
                            </a>
                            <a href="/pages/ypc">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-promo-ypc.jpg" class="flashes">
                            </a>
                            <a href="/pages/cmt-promo">
                                <img src="/assets/static/images/goldenbahis/upload_files/cmt15p.jpg" class="flashes">
                            </a>
                            <a href="/pages/qr_cevrimli">
                                <img src="/assets/static/images/goldenbahis/upload_files/ppromonew7.jpg" class="flashes">
                            </a>
                            <a href="/pages/15cevrimsiz">
                                <img src="/assets/static/images/goldenbahis/upload_files/ppromonew8.jpg" class="flashes">
                            </a>
                            <a href="/pages/neropaypromo">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-neropaypromo.jpg" class="flashes">
                            </a>
                            <a href="/pages/yenipromo1">
                                <img src="/assets/static/images/goldenbahis/upload_files/ppromonew9.jpg" class="flashes">
                            </a>
                            <a href="/pages/yenipromo2">
                                <img src="/assets/static/images/goldenbahis/upload_files/ppromonew10.jpg" class="flashes">
                            </a>
                            <a href="/pages/yenipromo4">
                                <img src="/assets/static/images/goldenbahis/upload_files/ppromonew7_2.jpg" class="flashes">
                            </a>
                            <a href="/pages/yenipromo6">
                                <img src="/assets/static/images/goldenbahis/upload_files/ppromonew14.jpg" class="flashes">
                            </a>
                            <a href="/pages/slot25">
                                <img src="/assets/static/images/goldenbahis/upload_files/slot-casino-yatirim.jpg" class="flashes">
                            </a>
                            <a href="/pages/cc20">
                                <img src="/assets/static/images/goldenbahis/upload_files/canli-casinoiyatirim.jpg" class="flashes">
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">view_headline</i>SPOR BONUSLARI
                        </div>
                        <div class="collapsible-body">
                            <a href="/pages/heetpay">
                                <img src="/assets/static/images/goldenbahis/upload_files/heetpay-promo.jpg" class="flashes">
                            </a>
                            <a href="/pages/aninda-btc">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-btc-promo.jpg" class="flashes">
                            </a>
                            <a href="/pages/arkadasinigetir">
                                <img src="/assets/static/images/goldenbahis/upload_files/arkadasbonusupromosyon.jpg" class="flashes">
                            </a>
                            <a href="/pages/20accd">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-canli-promo.png" class="flashes">
                            </a>
                            <a href="/pages/20accdf">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-slot-promo.png" class="flashes">
                            </a>
                            <a href="/pages/kkpromo">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-kk-promo.jpg" class="flashes">
                            </a>
                            <a href="/pages/hgpromo500">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-hosgeldin-promo500.jpg" class="flashes">
                            </a>
                            <a href="/pages/spor-kayip">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-sporkayip-promo.jpg" class="flashes">
                            </a>
                            <a href="/pages/sanal25">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-sanal-25.jpg" class="flashes">
                            </a>
                            <a href="/pages/payfixpromo">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-payfix-promosyon2.jpg" class="flashes">
                            </a>
                            <a href="/pages/papara_cerimli">
                                <img src="/assets/static/images/goldenbahis/upload_files/ppromonew6.jpg" class="flashes">
                            </a>
                            <a href="/pages/yenipromo3">
                                <img src="/assets/static/images/goldenbahis/upload_files/ppromonew11.jpg" class="flashes">
                            </a>
                            <a href="/pages/glanindahavale15">
                                <img src="/assets/static/images/goldenbahis/upload_files/glanindapromosyon.jpg" class="flashes">
                            </a>
                            <a href="/pages/havale_cevrimli">
                                <img src="/assets/static/images/goldenbahis/upload_files/havaleeft15.jpg" class="flashes">
                            </a>
                            <a href="/pages/ypc-10">
                                <img src="/assets/static/images/goldenbahis/upload_files/yppromo.jpg" class="flashes">
                            </a>
                            <a href="/pages/ypc">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-promo-ypc.jpg" class="flashes">
                            </a>
                            <a href="/pages/cmt-promo">
                                <img src="/assets/static/images/goldenbahis/upload_files/cmt15p.jpg" class="flashes">
                            </a>
                            <a href="/pages/qr_cevrimli">
                                <img src="/assets/static/images/goldenbahis/upload_files/ppromonew7.jpg" class="flashes">
                            </a>
                            <a href="/pages/15cevrimsiz">
                                <img src="/assets/static/images/goldenbahis/upload_files/ppromonew8.jpg" class="flashes">
                            </a>
                            <a href="/pages/neropaypromo">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-neropaypromo.jpg" class="flashes">
                            </a>
                            <a href="/pages/yenipromo1">
                                <img src="/assets/static/images/goldenbahis/upload_files/ppromonew9.jpg" class="flashes">
                            </a>
                            <a href="/pages/yenipromo2">
                                <img src="/assets/static/images/goldenbahis/upload_files/ppromonew10.jpg" class="flashes">
                            </a>
                            <a href="/pages/yenipromo4">
                                <img src="/assets/static/images/goldenbahis/upload_files/ppromonew7_2.jpg" class="flashes">
                            </a>
                            <a href="/pages/yenipromo6">
                                <img src="/assets/static/images/goldenbahis/upload_files/ppromonew14.jpg" class="flashes">
                            </a>
                            <a href="/pages/slot50">
                                <img src="/assets/static/images/goldenbahis/upload_files/slot-casino-persembe.jpg" class="flashes">
                            </a>
                            <a href="/pages/slot25">
                                <img src="/assets/static/images/goldenbahis/upload_files/slot-casino-yatirim.jpg" class="flashes">
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">view_headline</i>SLOT BONUSLARI
                        </div>
                        <div class="collapsible-body">
                            <a href="/pages/carkifelek">
                                <img src="/assets/static/images/goldenbahis/upload_files/golden-cark-promo.jpg" class="flashes">
                            </a>
                            <a href="/pages/aviator1">
                                <img src="/assets/static/images/goldenbahis/upload_files/gold-avi-promo.jpg" class="flashes">
                            </a>
                            <a href="/pages/slot25">
                                <img src="/assets/static/images/goldenbahis/upload_files/slot-casino-yatirim.jpg" class="flashes">
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">view_headline</i>CANLI CASINO BONUSLARI
                        </div>
                        <div class="collapsible-body">
                            <a href="/pages/cc20">
                                <img src="/assets/static/images/goldenbahis/upload_files/canli-casinoiyatirim.jpg" class="flashes">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <style>
                .promo-title ul li a {
                    color: #ffffff;
                }

                .carkifelek {
                    height: 30px;
                    width: 30px;
                    margin-top: 7px;
                    margin-left: 7px;
                }

                ul.list-type li {
                    width: 48%;
                    text-align: center;
                    float: left;
                    margin: 0 1% 1%;
                }

                ul.list-type li a {
                    background: #fff;
                    display: inline-block;
                }

                ul.list-type li a img {
                    float: left;
                    max-width: 100%;
                }

                .collapsible-body {
                    text-align: center;
                }

                .collapsible-body a {
                    display: inline-block;
                    width: 90%;
                    margin: 5px auto;
                }

                .collapsible-body img {
                    max-width: 100%;
                    float: left;
                }

                .flashes:hover {
                    opacity: 1;
                    -webkit-animation: flash 1.0s;
                    animation: flash 1.0s;
                }

                @-webkit-keyframes flash {
                    0% {
                        opacity: .4;
                    }

                    100% {
                        opacity: 1;
                    }
                }

                @keyframes flash {
                    0% {
                        opacity: .4;
                    }

                    100% {
                        opacity: 1;
                    }
                }
            </style>
        </div>
        <div>
        </div>
        </assets>
    </static-content>
</main>
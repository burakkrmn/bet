<div class="sidebar left" id="right-sidebar">
    <div>
    </div>
    <app-bet-slip>
        <div class="bet-slip-master" id="emptyslip">
            <div class="bet-slip">
                <ul class="tabs tabs-fixed-width bet-slip-tabs fast-tab">
                    <li class="tab"><a class="bet-count active" href="javascript:;">Kupon
                        </a>
                    </li>
                </ul>
            </div>
            <div class="empty-coupon-message">
                <div class="card-panel message-box center-align info empty_coupon_message"> Bahis yapabilmek için en az bir seçim yapılmalıdır </div>
            </div>
        </div>

        <div class="bet-slip-master ng-star-inserted" id="fullslip" style="display:none">
            <div class="bet-slip">
                <ul class="tabs tabs-fixed-width bet-slip-tabs fast-tab">
                    <li class="tab"><a class="bet-count active" href="javascript:;">Kupon
                            <div class="count ng-star-inserted" slipnum>0</div>
                        </a></li>
                    <li class="clear-bet-slip ng-star-inserted"><a href="javascript:;" onclick="clearBetslip()" title="Kuponu Temizle"><i class="material-icons">delete</i></a></li>
                </ul>
            </div>
            <div class="bet-slip betTabs ng-star-inserted">
                <ul class="tabs tabs-fixed-width bet-slip-tabs">
                    <li class="tab"><a href="javascript:;" class="">Tekli</a></li>
                    <li class="tab"><a href="javascript:;" class="active">Kombine</a></li>
                    <li class="tab"><a href="javascript:;">Sistem</a></li>
                </ul>
                <div id="multi-betslip" class="ng-star-inserted">
                    <div class="coupon-container" id="slips">

                    </div>
                    <div class="coupon-amount">
                        <div class="input-field ng-star-inserted">
                            <form novalidate="" class="ng-untouched ng-pristine ng-valid"><input id="bsnum" oninput="renderBetslip()" class="browser-default ng-untouched ng-pristine ng-valid" currency-mask="" debounce="500" formcontrolname="multiBetAmountInput" type="text" min="0.01" placeholder="Miktar gir"></form>
                        </div>
                    </div>
                    <div class="coupon-footer ng-star-inserted">
                        <div class="total-container">
                            <div class="total-coupon flex-container">
                                <div class="total-coupon-title flex-item truncate">Bahis Sayısı:</div>
                                <div class="total-coupon-num" slipnum>0</div>
                            </div>
                            <div class="total-rate flex-container">
                                <div class="total-rate-title flex-item truncate">Toplam Oran:</div>
                                <div class="total-rate-num" totalodds> 0</div>
                            </div>
                            <div class="total-rate flex-container">
                                <div class="total-rate-title flex-item truncate">Olası Kazanç:</div>
                                <div class="total-rate-num" totalwon> 0</div>
                            </div>
                        </div>
                        <div class="check-group ng-star-inserted">
                            <div class="check"><input class="filled-in ng-untouched ng-pristine ng-valid" id="check-group1" type="checkbox"><label class="bet-slip-check" for="check-group1">Oran değişikliklerini kabul ediyorum</label></div>
                            <div class="check"><input class="filled-in ng-untouched ng-pristine ng-valid" id="check-group2" type="checkbox"><label class="bet-slip-check" for="check-group2">Sadece yükselen oranları kabul ediyorum</label></div>
                        </div>
                        <div class="footer-button-main">
                            <div class="betslip-btn-group flex-container">
                                <a class="btn betslipbtn flex-item ng-star-inserted" onclick="loginorpay()" href="javascript:;"> Bahis yap </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-bet-slip>
    <app-mini-games>
        <div accordion="" class="modul-accordion populer-events">
            <div class="modul-header"><span class="header-text"> Mini Games </span><i class="fa fa-caret-down right"></i></div>
            <div class="modul-content">
                <div class="csn-crd">
                    <div class="crd-img" onclick="loginorpay()"><img alt="" class="gm-img loading" src="/assets/other/img/images/egt_games_tumb.jpg"></div>
                </div>
            </div>
        </div>
    </app-mini-games>
    <app-static-inner-content contentcode="sportsbet-right-top">
        <div extroutelink=""></div>
        <div></div>
        <div></div>
    </app-static-inner-content>
    <ready-coupon>
    </ready-coupon>
    <sidebar-right>
        <div class="evulation-roulette-btn">
            <a href="javascript:;" onclick="loginorpay()"><img src="/assets/other/img/images/banner_mini_live_roulette.jpg"></a>
        </div>
        <div class="evulation-iframe">
        </div>
    </sidebar-right>
    <!-- <div id="jpf-container" style="width: 270px; height: 113.4px; display: block;">
        <iframe name="jpf-container" id="jpf-container-iframe" width="100%" height="100%" frameborder="0" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" scrolling="no" src="/widgets/jackpot-bingo/index.html"></iframe>
    </div> -->

</div>
<script>
    $('body').addClass('page-casino')
</script>
<main>
    <router-outlet></router-outlet>
    <app-games class="ng-star-inserted">
        <router-outlet></router-outlet>
        <app-casino class="ng-star-inserted">
            <div class="breadcrumb-wrapper flex-container">
                <div class="breadcrumbs-cont flex-container flex-item">
                    <history-back-button><a class="breadcrumb" href="<?= $_SERVER['HTTP_REFERER'] ?>"><i class="icon chevron-right pg-icons"></i></a></history-back-button>
                    <a class="breadcrumb" href="javascript:;">Casino</a>
                </div>
                <div class="filter-toggle"><a class="filter-toggle-btn active" href="javascript:;"><i class="fa fa-filter"></i></a></div>
                <div class="casino-search-toogle"><i class="fa fa-search pg-icons"></i></div>
            </div>
            <slider>
            </slider>
            <div id="jpf-container" class="ng-star-inserted" style="height: 172.62px; display: block;"><iframe name="jpf-container" id="jpf-container-iframe" width="100%" height="100%" frameborder="0" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" scrolling="no" src="/widgets/jackpot-bingo"></iframe></div>
            <div class="casino-options ng-star-inserted">
                <div class="casino-filter">
                    <app-vendor-container>
                        <select class="browser-default ng-untouched ng-pristine ng-valid">
                            <option value="0" class="ng-star-inserted">Hepsi</option>
                            <option value="37" class="ng-star-inserted">1x2 Gaming</option>
                            <option value="47" class="ng-star-inserted">2 By 2 Gaming</option>
                            <option value="20" class="ng-star-inserted">Ainsworth</option>
                            <option value="15" class="ng-star-inserted">Amatic</option>
                            <option value="68" class="ng-star-inserted">Atmosfera</option>
                            <option value="23" class="ng-star-inserted">Authentic Gaming</option>
                            <option value="4" class="ng-star-inserted">Betgames</option>
                            <option value="74" class="ng-star-inserted">Betsoft Gaming</option>
                            <option value="49" class="ng-star-inserted">Big Time Gaming</option>
                            <option value="26" class="ng-star-inserted">Blueprint Gaming</option>
                            <option value="41" class="ng-star-inserted">Booming Games</option>
                            <option value="83" class="ng-star-inserted">Booongo</option>
                            <option value="33" class="ng-star-inserted">Concept Gaming</option>
                            <option value="73" class="ng-star-inserted">Crazy Tooth Studios</option>
                            <option value="24" class="ng-star-inserted">EGT</option>
                            <option value="54" class="ng-star-inserted">Electric Elephant</option>
                            <option value="2" class="ng-star-inserted">Evolution</option>
                            <option value="55" class="ng-star-inserted">Evoplay Entertainment</option>
                            <option value="8" class="ng-star-inserted">Ezugi</option>
                            <option value="45" class="ng-star-inserted">Fortune Factory Studios</option>
                            <option value="51" class="ng-star-inserted">Foxium</option>
                            <option value="34" class="ng-star-inserted">Game Art</option>
                            <option value="72" class="ng-star-inserted">Gameburger Studios</option>
                            <option value="21" class="ng-star-inserted">Genesis Gaming</option>
                            <option value="58" class="ng-star-inserted">Golden Race</option>
                            <option value="46" class="ng-star-inserted">Habanero</option>
                            <option value="36" class="ng-star-inserted">Iron Dog Studio</option>
                            <option value="35" class="ng-star-inserted">JFTW</option>
                            <option value="67" class="ng-star-inserted">KA Gaming</option>
                            <option value="38" class="ng-star-inserted">Leap Gaming</option>
                            <option value="50" class="ng-star-inserted">Lightning Box</option>
                            <option value="13" class="ng-star-inserted">LiveGames</option>
                            <option value="44" class="ng-star-inserted">Lotto Instant Win</option>
                            <option value="7" class="ng-star-inserted">Lucky Streak</option>
                            <option value="85" class="ng-star-inserted">Maverick</option>
                            <option value="1" class="ng-star-inserted">Microgaming</option>
                            <option value="82" class="ng-star-inserted">MrSlotty</option>
                            <option value="70" class="ng-star-inserted">Neon Valley Studios</option>
                            <option value="5" class="ng-star-inserted">Netent</option>
                            <option value="14" class="ng-star-inserted">NetentLive</option>
                            <option value="11" class="ng-star-inserted">Nucleus Gaming</option>
                            <option value="76" class="ng-star-inserted">Nucleus Gaming</option>
                            <option value="53" class="ng-star-inserted">Old Skool Studios</option>
                            <option value="43" class="ng-star-inserted">Ortiz Gaming</option>
                            <option value="52" class="ng-star-inserted">PG Soft</option>
                            <option value="75" class="ng-star-inserted">Platipus</option>
                            <option value="40" class="ng-star-inserted">Playson</option>
                            <option value="62" class="ng-star-inserted">Pragmatic Play</option>
                            <option value="71" class="ng-star-inserted">Pulse 8 Studios</option>
                            <option value="30" class="ng-star-inserted">Quickspin</option>
                            <option value="31" class="ng-star-inserted">RCT</option>
                            <option value="48" class="ng-star-inserted">Rabcat</option>
                            <option value="29" class="ng-star-inserted">Red Rake</option>
                            <option value="77" class="ng-star-inserted">Red Tiger</option>
                            <option value="27" class="ng-star-inserted">Slingshot Studios</option>
                            <option value="81" class="ng-star-inserted">Spadegaming</option>
                            <option value="25" class="ng-star-inserted">Spinomenal</option>
                            <option value="78" class="ng-star-inserted">Spribe</option>
                            <option value="69" class="ng-star-inserted">Stormcraft Studios</option>
                            <option value="56" class="ng-star-inserted">Switch Studios</option>
                            <option value="22" class="ng-star-inserted">Tom Horn</option>
                            <option value="19" class="ng-star-inserted">Triple Edge Studios</option>
                            <option value="18" class="ng-star-inserted">VivoGaming</option>
                            <option value="3" class="ng-star-inserted">Wazdan</option>
                            <option value="17" class="ng-star-inserted">WeAreCasino</option>
                            <option value="6" class="ng-star-inserted">XProGaming</option>
                            <option value="59" class="ng-star-inserted">iSoftBet</option>
                        </select>
                    </app-vendor-container>
                </div>
                <div class="casino-filter-modal modal modal-fixed-footer" id="modal37">
                    <div class="modal-content">
                        <div class="title"> Choose Gameplay </div>
                        <div class="filter-content">
                            <div class="filter-name"><input class="with-gap" id="test3" name="group1" type="radio"><label for="test3">1.00 - 3,000.000</label></div>
                            <div class="filter-name"><input class="with-gap" id="test3" name="group1" type="radio"><label for="test3">0.10 - 1,500.000</label></div>
                        </div>
                    </div>
                    <div class="modal-footer"><a class="modal-action btn-flat" href="#!">Cancel</a><a class="modal-action btn-flat" href="#!">Play</a></div>
                </div>
            </div>
            <div class="flex-container ng-star-inserted"></div>
            <div id="type1" class="ng-star-inserted">
                <app-category-container>
                    <owl-carousel-o _nghost-rbp-c0="" class="ng-star-inserted">
                        <div _ngcontent-rbp-c0="" class="owl-carousel owl-theme owl-loaded owl-responsive owl-drag">
                            <div _ngcontent-rbp-c0="" class="owl-stage-outer ng-star-inserted">
                                <owl-stage _ngcontent-rbp-c0="" class="ng-tns-c1-4">
                                    <div class="ng-tns-c1-4">
                                        <div class="owl-stage" style="width: 3600px; transform: translate3d(-900px, 0px, 0px); transition: all 0s ease 0s;">
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Poker (1) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Progressive Slot (2) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Rulet (36) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Sanal Oyunlar (12) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Slotlar (1077) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Smart Slotlar (15) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Video Poker (59) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Video Slotlar (1882) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Özellikli Slotlar (1) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 active ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab active"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Hepsi (3251) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 active ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Popüler (42) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 active ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Yeni (149) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 active ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Bakara (9) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Balık Tutma ve Avlanma (5) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Blackjack (46) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Diğer Oyunlar (8) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Kazı Kazan (17) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Live Slots (26) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Loto (34) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Masa Oyunları (21) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Poker (1) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Progressive Slot (2) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Rulet (36) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Sanal Oyunlar (12) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Slotlar (1077) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Smart Slotlar (15) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Video Poker (59) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Video Slotlar (1882) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Özellikli Slotlar (1) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab active"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Hepsi (3251) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Popüler (42) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Yeni (149) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Bakara (9) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Balık Tutma ve Avlanma (5) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Blackjack (46) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Diğer Oyunlar (8) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Kazı Kazan (17) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Live Slots (26) </span></a></div>
                                            </div>
                                            <div class="owl-item ng-tns-c1-4 cloned ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 90px;">
                                                <div class="events ng-star-inserted"><a class="horizontal-slide-tab"><span class="icon"><i class="material-icons pg-icons">stars</i></span><span class="type truncate"> Loto (34) </span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </owl-stage>
                            </div>
                            <div _ngcontent-rbp-c0="" class="owl-nav ng-star-inserted">
                                <div _ngcontent-rbp-c0="" class="owl-prev"><i class="fa fa-chevron-left"></i></div>
                                <div _ngcontent-rbp-c0="" class="owl-next"><i class="fa fa fa-chevron-right"></i></div>
                            </div>
                            <div _ngcontent-rbp-c0="" class="owl-dots disabled ng-star-inserted">
                            </div>
                        </div>
                    </owl-carousel-o>
                </app-category-container>
                <egt-jackpot-banner>
                    <div id="com-egt-jackpot-html-jackpotBanner"></div>
                </egt-jackpot-banner>
                <div class="modul-content" onclick="loginoralert()">
                    <div class="row casino-content">
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/12527.jpg" alt="Mariachy Fiesta"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="new ng-star-inserted">Yeni</span>
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/game_art_wac.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Mariachy Fiesta </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/10876.jpg" alt="African Sunset 2"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/game_art_wac.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> African Sunset 2 </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/10259.jpg" alt="Piggy Holmes"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/game_art_wac.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Piggy Holmes </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/9845.jpg" alt="Apocalypse Quest"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/game_art_wac.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Apocalypse Quest </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/10674.jpg" alt="Rosh Immortality Cube Megaways"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/game_art_wac.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Rosh Immortality Cube Megaways </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/6572.jpg" alt="Chilli Quest"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/game_art_wac.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Chilli Quest </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/11282.jpg" alt="Hawaiian Christmas"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/game_art_wac.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Hawaiian Christmas </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/3127.jpg" alt="Royal Gems"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/game_art_wac.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Royal Gems </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/10868.jpg" alt="Scarab Temple"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="new ng-star-inserted">Yeni</span>
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/booongo.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Scarab Temple </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/13035.jpg" alt="Fruit Super Nova"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="new ng-star-inserted">Yeni</span>
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/evoplay.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Fruit Super Nova </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/9479.jpg" alt="Sun of Egypt: Hold and Win"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/booongo.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Sun of Egypt: Hold and Win </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/11129.jpg" alt="Sun of Egypt 2"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="new ng-star-inserted">Yeni</span>
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/booongo.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Sun of Egypt 2 </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/9469.jpg" alt="Dragon Pearls: Hold and Win"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/booongo.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Dragon Pearls: Hold and Win </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/9964.jpg" alt="Super Marble: Hold and Win"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/booongo.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Super Marble: Hold and Win </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/10711.jpg" alt="Thunder of Olympus"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/booongo.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Thunder of Olympus </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/12032.jpg" alt="Tiger Stone"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="new ng-star-inserted">Yeni</span>
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/booongo.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Tiger Stone </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/9579.jpg" alt="Spring Tails"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/betsoft_vivo.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Spring Tails </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/9581.jpg" alt="Super Sweets"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/betsoft_vivo.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Super Sweets </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/9868.jpg" alt="The Hive"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/betsoft_vivo.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> The Hive </a>
                        </div>
                        <div class="col s4 game-card ng-star-inserted">
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="game-img" src="/m/assets/static/img/300x200/7787.jpg" alt="Aviator"><img alt="" class="game-img loading" src="/m/assets/static/img/images/loading.gif"><span class="inf">
                                        <span class="popular ng-star-inserted">Popüler</span>
                                    </span>
                                    <app-user-favorite classes="fvrt-lnk left">
                                    </app-user-favorite>
                                    <span class="vendor-wrap"><span class="pg-icons"><img alt="" class="vendor-img" src="/m/assets/static/img/32x32/spribe.png"></span></span>
                                </a>
                            </div>
                            <a class="game-name" href="javascript:;"> Aviator </a>
                        </div>
                    </div>
                    <div class="row ng-star-inserted">
                        <div class="col s6 s12 ng-star-inserted"><button class="casino-show-more"> Daha Fazla Oyun Göster </button></div>
                    </div>
                </div>
            </div>
            <div class="casino horizontal-slide-tabs flex-container main">
                <div class="horizontal-slide-content flex-item"><a class="horizontal-slide-tab" routerlinkactive="active" href="/m/livecasino"><span class="icon"><i class="icon cards-fill pg-icons"></i></span><span class="type truncate"> Canlı Casino </span></a><a class="horizontal-slide-tab" routerlinkactive="active" href="/m/betgames"><span class="icon"><i class="pg-icons icon clover"></i></span><span class="type truncate"> Betongames </span></a><a class="horizontal-slide-tab" routerlinkactive="active" href="/m/virtual"><span class="icon"><i class="icon virtualgames pg-icons"></i></span><span class="type truncate"> Sanal Bahis </span></a></div>
            </div>
            <app-static-inner-content contentcode="m_casino-bottom">
                <div extroutelink=""></div>
                <div></div>
                <div></div>
            </app-static-inner-content>
        </app-casino>
    </app-games>
</main>
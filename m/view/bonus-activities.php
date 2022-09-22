<main>
    <router-outlet></router-outlet>
    <app-dashboard>
        <router-outlet></router-outlet>
        <bonus-activities>
            <div class="breadcrumb-wrapper flex-container">
                <div class="breadcrumbs-cont flex-container flex-item">
                    <history-back-button><a class="breadcrumb"><i class="icon chevron-right pg-icons"></i></a></history-back-button><a class="breadcrumb" href="javascript:;">Bonus Hareketlerim</a>
                </div>
            </div>
            <!---->
            <div accordion="" class="modul-accordion bonus-activities">
                <div class="modul-header"><span class="header-text"> Bonus İşlemleri </span><i class="fa fa-chevron-right right"></i></div>
                <div class="modul-content"><span class="title">En son 10 bonus işlemleri</span>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <message-box content="MESSAGES.NO_BONUS_HISTORY_RECORD" type="error">
                        <div class="card-panel message-box error">
                            <!---->
                            <!---->
                            <!---->
                            <div> Geçmiş dönemler için bonus işlemi bulunamadı </div>
                            <!---->
                            <!---->
                            <!---->
                        </div>
                    </message-box>
                </div>
            </div>
            <app-static-inner-content contentcode="m_bonus_action">
                <div extroutelink=""></div>
                <div></div>
                <div></div>
            </app-static-inner-content>
            <div accordion="" class="modul-accordion bonus-activities">
                <div class="modul-header"><span class="header-text"> Casinopro Bonus Geçmişi </span><i class="fa fa-chevron-right right"></i></div>
                <div class="modul-content"><span class="title">En son 10 bonus işlemleri</span>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <message-box content="MESSAGES.NO_BONUS_HISTORY_RECORD" type="error">
                        <div class="card-panel message-box error">
                            <!---->
                            <!---->
                            <!---->
                            <div> Geçmiş dönemler için bonus işlemi bulunamadı </div>
                            <!---->
                            <!---->
                            <!---->
                        </div>
                    </message-box>
                </div>
            </div>
        </bonus-activities>
    </app-dashboard>
</main>
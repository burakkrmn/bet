<main>
    <router-outlet></router-outlet>
    <app-dashboard class="ng-star-inserted">
        <router-outlet></router-outlet>
        <bet-history-out class="ng-star-inserted">
            <router-outlet></router-outlet>
            <bet-history class="ng-star-inserted">
                <!---->
                <div class="breadcrumb-wrapper flex-container ng-star-inserted">
                    <div class="breadcrumbs-cont flex-container flex-item">
                        <history-back-button><a class="breadcrumb"><i class="icon chevron-right pg-icons"></i></a></history-back-button><a class="breadcrumb" href="javascript:;">Bahis Geçmişim</a>
                    </div>
                    <div class="filter-toggle bet-history-filter"><a class="bet-history-dates-btn" href="javascript:;"><i class="fa fa-calendar"></i> Tarih </a></div>
                </div>
                <!---->
                <!---->
                <div class="bet-history">
                    <div class="modul-content">
                        <!---->
                        <div class="list-filter flex-container">
                            <!---->
                            <!----><button class="btn flex-item filter-btn bg stts- active ng-star-inserted"><i class="stts- fa fa-bars"></i></button>
                            <!----><button class="btn flex-item filter-btn bg stts-W ng-star-inserted"><i class="stts-W fa fa-check"></i></button>
                            <!----><button class="btn flex-item filter-btn bg stts-L ng-star-inserted"><i class="stts-L fa fa-times"></i></button>
                            <!----><button class="btn flex-item filter-btn bg stts-O ng-star-inserted"><i class="stts-O fa fa-clock-o"></i></button>
                            <!----><button class="btn flex-item filter-btn bg stts-V ng-star-inserted"><i class="stts-V fa fa-ban"></i></button></div>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <div class="card-panel message-box info ng-star-inserted"><i class="material-icons left">info</i>
                            <div>Veri bulunamadı</div>
                        </div>
                    </div>
                </div>
            </bet-history>
        </bet-history-out>
    </app-dashboard>
</main>
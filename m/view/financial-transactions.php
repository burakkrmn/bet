<main>
    <router-outlet></router-outlet>
    <app-dashboard class="ng-star-inserted">
        <router-outlet></router-outlet>
        <financial-transactions class="ng-star-inserted">
            <div class="breadcrumb-wrapper flex-container">
                <div class="breadcrumbs-cont flex-container flex-item">
                    <history-back-button><a class="breadcrumb" href="/"><i class="icon chevron-right pg-icons"></i></a></history-back-button><a class="breadcrumb" href="javascript:;">Finans Geçmişim</a>
                </div>
                <div class="filter-toggle bet-history-filter"><a class="bet-history-dates-btn" href="javascript:;"><i class="fa fa-calendar"></i> Tarih </a></div>
            </div>
            <app-static-inner-content contentcode="m_financial-transactions-top">
                <div extroutelink=""></div>
                <div></div>
                <div></div>
            </app-static-inner-content>
            <!---->
            <div class="modul-accordion">
                <div class="modul-header">
                    <!---->
                    <!----><span class="header-text ng-star-inserted">Tarih Aralığı::
                        <!----><span class="ng-star-inserted">05/10/2020 - 05/10/2020</span></span></div>
                <div class="modul-content">
                    <div class="list-filter flex-container">
                        <!---->
                        <!----><button class="btn flex-item filter-btn bg stts- active ng-star-inserted"><i class="stts- fa fa-bars"></i></button>
                        <!----><button class="btn flex-item filter-btn bg stts-D ng-star-inserted"><i class="stts-D fa fa-university"></i></button>
                        <!----><button class="btn flex-item filter-btn bg stts-W ng-star-inserted"><i class="stts-W fa fa-money"></i></button>
                        <!----><button class="btn flex-item filter-btn bg stts-O ng-star-inserted"><i class="stts-T fa fa-exchange"></i></button>
                        <!----><button class="btn flex-item filter-btn bg stts-V ng-star-inserted"><i class="stts-B fa fa-futbol-o"></i></button>
                        <!----><button class="btn flex-item filter-btn bg stts-O ng-star-inserted"><i class="stts-JB,JR,JAD,JAU,JW,JC fa fa-money"></i></button>
                        <!----><button class="btn flex-item filter-btn bg stts-C ng-star-inserted"><i class="stts-IB,IW,IR fa fa-object-group"></i></button></div>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <div class="card-panel message-box info ng-star-inserted"><i class="material-icons left">info</i>
                        <div>Veri bulunamadı</div>
                    </div>
                </div>
            </div>
        </financial-transactions>
    </app-dashboard>
</main>
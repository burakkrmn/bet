<main>
    <router-outlet></router-outlet>
    <app-dashboard>
        <router-outlet></router-outlet>
        <casino-pro-history>
            <div class="breadcrumb-wrapper flex-container">
                <div class="breadcrumbs-cont flex-container flex-item">
                    <history-back-button><a class="breadcrumb"><i class="icon chevron-right pg-icons"></i></a></history-back-button><a class="breadcrumb" href="javascript:;">Casinopro Geçmişi</a>
                </div>
                <div class="filter-toggle bet-history-filter"><a class="bet-history-dates-btn" href="javascript:;"><i class="fa fa-calendar"></i>Tarih </a></div>
            </div>
            <!---->
            <div class="modul-accordion">
                <div class="modul-header"><span class="header-text"> Tarih aralığı:
                        <!----></span></div>
                <div class="modul-content">
                    <div class="list-filter flex-container">
                        <!---->
                        <!----><button class="btn flex-item bg stts- filter-btn active"><i class="stts- fa fa-bars"></i></button>
                        <!----><button class="btn flex-item bg stts-W filter-btn"><i class="stts-W fa fa-check"></i></button>
                        <!----><button class="btn flex-item bg stts-L filter-btn"><i class="stts-L fa fa-times"></i></button></div>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <div class="card-panel message-box info"><i class="material-icons left">info</i>
                        <div>Veri bulunamadı</div>
                    </div>
                </div>
            </div>
        </casino-pro-history>
    </app-dashboard>
</main>
<main>
    <router-outlet></router-outlet>
    <app-dashboard>
        <router-outlet></router-outlet>
        <free-spin>
            <div class="breadcrumb-wrapper flex-container">
                <div class="breadcrumbs-cont flex-container flex-item">
                    <history-back-button><a class="breadcrumb"><i class="icon chevron-right pg-icons"></i></a></history-back-button><a class="breadcrumb" href="javascript:;">Freespin Detayları</a>
                </div>
            </div>
            <div class="modul-accordion">
                <div class="modul-header"><span class="header-text"> Casino Ücretsiz Oyun Detayları </span><i class="fa fa-chevron-right right"></i></div>
                <div class="modul-content">
                    <!---->
                    <!---->
                    <div class="progress">
                        <div class="indeterminate"></div>
                    </div>
                    <!---->
                </div>
            </div>
        </free-spin>
    </app-dashboard>
</main>
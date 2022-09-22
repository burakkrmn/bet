<main>
    <router-outlet></router-outlet>
    <app-dashboard class="ng-star-inserted">
        <router-outlet></router-outlet>
        <payment-component class="ng-star-inserted">
            <router-outlet></router-outlet>
            <deposit-money class="ng-star-inserted">
                <deposit-withdraw-money>
                    <div class="breadcrumb-wrapper flex-container">
                        <div class="breadcrumbs-cont flex-container flex-item">
                            <history-back-button><a class="breadcrumb" href="/m/deposit"><i class="icon chevron-right pg-icons"></i></a></history-back-button>
                            <a class="breadcrumb ng-star-inserted" href="javascript:;"><?= $_GET['name'] ?> ile Para Yatırma</a>

                        </div>
                    </div>
                    <div class="modul-accordion-account" style="margin:0;">
                        <iframe src="/payment/<?= $_GET['slug'] ?>" style='width:100%;height:calc(100vh - 121px);mi-height:500px;border:0'></iframe>
                    </div>
                </deposit-withdraw-money>
            </deposit-money>
        </payment-component>
    </app-dashboard>
</main>
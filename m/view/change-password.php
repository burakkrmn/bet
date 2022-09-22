<main>
    <router-outlet></router-outlet>
    <app-dashboard>
        <router-outlet></router-outlet>
        <change-password>
            <div class="breadcrumb-wrapper flex-container">
                <div class="breadcrumbs-cont flex-container flex-item">
                    <history-back-button><a class="breadcrumb"><i class="icon chevron-right pg-icons"></i></a></history-back-button><a class="breadcrumb" href="javascript:;">Şifremi Değiştir</a>
                </div>
            </div>
            <div class="modul-accordion-account">
                <div class="modul-content">
                    <div class="chance-password">
                        <form action="#" novalidate="" class="ng-untouched ng-pristine ng-invalid">
                            <div class="input-field password"><span class="field-label required">Eski Şifre (*)</span><input class="browser-default ng-untouched ng-pristine ng-invalid" id="old-password" type="password">
                                <password-eye el="old-password"><a class="btn password-eye toogle-btn"><i class="fa fa-eye show"></i><i class="fa fa-eye-slash dont-show"></i></a></password-eye>
                                <!---->
                            </div>
                            <div class="input-field password required bubble"><span class="field-label required">Yeni Şifre (*)</span><input class="browser-default ng-untouched ng-pristine ng-invalid" id="new-password" type="password">
                                <bubble-validator position="right">
                                    <div class="bubble-vldtr right">
                                        <ul class="vldtr-lst">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <li class="truncate"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 büyük harf içermeli. </span></li>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <li class="truncate"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 küçük harf içermeli. </span></li>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <li class="truncate"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 nümerik değer içermeli. </span></li>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <li class="truncate"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 8 değer içermeli. </span></li>
                                            <!---->
                                        </ul>
                                    </div>
                                </bubble-validator>
                                <password-eye el="new-password"><a class="btn password-eye toogle-btn"><i class="fa fa-eye show"></i><i class="fa fa-eye-slash dont-show"></i></a></password-eye>
                            </div><button class="btn chance-btn" type="submit" onclick="swal.fire('Dikkat', 'Şifreniz Başarıyla Güncellenmiştir', 'success')">Kaydet</button>
                        </form>
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
            </div>
        </change-password>
    </app-dashboard>
</main>
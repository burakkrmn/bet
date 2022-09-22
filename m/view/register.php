<main>
    <app-authentication class="ng-star-inserted">
        <app-signup class="ng-star-inserted">
            <div class="breadcrumb-wrapper flex-container">
                <div class="breadcrumbs-cont flex-container flex-item">
                    <history-back-button><a class="breadcrumb" href="<?= $_SERVER['HTTP_REFERER'] ?>"><i class="icon chevron-right pg-icons"></i></a></history-back-button>
                    <a class="breadcrumb" href="javascript:;">Üye Ol</a>
                </div>
                <div class="filter-toggle"><a class="register-close" href="/m"><i class="fa fa-times"></i></a></div>
            </div>
            <div class="row">
                <div class="col s12">
                    <app-static-inner-content contentcode="signupTop">
                        <div extroutelink=""></div>
                        <div></div>
                        <div></div>
                    </app-static-inner-content>
                </div>
            </div>
            <div class="register-page">
                <ul class="tabs">
                    <li class="tab ng-star-inserted"><a href="javascript:;" class="active"><span class="tab-count"> 1 </span><span class="text">Hesap Bilgileri</span></a></li>
                    <li class="tab ng-star-inserted"><a href="javascript:;"><span class="tab-count"> 2 </span><span class="text">Kişisel Bilgiler</span></a></li>
                    <li class="tab ng-star-inserted"><a href="javascript:;"><span class="tab-count"> 3 </span><span class="text">Bilgileri Onayla</span></a></li>
                </ul>
                <form id="form" action="#" novalidate="" class="ng-untouched ng-pristine ng-valid ng-star-inserted">
                    <div class="row ng-untouched ng-pristine ng-invalid" ngmodelgroup="signUpFields">
                        <div id="step-ACCOUNT" class="ng-star-inserted">
                            <div class="input-field required ng-star-inserted"><span class="field-label required">Kullanıcı adı </span>
                                <input class="browser-default place-text ng-untouched ng-pristine ng-invalid ng-star-inserted" id="username" type="text" placeholder="" name="field_first">
                            </div>
                            <div class="input-field required ng-star-inserted"><span class="field-label required">Şifre </span>
                                <input class="browser-default place-text ng-untouched ng-pristine ng-invalid ng-star-inserted" id="password" type="password" placeholder="" required="" name="field_second">
                            </div>
                            <div class="input-field required ng-star-inserted"><span class="field-label required">Ad </span>
                                <input class="browser-default place-text ng-untouched ng-pristine ng-invalid ng-star-inserted" id="name" name="name" type="text" placeholder="">
                            </div>
                            <div class="input-field required ng-star-inserted"><span class="field-label required">Soyad </span>
                                <input class="browser-default place-text ng-untouched ng-pristine ng-invalid ng-star-inserted" id="surname" type="text">
                            </div>
                            <div class="input-field required ng-star-inserted"><span class="field-label required">TC Kimlik Numaranız </span>
                                <input class="browser-default place-text ng-untouched ng-pristine ng-invalid ng-star-inserted" id="passport" name="passport" type="text" placeholder="">
                            </div>
                            <div class="input-field required ng-star-inserted"><span class="field-label required"> E-posta </span>
                                <input class="browser-default place-text ng-untouched ng-pristine ng-invalid ng-star-inserted" id="email" type="email" placeholder="" required="" maxlength="100">
                            </div>
                            <div class="input-field required ng-star-inserted">
                                <span class="field-label required">Telefon </span>
                                <div class="iti iti--allow-dropdown iti--separate-dial-code">
                                    <div class="iti__flag-container">
                                        <div class="iti__selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0" title="Turkey (Türkiye): +90">
                                            <div class="iti__flag iti__tr"></div>
                                            <div class="iti__selected-dial-code">+90</div>
                                            <div class="iti__arrow"></div>
                                        </div>
                                    </div>
                                    <input class="browser-default ng-untouched ng-pristine ng-invalid ng-star-inserted" ng2telinput="" name="phone" type="text" autocomplete="off" placeholder="501 234 56 78" data-intl-tel-input-id="0" id="phone" style="padding-left: 81px;">
                                </div>
                            </div>
                            <div class="flex-container step-btns">
                                <a class="btn flex-item ng-star-inserted" href="javascript:;" onclick="signUp()">Kaydol</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </app-signup>
    </app-authentication>
</main>
<? if(isset($us['id'])){ header("location: /m/deposit"); } ?>
<main>
    <router-outlet></router-outlet>
    <app-authentication class="ng-star-inserted">
        <router-outlet></router-outlet>
        <app-signin class="ng-star-inserted">
            <div class="login-page">
                <div class="filter-toggle"><a class="register-close" href="<?= $_SERVER['HTTP_REFERER'] ?>"><i class="fa fa-times"></i></a></div>
                <form id="form" class="login-form clear" action="#" novalidate="">
                    <div class="loginSteps">
                        <div id="step_1">
                            <div class="title">
                                <h5>Hesabınıza giriş yapınız</h5>
                            </div>
                            <div class="input-field ng-star-inserted">
                                <input class="browser-default" name="field_first" type="text" id="username" placeholder="Kullanıcı adı">
                            </div>
                            <div class="input-field password">
                                <input class="browser-default" name="field_second" type="password" placeholder="Şifreniz">
                                <password-eye el="password"><a class="btn password-eye toogle-btn"><i class="fa fa-eye show"></i><i class="fa fa-eye-slash dont-show"></i></a></password-eye>
                            </div>
                        </div>
                        <div id="step_2" class="dnone">
                            <? if($main['phone_status']==1){ ?>
                            <div class="input-field ng-star-inserted">
                                <input class="browser-default" name="phone" type="text" placeholder="Telefon numaranız">
                            </div>
                            <? } ?>
                            <? if($main['passport_status']==1){ ?>
                            <div class="input-field ng-star-inserted">
                                <input class="browser-default" name="passport" type="text" placeholder="TC kimlik numaranız">
                            </div>
                            <? } ?>
                        </div>
                    </div>
                    <button class="btn login-btn" onclick="logIn()"> Giriş Yap </button>
                </form>
                <div class="flex-container btn-group"><a class="forgot-pass" href="#"> Şifremi Unuttum? </a></div>
                <div class="flex-container btn-group btn-register"><a class="register-btn flex-item" href="/m/register"><span>Hesabınız yok mu?</span> Yeni hesap oluştur </a></div>
                <a class="contact-support" href="/"><i class="fa fa-comments left"></i> Canlı Destek </a>
            </div>
        </app-signin>
    </app-authentication>
</main>
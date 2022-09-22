<?php if (!$us["id"]) { ?>
    <div id="sgn-mdl" class="modal">
        <a href="javascript:;" onclick="closemodal()" class="modal-action modal-close">
            <i class="material-icons pg-icons">close</i>
        </a>
        <div class="modal-content">
            <app-login>
                <form id="login_form" onsubmit="logIn()" class="login-form">
                    <div class="title"><i class="fa fa-unlock-alt pg-icons fa-fw"></i> Giriş </div>
                    <div class="lg-frm-content">
                        <div class="loginSteps">
                            <div id="step_1">
                                <input type="text" name="field_first" placeholder="Kullanıcı adı" class="validate browser-default" required="">
                                <div class="input-field password">
                                    <input type="password" name="field_second" placeholder="Şifreniz" class="validate browser-default" required="" autocomplete="false">
                                    <password-eye el="login-password">
                                        <a class="btn password-eye toogle-btn">
                                            <i class="fa fa-eye show"></i>
                                            <i class="fa fa-eye-slash dont-show"></i>
                                        </a>
                                    </password-eye>
                                </div>
                            </div>
                            <div id="step_2" class="hidden">
                                <?php if ($main["phone_status"] == 1) { ?>
                                    <input type="text" name="phone" placeholder="Telefon numaranız" class="validate browser-default" maxlength="11">
                                <?php } ?>
                                <?php if ($main["passport_status"] == 1) { ?>
                                    <div class="input-field">
                                        <input type="text" name="passport" placeholder="TC kimlik numaranız" class="validate browser-default">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <button type="submit" class="btn sgn-btn"> Giriş Yap </button>
                        <div class="flex-container ftgtpass-nwacc">
                            <a href="/forgot-password" class="btn flex-item ftgtpass">
                                <i class="fa fa-key pg-icons"></i> Şifremi Unuttum
                            </a>
                            <a href="/register" class="btn flex-item nwacc">
                                <i class="material-icons pg-icons">content_paste</i> Yeni hesap oluştur
                            </a>
                        </div>
                    </div>
                </form>
            </app-login>
        </div>
    </div>
<?php } else { ?>
<?php } ?>
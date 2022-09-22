<main>
    <div class="container dshbrd-cntr">
        <div class="row">
            <?php include "modules/sidebar.php" ?>
            <div class="col s9 rght-cntnt">
                <div class="chng-psswrd-cntnt">
                    <div class="dshbrd-mdl ">
                        <div class="mdl-hdr">
                            <div class="inf-hdr"><i class="fa fa-unlock-alt fa-fw"></i><span class="inf-title">Şifremi Değiştir</span></div>
                        </div>
                        <div class="mdl-cntnt">
                            <form name="changePasswordForm" novalidate="">
                                <div class="input-field bubble">
                                    <input class="browser-default" id="current-password" name="currentPassword" required="" type="password" placeholder="Eski Şifre">
                                    <password-eye el="current-password"><a class="btn password-eye toogle-btn"><i class="fa fa-eye show"></i><i class="fa fa-eye-slash dont-show"></i></a></password-eye>
                                </div>
                                <div class="input-field bubble">
                                    <input class="browser-default" id="new-password" name="newPassword" required="" type="password" placeholder="Yeni Şifre">
                                    <bubble-validator>
                                        <div class="bubble-vldtr ">
                                            <ul class="vldtr-lst">
                                                <li><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 büyük harf içermeli. </span></li>
                                                <li><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 küçük harf içermeli. </span></li>
                                                <li><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 nümerik değer içermeli. </span></li>
                                                <li><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 8 değer içermeli. </span></li>
                                            </ul>
                                        </div>
                                    </bubble-validator>
                                    <password-eye el="new-password"><a class="btn password-eye toogle-btn"><i class="fa fa-eye show"></i><i class="fa fa-eye-slash dont-show"></i></a></password-eye>
                                </div>
                                <div class="input-field das-change-pass"><button class="btn" disabled="">Değiştir</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
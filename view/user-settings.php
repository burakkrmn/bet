<main>
    <div class="container dshbrd-cntr">
        <div class="row">
            <?php include "modules/sidebar.php" ?>
            <div class="col s9 rght-cntnt">
                <div class="accnt-inf-cntnt">
                    <div class="dshbrd-mdl">
                        <div class="mdl-hdr">
                            <div class="inf-hdr"><i class="material-icons">supervisor_account</i><span class="inf-title">Bildirimler ve Ayarlar</span></div>
                        </div>
                        <div class="mdl-cntnt">
                            <form novalidate="" action="javascript:;">
                                <div>
                                    Yatırım/Çekim taleplerimle ilgili e-mail bildirimleri almak istiyorum
                                    <div class="switch"><label> Kapalı <input type="checkbox"><span class="lever"></span> Açık </label></div>
                                </div>
                                <div class="input-field"><button class="btn" type="submit" onclick="swal.fire('','Kaydedildi','success')">Kaydet</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
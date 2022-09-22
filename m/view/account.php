<main>
    <router-outlet></router-outlet>
    <app-dashboard>
        <router-outlet></router-outlet>
        <personal-and-account-detail>
            <div class="breadcrumb-wrapper flex-container">
                <div class="breadcrumbs-cont flex-container flex-item">
                    <history-back-button><a class="breadcrumb"><i class="icon chevron-right pg-icons"></i></a></history-back-button><a class="breadcrumb" href="javascript:;">Kişisel ve Hesap Bilgilerim</a>
                </div>
            </div>
            <div class="modul-accordion-account">
                <div class="modul-content">
                    <div class="personel-account-detail-form">
                        <!---->
                        <!---->
                        <!---->
                        <table class="personel-account-detail">
                            <tbody>
                                <tr>
                                    <td>Kullanıcı adı</td>
                                    <td><?= $us['login'] ?></td>
                                </tr>
                                <tr>
                                    <td>E-posta</td>
                                    <td>*********@*****.***</td>
                                </tr>
                                <tr>
                                    <td>Para Birimi</td>
                                    <td>
                                        <!----><span>TRY</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kullanıcı Numarası</td>
                                    <td><?= USERID ?></td>
                                </tr>
                                <!---->
                                <tr>
                                    <td>Ad</td>
                                    <td>***** </td>
                                </tr>
                                <!---->
                                <!---->
                                <tr>
                                    <td>Soyad</td>
                                    <td>*****</td>
                                </tr>
                                <!---->
                                <tr>
                                    <td>Doğum tarihi</td>
                                    <td>**/**/****</td>
                                </tr>
                                <!---->
                                <tr>
                                    <td>Kimlik</td>
                                    <td>**********</td>
                                </tr>
                                <!---->
                                <tr>
                                    <td>Telefon</td>
                                    <td>9***********</td>
                                </tr>
                                <!---->
                                <!---->
                                <!---->
                                <tr>
                                    <td>Adres</td>
                                    <td>******</td>
                                </tr>
                            </tbody>
                        </table>
                        <!---->
                    </div>
                </div>
            </div>
            <phone-verify>
                <!---->
            </phone-verify>
        </personal-and-account-detail>
    </app-dashboard>
</main>
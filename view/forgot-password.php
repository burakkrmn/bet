<script>
    function handleSubmit() {
        event.preventDefault();
        swal.fire("", "Şifre sıfırlama için güvenli link e-posta adresinize gönderildi", "success")
    }
</script>
<main>
    <div id="forgot-password">
        <div class="container">
            <div class="row">
                <div class="col s6 offset-s3 fotgot-pass-main">
                    <h4> Şifremi Unuttum </h4>
                    <form onsubmit="handleSubmit()" class="login-form" novalidate="">
                        <div class="input-field">
                            <input class="validate browser-default" name="field_first" type="text" placeholder="Kullanıcı adı">
                        </div>
                        <button type="submit" class="btn login-btn fbtn"> Aktivasyon kodunu e-posta adresime gönderin </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
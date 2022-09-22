<?php
$query = $db -> query("SELECT * from banks order by id DESC");

?>
<div class="hero">
  <h1 class="text-600">Bankalar</h1>
  <p class="hidden-xs m-b-0 m-t-20">Buradan bankaları yönetebilir ve yeni banka ekleyebilirsiniz</p>
</div>
<?php if (!$_SESSION['admin_users_password'] && !empty($main['admin_users_password'])) { ?>
    <div class="page-wrapper">
        <div class="row">
        <div class="col-sm-4">
            <form onsubmit="logInUsers()" id="form">
            <div class="panel">
                <div class="panel-head bg-primary text-uppercase text-normal text-600">Güvenlik</div>
                <div class="panel-body">
                <div class="input-group">
                    <label>Şifre Giriniz</label>
                    <input type="password" name="password" value="" class="form-control">
                </div>
                </div>
                <div class="panel-footer">
                <button type="submit" class="btn btn-default btn-block">Onayla</button>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
    <script>
    function logInUsers(){
        event.preventDefault();
        $.ajax({
        type: "POST",
        url: "request.php?q=check-users",
        data: $("#form").serialize(),
        success: (response) => {
            if (response == "success") {
            window.location.reload();
            }else{
            Swal.fire("","Şifre doğru değil","error")
            }
        }
        })
    }
    </script>
    <?php }else{ ?>
<div class="page-wrapper">
  <div class="m-b-15">
    <button class="btn btn-default" onclick="openmodal('bank-add')">Yeni Banka Ekle</button>
  </div>
  <div class="panel">
    <div class="panel-head bg-primary text-uppercase text-normal text-600">Bankalar</div>
    <div class="simple-table simple-table-primary">
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Banka</th>
            <th>Hesap Sahibi</th>
            <th>Hesap Numarası</th>
            <th>Şube Kodu</th>
            <th>Iban</th>
			<th>Min Tutar</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
            $order = $db -> query("SELECT count(id) as num from banks")->fetch_assoc()[num];
            while ($res = $query -> fetch_assoc()) { ?>
              <tr>
                <td><?=$order?></td>
                <td style="text-transform: uppercase;"><?=$res['name']?></td>
                <td><?=$res['account_holder']?></td>
                <td><?=$res['account_number']?></td>
                <td><?=$res['branch_code']?></td>
                <td><?=$res['iban']?></td>
				<td><?=$res['minumum']?></td>
                <td>
                  <ul class="dflex">
                    <li><a href="javascript:;" onclick="deleteData('banks', <?=$res['id']?>, this)">Sil</a></li>
                  </ul>
                </td>
              </tr>
            <?php $order--; } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="modal" id="bank-add">
  <div class="modal-content">
    <div class="modal-head">
      <h3 class="text-600 m-y-0">Banka Ekle</h3>
      <button onclick="closemodal()" class="modal-close"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body p-t-0">
      <form id="form" class="p-l-15 p-r-15 p-b-15" onsubmit="event.preventDefault()">
        <div class="input-group">
          <label>Banka Adı</label>
         <select class="form-control" name="name">
	<option selected></option>
	<option value="akbank">Akbank</option>
	<option value="alternatifbank">Alternatif Bank</option>
	<option value="anadolubank">Anadolu Bank</option>
	<option value="denizbank">DenizBank</option>
	<option value="deutschebank">DeutscheBank</option>
	<option value="fibabanka">Fibabanka</option>
	<option value="hsbc">HSBC</option>
	<option value="ing">ING</option>
	<option value="odeabank">Odeabank</option>
	<option value="qnbfinansbank">QNB Finansbank</option>
	<option value="sekerbank">ŞekerBank</option>
	<option value="ziraatbank">Ziraat Bankası</option>
	<option value="garanti">Garanti Bankası</option>
	<option value="halkbankasi">Halk Bankası</option>
	<option value="isbankasi">İş Bankası</option>
	<option value="vakifbank">Vakif Bankası</option>
	<option value="yapikredi">Yapı Kredi</option>
			 <option value="enpara">Enpara</option>
</select>
        </div>
        <div class="input-group m-t-20">
          <label>Hesap Sahibi</label>
          <input type="text" class="form-control" name="account-holder" value="">
        </div>
        <div class="input-group m-t-20">
          <label>Hesap Numarası</label>
          <input type="text" class="form-control" name="account-number" value="">
        </div>
        <div class="input-group m-t-20">
          <label>Şube Kodu</label>
          <input type="text" class="form-control" name="branch-code" value="">
        </div>
        <div class="input-group m-t-20">
          <label>Iban</label>
          <input type="text" class="form-control" name="iban" value="">
        </div>
		  <div class="input-group m-t-20">
          <label>Minumum Yatırım</label>
          <input type="text" class="form-control" name="minpay" value="">
        </div>
        <div class="input-group m-t-20">
          <button onclick="addBank()" class="btn btn-default">Onayla</button>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-overlay"></div>
</div>
    <?php } ?>

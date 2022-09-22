<div class="hero">
  <h1 class="text-600">Ödemeler</h1>
  <p class="hidden-xs m-b-0 m-t-20">Buradan gelen ödemeleri görebilir ve kontrol edebilirsiniz</p>
</div>
<div class="page-wrapper">
  <?php
    $type = $_GET['type'] ? $_GET['type'] : "cepbank";
    include 'view/payments/'.$type.'.php';
  ?>
</div>

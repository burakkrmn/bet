<?
if(!isset($us['id'])){ header("location: /m"); }
$payments_query = $db->query("SELECT * from payment_methods where status = '0'");
$limits = [];
$limits_query = $db->query("SELECT * from limits");
while ($row = $limits_query->fetch_assoc()) {
    $limits[$row['name']] = ["min" => $row["min"], "max" => $row["max"]];
}
?>
<main>
    <router-outlet></router-outlet>
    <app-dashboard class="ng-star-inserted">
        <router-outlet></router-outlet>
        <payment-component class="ng-star-inserted">
            <router-outlet></router-outlet>
            <deposit-money class="ng-star-inserted">
                <deposit-withdraw-money>
                    <div class="breadcrumb-wrapper flex-container">
                        <div class="breadcrumbs-cont flex-container flex-item">
                            <history-back-button><a class="breadcrumb" href="/"><i class="icon chevron-right pg-icons"></i></a></history-back-button>
                            <a class="breadcrumb ng-star-inserted" href="javascript:;">Para Çekme</a>

                        </div>
                    </div>
                    <div class="modul-accordion-account">
                        <div class="modul-content">
                            <div class="money-list-cont">
                                <ul class="money-list-menu">
                                <?php while ($row = $payments_query -> fetch_assoc()) { ?>
                                    <li class="ng-star-inserted">
                                        <a class="flex-container" data-payment="superhavale-deposit" href="#" onclick="swal.fire('Dikkat', 'Lütfen canlı desteğe bağlanınız', 'warning')">
                                            <div class="img-wrapper">
                                                <payment-icon height="33" width="100">
                                                    <img src="/assets/images/payment/<?=$row["icon"]?>.png" width="100" height="33"></payment-icon>
                                            </div><br>
                                            <ul class="flex-item info">
                                                <li>
                                                    <b title="Superhavale Deposit" class="ng-star-inserted"><?=$row["name"]?> </b><br class="ng-star-inserted"><small class="ng-star-inserted"><?=$row["name"]?>  ile para çek</small>
                                                </li>
                                                <li><b>İşlem limiti &amp; İşlem zamanı</b><br>
                                                    <small class="ng-star-inserted">Bedava</small>

                                                </li>
                                                <li><small>Min. TRY: <?=$limits[$row["slug"]]["min"]?> / Max. TRY: <?=$limits[$row["slug"]]["max"]?></small></li>
                                            </ul>
                                        </a>
                                    </li>
                                <? } ?>
                                </ul>
                            </div>
                            <app-static-inner-content contentcode="m_deposit-bottom">
                                <div extroutelink=""></div>
                                <div></div>
                                <div></div>
                            </app-static-inner-content>
                        </div>
                    </div>
                </deposit-withdraw-money>
            </deposit-money>
        </payment-component>
    </app-dashboard>
</main>
<style type="text/css">
    #dashboard ul li.deposit-container {
        align-items: center;
        border-bottom: 1px solid #e0e0e0;
        margin-bottom: 0px;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .money-list-cont .money-list-menu>li a .img-wrapper {
        border-color: #ffffff !important;
    }
</style>
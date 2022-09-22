<main>
    <router-outlet></router-outlet>
    <app-games class="ng-star-inserted">
        <router-outlet></router-outlet>
        <app-bingo class="ng-star-inserted">

            <div class="gm-bx ng-star-inserted">
                <div id="lgf-container" style="display: inline-block; width: 100%; height: calc(100vh - 190px);"><iframe name="lgf-container" id="lgf-container-iframe" width="100%" height="100%" frameborder="0" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" scrolling="no" src="/widgets/bingo/index.html"></iframe></div>
            </div>
        </app-bingo>
    </app-games>
    <payments-widget>
        <div class="modal modal-md open dshbrd-modal pymnt-mdl" id="PaymentFormModal" materialize="modal" style="z-index: 1011;">
        </div>
    </payments-widget>
</main>
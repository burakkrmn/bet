<? $upcoming = json_decode($betapi->getSource('/upcoming'), true); shuffle($upcoming); ?>
<main>
    <router-outlet></router-outlet>
    <place-bet class="ng-star-inserted">
        <div>
            <router-outlet></router-outlet>
            <app-today-events class="ng-star-inserted">
                <div class="tdy-evnts">
                    <div class="breadcrumb-wrapper flex-container ng-star-inserted">
                        <div class="breadcrumbs-cont flex-container flex-item">
                            <history-back-button><a class="breadcrumb"><i class="icon chevron-right pg-icons"></i></a></history-back-button>
                            <a class="breadcrumb ng-star-inserted" href="javascript:;">Futbol</a>
                        </div>
                        <div class="filter-toggle"><a class="filter-toggle-btn" href="javascript:;"><i class="fa fa-filter"></i></a></div>
                        <div class="accordion-toggle ng-star-inserted"><a class="bread-toggle-btn" href="javascript:;"><i class="fa fa-angle-double-up"></i></a></div>
                    </div>
                    <div id="type1" class="ng-star-inserted">
                        <div class="flex-container">
                            <ul class="today-events tabs">
                                <li class="tab ng-star-inserted"><a href="javascript:;" class="active"> 1x2
                                    </a>
                                </li>
                                <li class="tab ng-star-inserted"><a href="javascript:;"> Toplam, Asya Toplam - Alt/Üst
                                    </a>
                                </li>
                                <li class="tab ng-star-inserted"><a href="javascript:;"> Her İki Takım da Gol Atar
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div accordion="" class="modul-accordion ng-star-inserted">
                            <div class="modul-content">
                                <div accordion="" class="modul-accordion ng-star-inserted">
                                    <div class="modul-content">
                                        <div class="fixture-container">
                                            <? foreach($upcoming as $ev){ ?>
                                            <div class="match-content ng-star-inserted">
                                                <a class="match-header flex-container" href="#">
                                                    <div class="content-left flex-container">
                                                        <div class="time"><span class="clock"><?= date('H:i', $ev['starttime']) ?></span><span class="date"><?= date('d/m', $ev['starttime']) ?></span></div>
                                                        <div class="team-name truncate"><span class="item"><span class="text truncate"><?= $ev['home'] ?></span></span><span class="item"><span class="text truncate"><?= $ev['away'] ?></span></span></div>
                                                    </div>
                                                    <div class="content-right">
                                                        <div class="icons">
                                                            <button class="statistic-btn"><i class="material-icons pg-icons">equalizer</i></button>
                                                        </div>
                                                        <span class="btn other-btn">+<?= rand(300, 500) ?></span>
                                                    </div>
                                                </a>
                                                <div class="bet-type-wrapper">
                                                </div>
                                                <div class="odd-btn-group flex-container ng-star-inserted">
                                                    <a bet-button="" class="btn bet-btn flex-item twoRow ng-star-inserted" href="javascript:;" foid="3092052577"><span class="bet-btn-odd"><?= ramd(4) ?></span><span class="bet-btn-text"><?= $ev['home'] ?></span></a>
                                                    <a bet-button="" class="btn bet-btn flex-item twoRow ng-star-inserted" href="javascript:;" foid="3092052578"><span class="bet-btn-odd"><?= ramd(4) ?></span><span class="bet-btn-text">Beraberlik</span></a>
                                                    <a bet-button="" class="btn bet-btn flex-item twoRow ng-star-inserted" href="javascript:;" foid="3092052579"><span class="bet-btn-odd"><?= ramd(4) ?></span><span class="bet-btn-text"><?= $ev['away'] ?></span></a>
                                                </div>
                                            </div>
                                            <? } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </app-today-events>
        </div>
    </place-bet>
</main>
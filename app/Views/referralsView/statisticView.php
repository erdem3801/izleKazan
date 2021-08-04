<?= $this->extend('template/layout') ?>

<?= $this->section('js')  ?>
<?= $this->endSection()  ?>

<?= $this->section('css')  ?>
<?= $this->endSection()  ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url("{$locale}/referrals/statistic")  ?>" aria-selected="true"><?= lang("sidebar.menuReferans1")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("{$locale}/referrals/structure") ?>" aria-selected="false"><?= lang("sidebar.menuReferans2")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("{$locale}/referrals/promoBanners")   ?>" aria-selected="false"><?= lang("sidebar.menuReferans3")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("{$locale}/referrals/utmTags")   ?>" aria-selected="false"><?= lang("sidebar.menuReferans4")  ?></a>
                </li>
            </ul>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="d-flex">
                        <h4 class="Rating-Text mr-3">Rating <span class="ml-2"> 3 </span></h4>
                        <i class="fas fa-info-circle text-secondary"></i>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">+3% to income</h6>
                        <i class="fas fa-trophy text-primary align-self-center"></i>
                    </div>
                    <div class="Details d-flex justify-content-end align-self-end">
                        967px
                    </div>
                    <div class="StatProgress--3X5OQ StatProgress_green">
                        <div class="StatProgress__Line--1azwu" style="width: 50%;"></div>
                        <div class="StatProgress__Current--3xbx8" style="left: calc(50% + 23.76px);"><span>572 EXP</span></div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="d-flex">
                        <h4 class="Rating-Text mr-3">Speed</h4>
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">+3% to income</h6>
                        <i class="fas fa-tachometer-alt text-secondary text-primary align-self-center"></i>
                    </div>
                    <div class="Details d-flex align-self-end">
                        Your EXP reward multiple by 1
                    </div>
                    <div class="StatProgress--3X5OQ StatProgress_blue">
                        <div class="StatProgress__Line--1azwu" style="width: 1%;"></div>
                        <div class="StatProgress__Current--3xbx8" style="left: calc(1% + 23.76px);"><span> X1 </span></div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="d-flex">
                        <h4 class="Rating-Text mr-3">QUALIFICATION</h4>
                        <i class="fas fa-info-circle text-secondary"></i>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold text-danger">EXPIRED</h6>
                        <i class="far fa-times-circle  text-danger align-self-center"></i>
                    </div>
                    <div class="Details d-flex align-self-end text-danger">
                        You are losing rating and referral income
                    </div>
                    <div class="StatProgress--3X5OQ StatProgress_blue">
                        <div class="StatProgress__Line--1azwu" style="width: 0%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<?= $this->endSection() ?>
<?= $this->extend('template/layout') ?>
<?= $this->section('js')  ?>
<script src="<?= base_url('public')  ?>/assets/chart.js/Chart.min.js"></script>
<!-- Page level custom scripts -->
<script src="<?= base_url('public')  ?>/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url('public')  ?>/js/demo/chart-pie-demo.js"></script>

<script>
    $(function() {
        $('.dropdown-item').click(function() {

            $('.dropdown-item').removeClass('active')
            $(this).addClass('active')
        })
    })
</script>
<?= $this->endSection()  ?>

<?= $this->section('css')  ?>
<style>
    .my-balance span:nth-child(1) {
        font-size: 24px;
        line-height: 33px;
        color: #3D3D3D;
    }

    .my-balance span:nth-child(2) {
        font-size: 18px;
        line-height: 25px;
        color: #424954;
        margin-top: 5px;
    }

    .balence-info-container:nth-child(n+2) {
        margin-left: 1rem;
        padding: 10px;
        border-left: 1px solid #0000002b;
    }

    .daterange-info {
        font-size: 12px;
        line-height: 16px;
        color: #ABB2BD;
        margin-top: 4px;
        padding-right: 10px;
    }
</style>
<?= $this->endSection()  ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="custom-content-above-user-tab" href="<?= base_url("{$locale}/adverts/myAds") ?>" aria-selected="false"><?= lang("sidebar.menuReklam1")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-content-above-user-tab" href="<?= base_url("{$locale}/adverts/addAdvert") ?>" aria-selected="false"><?= lang("sidebar.menuReklam2")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="custom-content-above-user-tab" href="<?= base_url("{$locale}/adverts/budget")  ?>" aria-selected="true"><?= lang("sidebar.menuReklam3")  ?></a>
                </li>
            </ul>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between align-items-center">
                        <div class="my-balance d-flex justify-content-center">
                            <span>$0.</span>
                            <span>0000007</span>
                            <button class="btn btn-primary btn-lg mx-4"><i class="fas fa-wallet"></i> Replenish</button>
                        </div>
                        <div class="balance-info d-flex">
                            <div class="balence-info-container">
                                <p>spent in a week :</p>
                                <p> $0 </p>
                            </div>
                            <div class="balence-info-container">
                                <p>spent for the current mounth :</p>
                                <p> $0 </p>
                            </div>
                            <div class="balence-info-container">
                                <p>spent last mounth :</p>
                                <p> $0 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <a class="nav-link d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <span>per 2 weeks</span>

                </a>
                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                    <button class="dropdown-item">per mounth</button>
                    <button class="dropdown-item active">per 2 weeks</button>
                    <button class="dropdown-item">per 2 hours</button>
                </div>

            </div>
            <p class="daterange-info">July 20, 2021 — August 2, 2021</p>


        </div>
        <div class="card-body">
            <div class="chart-area">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <canvas id="myAreaChart" style="display: block; height: 120px; width: 424px;" width="530" height="150" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header">
            <h3>PAYMENT HISTORY</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>REQUEST TİME</th>
                        <th>AMOUNT</th>
                        <th>PAYMENT SYSTEM</th>
                        <th>PAYMENT TYPE</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>jul 29 at 23:25</td>
                        <td>$100.000</td>
                        <td class="text-info"><i class="fas fa-wallet"></i> <span>Bank card</span></td>
                        <td>Account replenishment</td>
                        <td><i class="fas fa-times text-danger mr-3"></i><span>fail</span></td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>

</div>
<?= $this->endSection() ?>
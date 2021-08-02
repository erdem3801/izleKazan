<?= $this->extend('template/layout') ?>
<?= $this->section('js')  ?>
<script>
    $(function() {
        $('.dropdown-item').click( function(){
           
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


                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
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
                    <a class="nav-link" href="<?= base_url("{$locale}/referrals/statistic")  ?>" aria-selected="false"><?= lang("sidebar.menuReferans1")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url("{$locale}/referrals/structure") ?>" aria-selected="true"><?= lang("sidebar.menuReferans2")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("{$locale}/referrals/promoBanners")   ?>" aria-selected="false"><?= lang("sidebar.menuReferans3")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("{$locale}/referrals/utmTags")   ?>" aria-selected="false"><?= lang("sidebar.menuReferans4")  ?></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>STRUCTURE</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>LEVELS</th>
                        <th>TODAY</th>
                        <th>WEEK</th>
                        <th>MOUNTH</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Level 1</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Total</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <div class="card">
        <div class="card-header">
            <h4>MY REFERRALS</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container justify-content-center text-center my-5">
                    <i class="fas fa-user-plus my-4"></i>
                    <h5>You have no referrals yet.
                        Invite other people to earn or advertise in Surfe.be and get paid for it.</h5>
                    <a href="/referral" class="blue-btn popup-btn my-4" style="margin: 0 auto;" data-ajaxe="true">
                        Referral links </a>
                </div>
            </div>
        </div>
    </div>

</div>



<?= $this->endSection() ?>
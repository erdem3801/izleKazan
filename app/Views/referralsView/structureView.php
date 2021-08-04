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
                    <a class="nav-link"  href="<?= base_url("{$locale}/referrals/statistic")  ?>" aria-selected="false"><?= lang("sidebar.menuReferans1")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active"  href="<?= base_url("{$locale}/referrals/structure") ?>" aria-selected="true"><?=  lang("sidebar.menuReferans2")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="<?=base_url("{$locale}/referrals/promoBanners")   ?>" aria-selected="false"><?= lang("sidebar.menuReferans3")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="<?=base_url("{$locale}/referrals/utmTags")   ?>" aria-selected="false"><?= lang("sidebar.menuReferans4")  ?></a>
                </li>
            </ul>
        </div>

    

    </div>
</div>



<?= $this->endSection() ?>
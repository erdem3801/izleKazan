<?= $this->extend('template/layout') ?>

<?= $this->section('css')  ?>
<style>
    a.info-box:hover {

        box-shadow: 0px 4px 24px rgba(10, 10, 10, 0.1);
        transform: translateY(-10px);
        transition: .1s;

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
                    <a class="nav-link active" id="custom-content-above-user-tab" href="<?= base_url("{$locale}/adverts/addAdvert") ?>" aria-selected="true"><?= lang("sidebar.menuReklam2")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-content-above-user-tab" href="<?= base_url("{$locale}/adverts/budget")  ?>" aria-selected="false"><?= lang("sidebar.menuReklam3")  ?></a>
                </li>
            </ul>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <a href="#" class="info-box p-5">
                            <span class="info-box-icon"><i class="fab fa-youtube" style="font-size: 5rem;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Video advert</span>
                                <span class="info-box-number">Specify a link to the video in Youtube and a link to the site to go. Our users will watch your video and then be redirected to your site.</span>
                                <span class="progress-description mt-5">
                                    <p>Potential reach: 1 350 135</p>
                                    <p>Price from: $1.00 per 1000 views</p>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </a>

                        <a href="#" class="info-box p-5">
                            <span class="info-box-icon"><i class="fab fa-youtube" style="font-size: 5rem;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Video advert</span>
                                <span class="info-box-number">Specify a link to the video in Youtube and a link to the site to go. Our users will watch your video and then be redirected to your site.</span>
                                <span class="progress-description mt-5">
                                    <p>Potential reach: 1 350 135</p>
                                    <p>Price from: $1.00 per 1000 views</p>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </a>

                        <a href="#" class="info-box p-5">
                            <span class="info-box-icon"><i class="fab fa-youtube" style="font-size: 5rem;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Short link advert</span>
                                <span class="info-box-number">Specify a link to the video in Youtube and a link to the site to go. Our users will watch your video and then be redirected to your site.</span>
                                <span class="progress-description mt-5">
                                    <p>Potential reach: 1 350 135</p>
                                    <p>Price from: $1.00 per 1000 views</p>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </a>

                    </div>
                    <div class="col-md-6">
                        <a href="#" class="info-box p-5">
                            <span class="info-box-icon"><i class="fas fa-file-alt" style="font-size: 5rem;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Video advert</span>
                                <span class="info-box-number">Specify a link to the video in Youtube and a link to the site to go. Our users will watch your video and then be redirected to your site.</span>
                                <span class="progress-description mt-5">
                                    <p>Potential reach: 1 350 135</p>
                                    <p>Price from: $1.00 per 1000 views</p>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </a>

                        <a href="#" class="info-box p-5">
                            <span class="info-box-icon"><i class="fas fa-images" style="font-size: 5rem;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Banner advert</span>
                                <span class="info-box-number">Specify a link to the video in Youtube and a link to the site to go. Our users will watch your video and then be redirected to your site.</span>
                                <span class="progress-description mt-5">
                                    <p>Potential reach: 1 350 135</p>
                                    <p>Price from: $1.00 per 1000 views</p>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
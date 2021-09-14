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

                        <a href="<?= base_url("{$locale}/adverts/addVideo")  ?>" class="info-box p-5">
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
                                <span class="info-box-text">POPUP</span>
                                <span class="info-box-number">
                                    People going be transferred to the site with a guaranteed time of stay on the page. Live traffic source is the browser extension and the mobile application.
                                </span>
                                <span class="progress-description mt-5">
                                    <ul class="advertising_item__list">
                                        <li>
                                            <span>
                                                Daily reach:
                                            </span>
                                            33 227
                                        </li>
                                        <li>
                                            Price from: <span>$1.00</span> per 1000 visits
                                        </li>
                                    </ul>
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
                                <span class="info-box-text">Multi size advert</span>
                                <span class="info-box-number">
                                    Specify a title, description, and upload any image. The system will generate banners of different sizes, which will be shown in the Surfe.pro advertising network, as well as to users who have installed the browser extension.

                                </span>
                                <span class="progress-description mt-5">
                                    <ul class="advertising_item__list">
                                        <li>
                                            <span>
                                                Sizes:
                                            </span>
                                            468x60, 728x90, 240x400, 300x250 and other
                                        </li>
                                        <li>
                                            <span>
                                                Daily reach:
                                            </span>
                                            800 908
                                        </li>
                                        <li>
                                            Price from:
                                            <span>
                                                $0.04
                                            </span>
                                            per 1000 impressions or
                                            <span>
                                                $0.02 per click
                                            </span>
                                        </li>
                                    </ul>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </a>

                        <a href="#" class="info-box p-5">
                            <span class="info-box-icon"><i class="fas fa-images" style="font-size: 5rem;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Banner advert</span>
                                <span class="info-box-number">
                                    Upload graphic banners in standard sizes. They will be shown in the Surfe.pro advertising network, as well as to users who have installed the browser extension.
                                </span>
                                <span class="progress-description mt-5">
                                    <ul class="advertising_item__list">
                                        <li>
                                            <span>
                                                Sizes:
                                            </span>
                                            468x60, 728x90, 240x400, 300x250
                                        </li>
                                        <li>
                                            <span>
                                                Daily reach:
                                            </span>
                                            800 378
                                        </li>
                                        <li>
                                            Price from:
                                            <span>
                                                $0.04
                                            </span>
                                            per 1000 impressions or
                                            <span>
                                                $0.02 per click
                                            </span>
                                        </li>
                                    </ul>
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
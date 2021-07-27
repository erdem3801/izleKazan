<?= $this->extend('template/layout') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Advertiser</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div> -->
    <div class="card-body">
        <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link " id="custom-content-above-user-tab" data-toggle="pill" href="#custom-content-above-user" role="tab" aria-controls="custom-content-above-user" aria-selected="false">User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="custom-content-above-advertiser-tab" data-toggle="pill" href="#custom-content-above-advertiser" role="tab" aria-controls="custom-content-above-advertiser" aria-selected="true">Advertiser</a>
            </li>
        </ul>

        <div class="tab-content" id="custom-content-above-tabContent">

            <div class="tab-pane fade" id="custom-content-above-advertiser" role="tabpanel" aria-labelledby="custom-content-above-advertiser-tab">
                <!-- Content Row -->
                <div class="row mt-4">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2 mb-3">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Advertiser Acound</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-outline btn-primary">Add Advert</button>
                                        <a href="#"> <i class="fas fa-wallet"></i> Budget</a>
                                        <a href="#"> <i class="fas fa-rocket"></i> My Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            ADVERTISING PLATFORM STATISTICS</div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-xl-3 text-center" style="align-self: center;">
                                                        <i class="fas fa-user text-success h1"></i>
                                                    </div>
                                                    <div class="col-xl-9 text-center">
                                                        <h5 class="font-weight-bold">182.5000</h5>
                                                        <h6>last 10 munits</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-xl-3 text-center" style="align-self: center;">
                                                        <i class="fas fa-eye text-primary h1"></i>
                                                    </div>
                                                    <div class="col-xl-9 text-center">
                                                        <h5 class="font-weight-bold">182.5000</h5>
                                                        <h6>last 10 munits</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Row -->
                <div class="row">
                    <div class="typical-block">
                        <div class="typical-block_main payout-history">
                            <div class="payout-history_ico">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#8298b1" viewBox="0 0 24 24" width="48" height="48">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-5-7h2a3 3 0 0 0 6 0h2a5 5 0 0 1-10 0zm1-2a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm8 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                </svg>
                            </div>
                            <div class="payout-history_info">
                                Now you can add your first advert. An advert is a banner, video or popup that attract traffic to your site. </div>
                            <a href="/add" class="blue-btn popup-btn" data-ajaxe="true">
                                Add advert </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade show active" id="custom-content-above-user" role="tabpanel" aria-labelledby="custom-content-above-user-tab">
                <div class="row mt-5">
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

                <div class="row mt-4">
                    <div class="d-flex justify-content-start aling-self-center">
                        <p class="text-center font-weight-bold m-2">USER ACCOUNT</p>
                        <button class="btn btn-outline-info btn-xs"><i class="fas fa-info-circle "></i>How to earn?</i></button>
                    </div>
                    <div class="d-flex justify-content-center mt-4">

                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>
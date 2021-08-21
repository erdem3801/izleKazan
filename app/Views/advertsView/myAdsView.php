<?= $this->extend('template/layout') ?>
<?= $this->section('js') ?>
<script>
    $(function() {
        $('.card').hover(function() {
            const id = $(this).attr('data-id')
           
            $(`#container-${id}`).show();
        }, function() {
            const id = $(this).attr('data-id')
            $(`#container-${id}`).hide();
        })
    })
</script>
<?= $this->endSection() ?>


<?= $this->section('css') ?>
<style>
    .task_id {
        font-size: 9px;
        line-height: 12px;
        letter-spacing: 0.3px;
        color: #ABB2BD;
        margin-bottom: 1px;
    }

    .task_name {
        font-size: 14px;
        line-height: 19px;
        margin-bottom: 4px;
        color: #3F8EFA;
        cursor: text;
    }

    .task_type__ico {
        width: 16px;
        height: 16px;
        align-items: center;
        justify-content: center;
        margin-right: 5px;
    }

    .task_statistics__info>span:nth-child(1) {
        font-size: 16px;
        line-height: 22px;
        color: #3D3D3D;
    }

    .task_statistics__info>span:nth-child(2) {
        font-size: 11px;
        line-height: 15px;
        color: #424954;
    }

    .task-statistics {
        border-right: 2px solid #0000002b;
        padding-right: 7px;
    }

    .task_statistics__info .typical-select_info {
        display: inline-block;
        height: 12px;
        width: 10px;
        background: url(/static/flatonica/img/info-circle-xs.svg) no-repeat;
        vertical-align: middle;
    }

    .typical-select_info {
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        cursor: pointer;
        margin-left: 3px;
    }
</style>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-content-above-user-tab" href="<?= base_url("{$locale}/adverts/myAds") ?>" aria-selected="true"><?= lang("sidebar.menuReklam1")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-content-above-user-tab" href="<?= base_url("{$locale}/adverts/addAdvert") ?>" aria-selected="false"><?= lang("sidebar.menuReklam2")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-content-above-user-tab" href="<?= base_url("{$locale}/adverts/budget")  ?>" aria-selected="false"><?= lang("sidebar.menuReklam3")  ?></a>
                </li>
            </ul>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <?php   foreach ($myAds as $value) :  ?>
                <div class="card collapsed-card" data-id="<?= $value['ID']  ?>">
                    <div class="card-header d-flex align-middle align-items-center">

                        <div class="card-title d-flex align-middle align-items-center">
                            <input type="checkbox">
                            <img class="mx-3" src="https://i.ytimg.com/vi/<?= $value['videoId']  ?>/hqdefault.jpg" alt="" height="100" width="100" style="border-radius: 20px;">
                            <div class="mx-4">
                                <p class="task_id"><?= $value['ID']  ?></p>
                                <div class="task_name inited">
                                    <span>No name</span>
                                    <i class="fas fa-pencil-alt"></i>
                                </div>
                                <div class="task_type">
                                    <i class="fab fa-youtube"></i>
                                    <span> Video </span>
                                </div>
                            </div>

                            <div class="ml-5 d-flex">
                                <div class="task_info__item mx-5 d-flex flex-column">
                                    <span data-original-title="This video will be viewed by users" data-toggle="tooltip">
                                        Link to a video </span>
                                    <span>
                                        <a href="https://noref.io/#https://youtu.be/<?= $value['videoId']  ?>" target="_blank" title="https://youtu.be/<?= $value['videoId']  ?>">
                                            https://youtu.be/<?= $value['videoId']  ?> </a>
                                    </span>
                                </div>
                                <div class="task_info__item mx-5 d-flex flex-column">
                                    <span data-original-title="Guaranteed viewing time" data-toggle="tooltip">
                                        Duration </span>
                                    <span class="params-cpm_min-545353">
                                          <?php 
                                          $sec = $value['duration'] % 60;
                                          $min = floor($value['duration'] / 60) ;
                                          echo $min .':' . $sec;
                                          ?>    
                                    </span>
                                </div>

                                <div class="task_info__item mx-5 d-flex flex-column">
                                    <span data-original-title="This is the page that the user will go to after watching this video" data-toggle="tooltip">
                                        Link to website </span>
                                    <span class="params-link-545353">
                                        <a href="<?= $value['redirectUrl']  ?>" target="_blank" title="<?= $value['redirectUrl']  ?>">
                                        <?= $value['redirectUrl']  ?> </a>
                                    </span>
                                </div>

                            </div>
                        </div>
                        <!-- tools card -->
                        <div class="card-tools ml-auto p-2">
                            <!-- button with a dropdown -->

                            <div class="btn-group" style="display: none;" id="container-<?= $value['ID']  ?>">
                                <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                                    <i class="fas fa-bars"></i>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a href="#" class="dropdown-item"><i class="fas fa-wallet mr-2"></i>Budget Replesh</a>
                                    <a href="#" class="dropdown-item"><i class="fas fa-pencil-alt mr-2"></i>Edit</a>
                                    <a href="#" class="dropdown-item"><i class="far fa-copy mr-2"></i> Copy</a>
                                    <a href="#" class="dropdown-item"><i class="far fa-trash-alt mr-2"></i> Delete</a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                            </button>

                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pt-0">

                        <div class="row mt-4">
                            <div class="d-flex">
                                <div class="task-statistics mx-3 d-flex justify-content-between">
                                    <div class="task_statistics__info d-flex flex-column">
                                        <span> 0 </span>
                                        <span>
                                            Views </span>
                                    </div>
                                    <div class="task_statistics__ico ml-4">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                </div>

                                <div class="task-statistics mx-3 d-flex justify-content-between">
                                    <div class="task_statistics__info d-flex flex-column">
                                        <span> 0 </span>
                                        <span>
                                            Clicks </span>
                                    </div>
                                    <div class="task_statistics__ico ml-4">
                                        <i class="fas fa-external-link-alt"></i>
                                    </div>
                                </div>

                                <div class="task-statistics mx-3 d-flex justify-content-between">
                                    <div class="task_statistics__info d-flex flex-column">
                                        <span> 0 </span>
                                        <span>
                                            Reach <div class="typical-select_info" data-original-title="The number of unique users who viewes this ad" data-toggle="tooltip"></div>
                                        </span>
                                    </div>
                                    <div class="task_statistics__ico ml-4">
                                        <i class="fas fa-user-friends"></i>
                                    </div>
                                </div>

                                <div class="task-statistics mx-3 d-flex justify-content-between">
                                    <div class="task_statistics__info d-flex flex-column">
                                        <span> 0 </span>
                                        <span>
                                            CPM <div class="typical-select_info" data-original-title="The number of unique users who viewes this ad" data-toggle="tooltip"></div>
                                        </span>
                                    </div>
                                    <div class="task_statistics__ico ml-4">
                                        <i class="fas fa-user-friends"></i>
                                    </div>
                                </div>


                                <div class="task-statistics mx-3 d-flex justify-content-between">
                                    <div class="task_statistics__info d-flex flex-column">
                                        <span> 0&nbsp;% </span>
                                        <span>
                                            CTR <div class="typical-select_info" data-original-title="The number of unique users who viewes this ad" data-toggle="tooltip"></div>
                                        </span>
                                    </div>
                                    <div class="task_statistics__ico ml-4">
                                        <i class="fas fa-user-friends"></i>
                                    </div>
                                </div>

                                <div class="mx-3 d-flex justify-content-between">
                                    <div class="task_statistics__info d-flex flex-column">
                                        <span>
                                            <a href="/banner/balance/545353" data-ajaxe="true">
                                                $<span id="bnr-bln-545353" data-val="0">0.000000</span>
                                            </a>
                                        </span>
                                        <span>
                                            Balance
                                        </span>
                                    </div>
                                    <div class="task_statistics__ico ml-4">
                                        <i class="fas fa-wallet"></i>
                                    </div>
                                </div>


                            </div>

                            <div id="adv-graph-545353" class="task_graph-advert">
                                <!-- !!burya chart gelecek -->
                            </div>
                        </div>

                        <ul class="row d-flex justify-content-between align-items-center mt-5 border-3">
                            <li class="nav-item dropdown">
                                <a class="nav-link d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-flex flex-column p-3 text-center">
                                        <span>View per person</span>
                                        <span><?=  $value['viewPerPerson'] ?> View</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">No limits</a>
                                    <a class="dropdown-item" href="#">1 view</a>
                                    <a class="dropdown-item" href="#">2 view</a>
                                    <a class="dropdown-item" href="#">3 view</a>
                                    <a class="dropdown-item" href="#">4 view</a>
                                    <a class="dropdown-item" href="#">5 view</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-flex flex-column p-3 text-center">
                                        <span>View per hout</span>
                                        <span><?= $value['viewPerHour']  ?> view per hour</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">No limits</a>
                                    <a class="dropdown-item" href="#">500 views per hour</a>
                                    <a class="dropdown-item" href="#">200 views per hour</a>
                                    <a class="dropdown-item" href="#">100 views per hour</a>
                                    <a class="dropdown-item" href="#">60 views per hour</a>
                                    <a class="dropdown-item" href="#">30 views per hour</a>
                                    <a class="dropdown-item" href="#">10 views per hour</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-flex flex-column p-3 text-center">
                                        <span>Sources</span>
                                        <span><?= $value['trafic']  ?></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">All sources</a>
                                    <a class="dropdown-item" href="#">Extension</a>
                                    <a class="dropdown-item" href="#">Mobile App</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-flex flex-column p-3 text-center">
                                        <span>Duration</span>
                                        <span>20 sec</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-flex flex-column p-3 text-center">
                                        <span>Language</span>
                                        <span>All</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">Türkçe</a>
                                </div>
                            </li>

                        </ul>

                    </div>
                    <!-- /.card-body -->
                </div>
            <?php endforeach  ?>

        </div>
    </div>

</div>
<?= $this->endSection() ?>
<?= $this->extend('template/layout') ?>

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
            <?php foreach ($myAds as $key => $value) :  ?>
                <div class="card collapsed-card" data-videoId="<?= $value['ID']  ?>">
                    <div class="card-header d-flex align-middle align-items-center">

                        <div class="card-title d-flex align-middle align-items-center">
                            <input class="videoCheckbox" type="checkbox" data-id="<?= $value['ID']  ?>">
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
                                        $min = floor($value['duration'] / 60);
                                        echo $min . ':' . $sec;
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
                                        <span>Views </span>
                                    </div>
                                    <div class="task_statistics__ico ml-4">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                </div>

                                <div class="task-statistics mx-3 d-flex justify-content-between">
                                    <div class="task_statistics__info d-flex flex-column">
                                        <span> 0 </span>
                                        <span>Clicks </span>
                                    </div>
                                    <div class="task_statistics__ico ml-4">
                                        <i class="fas fa-external-link-alt"></i>
                                    </div>
                                </div>

                                <div class="task-statistics mx-3 d-flex justify-content-between">
                                    <div class="task_statistics__info d-flex flex-column">
                                        <span> 0 </span>
                                        <span>
                                            Reach 
                                            <div class="typical-select_info" data-original-title="The number of unique users who viewes this ad" data-toggle="tooltip">
                                                
                                            </div>
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
                                        <span><span id="viewPerPersonItem"><?= $value['viewPerPerson'] ?></span> View</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" data-area="viewPerPersonItem" data-value="0" data-videoId="<?= $value['ID']  ?>" href="#">No limits</a>
                                    <a class="dropdown-item" data-area="viewPerPersonItem" data-value="1" data-videoId="<?= $value['ID']  ?>" href="#">1 view</a>
                                    <a class="dropdown-item" data-area="viewPerPersonItem" data-value="2" data-videoId="<?= $value['ID']  ?>" href="#">2 view</a>
                                    <a class="dropdown-item" data-area="viewPerPersonItem" data-value="3" data-videoId="<?= $value['ID']  ?>" href="#">3 view</a>
                                    <a class="dropdown-item" data-area="viewPerPersonItem" data-value="4" data-videoId="<?= $value['ID']  ?>" href="#">4 view</a>
                                    <a class="dropdown-item" data-area="viewPerPersonItem" data-value="5" data-videoId="<?= $value['ID']  ?>" href="#">5 view</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-flex flex-column p-3 text-center">
                                        <span>View per hour</span>
                                        <span><span id="viewPerHourItem"><?= $value['viewPerHour']  ?></span> view per hour</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" data-area="viewPerHourItem" data-value="0"   data-videoId="<?= $value['ID']  ?>" href="#">No limits</a>
                                    <a class="dropdown-item" data-area="viewPerHourItem" data-value="500" data-videoId="<?= $value['ID']  ?>" href="#">500 views per hour</a>
                                    <a class="dropdown-item" data-area="viewPerHourItem" data-value="200" data-videoId="<?= $value['ID']  ?>" href="#">200 views per hour</a>
                                    <a class="dropdown-item" data-area="viewPerHourItem" data-value="100" data-videoId="<?= $value['ID']  ?>" href="#">100 views per hour</a>
                                    <a class="dropdown-item" data-area="viewPerHourItem" data-value="60"  data-videoId="<?= $value['ID']  ?>" href="#">60 views per hour</a>
                                    <a class="dropdown-item" data-area="viewPerHourItem" data-value="30"  data-videoId="<?= $value['ID']  ?>" href="#">30 views per hour</a>
                                    <a class="dropdown-item" data-area="viewPerHourItem" data-value="10"  data-videoId="<?= $value['ID']  ?>" href="#">10 views per hour</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-flex flex-column p-3 text-center">
                                        <span>Sources</span>
                                        <span id="sourcesItem"><?= $value['trafic']  ?></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" data-area="sourcesItem" data-value="All sources" data-videoId="<?= $value['ID']  ?>" href="#">All sources</a>
                                    <a class="dropdown-item" data-area="sourcesItem" data-value="Extension"   data-videoId="<?= $value['ID']  ?>" href="#">Extension</a>
                                    <a class="dropdown-item" data-area="sourcesItem" data-value="Mobile App"  data-videoId="<?= $value['ID']  ?>" href="#">Mobile App</a>
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
                                        <span id="languageItem"><?= $value['language']  ?></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" data-area="languageItem" data-value="All" href="#">All</a>
                                    <a class="dropdown-item" data-area="languageItem" data-value="English" href="#">English</a>
                                    <a class="dropdown-item" data-area="languageItem" data-value="Türkçe" href="#">Türkçe</a>
                                </div>
                            </li>

                        </ul>

                    </div>
                    <!-- /.card-body -->
                </div>
            <?php endforeach  ?>

            <?php if (sizeof($myAds) !== 0) :  ?>
                <button id="delete" class="btn btn-block btn-outline-danger">Delete Selected Ads</button>
            <?php endif  ?>
        </div>
    </div>

</div>
<?= $this->endSection() ?>
<?= $this->extend('template/layout') ?>

<?= $this->section('js')  ?>
<script>
    $(function() {


        document.getElementById("copyButton").addEventListener("click", function() {

            copyToClipboard(document.getElementById("copyTarget"));
            $('.copied-text').toggle();

            setTimeout(function() {
                $('.copied-text').toggle();
            }, 500)
        })


        function copyToClipboard(elem) {
            // create hidden text element, if it doesn't already exist
            var targetId = "_hiddenCopyText_";
            var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
            var origSelectionStart, origSelectionEnd;
            if (isInput) {
                // can just use the original source element for the selection and copy
                target = elem;
                origSelectionStart = elem.selectionStart;
                origSelectionEnd = elem.selectionEnd;
            } else {
                // must use a temporary form element for the selection and copy
                target = document.getElementById(targetId);
                if (!target) {
                    var target = document.createElement("textarea");
                    target.style.position = "absolute";
                    target.style.left = "-9999px";
                    target.style.top = "0";
                    target.id = targetId;
                    document.body.appendChild(target);
                }
                target.textContent = elem.textContent;
            }
            // select the content
            var currentFocus = document.activeElement;
            target.focus();
            target.setSelectionRange(0, target.value.length);

            // copy the selection
            var succeed;
            try {
                succeed = document.execCommand("copy");
            } catch (e) {
                succeed = false;
            }
            // restore original focus
            if (currentFocus && typeof currentFocus.focus === "function") {
                currentFocus.focus();
            }

            if (isInput) {
                // restore prior selection
                elem.setSelectionRange(origSelectionStart, origSelectionEnd);
            } else {
                // clear temporary content
                target.textContent = "";
            }
            return succeed;
        }

    })
</script>
<?= $this->endSection()  ?>

<?= $this->section('css')  ?>
<style>
    .referral-links_item__link {
        background: rgba(245, 248, 252, 0.2);
        border: 1px solid #e6eaef;
        border-radius: 6px;
        padding: 7px 17px;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        align-items: center;
        position: relative;
        cursor: pointer;
        max-width: 100%;
        overflow: hidden;
    }

    .referral-links_item__link-ico {
        width: 24px;
        height: 24px;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
    }

    .referral-links_item__link-data {
        font-size: 14px;
        line-height: 14px;
        color: #3F8EFA;
        padding: 9px 0 9px 18px;
        border-left: 1px solid #e6eaef;
        margin-left: 18px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        max-width: 100%;
    }

    .referral-links_item__disabled {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        text-align: center;
        background: #3F8EFA;
        border-radius: 6px;
        font-size: 14px;
        line-height: 46px;
        color: #FFFFFF;
        display: none;
        text-transform: uppercase;
    }

    .promotional-materials_item .demo-img {
        max-width: 40vw;
    }

    *[data-ajaxe] {
        cursor: pointer;
    }

    *[data-card-widget] {
        cursor: pointer;
    }

    .referral-links_item__link {
        background: rgba(245, 248, 252, 0.2);
        border: 1px solid #e6eaef;
        border-radius: 6px;
        padding: 7px 17px;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        align-items: center;
        position: relative;
        cursor: pointer;
        max-width: 100%;
        overflow: hidden;
    }

    .promotional-materials_item {
        margin-bottom: 24px;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        align-items: center;
    }

    .promotional-materials_item .referral-links_item__link {
        margin-left: 32px;
    }

    .referral-links_item__link-ico {
        width: 24px;
        height: 24px;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
    }
</style>
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
                    <a class="nav-link" href="<?= base_url("{$locale}/referrals/structure") ?>" aria-selected="false"><?= lang("sidebar.menuReferans2")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url("{$locale}/referrals/promoBanners")   ?>" aria-selected="true"><?= lang("sidebar.menuReferans3")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("{$locale}/referrals/utmTags")   ?>" aria-selected="false"><?= lang("sidebar.menuReferans4")  ?></a>
                </li>
            </ul>
        </div>


    </div>

    <div class="card referral-card">
        <div class="card-header">
            <h4>REFERRAL LINKS</h4>
        </div>
        <div class="card-body d-flex justify-content-between">
            <div class="row">
                <div class="col-md-3 justify-content-center aling-items-center">
                    <img src="<?= base_url('/public/img/bank-ref.svg')  ?>" alt="">
                </div>
                <div class="col-md-9">
                    <h4>Landing page for advertisers</h4>
                    <p>You recieve <span class="text-info">50%</span> from each payin by advert,sers on first lavel</p>
                    <div class="referral-links_item__link" id="copyButton">
                        <div class="referral-links_item__link-ico">
                            <img src="<?= base_url('/public/img/links-line.svg')  ?>" alt="ico">
                        </div>
                        <div class="referral-links_item__link-data" id="copyTarget">
                            https://surfe.be/ext/1402881 </div>
                        <div class="referral-links_item__disabled copied-text">
                            Copied </div>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-3 justify-content-center aling-items-center">
                    <img src="<?= base_url('/public/img/percent-line.svg')  ?>" alt="">
                </div>
                <div class="col-md-9">
                    <h4>Landing page about earning</h4>
                    <p>You recieve <span class="text-info">5%</span> rom banners impressions, sites visits, video watching for users on 10 levels.</p>
                    <div class="referral-links_item__link" id="copyButton">
                        <div class="referral-links_item__link-ico">
                            <img src="<?= base_url('/public/img/links-line.svg')  ?>" alt="ico">
                        </div>
                        <div class="referral-links_item__link-data" id="copyTarget">
                            https://surfe.be/ext/1402881 </div>
                        <div class="referral-links_item__disabled copied-text">
                            Copied </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4>For Advertisers</h4>

    <div class="card-body">
        <div class="card collapsed-card" data-card-widget="collapse">
            <div class="card-header d-flex align-middle align-items-center">

                <div class="card-title d-flex align-middle align-items-center">
                    <h4>BANNERS <span class="text-info">468x60</span></h4>
                </div>
                <!-- tools card -->
                <div class="card-tools ml-auto p-2">

                    <button type="button" class="btn btn-success btn-sm">
                        <i class="fas fa-plus"></i>
                    </button>

                </div>
                <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="promotional-materials_item">
                    <a target="_blank" data-ajaxe="false" href="//static.surfe.be/images/banners/en/728x90_10.gif"><img class="demo-img" src="//static.surfe.be/images/banners/en/728x90_10.gif"></a>
                    <div class="referral-links_item__link">
                        <div class="referral-links_item__link-ico">
                            <img src="<?= base_url('/public/img/links-line.svg')  ?>" alt="ico">
                        </div>
                        <div class="referral-links_item__link-data">
                            &lt;a href="https://surfe.be/1402881" target="_blank"&gt;&lt;img src="https://static.surfe.be/images/banners/en/728x90_10.gif" alt="Surfe.be - Banner advertising service"&gt;&lt;/a&gt;
                        </div>
                        <div class="referral-links_item__disabled">
                            Copied </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </div>

        <div class="card collapsed-card" data-card-widget="collapse">
            <div class="card-header d-flex align-middle align-items-center">

                <div class="card-title d-flex align-middle align-items-center">
                    <h4>BANNERS <span class="text-info">728x90</span></h4>
                </div>
                <!-- tools card -->
                <div class="card-tools ml-auto p-2">

                    <button type="button" class="btn btn-success btn-sm">
                        <i class="fas fa-plus"></i>
                    </button>

                </div>
                <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="promotional-materials_item">
                    <a target="_blank" data-ajaxe="false" href="//static.surfe.be/images/banners/en/728x90_10.gif"><img class="demo-img" src="//static.surfe.be/images/banners/en/728x90_10.gif"></a>
                    <div class="referral-links_item__link">
                        <div class="referral-links_item__link-ico">
                            <img src="<?= base_url('/public/img/links-line.svg')  ?>" alt="ico">
                        </div>
                        <div class="referral-links_item__link-data">
                            &lt;a href="https://surfe.be/1402881" target="_blank"&gt;&lt;img src="https://static.surfe.be/images/banners/en/728x90_10.gif" alt="Surfe.be - Banner advertising service"&gt;&lt;/a&gt;
                        </div>
                        <div class="referral-links_item__disabled">
                            Copied </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </div>


        <div class="card collapsed-card" data-card-widget="collapse">
            <div class="card-header d-flex align-middle align-items-center">

                <div class="card-title d-flex align-middle align-items-center">
                    <h4>BANNERS <span class="text-info">240x400</span></h4>
                </div>
                <!-- tools card -->
                <div class="card-tools ml-auto p-2">

                    <button type="button" class="btn btn-success btn-sm">
                        <i class="fas fa-plus"></i>
                    </button>

                </div>
                <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="promotional-materials_item">
                    <a target="_blank" data-ajaxe="false" href="//static.surfe.be/images/banners/en/728x90_10.gif"><img class="demo-img" src="//static.surfe.be/images/banners/en/728x90_10.gif"></a>
                    <div class="referral-links_item__link">
                        <div class="referral-links_item__link-ico">
                            <img src="<?= base_url('/public/img/links-line.svg')  ?>" alt="ico">
                        </div>
                        <div class="referral-links_item__link-data">
                            &lt;a href="https://surfe.be/1402881" target="_blank"&gt;&lt;img src="https://static.surfe.be/images/banners/en/728x90_10.gif" alt="Surfe.be - Banner advertising service"&gt;&lt;/a&gt;
                        </div>
                        <div class="referral-links_item__disabled">
                            Copied </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </div>

        <div class="card collapsed-card" data-card-widget="collapse">
            <div class="card-header d-flex align-middle align-items-center">

                <div class="card-title d-flex align-middle align-items-center">
                    <h4>BANNERS <span class="text-info">300x250</span></h4>
                </div>
                <!-- tools card -->
                <div class="card-tools ml-auto p-2">

                    <button type="button" class="btn btn-success btn-sm">
                        <i class="fas fa-plus"></i>
                    </button>

                </div>
                <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="promotional-materials_item">
                    <a target="_blank" data-ajaxe="false" href="//static.surfe.be/images/banners/en/728x90_10.gif"><img class="demo-img" src="//static.surfe.be/images/banners/en/728x90_10.gif"></a>
                    <div class="referral-links_item__link">
                        <div class="referral-links_item__link-ico">
                            <img src="<?= base_url('/public/img/links-line.svg')  ?>" alt="ico">
                        </div>
                        <div class="referral-links_item__link-data">
                            &lt;a href="https://surfe.be/1402881" target="_blank"&gt;&lt;img src="https://static.surfe.be/images/banners/en/728x90_10.gif" alt="Surfe.be - Banner advertising service"&gt;&lt;/a&gt;
                        </div>
                        <div class="referral-links_item__disabled">
                            Copied </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </div>
    </div>



    <h4>About earning</h4>

    <div class="card-body">
        <div class="card collapsed-card" data-card-widget="collapse">
            <div class="card-header d-flex align-middle align-items-center">

                <div class="card-title d-flex align-middle align-items-center">
                    <h4>BANNERS <span class="text-info">468x60</span></h4>
                </div>
                <!-- tools card -->
                <div class="card-tools ml-auto p-2">

                    <button type="button" class="btn btn-success btn-sm">
                        <i class="fas fa-plus"></i>
                    </button>

                </div>
                <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="promotional-materials_item">
                    <a target="_blank" data-ajaxe="false" href="//static.surfe.be/images/banners/en/728x90_10.gif"><img class="demo-img" src="//static.surfe.be/images/banners/en/728x90_10.gif"></a>
                    <div class="referral-links_item__link">
                        <div class="referral-links_item__link-ico">
                            <img src="<?= base_url('/public/img/links-line.svg')  ?>" alt="ico">
                        </div>
                        <div class="referral-links_item__link-data">
                            &lt;a href="https://surfe.be/1402881" target="_blank"&gt;&lt;img src="https://static.surfe.be/images/banners/en/728x90_10.gif" alt="Surfe.be - Banner advertising service"&gt;&lt;/a&gt;
                        </div>
                        <div class="referral-links_item__disabled">
                            Copied </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </div>

        <div class="card collapsed-card" data-card-widget="collapse">
            <div class="card-header d-flex align-middle align-items-center">

                <div class="card-title d-flex align-middle align-items-center">
                    <h4>BANNERS <span class="text-info">728x90</span></h4>
                </div>
                <!-- tools card -->
                <div class="card-tools ml-auto p-2">

                    <button type="button" class="btn btn-success btn-sm">
                        <i class="fas fa-plus"></i>
                    </button>

                </div>
                <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="promotional-materials_item">
                    <a target="_blank" data-ajaxe="false" href="//static.surfe.be/images/banners/en/728x90_10.gif"><img class="demo-img" src="//static.surfe.be/images/banners/en/728x90_10.gif"></a>
                    <div class="referral-links_item__link">
                        <div class="referral-links_item__link-ico">
                            <img src="<?= base_url('/public/img/links-line.svg')  ?>" alt="ico">
                        </div>
                        <div class="referral-links_item__link-data">
                            &lt;a href="https://surfe.be/1402881" target="_blank"&gt;&lt;img src="https://static.surfe.be/images/banners/en/728x90_10.gif" alt="Surfe.be - Banner advertising service"&gt;&lt;/a&gt;
                        </div>
                        <div class="referral-links_item__disabled">
                            Copied </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </div>


        <div class="card collapsed-card" data-card-widget="collapse">
            <div class="card-header d-flex align-middle align-items-center">

                <div class="card-title d-flex align-middle align-items-center">
                    <h4>BANNERS <span class="text-info">240x400</span></h4>
                </div>
                <!-- tools card -->
                <div class="card-tools ml-auto p-2">

                    <button type="button" class="btn btn-success btn-sm">
                        <i class="fas fa-plus"></i>
                    </button>

                </div>
                <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="promotional-materials_item">
                    <a target="_blank" data-ajaxe="false" href="//static.surfe.be/images/banners/en/728x90_10.gif"><img class="demo-img" src="//static.surfe.be/images/banners/en/728x90_10.gif"></a>
                    <div class="referral-links_item__link">
                        <div class="referral-links_item__link-ico">
                            <img src="<?= base_url('/public/img/links-line.svg')  ?>" alt="ico">
                        </div>
                        <div class="referral-links_item__link-data">
                            &lt;a href="https://surfe.be/1402881" target="_blank"&gt;&lt;img src="https://static.surfe.be/images/banners/en/728x90_10.gif" alt="Surfe.be - Banner advertising service"&gt;&lt;/a&gt;
                        </div>
                        <div class="referral-links_item__disabled">
                            Copied </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </div>

        <div class="card collapsed-card" data-card-widget="collapse">
            <div class="card-header d-flex align-middle align-items-center">

                <div class="card-title d-flex align-middle align-items-center">
                    <h4>BANNERS <span class="text-info">300x250</span></h4>
                </div>
                <!-- tools card -->
                <div class="card-tools ml-auto p-2">

                    <button type="button" class="btn btn-success btn-sm">
                        <i class="fas fa-plus"></i>
                    </button>

                </div>
                <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="promotional-materials_item">
                    <a target="_blank" data-ajaxe="false" href="//static.surfe.be/images/banners/en/728x90_10.gif"><img class="demo-img" src="//static.surfe.be/images/banners/en/728x90_10.gif"></a>
                    <div class="referral-links_item__link">
                        <div class="referral-links_item__link-ico">
                            <img src="<?= base_url('/public/img/links-line.svg')  ?>" alt="ico">
                        </div>
                        <div class="referral-links_item__link-data">
                            &lt;a href="https://surfe.be/1402881" target="_blank"&gt;&lt;img src="https://static.surfe.be/images/banners/en/728x90_10.gif" alt="Surfe.be - Banner advertising service"&gt;&lt;/a&gt;
                        </div>
                        <div class="referral-links_item__disabled">
                            Copied </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </div>
    </div>


</div>




<?= $this->endSection() ?>
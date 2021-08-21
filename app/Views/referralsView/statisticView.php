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

    .referral-card {
        height: 350px;
    }

    .business-machine-how {
        padding: 48px 50px;
        display: block;
        background: url(../img/business-machine-how-bg.svg) no-repeat,
            radial-gradient(99.87% 99.87% at 0% 1.42%, #062087 0%, #262E61 100%);
        box-shadow: 0px 32px 48px rgba(26, 43, 94, 0.35);
        border-radius: 8px;
        background-size: cover;
    }
    .business-machine-how_title {
    font-weight: bold;
    font-size: 24px;
    line-height: 28px;
    color: #FFFFFF;
    margin-bottom: 34px;
    text-align: center;
}
.business-machine-how_title span {
    color: #FFD129;
}
.business-machine-how_items {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    align-items: baseline;
    margin-bottom: 48px;
}
.business-machine-how_item {
    width: calc((100% - 70px) / 3);
}
.business-machine-how_item__img {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: center;
    margin-bottom: 25px;
}
.business-machine-how_item__number-wrap {
    position: relative;
    margin-bottom: 18px;
}
.business-machine-how_item__info {
    font-size: 14px;
    line-height: 24px;
    text-align: center;
    font-weight: 400;
    color: #C0C3FF;
}
.business-machine-how_item__number-wrap:before, .business-machine-how_item__number-wrap:after {
    display: block;
    height: 2px;
    background: #2E3E80;
    border-radius: 2px;
    width: calc(50% - 20px);
    content: '';
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.business-machine-how_item__number-wrap:after {
    right: 0;
}
.business-machine-how_item__number-wrap:before, .business-machine-how_item__number-wrap:after {
    display: block;
    height: 2px;
    background: #2E3E80;
    border-radius: 2px;
    width: calc(50% - 20px);
    content: '';
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.business-machine-how_item__number {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #3F8EFA;
    font-size: 16px;
    line-height: 32px;
    font-family: Raleway;
    text-align: center;
    color: #FFFFFF;
    margin: 0 auto;
}
.business-machine-how_item__number-wrap:before {
    left: 0;
}
.business-machine-how .blue-btn {
    width: 200px;
    height: 50px;
    margin: 0 auto;
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
                    <a class="nav-link active" href="<?= base_url("{$locale}/referrals/statistic")  ?>" aria-selected="true"><?= lang("sidebar.menuReferans1")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("{$locale}/referrals/structure") ?>" aria-selected="false"><?= lang("sidebar.menuReferans2")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("{$locale}/referrals/promoBanners")   ?>" aria-selected="false"><?= lang("sidebar.menuReferans3")  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("{$locale}/referrals/utmTags")   ?>" aria-selected="false"><?= lang("sidebar.menuReferans4")  ?></a>
                </li>
            </ul>
        </div>

        <div class="card-body">
            <div class="row">
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
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card referral-card">
                <div class="card-header">
                    <h4>REFERRAL LINKS</h4>
                </div>
                <div class="card-body">
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

                    <div class="row my-4">
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
        </div>
        <div class="col-md-6">
            <div class="card referral-card">
                <div class="card-header">
                    <h4>TOTAL INCOME</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="mr-auto income-contet">
                            <h4>$0.00000007</h4>
                        </div>
                        <div class="mr-3 income-content justify-content-center text-center">
                            <h5>Daily income</h5>
                            <h5>$0</h5>
                        </div>
                        <div class="income-content justify-content-center text-center">
                            <h5>Active referrals</h5>
                            <h5>0</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="container justify-content-center text-center my-5">
                            <i class="fas fa-user-plus my-4"></i>
                            <h5>Invite other people to earn or advertise in Surfe.be and get paid for it.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <div class="row business-machine-how">
        <div class="business-machine-how_title">
            How does the <span>Business Machine</span> work? </div>
        <div class="business-machine-how_items">
            <div class="business-machine-how_item">
                <div class="business-machine-how_item__img">
                    <img src="<?= base_url('/public/img/business-machine-how-illustration-1.svg')  ?>" alt="img">
                </div>
                <div class="business-machine-how_item__number-wrap">
                    <div class="business-machine-how_item__number">
                        1
                    </div>
                </div>
                <div class="business-machine-how_item__info">
                    Business Machine&nbsp;— a&nbsp;function that allows you to&nbsp;advertise your referral link in&nbsp;the Surfe.be ad&nbsp;network at&nbsp;the expense of&nbsp;the money you earned. In&nbsp;fact, the system creates a&nbsp;banner with your referral link. </div>
            </div>
            <div class="business-machine-how_item">
                <div class="business-machine-how_item__img">
                    <img src="<?= base_url('/public/img/business-machine-how-illustration-2.svg')  ?>" alt="img">
                </div>
                <div class="business-machine-how_item__number-wrap">
                    <div class="business-machine-how_item__number">
                        2
                    </div>
                </div>
                <div class="business-machine-how_item__info">
                    You can set the percentage of&nbsp;earnings that go&nbsp;to&nbsp;the banner's account. If&nbsp;you choose 50%, then half of&nbsp;the money earned immediately goes to&nbsp;the account of&nbsp;Business Machine, and when you accumulate enough money&nbsp; for at&nbsp;least one impression, your banner ends up in rotation. </div>
            </div>
            <div class="business-machine-how_item">
                <div class="business-machine-how_item__img">
                    <img src="<?= base_url('/public/img/business-machine-how-illustration-3.svg')  ?>" alt="img">
                </div>
                <div class="business-machine-how_item__number-wrap">
                    <div class="business-machine-how_item__number">
                        3
                    </div>
                </div>
                <div class="business-machine-how_item__info">
                    You can also set an&nbsp;impression price. If&nbsp;the system has banners with a&nbsp;higher value, then their display priority is&nbsp;higher. Therefore, in&nbsp;order to&nbsp;start receiving impressions, you must adjust the price. Otherwise, the lineup of&nbsp;your banner will never reach. </div>
            </div>
        </div>
        <a href="/referral/business-machine" class="blue-btn" data-ajaxe="true">
            Activate </a>
    </div>
</div>



<?= $this->endSection() ?>
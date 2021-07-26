<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?= lang("sidebar.siteName")  ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url("{$locale}/controlCenter")  ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span> <?= lang("sidebar.menu1")  ?></span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    <?= lang("sidebar.menuKesici")  ?>
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#advertsUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-rocket"></i>
            <span><?= lang("sidebar.dropDownReklam")  ?></span>
        </a>
        <div id="advertsUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"><?= lang("sidebar.menuReklamKesici")  ?>:</h6>
                <a class="collapse-item" href="utilities-color.html"><?= lang("sidebar.menuReklam1")  ?></a>
                <a class="collapse-item" href="utilities-border.html"><?= lang("sidebar.menuReklam2")  ?></a>
                <a class="collapse-item" href="utilities-animation.html"><?= lang("sidebar.menuReklam3")  ?></a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#referralsUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-user-friends"></i>
            <span><?= lang("sidebar.dropDownReferanslar")  ?></span>
        </a>
        <div id="referralsUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"><?= lang("sidebar.referansKesici ")  ?>:</h6>
                <a class="collapse-item" href="utilities-color.html"><?= lang("sidebar.menuRefrans1")  ?></a>
                <a class="collapse-item" href="utilities-border.html"><?= lang("sidebar.menuReferans2")  ?></a>
                <a class="collapse-item" href="utilities-animation.html"><?= lang("sidebar.menuReferans3")  ?></a>
                <a class="collapse-item" href="utilities-other.html"><?= lang("sidebar.menuReferans4")  ?></a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>User</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"><?= lang("sidebar.kullanıcıKesici ")  ?>:</h6>

                <a class="collapse-item" href="<?= base_url("{$locale}/user/profile")  ?>"><?= lang("sidebar.userMenu1 ")  ?></a>
                <a class="collapse-item" href="#"><?= lang("sidebar.userMenu2 ")  ?></a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#helpUtilities" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>   <?= lang("sidebar.dropDownHelp ")  ?></span>
        </a>
        <div id="helpUtilities" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"><?= lang("sidebar.yardımKesici ")  ?>:</h6>

                <a class="collapse-item" href="#"><?= lang("sidebar.helpMenu1 ")  ?></a>
                <a class="collapse-item" href="#"><?= lang("sidebar.helpMenu2 ")  ?></a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    Verification
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item  text-center">
        <a class="nav-link" href="#">
            <i class="fab fa-telegram-plane"></i>
            <span>Telegram</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas  fa-play"></i>
            <span>Get App</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <!-- <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="<?= base_url('public')  ?>/img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div> -->

</ul>
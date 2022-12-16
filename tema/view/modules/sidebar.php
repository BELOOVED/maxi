<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="dashboard"><i class="menu-icon fa fa-laptop"></i>Anasayfa </a>
                    </li>
                    <? if ($_SESSION['status'] == '0'){ ?>
                    <li>
                        <a href="general-settings"> <i class="menu-icon ti-email"></i>Genel Ayarlar </a>
                    </li>
                    <li>
                        <a href="account-settings"> <i class="menu-icon ti-email"></i>Hesap Ayarları </a>
                    </li>
                    <? } ?>
                    <li>
                        <a href="banks"> <i class="menu-icon ti-email"></i>Bankalar </a>
                    </li>
                    <li>
                        <a href="limits"> <i class="menu-icon ti-email"></i>Yatırım Limitleri</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Ödemeler</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="payments">Tüm Ödemeler</a></li>
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="payments?type=papara">Papara</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="payments?type=havale">Havale</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="payments?type=payfix">Payfix</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="payments?type=crypto">Crypto</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="payments?type=creditcard">Kredi Kartı</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="payments?type=mefete">Mefete</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Kullanıcılar</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="totalusers">Toplam Kullanıcılar</a></li>
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="users?type=0">Giriş Yapan</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="users?type=1">Kayıt Olan</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="administrators"> <i class="menu-icon ti-email"></i>Yöneticiler </a>
                    </li>
                    <li>
                        <a href="#" onclick="logOut()"> <i class="menu-icon ti-email"></i>Çıkış Yap </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/styles.css">
	<script src="assets/main.js"></script>
	<script src="assets/vendor.js"></script>
	<script src="assets/polyfills.js"></script>
	<script src="assets/runtime.js"></script>
	<script src="../../assets/app.js"></script>
	<script src="../../assets/script.js"></script>
	<style type="text/css">date-input-polyfill{background:#fff;color:#000;text-shadow:none;border:0;padding:0;height:auto;width:auto;line-height:normal;font-family:sans-serif;font-size:14px;position:absolute!important;text-align:center;box-shadow:0 3px 10px 1px rgba(0,0,0,.22);cursor:default;z-index:1;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;overflow:hidden;display:block}date-input-polyfill[data-open=false]{visibility:hidden;z-index:-100!important;top:0}date-input-polyfill[data-open=true]{visibility:visible}date-input-polyfill select,date-input-polyfill table,date-input-polyfill td,date-input-polyfill th{background:#fff;color:#000;text-shadow:none;border:0;padding:0;height:auto;width:auto;line-height:normal;font-family:sans-serif;font-size:14px;box-shadow:none;font-family:Lato,Helvetica,Arial,sans-serif}date-input-polyfill button,date-input-polyfill select{border:0;border-radius:0;border-bottom:1px solid #dadfe1;height:24px;vertical-align:top;-webkit-appearance:none;-moz-appearance:none}date-input-polyfill .monthSelect-wrapper{width:55%;display:inline-block}date-input-polyfill .yearSelect-wrapper{width:25%;display:inline-block}date-input-polyfill select{width:100%}date-input-polyfill select:first-of-type{border-right:1px solid #dadfe1;border-radius:5px 0 0 0;-moz-border-radius:5px 0 0 0;-webkit-border-radius:5px 0 0 0}date-input-polyfill button{width:20%;background:#dadfe1;border-radius:0 5px 0 0;-moz-border-radius:0 5px 0 0;-webkit-border-radius:0 5px 0 0}date-input-polyfill button:hover{background:#eee}date-input-polyfill table{border-collapse:separate!important;border-radius:0 0 5px 5px;-moz-border-radius:0 0 5px 5px;-webkit-border-radius:0 0 5px 5px;overflow:hidden;max-width:280px;width:280px}date-input-polyfill td,date-input-polyfill th{width:32px;padding:4px;text-align:center;box-sizing:content-box}date-input-polyfill td[data-day]{cursor:pointer}date-input-polyfill td[data-day]:hover{background:#dadfe1}date-input-polyfill [data-selected]{font-weight:700;background:#d8eaf6}</style>
	<style>.swiper{--noOfColumns:0;--columnWidth:0;--dynamicColWidths:0;position:relative;display:-webkit-box;display:flex;-webkit-box-pack:center;justify-content:center;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swiper.allowed-user-selection{-webkit-user-select:auto;-moz-user-select:auto;-ms-user-select:auto;user-select:auto}.swiper .dots-wrapper{position:absolute;bottom:20px;z-index:6;width:auto}.swiper .dots-wrapper li{display:inline-block;margin:0 6px;width:15px;height:15px;opacity:.6;border-width:2px;border-style:solid;border-radius:50%;background-color:transparent;cursor:pointer}.swiper .dots-wrapper li.big-buttons{padding:5px;width:18px;height:18px}.swiper .swiper-content{position:relative;z-index:2;width:100%;overflow:hidden;-webkit-overflow-scrolling:touch}.swiper .swiper-wrapper{position:relative;display:-webkit-box;display:flex;width:100%;height:100%;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);-webkit-transition:height .3s;transition:height .3s;will-change:transform}@supports (display:grid){.swiper .swiper-wrapper{display:-ms-grid;display:grid;-ms-grid-columns:(var(--columnWidthPercentage)) [var(--noOfColumns) ];grid-template-columns:repeat(var(--noOfColumns),var(--columnWidthPercentage));grid-auto-columns:1fr;-webkit-box-align:start;align-items:start}}.swiper .swiper-wrapper.smooth-translate{-webkit-transition:height .3s,-webkit-transform .6s cubic-bezier(.215,.61,.355,1);transition:transform .6s cubic-bezier(.215,.61,.355,1),height .3s,-webkit-transform .6s cubic-bezier(.215,.61,.355,1)}.swiper .swiper-wrapper.bounds-hit{-webkit-transition:height .3s,-webkit-transform .6s cubic-bezier(1,1.59,.61,.74);transition:transform .6s cubic-bezier(1,1.59,.61,.74),height .3s,-webkit-transform .6s cubic-bezier(1,1.59,.61,.74)}.swiper .swiper-wrapper.no-transition{-webkit-transition:height .3s!important;transition:height .3s!important}.swiper .swiper-wrapper.dynamic-width{-ms-grid-columns:var(--dynamicColWidths);grid-template-columns:var(--dynamicColWidths)}.swiper .swiper-wrapper>*{width:100%!important}.swiper .swiper-wrapper.no-events>*{pointer-events:none}.swiper .swiper-navigation{position:absolute;top:0;z-index:3;display:-webkit-box;display:flex;height:0!important;width:100%;-webkit-box-align:center;align-items:center}.swiper .swiper-navigation .swiper-next,.swiper .swiper-navigation .swiper-previous{position:absolute;z-index:99;height:35px;width:20px;cursor:pointer}.swiper .swiper-navigation .swiper-next.disabled-navigation,.swiper .swiper-navigation .swiper-previous.disabled-navigation{opacity:.3;pointer-events:none}.swiper .swiper-navigation .swiper-previous{left:5px}.swiper .swiper-navigation .swiper-next{right:5px}</style>
	<title></title>
</head>
<?php echo htmlspecialchars_decode($main['sources']); ?> 
<?php if(isset($us['id'])){ ?>
<section id="fixed-header" class="fixed-header-wrapper">
  <master-header>
    <section class="fixed-header">
      <header id="header" test-id="header" class="header-top">
        <section test-id="left-menu-slider-nav" class="left-menu-slider-nav">
          <a href="javascript:;" onclick="opensidebar()">
          <span id="nav-toggle" class="nav-toggle-cont nav-toggle">
            <span>
              <span></span>
            </span>
          </span>
</a>
          <slider-menu>
            <section class="slider-menu">
              <div class="slider-menu-background-overlay"></div>
              <div class="slider left-slider left-slider-closed" test-id="left-slider-closed">
                <div id="slider-wrapper" class="slider-wrapper" style="--scrollbar-width:0px;">
                  <game-search-normal class="menu-search">
                    <div name="search-form" class="game-search">
                      <div>
                        <div class="search-field">
                          <i class="fa icon-magnifier"></i>
                          <input test-id="game-search-normal-search-field-input" type="search" class="search-input ng-untouched ng-pristine ng-valid" placeholder="Oyunları Ara">
                        </div>
                        <div test-id="games-search-list" class="games-search-list">
                          <game-search-result test-id="search-game-result">
                            <!---->
                          </game-search-result>
                          <!---->
                        </div>
                      </div>
                    </div>
                  </game-search-normal>
                  <div class="menu-content">
                    <a class="menu-item" id="welcome-bonus" href="https://bonus.casinomaxi564.com/tr/1500-tl-150-freespin-hosgeldin-bonus-paketi/" test-id="nav-welcome-bonus"> Hoşgeldin Bonusu </a>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                  </div>
                  <!---->
                  <!---->
                  <div class="menu-content">
                    <a class="menu-item" id="a-z" href="/tr/casino-oyunlari/" test-id="nav-a-z"> Tüm Oyunlar (A-Z) </a>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                  </div>
                  <!---->
                  <!---->
                  <div class="menu-content">
                    <a class="menu-item" id="language" href="/tr/dil-secimi/" test-id="nav-language"> Dili değiştir </a>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                  </div>
                  <!---->
                  <!---->
                  <div class="menu-content">
                    <a class="menu-item" id="casino-games" href="/tr/" test-id="nav-casino-games"> Anasayfam </a>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                  </div>
                  <!---->
                  <!---->
                  <div class="menu-content">
                    <a class="menu-item" id="promotions" href="https://bonus.casinomaxi564.com/tr/" test-id="nav-promotions"> Kampanyalar </a>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                  </div>
                  <!---->
                  <!---->
                  <div class="menu-content">
                    <a class="menu-item" id="support" href="https://hc.supportcasinomaxi.com/hc/tr" test-id="nav-support"> Yardım </a>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                  </div>
                  <!---->
                  <!---->
                  <div class="menu-content">
                    <a class="menu-item" id="support" href="https://bonus.casinomaxi564.com/tr/en-kolay-para-yatirma-yontemleri/" test-id="nav-support"> Para Yatırma Yöntemleri </a>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                  </div>
                  <!---->
                  <!---->
                  <!---->
                </div>
              </div>
            </section>
          </slider-menu>
        </section>
        <div class="content-wrapper">
          <a href="." test-id="main-logo" class="main-logo desktop" title="CasinoMaxi">
            <img alt="logo" src="https://cdnroute.bpsgameserver.com/staticfiles/BetssonGroup/CasinoMaxi/cc1a5fb/casinomaxi/assets/images/logo.svg">
          </a>
          <div class="logo-align-wrapper">
            <a uisref="home" test-id="main-logo" class="main-logo mobile" title="CasinoMaxi" href="/tr/">
              <img alt="logo" src="https://cdnroute.bpsgameserver.com/staticfiles/BetssonGroup/CasinoMaxi/cc1a5fb/casinomaxi/assets/images/logo-mobile.svg">
            </a>
          </div>
          <div class="header-right">
            <div class="header-nav-item">
              <!---->
              <!---->
              <!---->
              <account-info>
                <div class="account-info">
                  <!---->
                  <div class="ng-star-inserted">
                    <div class="user-context-module">
                      <!---->
                      <span id="nav-user-ddl" class="nav-user-ddl dropdown user-menu ng-star-inserted">
                        <a id="user-context-dropdown" test-id="account-user-context-dropdown-toggle" tabindex="" class="nav-btn-chevron user-context-anchor account-info-data dropdown">
                          <i class="icon icon-profile nav-user-ddl-left-icon"></i>
                          <span class="customer-first-name">Ahmet</span>
                          <i class="fa fa-chevron-down icon-triangle"></i>
                        </a>
                        <unread-notification-count class="ng-star-inserted">
                          <div class="new-messages-module ng-star-inserted">
                            <div class="new-messages-number">2</div>
                          </div>
                          <!---->
                        </unread-notification-count>
                        <!---->
                        <ul id="user-context" tabindex="-1" class="nav-account-ddl dropdown-menu">
                          <account-drop test-id="account-info-drop-messages" class="ng-star-inserted">
                            <unread-notification-count class="nav-item ng-star-inserted">
                              <div class="new-messages-module ng-star-inserted">
                                <div class="new-messages-number">2</div>
                              </div>
                              <!---->
                            </unread-notification-count>
                            <!---->
                            <!---->
                            <li class="link-end ng-star-inserted">
                              <a href="/tr/mesajlar/" id="messages" test-id="messages"> Mesajlar </a>
                            </li>
                            <!---->
                          </account-drop>
                          <account-drop test-id="account-info-drop-my-bonuses" class="ng-star-inserted">
                            <!---->
                            <!---->
                            <li class="link-end ng-star-inserted">
                              <a href="/tr/bonuslarim/" id="my-bonuses" test-id="my-bonuses"> Bonuslarım </a>
                            </li>
                            <!---->
                          </account-drop>
                          <account-drop test-id="account-info-drop-account-settings" class="ng-star-inserted">
                            <!---->
                            <li class="grouped-links ng-star-inserted" id="account-settings">
                              <a class="link-header closed" test-id="account-settings"> Hesabım <i class="icon-triangle fa fa-angle-down closed"></i>
                              </a>
                              <ul class="closed">
                                <li class="link ng-star-inserted" id="personal-details">
                                  <a class="sub" href="/tr/hesabim/bilgilerim/" test-id="account-drop-account-settings-personal-details"> Kişisel Bilgiler </a>
                                </li>
                                <li class="link ng-star-inserted" id="marketing-preferences">
                                  <a class="sub" href="/tr/cerez-ayarlari/" test-id="account-drop-account-settings-marketing-preferences"> Tanıtım Ayarları </a>
                                </li>
                                <li class="link ng-star-inserted" id="kyc">
                                  <a class="sub" href="/tr/hesabim/belgelerim/" test-id="account-drop-account-settings-kyc"> Hesap Doğrulama </a>
                                </li>
                                <li class="link ng-star-inserted" id="change-password">
                                  <a class="sub" href="/tr/hesabim/sifre-degistir/" test-id="account-drop-account-settings-change-password"> Şifre Değiştir </a>
                                </li>
                                <!---->
                              </ul>
                            </li>
                            <!---->
                            <!---->
                          </account-drop>
                          <account-drop test-id="account-info-drop-bank" class="ng-star-inserted">
                            <!---->
                            <li class="grouped-links ng-star-inserted" id="bank">
                              <a class="link-header closed" test-id="bank"> Cüzdan <i class="icon-triangle fa fa-angle-down closed"></i>
                              </a>
                              <ul class="closed">
                                <li class="link ng-star-inserted" id="transactions">
                                  <a class="sub" href="/tr/cuzdan/islem-gecmisi/" test-id="account-drop-bank-transactions"> İşlem Geçmişi </a>
                                </li>
                                <li class="link ng-star-inserted" id="deposit">
                                  <a class="sub" href="/tr/para-yatir/" test-id="account-drop-bank-deposit"> Para Yatır </a>
                                </li>
                                <li class="link ng-star-inserted" id="withdraw">
                                  <a class="sub" href="/tr/para-cek/" test-id="account-drop-bank-withdraw"> Para Çek </a>
                                </li>
                                <li class="link ng-star-inserted" id="pending-withdrawals">
                                  <a class="sub" href="/tr/cuzdan/bekleyen-islemler/" test-id="account-drop-bank-pending-withdrawals"> Bekleyen Para Çekme İşlemleri </a>
                                </li>
                                <!---->
                              </ul>
                            </li>
                            <!---->
                            <!---->
                          </account-drop>
                          <account-drop test-id="account-info-drop-responsible-gaming-header" class="ng-star-inserted">
                            <!---->
                            <li class="grouped-links ng-star-inserted" id="responsible-gaming-header">
                              <a class="link-header closed" test-id="responsible-gaming-header"> Bilinçli Oyun <i class="icon-triangle fa fa-angle-down closed"></i>
                              </a>
                              <ul class="closed">
                                <li class="link ng-star-inserted" id="responsible-gaming-info">
                                  <a class="sub" href="/tr/bilincli-oyun/bilgi/" test-id="account-drop-responsible-gaming-header-responsible-gaming-info"> Bilgi </a>
                                </li>
                                <li class="link ng-star-inserted" id="deposit-limit">
                                  <a class="sub" href="/tr/bilincli-oyun/para-yatirma-limiti/" test-id="account-drop-responsible-gaming-header-deposit-limit"> Para Yatırma Limiti </a>
                                </li>
                                <!---->
                              </ul>
                            </li>
                            <!---->
                            <!---->
                          </account-drop>
                          <account-drop test-id="account-info-drop-logout" class="ng-star-inserted">
                            <!---->
                            <!---->
                            <li class="link-end ng-star-inserted">
                              <a href="/tr/cikis-yap/" id="logout" test-id="logout"> Çıkış Yap </a>
                            </li>
                            <!---->
                          </account-drop>
                          <!---->
                        </ul>
                      </span>
                      <!---->
                      <span id="nav-user-ddl" class="nav-user-ddl dropdown user-balance ng-star-inserted">
                        <a id="balance-dropdown" test-id="balance-dropdown" class="nav-btn-chevron balance customer-name user-context-anchor">
                          <span>₺0,4</span>
                          <i class="fa fa-chevron-down icon-triangle"></i>
                        </a>
                        <div id="user-context" aria-labelledby="balance-dropdown" tabindex="-1" class="dropdown-menu-right balance-dropdown btn btn-sm dropdown-menu">
                          <a test-id="header-balance-withdrawable-money" class="balance-item" href="/tr/bonuslarim/">
                            <span class="balance-label">Çekilebilir tutar</span>
                            <i class="fa fa-info-circle"></i>
                            <div class="balance-amount"> ₺0,4 </div>
                          </a>
                          <a test-id="header-balance-bonus-money" class="balance-item ng-star-inserted" href="/tr/bonuslarim/">
                            <span class="balance-label">Bonus tutar</span>
                            <i class="fa fa-info-circle"></i>
                            <div class="balance-amount">₺0</div>
                          </a>
                          <!---->
                          <!---->
                          <!---->
                        </div>
                      </span>
                      <!---->
                    </div>
                    <div class="right-container">
                      <a id="btn-deposit" uisref="deposit" test-id="btn-deposit" class="btn btn-sm btn-success" href="/tr/para-yatir/">Para Yatır</a>
                      <a id="btn-withdraw" uisref="withdrawal" class="btn btn-sm btn-primary btn-withdraw" href="/tr/para-cek/">Para Çekme</a>
                    </div>
                  </div>
                  <!---->
                  <!---->
                  <!---->
                  <a test-id="iconLoginButton" class="icon-profile-anchor ng-star-inserted">
                    <i id="accountInfo::userProfile" class="icon-profile user-logo"></i>
                    <unread-notification-count class="hidden-desktop ng-star-inserted">
                      <div class="new-messages-module ng-star-inserted">
                        <div class="new-messages-number">2</div>
                      </div>
                      <!---->
                    </unread-notification-count>
                    <!---->
                  </a>
                  <!---->
                  <slider-menu class="ng-star-inserted">
                    <section class="slider-menu">
                      <div class="slider-menu-background-overlay"></div>
                      <div class="slider right-slider right-slider-closed" test-id="right-slider-closed">
                        <div id="slider-wrapper" class="slider-wrapper">
                          <div class="nav-side-right">
                            <div class="nav-side-right-header">
                              <i class="icon-profile nav-side-right-icon">
                                <unread-notification-count class="unread-counter user-message-counter ng-star-inserted">
                                  <div class="new-messages-module ng-star-inserted">
                                    <div class="new-messages-number">2</div>
                                  </div>
                                  <!---->
                                </unread-notification-count>
                                <!---->
                              </i>
                              <h3>Ahmet</h3>
                            </div>
                            <nav-balance class="ng-star-inserted">
                              <div class="nav-balance">
                                <a test-id="right-side-balance" class="balance-total">
                                  <p>Bakiye</p>
                                  <p>:</p>
                                  <p>₺0,4</p>
                                  <i class="fa fa-chevron-down icon-triangle"></i>
                                </a>
                                <div class="balance-breakdown">
                                  <a test-id="right-balance-withdrawable-money" class="balance-item" href="/tr/bonuslarim/">
                                    <div class="balance-label">
                                      <p>Çekilebilir tutar</p>
                                      <i class="fa fa-info-circle"></i>
                                    </div>
                                    <p class="balance-amount">₺0,4</p>
                                  </a>
                                  <a test-id="right-balance-bonus-money" class="balance-item ng-star-inserted" href="/tr/bonuslarim/">
                                    <div class="balance-label">
                                      <p>Bonus tutar</p>
                                      <i class="fa fa-info-circle"></i>
                                    </div>
                                    <p class="balance-amount">₺0</p>
                                  </a>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </nav-balance>
                            <!---->
                            <div class="btn-wrapper">
                              <button id="btn-deposit" test-id="btn-deposit-mobile" uisref="deposit" class="btn btn-success btn-block">Para Yatır</button>
                            </div>
                            <nav-side>
                              <section>
                                <div>
                                  <nav-side-sub class="nav-side-sub ng-star-inserted">
                                    <!---->
                                    <div class="nav-side-sub-li ng-star-inserted" test-id="nav-messages">
                                      <a href="/tr/mesajlar/" test-id="nav-messages" class="ng-star-inserted"> Mesajlar <unread-notification-count class="nav-item unread-counter ng-star-inserted">
                                          <div class="new-messages-module ng-star-inserted">
                                            <div class="new-messages-number">2</div>
                                          </div>
                                          <!---->
                                        </unread-notification-count>
                                        <!---->
                                      </a>
                                      <!---->
                                      <!---->
                                    </div>
                                    <!---->
                                    <!---->
                                  </nav-side-sub>
                                  <nav-side-sub class="nav-side-sub ng-star-inserted">
                                    <div class="nav-item ng-star-inserted">
                                      <!---->
                                      <a href="/tr/bonuslarim/" test-id="nav-my-bonuses" class="ng-star-inserted">
                                        <span class="nav-label">Bonuslarım</span>
                                        <span class="nav-label ng-star-inserted">
                                          <!---->
                                        </span>
                                        <span class="nav-label ng-star-inserted">
                                          <!---->
                                        </span>
                                        <span class="nav-label ng-star-inserted">
                                          <!---->
                                        </span>
                                        <span class="nav-label ng-star-inserted">
                                          <!---->
                                        </span>
                                        <!---->
                                      </a>
                                      <!---->
                                    </div>
                                    <!---->
                                    <!---->
                                    <!---->
                                  </nav-side-sub>
                                  <nav-side-sub class="nav-side-sub ng-star-inserted">
                                    <!---->
                                    <!---->
                                    <div class="accordion nav-side-sub-li ng-star-inserted">
                                      <a class="accordion-button" test-id="nav-account-settings">
                                        <span class="category-icon icon-"></span>
                                        <span class="nav-label">Hesabım</span>
                                        <i class="fa fa-chevron-down icon-triangle"></i>
                                      </a>
                                      <div class="nav-item-submenu" style="height: 0px;">
                                        <nav-side-sub class="nav-side-sub ng-star-inserted">
                                          <div class="nav-item ng-star-inserted">
                                            <!---->
                                            <a href="/tr/hesabim/bilgilerim/" test-id="nav-personal-details" class="ng-star-inserted">
                                              <span class="nav-label">Kişisel Bilgiler</span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <!---->
                                            </a>
                                            <!---->
                                          </div>
                                          <!---->
                                          <!---->
                                          <!---->
                                        </nav-side-sub>
                                        <nav-side-sub class="nav-side-sub ng-star-inserted">
                                          <div class="nav-item ng-star-inserted">
                                            <!---->
                                            <a href="/tr/cerez-ayarlari/" test-id="nav-marketing-preferences" class="ng-star-inserted">
                                              <span class="nav-label">Tanıtım Ayarları</span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <!---->
                                            </a>
                                            <!---->
                                          </div>
                                          <!---->
                                          <!---->
                                          <!---->
                                        </nav-side-sub>
                                        <nav-side-sub class="nav-side-sub ng-star-inserted">
                                          <div class="nav-item ng-star-inserted">
                                            <!---->
                                            <a href="/tr/hesabim/belgelerim/" test-id="nav-kyc" class="ng-star-inserted">
                                              <span class="nav-label">Hesap Doğrulama</span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <!---->
                                            </a>
                                            <!---->
                                          </div>
                                          <!---->
                                          <!---->
                                          <!---->
                                        </nav-side-sub>
                                        <nav-side-sub class="nav-side-sub ng-star-inserted">
                                          <div class="nav-item ng-star-inserted">
                                            <!---->
                                            <a href="/tr/hesabim/sifre-degistir/" test-id="nav-change-password" class="ng-star-inserted">
                                              <span class="nav-label">Şifre Değiştir</span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <!---->
                                            </a>
                                            <!---->
                                          </div>
                                          <!---->
                                          <!---->
                                          <!---->
                                        </nav-side-sub>
                                        <!---->
                                      </div>
                                    </div>
                                    <!---->
                                  </nav-side-sub>
                                  <nav-side-sub class="nav-side-sub ng-star-inserted">
                                    <!---->
                                    <!---->
                                    <div class="accordion nav-side-sub-li ng-star-inserted">
                                      <a class="accordion-button" test-id="nav-bank">
                                        <span class="category-icon icon-"></span>
                                        <span class="nav-label">Cüzdan</span>
                                        <i class="fa fa-chevron-down icon-triangle"></i>
                                      </a>
                                      <div class="nav-item-submenu" style="height: 0px;">
                                        <nav-side-sub class="nav-side-sub ng-star-inserted">
                                          <div class="nav-item ng-star-inserted">
                                            <!---->
                                            <a href="/tr/cuzdan/islem-gecmisi/" test-id="nav-transactions" class="ng-star-inserted">
                                              <span class="nav-label">İşlem Geçmişi</span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <!---->
                                            </a>
                                            <!---->
                                          </div>
                                          <!---->
                                          <!---->
                                          <!---->
                                        </nav-side-sub>
                                        <nav-side-sub class="nav-side-sub ng-star-inserted">
                                          <div class="nav-item ng-star-inserted">
                                            <!---->
                                            <a href="/tr/para-yatir/" test-id="nav-deposit" class="ng-star-inserted">
                                              <span class="nav-label">Para Yatır</span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <!---->
                                            </a>
                                            <!---->
                                          </div>
                                          <!---->
                                          <!---->
                                          <!---->
                                        </nav-side-sub>
                                        <nav-side-sub class="nav-side-sub ng-star-inserted">
                                          <div class="nav-item ng-star-inserted">
                                            <!---->
                                            <a href="/tr/para-cek/" test-id="nav-withdraw" class="ng-star-inserted">
                                              <span class="nav-label">Para Çek</span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <!---->
                                            </a>
                                            <!---->
                                          </div>
                                          <!---->
                                          <!---->
                                          <!---->
                                        </nav-side-sub>
                                        <nav-side-sub class="nav-side-sub ng-star-inserted">
                                          <div class="nav-item ng-star-inserted">
                                            <!---->
                                            <a href="/tr/cuzdan/bekleyen-islemler/" test-id="nav-pending-withdrawals" class="ng-star-inserted">
                                              <span class="nav-label">Bekleyen Para Çekme İşlemleri</span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <!---->
                                            </a>
                                            <!---->
                                          </div>
                                          <!---->
                                          <!---->
                                          <!---->
                                        </nav-side-sub>
                                        <!---->
                                      </div>
                                    </div>
                                    <!---->
                                  </nav-side-sub>
                                  <nav-side-sub class="nav-side-sub ng-star-inserted">
                                    <!---->
                                    <!---->
                                    <div class="accordion nav-side-sub-li ng-star-inserted">
                                      <a class="accordion-button" test-id="nav-responsible-gaming-header">
                                        <span class="category-icon icon-"></span>
                                        <span class="nav-label">Bilinçli Oyun</span>
                                        <i class="fa fa-chevron-down icon-triangle"></i>
                                      </a>
                                      <div class="nav-item-submenu" style="height: 0px;">
                                        <nav-side-sub class="nav-side-sub ng-star-inserted">
                                          <div class="nav-item ng-star-inserted">
                                            <a class="icons-items ng-star-inserted" href="/tr/bilincli-oyun/bilgi/" test-id="nav-responsible-gaming-info">
                                              <span class="category-icon icon-responsible-gaming"></span>
                                              <span class="nav-label">Bilgi</span>
                                            </a>
                                            <!---->
                                            <!---->
                                          </div>
                                          <!---->
                                          <!---->
                                          <!---->
                                        </nav-side-sub>
                                        <nav-side-sub class="nav-side-sub ng-star-inserted">
                                          <div class="nav-item ng-star-inserted">
                                            <!---->
                                            <a href="/tr/bilincli-oyun/para-yatirma-limiti/" test-id="nav-deposit-limit" class="ng-star-inserted">
                                              <span class="nav-label">Para Yatırma Limiti</span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <span class="nav-label ng-star-inserted">
                                                <!---->
                                              </span>
                                              <!---->
                                            </a>
                                            <!---->
                                          </div>
                                          <!---->
                                          <!---->
                                          <!---->
                                        </nav-side-sub>
                                        <!---->
                                      </div>
                                    </div>
                                    <!---->
                                  </nav-side-sub>
                                  <nav-side-sub class="nav-side-sub ng-star-inserted">
                                    <div class="nav-item ng-star-inserted">
                                      <!---->
                                      <a href="/tr/cikis-yap/" test-id="nav-logout" class="ng-star-inserted">
                                        <span class="nav-label">Çıkış Yap</span>
                                        <span class="nav-label ng-star-inserted">
                                          <!---->
                                        </span>
                                        <span class="nav-label ng-star-inserted">
                                          <!---->
                                        </span>
                                        <span class="nav-label ng-star-inserted">
                                          <!---->
                                        </span>
                                        <span class="nav-label ng-star-inserted">
                                          <!---->
                                        </span>
                                        <!---->
                                      </a>
                                      <!---->
                                    </div>
                                    <!---->
                                    <!---->
                                    <!---->
                                  </nav-side-sub>
                                  <!---->
                                </div>
                              </section>
                            </nav-side>
                            <!---->
                          </div>
                          <!---->
                        </div>
                      </div>
                    </section>
                  </slider-menu>
                  <!---->
                </div>
              </account-info>
              <!---->
            </div>
            <div class="header-nav-item">
              <!---->
              <span id="help-ddl" class="nav-help-ddl dropdown">
                <a id="help-dropdown" test-id="header-help-dropdown-toggle" class="nav-btn-chevron header-help header-btn dropdown-toggle">
                  <i class="icon-help"></i>
                  <p>Yardım</p>
                  <span class="fa fa-chevron-down icon-triangle"></span>
                </a>
                <ul aria-labelledby="help-dropdown" tabindex="-1" class="dropdown-menu-right help-ddl-content dropdown-menu">
                  <li class="link">
                    <a href="https://hc.supportcasinomaxi.com/hc/tr" id="support" test-id="header-help-dropdown-support"> Yardım </a>
                  </li>
                  <li class="link">
                    <a href="https://bonus.casinomaxi564.com/tr/en-kolay-para-yatirma-yontemleri/" id="support" test-id="header-help-dropdown-support"> Para Yatırma Yöntemleri </a>
                  </li>
                  <!---->
                </ul>
              </span>
              <!---->
              <!---->
              <!---->
            </div>
            <div class="header-nav-item">
              <div>
                <language-dropdown>
                  <a class="language-dropdown" href="/tr/dil-secimi/">
                    <div class="flag-wrapper">
                      <i class="flags flags-md flags-md-tr"></i>
                      <!---->
                      <span class="lang-name">TR</span>
                      <!---->
                      <!---->
                    </div>
                  </a>
                </language-dropdown>
                <!---->
              </div>
              <!---->
              <!---->
              <!---->
              <!---->
            </div>
            <!---->
          </div>
        </div>
        <clock>
          <span class="clock">
            <!---->
            <clock-site>
              <span class="clock-site">
                <span class="clock-time">14:06</span>
              </span>
            </clock-site>
            <!---->
          </span>
        </clock>
      </header>
      <!---->
    </section>
  </master-header>
</section>

<?php }else{ ?>
    <section id="fixed-header" class="fixed-header-wrapper">
		<master-header>
		  <section class="fixed-header">
			<header id="header" test-id="header" class="header-top">
			  <section test-id="left-menu-slider-nav" class="left-menu-slider-nav">
				<a href="javascript:;" onclick="opensidebar()">
          <span id="nav-toggle" class="nav-toggle-cont nav-toggle">
            <span>
              <span></span>
            </span>
          </span>
</a>
				<slider-menu>
				  <section class="slider-menu">
					<div class="slider-menu-background-overlay"></div>
					<div class="slider left-slider left-slider-closed" test-id="left-slider-closed">
					  <div id="slider-wrapper" class="slider-wrapper" style="--scrollbar-width:0px;">
						<game-search-normal class="menu-search">
						  <div name="search-form" class="game-search">
							<div>
							  <div class="search-field">
								<i class="fa icon-magnifier"></i>
								<input test-id="game-search-normal-search-field-input" type="search" class="search-input ng-untouched ng-pristine ng-valid" placeholder="Oyunları Ara">
							  </div>
							  <div test-id="games-search-list" class="games-search-list">
								<game-search-result test-id="search-game-result">
								  <!---->
								</game-search-result>
								<!---->
							  </div>
							</div>
						  </div>
						</game-search-normal>
						<div class="menu-content">
						  <a class="menu-item" id="login" href="/tr/giris/" test-id="nav-login"> Giriş </a>
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						</div>
						<!---->
						<!---->
						<div class="menu-content">
						  <a class="menu-item" id="join-now" href="/tr/kayit-ol/" test-id="nav-join-now"> Kayıt Ol </a>
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						</div>
						<!---->
						<!---->
						<div class="menu-content">
						  <a class="menu-item" id="welcome-bonus" href="https://bonus.casinomaxi564.com/tr/1500-tl-150-freespin-hosgeldin-bonus-paketi/" test-id="nav-welcome-bonus"> Hoşgeldin Bonusu </a>
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						</div>
						<!---->
						<!---->
						<div class="menu-content">
						  <a class="menu-item" id="a-z" href="/tr/casino-oyunlari/" test-id="nav-a-z"> Tüm Oyunlar (A-Z) </a>
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						</div>
						<!---->
						<!---->
						<div class="menu-content">
						  <a class="menu-item" id="language" href="/tr/dil-secimi/" test-id="nav-language"> Dili değiştir </a>
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						</div>
						<!---->
						<!---->
						<div class="menu-content">
						  <a class="menu-item" id="casino-games" href="/tr/" test-id="nav-casino-games"> Anasayfam </a>
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						</div>
						<!---->
						<!---->
						<div class="menu-content">
						  <a class="menu-item" id="promotions" href="https://bonus.casinomaxi564.com/tr/" test-id="nav-promotions"> Kampanyalar </a>
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						</div>
						<!---->
						<!---->
						<div class="menu-content">
						  <a class="menu-item" id="support" href="https://hc.supportcasinomaxi.com/hc/tr" test-id="nav-support"> Yardım </a>
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						</div>
						<!---->
						<!---->
						<div class="menu-content">
						  <a class="menu-item" id="support" href="https://bonus.casinomaxi564.com/tr/en-kolay-para-yatirma-yontemleri/" test-id="nav-support"> Para Yatırma Yöntemleri </a>
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						  <!---->
						</div>
						<!---->
						<!---->
						<!---->
					  </div>
					</div>
				  </section>
				</slider-menu>
			  </section>
			  <div class="content-wrapper">
				<a href="." test-id="main-logo" class="main-logo desktop" title="CasinoMaxi">
				  <img alt="logo" src="https://cdnroute.bpsgameserver.com/staticfiles/BetssonGroup/CasinoMaxi/cc1a5fb/casinomaxi/assets/images/logo.svg">
				</a>
				<div class="logo-align-wrapper">
				  <a uisref="home" test-id="main-logo" class="main-logo mobile" title="CasinoMaxi" href="/tr/">
					<img alt="logo" src="https://cdnroute.bpsgameserver.com/staticfiles/BetssonGroup/CasinoMaxi/cc1a5fb/casinomaxi/assets/images/logo-mobile.svg">
				  </a>
				</div>
				<div class="header-right">
				  <div class="header-nav-item">
					<!---->
					<!---->
					<!---->
					<account-info>
					  <div class="account-info">
						<div class="right-container">
						  <a test-id="account-info-login-btn" uisref="login" class="btn btn-sm btn-secondary btn-icon-before btn-icon-padlock" href="/tr/giris/">Giriş</a>
						  <a test-id="account-info-register-now-btn" uisref="register" class="btn btn-sm btn-success btn-icon-before btn-icon-pencil" href="/tr/kayit-ol/">Şimdi Kayıt Ol</a>
						  <!---->
						  <!---->
						  <!---->
						</div>
						<!---->
						<!---->
						<a class="icon-profile-anchor" href="/tr/giris/">
						  <i test-id="iconLoginButton" class="icon-profile user-logo"></i>
						</a>
						<!---->
						<!---->
						<!---->
						<!---->
					  </div>
					</account-info>
					<!---->
				  </div>
				  <div class="header-nav-item">
					<!---->
					<span id="help-ddl" class="nav-help-ddl dropdown">
					  <a id="help-dropdown" test-id="header-help-dropdown-toggle" class="nav-btn-chevron header-help header-btn dropdown-toggle">
						<i class="icon-help"></i>
						<p>Yardım</p>
						<span class="fa fa-chevron-down icon-triangle"></span>
					  </a>
					  <ul aria-labelledby="help-dropdown" tabindex="-1" class="dropdown-menu-right help-ddl-content dropdown-menu">
						<li class="link">
						  <a href="https://hc.supportcasinomaxi.com/hc/tr" id="support" test-id="header-help-dropdown-support"> Yardım </a>
						</li>
						<li class="link">
						  <a href="https://bonus.casinomaxi564.com/tr/en-kolay-para-yatirma-yontemleri/" id="support" test-id="header-help-dropdown-support"> Para Yatırma Yöntemleri </a>
						</li>
						<!---->
					  </ul>
					</span>
					<!---->
					<!---->
					<!---->
				  </div>
				  <div class="header-nav-item">
					<div>
					  <language-dropdown>
						<a class="language-dropdown" href="/tr/dil-secimi/">
						  <div class="flag-wrapper">
							<i class="flags flags-md flags-md-tr"></i>
							<!---->
							<span class="lang-name">TR</span>
							<!---->
							<!---->
						  </div>
						</a>
					  </language-dropdown>
					  <!---->
					</div>
					<!---->
					<!---->
					<!---->
					<!---->
				  </div>
				  <!---->
				</div>
			  </div>
			  <clock>
				<span class="clock">
				  <!---->
				  <clock-site>
					<span class="clock-site">
					  <span class="clock-time">13:06</span>
					</span>
				  </clock-site>
				  <!---->
				</span>
			  </clock>
			</header>
			<div test-id="extended-header" class="extended-header">
			  <a test-id="extended-header-login-btn" uisref="login" class="btn btn-sm btn-secondary" href="/tr/giris/">Giriş</a>
			  <a test-id="extended-header-register-now-btn" uisref="register" class="btn btn-sm btn-success" href="/tr/kayit-ol/">Şimdi Kayıt Ol</a>
			</div>
			<!---->
		  </section>
		</master-header>
	  </section>
<?php }?>
<slider-menu>
  <section id="left-menu" class="slider-menu" style="top:0px;transition:all 0.3s ease 0s; transform: translateX(-100%);">
    <div id="sidenav-overlay" class="slider-menu-background-overlay active"></div>
    <div class="slider left-slider left-slider-open" test-id="left-slider-open" >
      <div id="slider-wrapper" class="slider-wrapper" style="--scrollbar-width:0px;">
        <game-search-normal class="menu-search">
          <div name="search-form" class="game-search">
            <div>
              <div class="search-field">
                <i class="fa icon-magnifier"></i>
                <input test-id="game-search-normal-search-field-input" type="search" class="search-input ng-untouched ng-pristine ng-valid" placeholder="Oyunları Ara">
              </div>
              <div test-id="games-search-list" class="games-search-list">
                <game-search-result test-id="search-game-result">
                  <!---->
                </game-search-result>
                <!---->
              </div>
            </div>
          </div>
        </game-search-normal>
        <div class="menu-content">
          <a class="menu-item" id="login" href="login" test-id="nav-welcome-bonus"> Giriş Yap </a>
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
        </div>
        <!---->
        <!---->
        <div class="menu-content">
          <a class="menu-item" id="register" href="register" test-id="nav-welcome-bonus"> Kayıt Ol </a>
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
        </div>
        <!---->
        <!---->
        <div class="menu-content">
          <a class="menu-item" id="welcome-bonus" href="https://bonus.casinomaxi564.com/tr/1500-tl-150-freespin-hosgeldin-bonus-paketi/" test-id="nav-welcome-bonus"> Hoşgeldin Bonusu </a>
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
        </div>
        <!---->
        <!---->
        <div class="menu-content">
          <a class="menu-item" id="a-z" href="/tr/casino-oyunlari/" test-id="nav-a-z"> Tüm Oyunlar (A-Z) </a>
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
        </div>
        <!---->
        <!---->
        <div class="menu-content">
          <a class="menu-item" id="language" href="/tr/dil-secimi/" test-id="nav-language"> Dili değiştir </a>
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
        </div>
        <!---->
        <!---->
        <div class="menu-content">
          <a class="menu-item" id="casino-games" href="/tr/" test-id="nav-casino-games"> Anasayfam </a>
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
        </div>
        <!---->
        <!---->
        <div class="menu-content">
          <a class="menu-item" id="promotions" href="https://bonus.casinomaxi564.com/tr/" test-id="nav-promotions"> Kampanyalar </a>
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
        </div>
        <!---->
        <!---->
        <div class="menu-content">
          <a class="menu-item" id="support" href="https://hc.supportcasinomaxi.com/hc/tr" test-id="nav-support"> Yardım </a>
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
        </div>
        <!---->
        <!---->
        <div class="menu-content">
          <a class="menu-item" id="support" href="https://bonus.casinomaxi564.com/tr/en-kolay-para-yatirma-yontemleri/" test-id="nav-support"> Para Yatırma Yöntemleri </a>
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
        </div>
        <!---->
        <!---->
        <!---->
      </div>
    </div>
  </section>
</slider-menu>
</html>
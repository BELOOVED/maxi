<ui-view class="clearfix">
  <main>
    <div class="main-container">
      <!---->
      <main-banner-swiper>
        <!---->
      </main-banner-swiper>
      <div class="main-wrapper">
        <div>
          <nav-main>
            <nav class="main-navigation">
              <div class="navigation-wrapper">
                <ul class="content-wrapper">
                  <li class="ma-home" test-id="menu-item-nav-favourites">
                    <a href="/">
                      <span class="category-icon icon-ma-home"></span>
                      <span>Anasayfa</span>
                    </a>
                    <!---->
                    <!---->
                  </li>
                  <!---->
                  <!---->
                  <li class="ma-slots" test-id="menu-item-nav-slots">
                    <a href="/slot" class="">
                      <span class="category-icon icon-ma-slots"></span>
                      <span>Slotlar</span>
                    </a>
                    <!---->
                    <!---->
                  </li>
                  <!---->
                  <!---->
                  <li class="daily-jackpots" test-id="menu-item-nav-video-poker">
                    <a href="/daily-jackpot" class="">
                      <span class="category-icon icon-daily-jackpots"></span>
                      <span>Günlük Jackpotlar</span>
                    </a>
                    <!---->
                    <!---->
                  </li>
                  <!---->
                  <!---->
                  <li class="ma-livecasino" test-id="menu-item-nav-live-casino">
                    <a href="/live-casino" class="">
                      <span class="category-icon icon-ma-livecasino"></span>
                      <span>Canlı Casino</span>
                    </a>
                    <!---->
                    <!---->
                  </li>
                  <!---->
                  <!---->
                  <li class="me-classicslots" test-id="menu-item-nav-classic-slots">
                    <a href="/classic-slots" class="active">
                      <span class="category-icon icon-me-classicslots"></span>
                      <span>Klasik Slotlar</span>
                    </a>
                    <!---->
                    <!---->
                  </li>
                  <!---->
                  <!---->
                  <li class="ma-jackpot" test-id="menu-item-nav-jackpots">
                    <a href="/jackpot">
                      <span class="category-icon icon-ma-jackpot"></span>
                      <span>Jackpot</span>
                    </a>
                    <!---->
                    <!---->
                  </li>
                  <!---->
                  <!---->
                  <li class="ma-poker" test-id="menu-item-nav-turkish-poker">
                    <a href="/404" target="_self">
                      <span class="category-icon icon-ma-poker"></span>
                      <span>Türk Pokeri</span>
                    </a>
                    <!---->
                    <!---->
                  </li>
                  <!---->
                  <!---->
                  <li class="ma-tablegames" test-id="menu-item-nav-table-games">
                    <a href="/table-game">
                      <span class="category-icon icon-ma-tablegames"></span>
                      <span>Masa Oyunları</span>
                    </a>
                    <!---->
                    <!---->
                  </li>
                  <!---->
                  <!---->
                  <li class="star" test-id="menu-item-nav-scratch">
                    <a href="/games">
                      <span class="category-icon icon-star"></span>
                      <span>Oyunlar</span>
                    </a>
                    <!---->
                    <!---->
                  </li>
                  <!---->
                  <!---->
                  <li class="ma-promo" test-id="menu-item-nav-promotions">
                    <a href="/404">
                      <span class="category-icon icon-ma-promo"></span>
                      <span>Kampanyalar</span>
                    </a>
                    <!---->
                    <!---->
                  </li>
                  <!---->
                  <!---->
                  <li test-id="menu-item-nav-game-search" class="game-search-list-item">
                    <!---->
                    <game-search-large class="visible-desktop">
                      <div name="search-form" class="game-search large-game-search">
                        <div>
                          <a class="ng-binding dropdown search-dropdown-toggle">
                            <i test-id="search-icon" class="fa icon-magnifier"></i>
                            <span>Ara</span>
                          </a>
                          <ul class="dropdown-menu search">
                            <li class="search-field">
                              <input type="search" id="large-search-field" test-id="large-search-field" class="search-input large-search-field ng-untouched ng-pristine ng-valid" placeholder="Oyunları Ara">
                            </li>
                            <li class="search-game-holder">
                              <game-search-result test-id="large-search-game-result">
                                <!---->
                              </game-search-result>
                              <!---->
                            </li>
                          </ul>
                        </div>
                      </div>
                    </game-search-large>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                  </li>
                  <!---->
                  <!---->
                  <!---->
                </ul>
              </div>
            </nav>
          </nav-main>
          <!---->
        </div>
        <!---->
        <div test-id="casino-lobby" class="casino-lobby">
          <!---->
          <ui-view class="main-lobby-container">
            <lobby class="ng-star-inserted">
              <section class="lobby">
                <!---->
                <div infinitescroll="">
                  <!---->
                  <!---->
                  <casino-game-collection class="ng-tns-c187-3 ng-star-inserted">
                    <section class="games-section content-wrapper ng-tns-c187-3 ng-star-inserted" test-id="klasik-slotlar-collection">
                      <div class="game-category-header row ng-tns-c187-3">
                        <div class="col-md-7 ng-tns-c187-3">
                          <!---->
                          <!---->
                          <!---->
                        </div>
                        <div class="col-md-5 collection-select ng-tns-c187-3">
                          <section class="collection-sort ng-tns-c187-3">
                            <form-select formtextuals="common" labelname="common.label.sort-by" class="collection-dropdown collection-select-title ng-tns-c187-3 ng-untouched ng-pristine ng-valid">
                              <div class="field classic valid-model ng-untouched ng-pristine ng-valid">
                                <label class="valid-label ng-star-inserted">Sort by</label>
                                <!---->
                                <div class="select-wrapper">
                                  <select id="Common-SortBy" test-id="Common-SortBy-select" class="ng-untouched ng-pristine ng-valid">
                                    <option value="0: collectionOrder" class="ng-star-inserted"> Popülerlik </option>
                                    <option value="1: name" class="ng-star-inserted"> Ad </option>
                                    <!---->
                                    <!---->
                                    <!---->
                                  </select>
                                  <!---->
                                  <span class="fa fa-chevron-down icon-triangle ng-star-inserted"></span>
                                  <!---->
                                  <!---->
                                </div>
                                <!---->
                              </div>
                            </form-select>
                          </section>
                          <!---->
                        </div>
                        <div class="col-md-12 studio-select ng-tns-c187-3">
                          <!---->
                        </div>
                      </div>
                      <!---->
                      <section class="games-collection-section ng-tns-c187-3" test-id="klasik-slotlar-content">
                        <!---->
                        <ul class="games-list-wrapper ng-tns-c187-3" test-id="-collection">
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoTake5">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Take 5" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.reevoTake5.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <game-ribbon class="ng-star-inserted">
                                    <div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted">
                                      <div class="game-ribbon game-new ng-star-inserted">
                                        <!---->
                                        <span class="ribbon ng-star-inserted">yeni</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Take 5</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtiger777Strike">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="777 Strike" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/07/game.redtiger777Strike.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">777 Strike</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFireHot40">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Fire Hot 40" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.pragmaticPlayFireHot40.thumbnail.344x220_v5.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Fire Hot 40</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoDynamiteMiner">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/09/game.reevoDynamiteMiner.thumbnail.344x220.gif">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <game-ribbon class="ng-star-inserted">
                                    <div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted">
                                      <div class="game-ribbon game-new ng-star-inserted">
                                        <!---->
                                        <span class="ribbon ng-star-inserted">yeni</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Dynamite Miner</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoFancyFruits">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Fancy Fruits" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.reevoFancyFruits.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <game-ribbon class="ng-star-inserted">
                                    <div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted">
                                      <div class="game-ribbon game-new ng-star-inserted">
                                        <!---->
                                        <span class="ribbon ng-star-inserted">yeni</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Fancy Fruits</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFireStrike2">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Fire Strike 2" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.pragmaticPlayFireStrike2.thumbnail.344x220_v5.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Fire Strike 2</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="tkTripleRoyalGold">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Triple Royal Gold" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.tkTripleRoyalGold.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <game-ribbon class="ng-star-inserted">
                                    <div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted">
                                      <div class="game-ribbon game-new ng-star-inserted">
                                        <!---->
                                        <span class="ribbon ng-star-inserted">yeni</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Triple Royal Gold</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevo20FlaringFruits">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="20 Flaring Fruits" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.reevo20FlaringFruits.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <game-ribbon class="ng-star-inserted">
                                    <div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted">
                                      <div class="game-ribbon game-new ng-star-inserted">
                                        <!---->
                                        <span class="ribbon ng-star-inserted">yeni</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">20 Flaring Fruits</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoFruitsStars">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Fruit and Stars" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoFruitsStars.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Fruits and Stars</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoBurningDiamonds">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Burning Diamonds" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.reevoBurningDiamonds.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <game-ribbon class="ng-star-inserted">
                                    <div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted">
                                      <div class="game-ribbon game-new ng-star-inserted">
                                        <!---->
                                        <span class="ribbon ng-star-inserted">yeni</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Burning Diamonds</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="netentDiscoDanny">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Disco Danny" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/09/game.netentDiscoDanny.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Disco Danny</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="yggdrasilLightningJoker">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Lightning Joker" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/06/game.yggdrasilLightningJoker.thumbnail.344x220_v5.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Lightning Joker</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoCheekyFruits">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Cheeky Fruits" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoCheekyFruits.thumbnail.344x220.png">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <game-ribbon class="ng-star-inserted">
                                    <div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted">
                                      <div class="game-ribbon game-new ng-star-inserted">
                                        <!---->
                                        <span class="ribbon ng-star-inserted">yeni</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Cheeky Fruits</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevo100kJoker">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="100k Joker" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevo100kJoker.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <game-ribbon class="ng-star-inserted">
                                    <div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted">
                                      <div class="game-ribbon game-new ng-star-inserted">
                                        <!---->
                                        <span class="ribbon ng-star-inserted">yeni</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">100k Joker</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoNeonFruityCityscape">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Neon Fruity Cityscape" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoNeonFruityCityscape.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Neon Fruity Cityscape</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoNeonFruit">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Neon Fruit" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoNeonFruit.thumbnail.344x220.png">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Neon Fruit</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoMegaBurningWins">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoMegaBurningWins.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Mega Burning Wins</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoBoomingSevenDeluxe">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Booming Seven Deluxe" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoBoomingSevenDeluxe.thumbnail.344x220.png">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <game-ribbon class="ng-star-inserted">
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Booming Seven Deluxe</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincSuperTriple7s">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Super Triple 7's" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/10/game.gamesincSuperTriple7s.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Super Triple 7's</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxJokerSuperReels">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Joker Super Reels" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/09/game.relaxJokerSuperReels.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Joker Super Reels</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoHellHot100">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Hell Hot 100" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoHellHot100.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Hell Hot 100</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayUltraHoldAndSpin">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Ultra Hold and Spin" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayUltraHoldAndSpin.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Ultra Hold and Spin</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoJokerStoker">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoJokerStoker.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Joker Stoker</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincJokerMegaways">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Joker Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/03/game.gamesincJokerMegaways.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Joker Megaways</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoStickyJoker">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Sticky Joker" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/03/game.playngoStickyJoker.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Sticky Joker</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevo2022HitSlot">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="2022 Hit Slot" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevo2022HitSlot.thumbnail.344x220.png">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">2022 Hit Slot</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerRedDiamond">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/03/game.redtigerRedDiamond.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <game-ribbon class="ng-star-inserted">
                                    <div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted">
                                      <div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!---->
                                        <span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Red Diamond</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoBurningWins">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Burning Wins" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoBurningWins.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Burning Wins</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoChanceMachine100">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Chance Machine 100" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoChanceMachine100.thumbnail.344x220.gif">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Chance Machine 100</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerJesterSpins">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/07/game.redtigerJesterSpins.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Jester Spins</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoHellHot20">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoHellHot20.thumbnail.344x220.png">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Hell Hot 20</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerBlueDiamond">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺237.026 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Blue Diamond" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerBlueDiamond.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <game-ribbon class="ng-star-inserted">
                                    <div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted">
                                      <div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!---->
                                        <span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Blue Diamond</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincMegaHotWild">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Mega Hot Wild" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/11/game.gamesincMegaHotWild.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Mega Hot Wild</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxJokerJackpots">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺804.489 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Joker Jackpots" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/11/game.relaxJokerJackpots.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Joker Jackpots</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincTripleActionJoker">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Triple Action Joker" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/11/game.gamesincTripleActionJoker.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Triple Action Joker</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoBigWin777">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Big Win 777" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/10/game.playngoBigWIn777.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Big Win 777</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFireStrike">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Fire Strike" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayFireStrike.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Fire Strike</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySuperJoker">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Super Joker" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlaySuperJoker.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Super Joker</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincSuperSteppa">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Super Steppa" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/11/game.gamesincSuperSteppa.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Super Steppa</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="netentJackpot6000">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="play Jackpot 6000" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.netentJackpot6000.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Jackpot 6000</span>
                                    </div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoItalia3X3">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Italia 3X3" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoItalia3x3.thumbnail.344x220.png">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Italia 3X3</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoMysteryJoker6000">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.playngomysteryjoker6000.thumbnail.344x220_v5.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Mystery Joker 6000</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="yggdrasilTheDarkJokerRizes"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Dark Joker Rizes" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/04/game.yggdrasilTheDarkJokerRizes.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Dark Joker Rizes</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoMysteryJoker"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="play Mystery Joker" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/03/game.playngoMysteryJoker.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Mystery Joker</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoHugoGoal"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.playngoHugoGoal.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Hugo Goal</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoFireJoker"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Fire Joker" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.playngoFireJoker.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Fire Joker</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="yggdrasilJokerizer"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.yggdrasilJokerizer.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Jokerizer</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoFengShuiKittens"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Feng Shui Kitties" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoFengShuiKittens.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Feng Shui Kitties</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxPowerspin"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Powerspin" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.relaxPowerspin.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Power Spin</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="MegaJoker"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺282.250 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="play Mega Joker" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.MegaJoker.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Mega Joker</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFireHot100"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Fire Hot 100" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.pragmaticPlayFireHot100.thumbnail.344x220_v5.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Fire Hot 100</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="yggdrasilWickedCircus"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.yggdrasilWickedCircus.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Wicked Circus</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="nlcStarstruck"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/03/game.nlcStarstruck.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Starstruck</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFireHot20"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Fire Hot 20" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.pragmaticPlayFireHot20.thumbnail.344x220_v5.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Fire Hot 20</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincMegaHot10"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Mega Hot 10" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.gamesincMegaHot10.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Mega Hot 10</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoBigWinCat"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Big Win Cat" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2017/11/game.playngoBigWinCat.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Big Win Cat</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFireHot5"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Fire Hot 5" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.pragmaticPlayFireHot5.thumbnail.344x220_v5.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-new ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">yeni</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Fire Hot 5</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincRandomJokerJackpots"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺1.021.779 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Random Joker Jackpots" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/08/game.gamesincRandomJokerJackpots.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Random Joker Jackpots</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxEpicJokers"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/11/game.relaxEpicJokers.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Epic Joker</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoRoyalSevenXxl"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Royal Seven XXL" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.reevoRoyalSevenXXL.thumbnail.344x220.png">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-new ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">yeni</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Royal Seven XXL</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderSpooky5000"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Spooky 5000" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/11/game.leanderSpooky5000.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Spooky 5000</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincMegaHot40"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/01/game.gamesincMegaHot40.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Mega Hot 40</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincGoldenJokersWild"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.gamesincGoldenJokersWild.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Golden Jokers Wild</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoGoldenGoal"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺35.636 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="play Golden Goal" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.playngoGoldenGoal.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Golden Goal</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincRandomSteppa"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/04/game.gamesincRandomSteppa.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Random Steppa</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincMysteryJackpotSpinner"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/03/game.gamesincMysteryJackpotSpinner.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Mystery Jackpot Spinner</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincStarsAndJokers"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/10/game.gamesincStarsAndJokers.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Stars and Jokers</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTripleDragons"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Triple Dragons" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayTripleDragons.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Triple Dragons</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincClubRenoWild"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/02/game.GamesIncClubRenoWild.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Club Reno Wild</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFire88"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Fire 88" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayFire88.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Fire 88</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayAztecGems"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Aztec Gems" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayAztecGems.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Aztec Gems</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincRandomWinnerTriplePlay"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/10/game.GamesIncRandomWinnerTriplePlay.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Random Winner Triple Play</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoSweet27"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Sweet 27" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.playngoSweet27.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Sweet 27</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlay888Dragons"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="888 Dragons" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlay888Dragons.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">888 Dragons</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderClubReno"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Club Reno" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/09/game.leanderClubReno.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Club Reno</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoSpeedCash"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺35.636 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Speed Cash" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.playngoSpeedCash.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Speed Cash</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoGiftShop"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺35.636 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="play Gift Shop" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.playngoGiftShop.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Gift Shop</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoAceOfSpades"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.playngoAceOfSpades.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Ace of Spades</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoWildMelon"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.playngoWildMelon.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Wild Melon</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoLuckyDiamonds"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.playngoLuckyDiamonds.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Lucky Diamonds</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoXmasJoker"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.playngoXmasJoker.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Xmas Joker</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoBellOfFortune"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺35.636 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.playngoBellOfFortune.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Bell of Fortune</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngo5xmagic"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="5xMagic" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.playngo5xMagic.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!----><game-ribbon class="ng-star-inserted"><div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted"><div class="game-ribbon game-exclusive ng-star-inserted">
                                        <!----><span class="ribbon ng-star-inserted">Klasik</span>
                                        <!---->
                                        <!---->
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">5 X Magic</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincUpgradeFever"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Upgrade Fever" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/09/game.gamesincUpgradeFever.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Upgrade Fever</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-3 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-3"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincHot2Drop"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" href="javascript:;" onclick="loginoralert()" class="ng-star-inserted" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Hot 2 Drop" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/09/game.gamesincHot2Drop.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Hot 2 Drop</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li>
                          <!---->
                          <!---->
                        </ul>
                      </section>
                    </section>
                    <!---->
                  </casino-game-collection>
                  <!---->
                  <!---->
                </div>
              </section>
            </lobby>
            <!---->
            <!---->
          </ui-view>
          <!---->
        </div>
      </div>
      <!---->
    </div>
  </main>
  <!---->
  <!---->
</ui-view>
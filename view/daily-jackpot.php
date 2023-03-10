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
                    <a href="/daily-jackpot" class="active">
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
                    <a href="/classic-slots">
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
                  <casino-game-collection class="ng-tns-c187-1 ng-star-inserted">
                    <section class="games-section content-wrapper ng-tns-c187-1 ng-star-inserted" test-id="video-poker-collection">
                      <div class="game-category-header row ng-tns-c187-1">
                        <div class="col-md-7 ng-tns-c187-1">
                          <!---->
                          <!---->
                          <!---->
                        </div>
                        <div class="col-md-5 collection-select ng-tns-c187-1">
                          <section class="collection-sort ng-tns-c187-1">
                            <form-select formtextuals="common" labelname="common.label.sort-by" class="collection-dropdown collection-select-title ng-tns-c187-1 ng-untouched ng-pristine ng-valid">
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
                        <div class="col-md-12 studio-select ng-tns-c187-1">
                          <!---->
                        </div>
                      </div>
                      <!---->
                      <section class="games-collection-section ng-tns-c187-1" test-id="video-poker-content">
                        <!---->
                        <ul class="games-list-wrapper ng-tns-c187-1" test-id="-collection">
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerSantaSpins">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Santa Spins" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/12/game.redtigerSantaSpins.thumbnail.344x220.jpg">
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
                                      <span test-id="game-name" class="game-name">Santa Spins</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerCakeAndIceCream">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Cake And Ice Cream" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.redtigerCakeAndIceCream.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">Cake And Ice Cream</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerInTheRabbitHole">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="In The Rabbit Hole" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.redtigerInTheRabbitHole.thumbnail.344x220.jpg">
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
                                      <span test-id="game-name" class="game-name">In The Rabbit Hole</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerShadowSociety">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Shadow Society" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.redtigerShadowSociety.thumbnail.344x220.jpg">
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
                                      <span test-id="game-name" class="game-name">Shadow Society</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerStolenTreasures">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Stolen Treasures" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.redtigerStolenTreasures.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">Stolen Treasures</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerMysteryReelsDeluxe">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Mystery Reels Deluxe" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/09/game.redtigerMysteryReelsDeluxe.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Mystery Reels Deluxe</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerGreatGold">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Great Gold" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.redtigerGreatGold.thumbnail.344x220.jpg">
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
                                      <span test-id="game-name" class="game-name">Great Gold</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerGonzitasQuest">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Gonzita's Quest" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/09/game.redtigerGonzitasQuest.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">Gonzita's Quest</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerZillardKing">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Zillard King" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/03/game.redtigerZillardKing.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Zillard King</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerTricksandTreats">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Tricks and Treats" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.redtigerTricksandTreats.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">Tricks and Treats</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerApacheWay">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Apache Way" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/07/game.redtigerApacheWay.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Apache Way</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtiger10001NightsMegaways">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="10,001 Nights Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/07/game.redtiger10001NightsMegaways.thumbnail.344x220_v4.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">10,001 Nights Megaways</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerBassBoss">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Bass Boss" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.redtigerBassBoss.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Bass Boss</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerAliBabasLuckPowerReels">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Ali Baba's Luck Power Reels" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.redtigerAliBabasLuckPowerReels.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Ali Baba's Luck Power Reels</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerWantedWildz">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Wanted Wildz" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.redtigerWantedWildz.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Wanted Wildz</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerMajesticMysteriesPowerReels">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Majestic Mysteries Power Reels" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/07/game.redtigerMajesticMysteriesPowerReels.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Majestic Mysteries Power Reels</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerRisqueMegaways">
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
                                    <img class="thumbnail-img ng-star-inserted" alt="Risque Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.redtigerRisqueMegaways.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Risque Megaways</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerDiamondRoyale">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Diamond Royale" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.redtigerDiamondRoyale.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Diamond Royale</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerBigCatRescueMegaways">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Big Cat RescueMegaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.redtigerBigCatRescueMegaways.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Big Cat Rescue Megaways</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerMayhem">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Mayhem" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.redtigerMayhem.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Mayhem</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerBullsRunWild">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Bulls Run Wild" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.redtigerBullsRunWild.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Bulls Run Wild</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerDragonsClusterBuster">
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
                                    <img class="thumbnail-img ng-star-inserted" alt="Dragons Cluster Buster" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/04/game.redtigerDragonsClusterBuster.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Dragons Cluster Buster</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerWellOfWildsMegaways">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Well of Wilds Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/04/game.redtigerWellOfWildsMegaways.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Well of Wilds Megaways</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerNarcosMexico">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Narcos Mexico" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/03/game.redtigerNarcosMexico.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Narcos Mexico</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerGenieNights">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Genie Nights" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/03/game.redtigerGenieNights.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Genie Nights</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerDoggyRichesMegaways">
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
                                    <img class="thumbnail-img ng-star-inserted" alt="Doggy Riches Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/02/game.redtigerDoggyRichesMegaways.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Doggy Riches Megaways</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerLastChanceSaloon">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Last Chance Saloon" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/01/game.redtigerLastChanceSaloon.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Last Chance Saloon</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerEpicTreasure">
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
                                    <img class="thumbnail-img ng-star-inserted" alt="Epic Treasure" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/12/game.redtigerEpicTreasure.thumbnail.344x220_v4.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Epic Treasure</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerBlazingClusters">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Blazing Clusters" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/12/game.redtigerBlazingClusters.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Blazing Clusters</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerJingleWaysMegaways">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Jingle Ways Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/12/game.redtigerJingleWaysMegaways.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Jingle Ways Megaways</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerDevilsNumber">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/04/game.redtigerDevilsNumber.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Devils Number</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerMysticStaxx">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Mystic Staxx" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/11/game.redtigerMysticStaxx.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Mystic Staxx</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerDraculaAwakening">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Dracula Awakening" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/11/game.redtigerDraculaAwakening.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Dracula Awakening</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerHotHotChilliPot">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Hot Hot Chilli Pot" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/11/game.redtigerHotHotChilliPot.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Hot Hot Chilli Pot</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerWildExpedition">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Wild Expedition" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/11/game.redtigerWildExpedition.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Wild Expedition</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerHammerGods">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Hammer Gods" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/10/game.redtigerHammerGods.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Hammer Gods</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerTheWisecrackerLightning">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="The Wisecracker Lightning" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/08/game.redtigerTheWisecrackerLightning.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">The Wisecracker Lightning</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerWildHotChilliReels">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Wild Hot Chilli Reels" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/07/game.redtigerWildHotChilliReels.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Wild Hot Chilli Reels</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerNeonLinks">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Neon Links" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/07/game.redtigerNeonLinks.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Neon Links</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerHarleCoin">
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
                                        <span class="jackpot-value"> ₺236.857 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Harle Coin" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/06/game.redtigerHarleCoin.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Harle Coin</span>
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
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtiger96PrimateKing">
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
                                    <div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Primate King" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/05/game.redtiger96PrimateKing.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Primate King</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerTikiFruitsTotemFrenzy">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Tiki Fruits Totem Frenzy" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/05/game.redtigerTikiFruitsTotemFrenzy.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Tiki Fruits Totem Frenzy</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerPiratesPlentyMegaways"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Pirates Plenty Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/04/game.redtigerPiratesPlentyMegaways.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Pirates Plenty Megaways</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerDragonsLuckDeluxe"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Dragons Luck Deluxe" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/11/game.redtigerDragonsLuckDeluxe.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Dragons Luck Deluxe</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerBettyBorisAndBoo"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Betty Boris and Boo" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.redtigerBettyBorisAndBoo.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Betty Boris and Boo</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtiger10001Nights"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="10 001 Nights" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/11/game.redtiger10001Nights.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">10 001 Nights</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerRegalBeasts"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Regal Beasts" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/01/game.redtigerRegalBeasts.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Regal Beasts</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerSylvanSpirits"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Sylvan Spirits" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.redtigerSylvanSpirits.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Sylvan Spirits</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerYucatansMystery"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Yucatan's Mystery" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/11/game.redtigerYucatansMystery.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Yucatan's Mystery</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerAurumCodex"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Aurum Codex" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/11/game.redtigerAurumCodex.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Aurum Codex</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerPathOfDestiny"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Path of Destiny" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/11/game.redtigerPathOfDestiny.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Path of Destiny</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerGonzosQuestMegaways"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Gonzos Quest Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/07/game.redtigerGonzosQuestMegaways.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Gonzo's Quest Megaways</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerGoldenTsar"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Golden Tsar" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/10/game.redtigerGoldenTsar.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Golden Tsar</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerLuckyFridays"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Lucky Fridays" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/09/game.redtigerLuckyFridays.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Lucky Fridays</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerHoardOfPoseidon"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Hoard Of Poseidon" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/10/game.redtigerHoardOfPoseidon.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Hoard Of Poseidon</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerWildOClock"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Wild O'Clock" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/09/game.redtigerWildOClock.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Wild O'Clock</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerCrystalMirror"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Crystal Mirror" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/08/game.redtigerCrystalMirror.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Crystal Mirror</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtiger5Families"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="5 Families" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/08/game.redtiger5Families.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">5 Families</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerBombuster"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Bombuster" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/08/game.redtigerBombuster.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Bombuster</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerCashVolt"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Cash Volt" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/07/game.redtigerCashVolt.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Cash Volt</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerBountyRaid"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Bounty Raid" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/06/game.redtigerBountyRaid.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Bounty Raid</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerGemsGoneWildPowerReels"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/06/game.redtigerGemsGoneWildPowerReels.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Gems Gone Wild Power Reels</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerReelKeeper"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Reel Keeper" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/06/game.redtigerReelKeeper.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Reel Keeper</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerAztecSpins"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Aztec Spins" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/05/game.redtigerAztecSpins.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Aztec Spins</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtiger4Squad"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="4Squad" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/05/game.redtiger4Squad.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">4Squad</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerDaVincisMystery"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Da Vinci's Mystery" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/11/game.redtigerDaVincisMystery.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Da Vinci's Mystery</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerWildCatsMultiline"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Wild Cats Multiline" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.redtigerWildCatsMultiline.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Wild Cats Multiline</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerDynamiteRiches"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Dynamite Riches" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/11/game.redtigerDynamiteRiches.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Dynamite Riches</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerMegaPyramid"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Mega Pyramid" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.redtigerMegaPyramid.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Mega Pyramid</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerWellOfWishes"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Well Of Wishes" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/09/game.redtigerWellOfWishes.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Well Of Wishes</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerPhoenixFirePowerReels"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Phoenix Fire Power Reels" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/08/game.redtigerPhoenixFirePowerReels.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Phoenix Fire Power Reels</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerTheWildHatter"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="The Wild Hatter" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.redtigerTheWildHatter.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">The Wild Hatter</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerAtlantis"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Atlantis" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/05/game.redtigerAtlantis.thumbnail.344x220_v4.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Atlantis</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerPiratesPlentyBattleForGold"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Pirates Plenty Battle For Gold" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/08/game.redtigerPiratesPlentyBattleForGold.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Pirates Plenty Battle For Gold</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerEagleRiches"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Eagle Riches" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/11/game.redtigerEagleRiches.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Eagle Riches</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerEsqueletoMariachi"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Esqueleto Mariachi" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerEsqueletoMariachi.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Esqueleto Mariachi</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerMasquerade"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/12/game.redtigerMasquerade.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Masquerade</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerReelHeist"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Reel Heist" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2017/10/game.redtigerReelHeist.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Reel Heist</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerWildFight"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Wild Fight" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerWildFight.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Wild Fight</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerWildElements"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Wild Elements" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/10/game.redtigerWildElements.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Wild Elements</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerRasLegend"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Ra's Legend" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/01/game.redtigerRasLegend.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Ra's Legend</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerRioStars"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Rio Stars" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/01/game.redtigerRioStars.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Rio Stars</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerWildCircus"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerWildCircus.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Wild Circus</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerGoldenCryptex"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Golden Cryptex" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/03/game.redtigerGoldenCryptex.thumbnail.344x220_v3.png">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Golden Cryptex</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerTotemLightning"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Totem Lighting" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerTotemLightning.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Totem Lightning</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerWildSpartans"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Wild Spartans" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerWildSpartans.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Wild Spartans</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerThreeKingdoms"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Three Kingdoms" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerThreeKingdoms.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Three Kingdoms</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerTenElements"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Ten Elements" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2017/10/game.redtigerTenElements.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Ten Elements</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerPiggyPirates"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/09/game.redtigerPiggyPirates.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Piggy Pirates</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerRoyalGems"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Royal Gems" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/09/game.redtigerRoyalGems.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Royal Gems</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerLuckyLittleDevil"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Lucky Little Devil" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2017/08/game.redtigerLuckyLittleDevil.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Lucky Little Devil</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerPersianFortune"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Persian Fortune" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerPersianFortune.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Persian Fortune</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerWildWildChest"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Wild Wild Chest" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerWildWildChest.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Wild Wild Chest</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerOceanFortune"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Ocean Fortune" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerOceanFortune.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Ocean Fortune</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerMysteryReels"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Mystery Reels" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2017/10/game.redtigerMysteryReels.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Mystery Reels</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerMagicGate"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Magic Gate" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerMagicGate.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Magic Gate</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerMidasGold"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/01/game.redtigerMidasGold.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Midas Gold</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerLuckyWizard"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Lucky Wizard" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerLuckyWizard.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Lucky Wizard</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerMegaJade"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Mega Jade" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerMegaJade.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Mega Jade</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerThreeMusketeers"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Three Musketeers" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.RedTigerThreeMusketeers.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Three Musketeers</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerMayanGods"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/02/game.redtigerMayanGods.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Mayan Gods</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerWinEscalator"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Win Escalator" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.redtigerWinEscalator.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Win Escalator</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerLuckyValentine"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Lucky Valentine" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerLuckyValentine.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Lucky Valentine</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerFiveStarPowerReels"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="5 Star Power Reels" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/06/game.redtigerFiveStarPowerReels.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">5 Star Power Reels</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerLuckyHalloween"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Lucky Halloween" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerLuckyHalloween.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Lucky Halloween</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerLuckyFortuneCat"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Lucky Fortune Cat" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerLuckyFortuneCat.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Lucky Fortune Cat</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerLuckyEaster"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Lucky Easter" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerLuckyEaster.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Lucky Easter</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerLionDance"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Lion Dance" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2017/10/game.redtigerLionDance.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Lion Dance</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerRainbowJackpots"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Rainbow Jackpots" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerRainbowJackpots.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Rainbow Jackpots</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerJadeCharms"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Jade Charms" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerJadeCharms.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Jade Charms</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerImperialPalace"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Imperial Palace" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerImperialPalace.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Imperial Palace</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerWildNords"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2017/12/game.redtigerWildNords.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Wild Nords</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerGoldenLotus"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Golden Lotus" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerGoldenLotus.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Golden Lotus</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerRainbowJackpotsPowerLines"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Rainbow Jackpots Power Lines" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/03/game.redtigerRainbowJackpotsPowerLines.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Rainbow Jackpots Power Lines</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerStage888"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Stage 888" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerStage888.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Stage 888</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerBlueDiamond"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Blue Diamond" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerBlueDiamond.thumbnail.344x220_v3.jpg">
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
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Blue Diamond</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerGemtastic"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/01/game.redtigerGemtastic.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Gemtastic</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerWinterWonders"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="WinterWonders" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerWinterWonders.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Winter Wonders</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerJingleBells"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Jingle Bells" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerJingleBells.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Jingle Bells</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerPhoenix"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Phoenix" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2017/10/game.redtigerPhoenix.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Phoenix</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerGemsGoneWild"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Gems Gone Wild" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerGemsGoneWild.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Gems Gone Wild</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerFortuneHouse"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Fortune House" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerFortuneHouse.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Fortune House</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerFruitSnap"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Fruit Snap" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/10/game.redtigerFruitSnap.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Fruit Snap</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerFortuneFest"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Fortune Fest" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerFortuneFest.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Fortune Fest</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerFortuneCharm"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerFortuneCharm.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Fortune Charm</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerFiveStar"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Five Star" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerFiveStar.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Five Star</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerJackpotQuest"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Jackpot Quest" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/06/game.redtigerJackpotQuest.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Jackpot Quest</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerEpicJourney"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Epic Journey" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerEpicJourney.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Epic Journey</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerElvenMagic"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Elven Magic" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerElvenMagic.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Elven Magic</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerDragonsLuck"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Dragons Luck" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerdragonsluck.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Dragons Luck</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerDivineWays"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Divine Ways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerDivineWays.thumbnail.344x220_v4.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Divine Ways</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerCrazyGenie"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Crazy Genie" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2017/10/game.redtigerCrazyGenie.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Crazy Genie</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerCinderellasBall"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Cinderella's Ball" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/01/game.redtigerCinderellasBall.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Cinderella's Ball</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerChineseTreasures"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Chinese Treasures" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerChineseTreasures.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Chinese Treasures</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerArcadeBomb"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Arcade Bomb" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerArcadeBomb.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Arcade Bomb</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerAncientScript"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Ancient Script" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerAncientScript.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Ancient Script</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerSnowWildAndTheSevenFeatures"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerSnowWildAndTheSevenFeatures.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Snow Wild and the Seven Features</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerPussNBoots"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Puss'N Boots" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerPussNBoots.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Puss'N Boots</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1"><div test-id="game-thumbnail" class="game-thumbnail" game-id="redtigerGrandWheel"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="javascript:;" onclick="loginoralert()" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺236.857 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Grand Wheel" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.redtigerGrandWheel.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Grand Wheel</span></div>
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
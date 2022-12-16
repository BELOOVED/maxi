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
                    <a href="/table-game" class="active">
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
                    <section class="games-section content-wrapper ng-tns-c187-1 ng-star-inserted" test-id="masa-oyunlari-collection">
                      <div class="game-category-header row ng-tns-c187-1">
                        <div class="col-md-7 ng-tns-c187-1">
                          <!---->
                          <!---->
                          <!---->
                        </div>
                        <div class="col-md-5 collection-select ng-tns-c187-1 col-md-2 col-xs-12 offset-md-5">
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
                      <section class="games-collection-section ng-tns-c187-1" test-id="masa-oyunlari-content">
                        <!---->
                        <ul class="games-list-wrapper ng-tns-c187-1" test-id="undefined-collection">
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxRouletteRelax">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/roulette-relax/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.relaxRouletteRelax.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Roulette Relax</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxBlackjackRelax">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/blackjack-relax/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.relaxBlackjackRelax.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Blackjack Relax</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoEuropeanRoulettePlatinum">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/european-roulette-platinum/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.reevoEuropeanRoulettePlatinum.thumbnail.344x220.png">
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
                                      <span test-id="game-name" class="game-name">European Roulette Platinum</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="evoLightningBaccaratFirstPersonTable">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/lightning-baccarat-first-person/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Lightning Baccarat First Person" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/11/game.evoLightningBaccaratFirstPersonTable.thumbnail.344x220.jpg">
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
                                      <span test-id="game-name" class="game-name">Lightning Baccarat First Person</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="evoLightningBlackjackFirstPersonTable">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/lightning-blackjack-first-person/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Lightning Blackjack First Person" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/11/game.evoLightningBlackjackFirstPersonTable.thumbnail.344x220.jpg">
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
                                      <span test-id="game-name" class="game-name">Lightning Blackjack First Person</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="evoGoldenWealthBaccaratFirstPerson">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/golden-wealth-baccarat-first-person/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Golden Wealth Baccarat First Person" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/10/game.evoGoldenWealthBaccaratFirstPerson.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Golden Wealth Baccarat First Person</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoCasinoSolitaire">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/oyunlar/casino-solitaire/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Casino Solitaire" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoCasinoSolitaire.thumbnail.344x220.png">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Casino Solitaire</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="evoLightningRouletteRNG">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/first-person-lightning-roulette/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Lightning Roulette First Person" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.evoLightningRouletteRNG.thumbnail.344x220_v5.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">First Person Lightning Roulette</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="evoCrapsFirstPersonTable">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/craps-first-person/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Craps First person" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/10/game.evoCrapsFirstPersonTable.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Craps First person</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="evoTopCardFirstPerson">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/top-card-rng/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="First Person Football Studio" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.evoTopCardFirstPerson.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">First Person Football Studio</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="evoDragonTigerFirstPerson">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/first-person-dragon-tiger/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Dragon Tiger First Person" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.evoDragonTigerFirstPerson.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">First Person Dragon Tiger</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="evoMegaBallFirstPersonTable">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/first-person-mega-ball/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Mega Ball First Person Content" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.evoMegaBallFirstPersonTable.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">First Person Mega Ball</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="evoBaccaratFirstPerson">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/baccarat-rng/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="First Person Baccarat" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.evoBaccaratFirstPerson.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">First Person Baccarat</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="evoBlackjackRNG">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/first-person-blackjack/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="First Person Blackjack" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.evoBlackjackRNG.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">First Person Blackjack</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="evoRouletteRNG">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/first-person-roulette/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="First Person Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.evoRouletteRNG.thumbnail.344x220_v5.jpg">
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
                                      <span test-id="game-name" class="game-name">First Person Roulette</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="evoDreamCatcherRNG">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/first-person-dream-catcher/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Dream Catcher First Person" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.evoDreamCatcherRNG.thumbnail.344x220_v4.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">First Person Dream Catcher</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoAmericanRoulette">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/american-roulette/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="American Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoAmericanRoulette.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">American Roulette</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevoRouletteDiamond">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/roulette-diamond/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Roulette Diamond" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoRouletteDiamond.thumbnail.344x220.png">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Roulette Diamond</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="relax100BitDice">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/100-bit-dice/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="100 Bit Dice" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/11/game.relax100BitDice.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">100 Bit Dice</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincDoubleExposureBlackjack">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/double-exposure-blackjack/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Double Exposure Blackjack" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/06/game.gamesincDoubleExposureBlackjack.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Double Exposure Blackjack</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincSimplyRoulette">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/simply-roulette/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Simply Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/08/game.gamesincSimplyRoulette.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Simply Roulette</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincFrenchRoulette">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/french-roulette-gamesinc/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="French Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/06/game.gamesincFrenchRoulette.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">French Roulette (GamesInc)</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincFaceUpBlackjack">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/face-up-blackjack/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Face Up Blackjack" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/06/game.gamesincFaceUpBlackjack.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Face Up Blackjack</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincLaPartageRoulette">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/la-partage-roulette/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="La Partage Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/06/game.gamesincLaPartageRoulette.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">La Partage Roulette</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincEuropeanRoulettePro">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/european-roulette-pro/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="European Roulette Pro" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/01/game.gamesincEuropeanRoulettePro.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">European Roulette Pro</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincSingleDeckBlackjackPro">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/single-deck-blackjack-pro/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.gamesincSingleDeckBlackjackPro.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Single Deck Blackjack Pro</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincBlackjack5Hand">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/blackjack-five-hand/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.gamesincBlackjack5Hand.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Blackjack Five Hand</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevo3DRoulette">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/3d-roulette/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="3D Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevo3dRoulette.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">3d Roulette</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevo3DBlackjack">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/3d-blackjack/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="3D Blackjack" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevo3dBlackjack.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">3d Blackjack</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="reevo3DBaccarat">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/3d-baccarat/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="3D Baccarat" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevo3dBaccarat.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">3d Baccarat</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincRouletteHighStake">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/roulette-high-stake/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.gamesincRouletteHighStake.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Roulette High Stake</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincAlphabetRoulette">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/alphabet-roulette/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Alphabet Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/01/game.gamesincalphabetroulette.thumbnail.344x220_v4.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Alphabet Roulette</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincBlackjackSingleHand">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/blackjack-single-hand/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.gamesincBlackjackSingleHand.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Blackjack Single Hand</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesinc3CardBrag">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/3-card-brag/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.gamesinc3CardBrag.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">3 Card Brag</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincMultihandBlackjack">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/multi-hand-blackjack/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Multi Hand Blackjack" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.gamesincmultihandblackjack.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Multi Hand Blackjack</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincRouletteLowStake">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/roulette-low-stake/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.gamesincRouletteLowStake.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Roulette Low Stake</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderCasinoPatienceHM">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/casino-patience-hm/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.leanderCasinoPatienceHM.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Casino Patience</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderLuckyLuckyBlackjack">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/blackjack-lucky-lucky/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.leanderLuckyLuckyBlackjack.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Lucky Lucky Blackjack</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="leander6In1Blackjack">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/6-in-1-blackjack/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.leander6In1Blackjack.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">6 in 1 Blackjack</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="leander21plus3Blackjack">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/21-3-blackjack/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.leander21plus3Blackjack.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">21 + 3 Blackjack</span>
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderBusterBlackjack">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/buster-blackjack/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.leanderBusterBlackjack.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Buster Blackjack</span>undefined</div>undefined
                                    <!---->undefined
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
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderPerfectPairsBlackjack">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/masa-oyunlari/blackjack-perfect-pairs/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.leanderPerfectPairsBlackjack.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Perfect Pairs Blackjack</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderLuckyLadiesBlackjack">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/masa-oyunlari/lucky-ladies/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.leanderLuckyLadiesBlackjack.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Lucky Ladies Blackjack</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderSuitemUpBlackjack">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/masa-oyunlari/suitem-up-blackjack/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.leanderSuitemUpBlackjack.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Suit'em up Blackjack</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderDoubleBallRoulette">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/masa-oyunlari/double-ball-roulette/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.leanderDoubleBallRoulette.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Double Ball Roulette</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderSwapTheFlop">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/masa-oyunlari/swap-the-flop/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Swap The Flop" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.leanderSwapTheFlop.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Swap The Flop</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-1 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-1">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderTexasHoldemSwitch">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/masa-oyunlari/texas-holdem-switch/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Texas Hold'em Switch" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.leanderTexasHoldemSwitch.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Texas Hold'em Switch</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined
                          <!---->undefined
                          <!---->undefined
                        </ul>undefined
                      </section>undefined
                    </section>undefined
                    <!---->undefined
                  </casino-game-collection>undefined
                  <!---->undefined
                  <!---->undefined
                </div>undefined
              </section>undefined
            </lobby>undefined
            <!---->undefined
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
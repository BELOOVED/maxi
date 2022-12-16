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
                    <a href="/slot" class="active">
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
            <lobby>
              <section class="lobby">
                <!---->
                <div infinitescroll="">
                  <!---->
                  <!---->
                  <casino-game-collection class="ng-tns-c187-0 ng-star-inserted">
                    <section class="games-section content-wrapper ng-tns-c187-0 ng-star-inserted" test-id="slot-oyunlari-collection">
                      <div class="game-category-header row ng-tns-c187-0">
                        <div class="col-md-7 ng-tns-c187-0">
                          <!---->
                          <!---->
                          <game-collection-filter class="game-collection-filter ng-tns-c187-0 ng-star-inserted">
                            <ul class="games-filter-options">
                              <li>
                                <input id="filter-expression-all-games" type="radio" name="filter-expression" checked="true">
                                <label for="filter-expression-all-games" class="btn active-filter" id="game-filter-collection.all.slots" test-id="Slots-filter">Tüm Oyunlar</label>
                              </li>
                              <li class="ng-star-inserted">
                                <input type="radio" name="filter-expression" id="filter-expression-New">
                                <label class="btn" id="game-filter-collection.slots.New" for="filter-expression-" test-id="New-filter">Yeni Oyunlar</label>
                              </li>
                              <li class="ng-star-inserted">
                                <input type="radio" name="filter-expression" id="filter-expression-Exclusive">
                                <label class="btn" id="game-filter-collection.slots.Exclusive" for="filter-expression-" test-id="Exclusive-filter">Klasik</label>
                              </li>
                              <!---->
                            </ul>
                          </game-collection-filter>
                          <!---->
                        </div>
                        <div class="col-md-5 collection-select ng-tns-c187-0">
                          <section class="collection-sort ng-tns-c187-0">
                            <form-select formtextuals="common" labelname="common.label.sort-by" class="collection-dropdown collection-select-title ng-tns-c187-0 ng-untouched ng-pristine ng-valid">
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
                          <section class="collection-sort collection-sort-provider-list ng-tns-c187-0 ng-star-inserted">
                            <dropdown icon="icon-filter" test-id="game-filter-dropdown" class="ng-tns-c187-0">
                              <div class="dropdown-overlay"></div>
                              <div class="dropdown-trigger">
                                <span class="dropdown-title">Filtreler</span>
                                <i class="fa icon-filter"></i>
                                <span class="dropdown-subtitle ng-star-inserted">1</span>
                                <!---->
                              </div>
                              <div class="dropdown">
                                <div class="dropdown-content">
                                  <game-filter>
                                    <div class="game-filter">
                                      <div class="game-filter-content-header">
                                        <div class="game-filter-content-header-action">
                                          <div>
                                            <span>Slots</span>
                                            <span>Filtreler</span>
                                          </div>
                                          <div test-id="clear-filter-button" class="clear highlight">Filtreleri temizle</div>
                                          <button class="btn btn-success">Onayla</button>
                                        </div>
                                        <div class="game-filter-content-header-input">
                                          <i test-id="search-icon" class="fa icon-magnifier game-filter-search-icon"></i>
                                          <input type="text" class="game-filter-search-field">
                                          <span class="game-filter-search-reset close-button ng-star-inserted"></span>
                                          <!---->
                                        </div>
                                      </div>
                                      <div class="game-filter-content">
                                        <span class="studio-content ng-star-inserted">
                                          <input type="checkbox" id="pragmatic play" name="pragmatic play" tabindex="0" test-id="pragmatic play-studio">
                                          <label for="pragmatic play">Pragmatic Play</label>
                                        </span>
                                        <!---->
                                      </div>
                                    </div>
                                  </game-filter>
                                </div>
                              </div>
                            </dropdown>
                          </section>
                          <!---->
                        </div>
                      </div>
                      <!---->
                      <section class="games-collection-section ng-tns-c187-0" test-id="slot-oyunlari-content">
                        <!---->
                        <ul class="games-list-wrapper ng-tns-c187-0" test-id="allgames-collection">
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySweetPowernudge">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/sweet-powernudge/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Sweet Powernudge" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/12/game.pragmaticPlaySweetPowernudge.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">Sweet Powernudge</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayPizzaPizzaPizza">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/pizza-pizza-pizza/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/12/game.pragmaticPlayPizzaPizzaPizza.thumbnail.344x220.png">
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
                                      <span test-id="game-name" class="game-name">Pizza Pizza Pizza</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayHotPepper">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/hot-pepper/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Hot Pepper" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/12/game.pragmaticPlayHotPepper.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">Hot Pepper</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBiggerBassBlizzardChristmasCatch">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/bigger-bass-blizzard-christmas-catch/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Bigger Bass Blizzard - Christmas Catch" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/12/game.pragmaticPlayBiggerBassBlizzardChristmasCatch.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Bigger Bass Blizzard - Christmas Catch</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFuryofOdinMegaways">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/fury-of-odin-megaways/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Fury of Odin Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/12/game.pragmaticPlayFuryofOdinMegaways.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Fury of Odin Megaways</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySantasGreatGifts">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/santas-great-gifts/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Santas Great Gifts" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/12/game.pragmaticPlaySantasGreatGifts.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">Santas Great Gifts</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayGemsofSerengeti">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/gems-of-serengeti/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Gems of Serengeti" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/12/game.pragmaticPlayGemsofSerengeti.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Gems of Serengeti</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayShieldOfSparta">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/shield-of-sparta/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Shield Of Sparta" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/12/game.pragmaticPlayShieldOfSparta.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Shield Of Sparta</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayToweringFortunes">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/towering-fortunes/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Towering Fortunes" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/12/game.pragmaticPlayToweringFortunes.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Towering Fortunes</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySpinAndScoreMegaways">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/spin-and-score-megaways/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Spin And Score Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.pragmaticPlaySpinAndScoreMegaways.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Spin And Score Megaways</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayReleaseTheKraken2">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/release-the-kraken-2/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Release The Kraken 2" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.pragmaticPlayReleaseTheKraken2.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Release The Kraken 2</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBigBassKeepingitReel">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/big-bass-keeping-it-reel/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Big Bass - Keeping it Reel" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.pragmaticPlayBigBassKeepingitReel.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">Big Bass - Keeping it Reel</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySwordofAres">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/sword-of-ares/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Sword of Ares" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.pragmaticPlaySwordofAres.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Sword of Ares</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayCandyStars">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/candy-stars/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Candy Stars" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/12/game.pragmaticPlayCandyStars.thumbnail.344x220_v5.jpg">
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
                                      <span test-id="game-name" class="game-name">Candy Stars</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMuertosMultiplierMegaways">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/muertos-multiplier-megaways/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Muertos Multiplier Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.pragmaticPlayMuertosMultiplierMegaways.thumbnail.344x220_v4.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Muertos Multiplier Megaways</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFirebirdSpirit">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/firebird-spirit/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Firebird Spirit" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.pragmaticPlayFirebirdSpirit.thumbnail.344x220_v5.jpg">
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
                                      <span test-id="game-name" class="game-name">Firebird Spirit</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayPirateGoldenAge">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/pirate-golden-age/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Pirate Golden Age" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.pragmaticPlayPirateGoldenAge.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Pirate Golden Age</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayJohnHunterandtheBookofTutRespin">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/john-hunter-and-the-book-of-tut-respin/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="John Hunter and the Book of Tut Respin" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/12/game.pragmaticPlayJohnHunterandtheBookofTutRespin.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">John Hunter and the Book of Tut Respin</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayAztecBlaze">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/aztec-blaze/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Aztec Blaze" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.pragmaticPlayAztecBlaze.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Aztec Blaze</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFloatingDragonMegaways">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/floating-dragon-megaways/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Floating Dragon Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.pragmaticPlayFloatingDragonMegaways.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Floating Dragon Megaways</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayWildHopAndDrop">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/wild-hop-and-drop/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Wild Hop And Drop" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/12/game.pragmaticPlayWildHopAndDrop.thumbnail.344x220_v5.jpg">
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
                                      <span test-id="game-name" class="game-name">Wild Hop And Drop</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayCrownOfFire">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/crown-of-fire/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Crown Of Fire" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.pragmaticPlayCrownOfFire.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Crown Of Fire</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayStrikingHot5">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/striking-hot-5/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Striking Hot 5" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/09/game.pragmaticPlayStrikingHot5.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">Striking Hot 5</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBookOfGoldenSands">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/book-of-golden-sands/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Book Of Golden Sands" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/09/game.pragmaticPlayBookOfGoldenSands.thumbnail.344x220_v4.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Book Of Golden Sands</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayHappyHooves">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/happy-hooves/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Happy Hooves" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.pragmaticPlayHappyHooves.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Happy Hooves</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFireHot40">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/klasik-slotlar/fire-hot-40/" class="ng-star-inserted" style="">
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayDowntheRails">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/down-the-rails/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Down the Rails" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.pragmaticPlayDowntheRails.thumbnail.344x220_v5.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Down the Rails</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayHottoBurnExtreme">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/hot-to-burn-extreme/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Hot to Burn Extreme" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.pragmaticPlayHottoBurnExtreme.thumbnail.344x220_v4.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Hot to Burn Extreme</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayGreedyWolf">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/greedy-wolf/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Greedy Wolf" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.pragmaticPlayGreedyWolf.thumbnail.344x220_v4.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Greedy Wolf</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBlackBull">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/black-bull/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Black Bull" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/09/game.pragmaticPlayBlackBull.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Black Bull</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayGorillaMayhem">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/gorilla-mayhem/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Gorilla Mayhem" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.pragmaticPlayGorillaMayhem.thumbnail.344x220_v5.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Gorilla Mayhem</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMagicMoneyMaze">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/magic-money-maze/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Magic Money Maze" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/09/game.pragmaticPlayMagicMoneyMaze.thumbnail.344x220_v4.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Magic Money Maze</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTropicalTiki">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/tropical-tiki/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Tropical Tiki" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/09/game.pragmaticPlayTropicalTiki.thumbnail.344x220_v5.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Tropical Tiki</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFireHot100">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/klasik-slotlar/fire-hot-100/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Fire Hot 100" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.pragmaticPlayFireHot100.thumbnail.344x220_v5.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Fire Hot 100</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayShiningHot40">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/shining-hot-40/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Shining Hot 40" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.pragmaticPlayShiningHot40.thumbnail.344x220_v4.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Shining Hot 40</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFireHot20">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/klasik-slotlar/fire-hot-20/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Fire Hot 20" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.pragmaticPlayFireHot20.thumbnail.344x220_v5.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Fire Hot 20</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayShiningHot100">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/shining-hot-100/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Shining Hot 100" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.pragmaticPlayShiningHot100.thumbnail.344x220_v4.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Shining Hot 100</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFireHot5">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/klasik-slotlar/fire-hot-5/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Fire Hot 5" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.pragmaticPlayFireHot5.thumbnail.344x220_v5.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <game-ribbon class="ng-star-inserted">
                                    <div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-new ng-star-inserted">undefined
                                        <!---->undefined<span class="ribbon ng-star-inserted">yeni</span>undefined
                                        <!---->undefined
                                        <!---->undefined
                                      </div>undefined
                                      <!---->
                                    </div>
                                    <!---->
                                  </game-ribbon>
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Fire Hot 5</span>
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
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayShiningHot5">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/slot-oyunlari/shining-hot-5/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Shining Hot 5" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.pragmaticPlayShiningHot5.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Shining Hot 5</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayShiningHot20">
                                <game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/shining-hot-20/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Shining Hot 20" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.pragmaticPlayShiningHot20.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Shining Hot 20</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayCosmicCash">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/cosmic-cash/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Cosmic Cash" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.pragmaticPlayCosmicCash.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Cosmic Cash</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined
                          </li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBombBonanza">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/bomb-bonanza/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Bomb Bonanza" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/09/game.pragmaticPlayBombBonanza.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Bomb Bonanza</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBigBassSplash">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/big-bass-splash/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Big Bass Splash" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.pragmaticPlayBigBassSplash.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Big Bass Splash</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayQueenofGods">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/queen-of-gods/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Queen of Gods" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.pragmaticPlayQueenofGods.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Queen of Gods</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFortuneofGiza">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/fortune-of-giza/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Fortune of Giza" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.pragmaticPlayFortuneofGiza.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Fortune of Giza</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayZombieCarnival">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/zombie-carnival/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Zombie Carnival" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.pragmaticPlayZombieCarnival.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Zombie Carnival</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayWildWestGoldMegaways">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/wild-west-gold-megaways/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Wild West Gold Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlayWildWestGoldMegaways.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Wild West Gold Megaways</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayCleocatra">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/cleocatra/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Cleocatra" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlayCleocatra.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Cleocatra</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayLittleGemHoldandSpin">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/little-gem-hold-and-win/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Little Gem Hold &amp;amp; Spin" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.pragmaticPlayLittleGemHoldandSpin.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Little Gem Hold and Spin</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTheGreatStickUp">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/the-great-stick-up/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="The Great Stick-Up" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.pragmaticPlayTheGreatStickUp.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">The Great Stick Up</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayGoblinHeistPowernudge">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/goblin-heist-powernudge/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Goblin Heist Powernudge" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.pragmaticPlayGoblinHeistPowernudge.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Goblin Heist Powernudge</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFireStrike2">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/klasik-slotlar/fire-strike-2/" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Fire Strike 2" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.pragmaticPlayFireStrike2.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Fire Strike 2</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySugarRush">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/sugar-rush/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Sugar Rush" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.pragmaticPlaySugarRush.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Sugar Rush</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySpiritofAdventure">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/spirit-of-adventure/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Spirit of Adventure" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlaySpiritofAdventure.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Spirit of Adventure</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayCloverGold">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/clover-gold/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Clover Gold" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/09/game.pragmaticPlayCloverGold.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Clover Gold</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayNorthGuardians">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/north-guardians/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="North Guardians" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.pragmaticPlayNorthGuardians.thumbnail.344x220_v6.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">North Guardians</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayDrillThatGold">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/drill-that-gold/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Drill That Gold" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.pragmaticPlayDrillThatGold.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Drill That Gold</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySpaceman">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/oyunlar/spaceman/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="undefined" data-src="https://cdnroute.bpsgameserver.com/bgr/CasinoMaxi/Common/neutral/image/2022/11/game.pragmaticPlaySpaceman.thumbnail.344x220.gif">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                    <!---->undefined
                                  </game-ribbon>undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Spaceman</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTicTacTake">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/tic-tac-take/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Tic Tac Take" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlayTicTacTake.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Tic Tac Take</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBarnFestival">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/barn-festival/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="undefined" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.pragmaticPlayBarnFestival.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Barn Festival</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayRainbowGold">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/rainbow-gold/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Rainbow Gold" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlayRainbowGold.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Rainbow Gold</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayWildBeachParty">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/wild-beach-party/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Wild Beach Party" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlayWildBeachParty.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Wild Beach Party</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayQueenie">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/slot-oyunlari/queenie/" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Queenie" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlayQueenie.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Queenie</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMightOfRa">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/might-of-ra/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Might of Ra" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlayMightOfRa.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Might of Ra</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayExtraJuicyMegaways">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/extra-juicy-megaways/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Extra Juicy Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/03/game.pragmaticPlayExtraJuicyMegaways.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Extra Juicy Megaways</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayElementalGemsMegaways">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/elemental-gems-megaways/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/bgr/CasinoMaxi/Common/neutral/image/2022/02/game.pragmaticPlayElementalGemsMegaways.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Elemental Gems Megaways</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTheUltimate5">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/slot-oyunlari/the-ultimate-5/" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="The Ultimate 5" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/04/game.pragmaticPlayTheUltimate5.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">The Ultimate 5</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayColossalCashZone">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/colossal-cash-zone/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Colossal Cash Zone" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/04/game.pragmaticPlayColossalCashZone.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Colossal Cash Zone</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayGatesOfValhalla">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/gates-of-valhalla/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Gates of Valhalla" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlayGatesOfValhalla.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Gates of Valhalla</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayRockVegas">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/rock-vegas/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Rock Vegas" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/04/game.pragmaticPlayRockVegas.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Rock Vegas</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayWildDepths">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/wild-depths/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Wild Depths" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/03/game.pragmaticPlayWildDepths.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Wild Depths</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMagiciansSecrets">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/magicians-secrets/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Magician?s Secrets" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/03/game.pragmaticPlayMagiciansSecrets.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Magician’s Secrets</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySmugglersCove">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/smugglers-cove/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Smugglers Cove" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/02/game.pragmaticPlaySmugglersCove.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Smugglers Cove</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayCrystalCavernsMegaways">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/crystal-caverns-megaways/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Crystal Caverns Megaways" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/02/game.pragmaticPlayCrystalCavernsMegaways.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Crystal Caverns Megaways</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySantasWonderland">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/santas-wonderland/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Santa's Wonderland" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/02/game.pragmaticPlaySantasWonderland.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Santa's Wonderland</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayChristmasBigBassBonanza">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/christmas-big-bass-bonanza/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Christmas Big Bass Bonanza" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/12/game.pragmaticPlayChristmasBigBassBonanza.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Christmas Big Bass Bonanza</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBookOfFallen">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/book-of-the-fallen/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Book of the Fallen" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/12/game.pragmaticPlayBookOfFallen.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Book of the Fallen</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySuperX">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/super-x/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Super X" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/04/game.pragmaticPlaySuperX.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Super X</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBigBassBonanzaMegaways">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/big-bass-bonanza-megaways/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Big Bass Bonanza Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/12/game.pragmaticPlayBigBassBonanzaMegaways.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Big Bass Bonanza Megaways</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBountyGold">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/bounty-gold/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Bounty Gold" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/02/game.pragmaticPlayBountyGold.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Bounty Gold</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBigJuan">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/big-juan/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Big Juan" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/02/game.pragmaticPlayBigJuan.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Big Juan</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayJohnHunterAndTheQuestForBermudaRiches">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/john-hunter-and-the-quest-for-bermuda-riches/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="John Hunter and the Quest for Bermuda Riches" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/02/game.pragmaticPlayJohnHunterAndTheQuestForBermudaRiches.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">John Hunter and the Quest for Bermuda Riches</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayStarPiratesCode">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/star-pirates-code/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Star Pirates Code" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/02/game.pragmaticPlayStarPiratesCode.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Star Pirates Code</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayDayOfDead">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/day-of-dead/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Day of Dead" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/10/game.pragmaticPlayDayOfDead.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Day of Dead</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMysticChief">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/mystic-chief/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Mystic Chief" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/10/game.pragmaticPlayMysticChief.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Mystic Chief</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayCashBonanza">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/cash-bonanza/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlayCashBonanza.thumbnail.344x220_v6.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Cash Bonanza</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayPiggyBankBills">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/piggy-bank-bills/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Piggy Bank Bills" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/02/game.pragmaticPlayPiggyBankBills.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Piggy Bank Bills</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTreasureWild">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/treasure-wild/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Treasure Wild" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/03/game.pragmaticPlayTreasureWild.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Treasure Wild</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayStarlightPrincess">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/starlight-princess/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Starlight Princess" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/11/game.pragmaticPlayStarlightPrincess.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Starlight Princess</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBiggerBassBonanza">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/bigger-bass-bonanza/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Bigger Bass Bonanza" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/09/game.pragmaticPlayBiggerBassBonanza.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Bigger Bass Bonanza</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayYumYumPowerways">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/yum-yum-powerways/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Yum Yum Powerways" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/02/game.pragmaticPlayYumYumPowerways.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Yum Yum Powerways</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayChilliHeatMegaways">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/chilli-heat-megaways/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Chilli Heat Megaways" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/02/game.pragmaticPlayChilliHeatMegaways.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Chilli Heat Megaways</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayRiseOfGizaPowerNudge">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/rise-of-giza-powernudge/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Rise of Giza PowerNudge" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlayRiseOfGizaPowerNudge.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Rise of Giza PowerNudge</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayChickenDrop">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/chicken-drop/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Chicken Drop" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlayChickenDrop.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Chicken Drop</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFruitParty2">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/fruit-party-2/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Fruit Party 2" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.pragmaticPlayFruitParty2.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Fruit Party 2</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayLuckyGraceAndCharm">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/lucky-grace-and-charm/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Lucky Grace and Charm" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/08/game.PragmaticPlayLuckyGraceAndCharm.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Lucky Grace and Charm</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayEmptyTheBank">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/empty-the-bank/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Empty the Bank" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/08/game.pragmaticPlayEmptyTheBank.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Empty the Bank</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayLuckyLightning">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/lucky-lightning/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Lucky Lightning" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/06/game.pragmaticPlayLuckyLightning.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Lucky Lightning</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayDragonHotHoldAndSpin">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/dragon-hot-hold-and-spin/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Dragon Hot Hold and Spin" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/06/game.pragmaticPlayDragonHotHoldAndSpin.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Dragon Hot Hold and Spin</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlay5LionsMegaways">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/5-lions-megaways/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="5 Lions Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/01/game.pragmaticPlay5LionsMegaways.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">5 Lions Megaways</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayHeartOfRio">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/heart-of-rio/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Heart of Rio" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/06/game.pragmaticPlayHeartOfRio.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Heart of Rio</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayPandaFortune2">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/panda-fortune-2/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Panda Fortune 2" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/06/game.pragmaticPlayPandaFortune2.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Panda Fortune 2</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTheMagicCauldronEnchantedBrew">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/the-magic-cauldron-enchanted-brew/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="The Magic Cauldron - Enchanted Brew" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/05/game.pragmaticPlayTheMagicCauldronEnchantedBrew.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">The Magic Cauldron - Enchanted Brew</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlay96PhoenixForge">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/phoenix-forge/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Phoenix Forge" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/05/game.pragmaticPlay96PhoenixForge.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Phoenix Forge</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlay96TheAmazingMoneyMachine">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/the-amazing-money-machine/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="The Amazing Money Machine" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/04/game.pragmaticPlay96TheAmazingMoneyMachine.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">The Amazing Money Machine</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBuffaloKingMegaways">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/buffalo-king-megaways/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Buffalo King Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/05/game.pragmaticPlayBuffaloKingMegaways.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Buffalo King Megaways</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFloatingDragon">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/floating-dragon/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Floating Dragon" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/05/game.pragmaticPlayFloatingDragon.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Floating Dragon</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayHotFiesta">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/hot-fiesta/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Hot Fiesta" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.pragmaticPlayHotFiesta.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Hot Fiesta</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayPowerOfThorMegaways">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/power-of-thor-megaways/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Power of Thor Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/04/game.pragmaticPlayPowerOfThorMegaways.thumbnail.344x220_v5.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Power of Thor Megaways</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayJuicyFruits">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/juicy-fruits/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Juicy Fruits" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/08/game.pragmaticPlayJuicyFruits.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Juicy Fruits</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFishinReels">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/fishin-reels/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Fishin Reels" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/04/game.pragmaticPlayFishinReels.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Fishin Reels</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayHotToBurnHoldAndSpin">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/hot-to-burn-hold-and-spin/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Hot to Burn Hold and Spin" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/05/game.pragmaticPlayHotToBurnHoldAndSpin.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Hot to Burn Hold and Spin</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayGatesOfOlympus">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/gates-of-olympus/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Gates of Olympus" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/03/game.pragmaticPlayGatesOfOlympus.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                    <!---->undefined
                                  </game-ribbon>undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Gates Of Olympus</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTheHandOfMidas">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/the-hand-of-midas/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="The Hand of Midas" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/03/game.pragmaticPlayTheHandOfMidas.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">The Hand Of Midas</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayDragonKingdomEyesOfFire">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/dragon-kingdom-eyes-of-fire/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Dragon Kingdom - Eyes of Fire" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayDragonKingdomEyesOfFire.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Dragon Kingdom Eyes Of Fire</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySweetBonanza">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/sweet-bonanza/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Sweet Bonanza" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlaySweetBonanza.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                    <!---->undefined
                                  </game-ribbon>undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Sweet Bonanza</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMadameDestinyMegaways">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/madame-destiny-megaways/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Madame Destiny Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayMadameDestinyMegaways.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Madame Destiny Megaways</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayEmeraldKingRainbowRoad">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/emerald-king-rainbow-road/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Emerald King Rainbow Road" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayEmeraldKingRainbowRoad.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Emerald King Rainbow Road</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayVoodooMagic">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/voodoo-magic/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Voodoo Magic" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/01/game.pragmaticPlayVoodooMagic.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Voodoo Magic</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBeowulf">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/beowulf/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Beowulf" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayBeowulf.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Beowulf</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayDanceParty">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/dance-party/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Dance Party" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayDanceParty.thumbnail.344x220.png">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Dance Party</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayDwarvenGoldDeluxe">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/dwarven-gold-deluxe/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Dwarven Gold Deluxe" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayDwarvenGoldDeluxe.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Dwarven Gold Deluxe</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTripleJokers">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/triple-jokers/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Triple Jokers" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayTripleJokers.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Triple Jokers</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayJohnHunterAndTheTombOfTheScarabQueen">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/john-hunter-and-the-tomb-of-the-scarab-queen/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="John Hunter And The Tomb Of The Scarab Queen" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayJohnHunterAndTheTombOfTheScarabQueen.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">John Hunter and the Tomb of the Scarab Queen</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayLuckyDragons">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/lucky-dragons/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Lucky Dragons" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayLuckyDragons.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Lucky Dragons</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayDaVincisTreasure">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/da-vincis-treasure/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Da Vinci's Treasure" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayDaVincisTreasure.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Da Vinci's Treasure</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayQueenOfAtlantis">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/queen-of-atlantis/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Queen of Atlantis" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayQueenOfAtlantis.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Queen of Atlantis</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayJohnHunterAndTheMayanGods">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/john-hunter-and-the-mayan-gods/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="John Hunter and the Mayan Gods" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayJohnHunterAndTheMayanGods.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">John Hunter And The Mayan Gods</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMagicCrystals">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/magic-crystals/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Magic Crystals" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayMagicCrystals.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Magic Crystals</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMasterChensFortune">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/master-chens-fortune/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Master Chen's Fortune" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayMasterChensFortune.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Master Chen's Fortune</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayVegasNights">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/vegas-nights/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Vegas Nights" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayVegasNights.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Vegas Nights</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayCongoCash">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/congo-cash/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Congo Cash" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/04/game.pragmaticPlayCongoCash.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Congo Cash</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayPyramidKing">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/pyramid-king/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Pyramid King" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayPyramidKing.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Pyramid King</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMustangGold">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/mustang-gold/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Mustang Gold" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayMustangGold.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Mustang Gold</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayVampiresVsWolves">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/vampires-vs-wolves/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Vampires Vs Wolves" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayVampiresVsWolves.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Vampires vs Wolves</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayJohnHunterAndTheBookOfTut">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/john-hunter-and-the-book-of-tut/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="John Hunter and the Book of Tut" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayJohnHunterAndTheBookOfTut.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">John Hunter and the Book of Tut</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlay5Lions">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/5-lions/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="5 Lions" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/11/game.pragmaticPlay5Lions.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">5 Lions</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayAsgard">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/asgard/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Asgard" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayAsgard.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Asgard</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTheWildMachine">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/the-wild-machine/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayTheWildMachine.thumbnail.344x220.png">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">The Wild Machine</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayJungleGorilla">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/jungle-gorilla/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Jungle Gorilla" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayJungleGorilla.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Jungle Gorilla</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayHoneyHoneyHoney">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/honey-honey-honey/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Honey Honey Honey" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayHoneyHoneyHoney.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Honey Honey Honey</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayDragoJewelsOfFortune">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/drago-jewels-of-fortune/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Drago - Jewels Of Fortune" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayDragoJewelsOfFortune.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Drago - Jewels of Fortune</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayHotChilli">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/hot-chilli/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Hot Chilli" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayHotChilli.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Hot Chilli</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayCaishensGold">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/caishens-gold/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Caishen's Gold" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayCaishensGold.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Caishen’s Gold</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayJadeButterfly">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/jade-butterfly/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Jade Butterfly" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayJadeButterfly.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Jade Butterfly</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayPekingLuck">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/peking-luck/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Peking Luck" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayPekingLuck.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Peking Luck</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayThreeStarFortune">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/three-star-fortune/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Three Star Fortune" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/03/game.pragmaticPlayThreeStarFortune.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Three Star Fortune</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayJohnHunterAndTheAztecTreasure">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/john-hunter-and-the-aztec-treasure/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="John Hunter And The Aztec Treasure" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayJohnHunterAndTheAztecTreasure.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">John Hunter and the Aztec Treasure</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTripleTigers">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/triple-tigers/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Triple Tigers" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayTripleTigers.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Triple Tigers</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTreasureHorse">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/treasure-horse/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Treasure Horse" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/03/game.pragmaticPlayTreasureHorse.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Treasure Horse</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayGloriousRome">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/glorious-rome/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Gloroius Rome" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayGloriousRome.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Glorious Rome</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayDragonTiger">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/dragon-tiger/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Dragon Tiger" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/09/game.pragmaticPlayDragonTiger.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Dragon Tiger</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayWildWalker">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/wild-walker/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Wild Walker" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayWildWalker.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Wild Walker</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayChilliHeat">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/chilli-heat/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Chilli Heat" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayChilliHeat.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Chilli Heat</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTheDogHouse">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/the-dog-house/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="The Dog House" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayTheDogHouse.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">The Dog House</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayHockeyLeagueWildMatch">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/hockey-league-wild-match/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Hockey League Wild Match" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayHockeyLeagueWildMatch.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Hockey League Wild Match</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayWolfGold">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/wolf-gold/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Wolf Gold" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayWolfGold.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                    <!---->undefined
                                  </game-ribbon>undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Wolf Gold</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMadameDestiny">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/madame-destiny/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="undefined" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayMadameDestiny.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Madame Destiny</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayStarBounty">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/star-bounty/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Star Bounty" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayStarBounty.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Star Bounty</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayPirateGoldDeluxe">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/pirate-gold-deluxe/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Pirate Gold Deluxe" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayPirateGoldDeluxe.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Pirate Gold Deluxe</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBuffaloKing">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/buffalo-king/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Buffalo King" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlayBuffaloKing.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Buffalo King</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySweetBonanzaXmas">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/sweet-bonanza-xmas/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Sweet Bonanza Xmas" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/12/game.pragmaticPlaySweetBonanzaXmas.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Sweet Bonanza Xmas</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayWildWildRiches">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/wild-wild-riches/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Wild Wild Riches" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayWildWildRiches.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Wild Wild Riches</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayWildSpells">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/wild-spells/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Wild Spells" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayWildSpells.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Wild Spells</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTheChampions">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/the-champions/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="The Champions" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayTheChampions.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">The Champions</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayLeprechaunCarol">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/leprechaun-carol/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Leprechaun Carol" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayLeprechaunCarol.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Leprechaun Carol</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayWildWestGold">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/wild-west-gold/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Wild West Gold" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayWildWestGold.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Wild West Gold</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayVegasMagic">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/vegas-magic/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="undefined" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayVegasMagic.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Vegas Magic</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayJokerKing">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/joker-king/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Joker King" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/03/game.pragmaticPlayJokerKing.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Joker King</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayHotSafari">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/hot-safari/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Hot Safari" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayHotSafari.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Hot Safari</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySafariKing">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/safari-king/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Safari King" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlaySafariKing.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Safari King</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMysteriousEgypt">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/mysterious-egypt/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Mysterious Egypt" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/03/game.pragmaticPlayMysteriousEgypt.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Mysterious Egypt</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMasterJoker">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/master-joker/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Master Joker" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayMasterJoker.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Master Joker</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayCowboysGold">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/cowboys-gold/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Cowboys Gold" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayCowboysGold.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Cowboys Gold</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayUltraHoldAndSpin">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/klasik-slotlar/ultra-hold-and-spin/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Ultra Hold and Spin" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayUltraHoldAndSpin.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Ultra Hold and Spin</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayHerculesAndPegasus">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/hercules-and-pegasus/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Hercules And Pegasus" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayHerculesAndPegasus.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Hercules and Pegasus</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayQueenOfGold100000">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/oyunlar/queen-of-gold-100000/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Queen of Gold 100,000" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayQueenOfGold100000.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Queen of Gold 100,000</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayHerculesSonOfZeus">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/hercules-son-of-zeus/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Hercules Son Of Zeus" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayHerculesSonOfZeus.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Hercules Son of Zeus</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySpartanKing">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/spartan-king/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Spartan King" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/03/game.pragmaticPlaySpartanKing.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Spartan King</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayGreekGods">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/greek-gods/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Greek Gods" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayGreekGods.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Greek Gods</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayCaishensCash">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/caishens-cash/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Caishen's Cash" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayCaishensCash.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Caishen's Cash</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayGoldTrain">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/gold-train/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Gold Train" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayGoldTrain.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Gold Train</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayPirateGold">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/pirate-gold/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayPirateGold.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Pirate Gold</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBookOfKingdoms">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/book-of-kingdoms/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Book Of Kingdoms" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayBookOfKingdoms.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Book of Kingdoms</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayJourneyToTheWest">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/journey-to-the-west/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Journey To The West" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayJourneyToTheWest.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Journey to the West</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayGreatRhinoDeluxe">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/great-rhino-deluxe/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Great Rhino Deluxe" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayGreatRhinoDeluxe.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Great Rhino Deluxe</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayWildPixies">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/wild-pixies/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Wild Pixies" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayWildPixies.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Wild Pixies</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayGoldenBeauty">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/golden-beauty/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Golden Beauty" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/03/game.pragmaticPlayGoldenBeauty.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Golden Beauty</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayGreatRhino">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/great-rhino/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Great Rhino" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayGreatRhino.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Great Rhino</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayPandaGold10000">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/oyunlar/panda-gold-10000/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Panda Gold 10,000" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayPandaGold10000.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Panda Gold 10,000</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayStreetRacer">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/street-racer/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Street Racer" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayStreetRacer.thumbnail.344x220_v3.png">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Street Racer</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayCurseOfTheWerewolfMegaways">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/curse-of-the-werewolf-megaways/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Curse of the Werewolf Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/03/game.pragmaticPlayCurseOfTheWerewolfMegaways.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Curse of the Werewolf Megaways</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySuper7s">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/super-7s/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Super 7s" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlaySuper7s.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Super 7s</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayUltraBurn">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/ultra-burn/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Ultra Burn" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayUltraBurn.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Ultra Burn</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayGreatRhinoMegaways">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/great-rhino-megaways/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Great Rhino Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayGreatRhinoMegaways.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Great Rhino Megaways</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayChristmasCarolMegaways">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/christmas-carol-megaways/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Christmas Carol Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/12/game.pragmaticPlayChristmasCarolMegaways.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Christmas Carol Megaways</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTheDogHouseMegaways">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/the-dog-house-megaways/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="The Dog House Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayTheDogHouseMegaways.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">The Dog House Megaways</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayLuckyNewYear">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/lucky-new-year/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayLuckyNewYear.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Lucky New Year</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTripleDragons">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/klasik-slotlar/triple-dragons/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Triple Dragons" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayTripleDragons.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Triple Dragons</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayDiamondStrike100000">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/oyunlar/diamond-strike-100000/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Diamond Strike 100,000" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayDiamondStrike100000.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Diamond Strike 100,000</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayAztecBonanza">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/aztec-bonanza/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Aztec Bonanza" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayAztecBonanza.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Aztec Bonanza</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayGreatReef">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/great-reef/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Great Reef" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayGreatReef.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Great Reef</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTreeOfRiches">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/tree-of-riches/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Tree Of Riches" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayTreeOfRiches.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Tree of Riches</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayWildGladiators">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/wild-gladiators/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Wild Gladiators" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayWildGladiators.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Wild Gladiators</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayJurassicGiants">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/jurassic-giants/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Jurassic Giants" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayJurassicGiants.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Jurassic Giants</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFire88">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/klasik-slotlar/fire-88/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Fire 88" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayFire88.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Fire 88</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySuperJoker">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/klasik-slotlar/super-joker/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Super Joker" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlaySuperJoker.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Super Joker</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMoneyMouse">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/money-mouse/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Money Mouse" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayMoneyMouse.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Money Mouse</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayGemsBonanza">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/gems-bonanza/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Gems Bonanza" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayGemsBonanza.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Gems Bonanza</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayDragonKingdom">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/dragon-kingdom/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Dragon Kingdom" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayDragonKingdom.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Dragon Kingdom</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayReleaseTheKraken">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/release-the-kraken/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Release The Kraken" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/02/game.pragmaticPlayReleaseTheKraken.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Release the Kraken</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTheGreatChickenEscape">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/the-great-chicken-escape/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="The Great Chicken Escape" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayTheGreatChickenEscape.thumbnail.344x220.png">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">The Great Chicken Escape</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayTheCatfather">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/the-catfather/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="The Catfather" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayTheCatfather.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">The Catfather</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayEgyptianFortunes">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/egyptian-fortunes/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Egyptian Fortunes" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayEgyptianFortunes.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Egyptian Fortunes</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayPantherQueen">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/panther-queen/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Panther Queen" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayPantherQueen.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Panther Queen</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayReturnOfTheDead">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/return-of-the-dead/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Return of the Dead" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayReturnOfTheDead.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Return of the Dead</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayEmeraldKing">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/emerald-king/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Emerald King" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayEmeraldKing.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Emerald King</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFireStrike">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/klasik-slotlar/fire-strike/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Fire Strike" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayFireStrike.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Fire Strike</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayJokersJewels">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/jokers-jewels/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Joker Jewel" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayJokersJewels.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Joker's Jewels</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlaySanta">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/santa/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Santa" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlaySanta.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Santa</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayQueenOfGold">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/queen-of-gold/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Queen of Gold" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayQueenOfGold.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Queen of Gold</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayHotToBurn">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/hot-to-burn/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Hot To Burn" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayHotToBurn.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Hot to Burn</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFairytaleFortune">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/fairytale-fortune/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Fairy Tale Fortune" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayFairyTaleFortune.thumbnail.344x220.png">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Fairytale Fortune</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayPandasFortune">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/pandas-fortune/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Panda's Fortune" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayPandasFortune.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Panda's Fortune</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayGoldRush">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/gold-rush/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Gold Rush" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayGoldRush.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Gold Rush</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayHotSafari50000">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/oyunlar/hot-safari-50000/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Hot Safari 50000" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayHotSafari50000.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Hot Safari 50,000</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMysterious">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/mysterious/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Mysterious" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayMysterious.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Mysterious</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayPixieWings">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/pixie-wings/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Pixie Wings" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayPixieWings.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Pixie Wings</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMagicJourney">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/magic-journey/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Magic Journey" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayMagicJourney.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Magic Journey</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMonkeyWarrior">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/monkey-warrior/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Monkey Warrior" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayMonkeyWarrior.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Monkey Warrior</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMightyKong">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/mighty-kong/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Mighty Kong" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayMightyKong.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Mighty Kong</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayLeprechaunSong">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/leprechaun-song/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayLeprechaunSong.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Leprechaun Song</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayExtraJuicy">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/extra-juicy/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Extra Juicy" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayExtraJuicy.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Extra Juicy</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayMonkeyMadness">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/monkey-madness/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Monkey Madness" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayMonkeyMadness.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Monkey Madness</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFruitRainbow">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/fruit-rainbow/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Fruit Rainbow" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/03/game.pragmaticPlayFruitRainbow.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Fruit Rainbow</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayStarzMegaways">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/starz-megaways/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Starz Megaways" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayStarzMegaways.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Starz Megaways</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayDiamondStrike">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/diamond-strike/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Diamond Strike" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.pragmaticPlayDiamondStrike.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Diamond Strike</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayLadyGodiva">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/lady-godiva/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Lady Godiva" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayLadyGodiva.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Lady Godiva</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayAztecGemsDeluxe">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/aztec-gems-deluxe/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Aztec Gems Deluxe" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayAztecGemsDeluxe.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Aztec Gems Deluxe</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayAztecGems">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/klasik-slotlar/aztec-gems/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Aztec Gems" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayAztecGems.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Aztec Gems</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBigBassBonanza">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/big-bass-bonanza/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Big Bass Bonanza" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayBigBassBonanza.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Big Bass Bonanza</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayFruitParty">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/fruit-party/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Fruit Party" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/11/game.pragmaticPlayFruitParty.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Fruit Party</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlay3GenieWishes">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/3-genie-wishes/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="3 Genie Wishes" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/11/game.pragmaticPlay3GenieWishes.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">3 Genie Wishes</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBookOfVikings">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/book-of-vikings/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Book of Vikings" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/02/game.pragmaticPlayBookOfVikings.thumbnail.344x220_v4.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Book Of Vikings</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayBroncoSpirit">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/bronco-spirit/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Bronco Spirit" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayBroncoSpirit.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Bronco Spirit</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlay3KingdomsBattleOfRedCliffs">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/3-kingdoms-battle-of-red-cliffs/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="3 Kingdoms Battle Of Red Cliffs" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlay3KingdomsBattleOfRedCliffs.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">3 Kingdoms - Battle of Red Cliffs</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlay7Monkeys">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/7-monkeys-mobile/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="7 Monkeys" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlay7Monkeys.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">7 Monkeys</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlay5LionsGold">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/5-lions-gold/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="5 Lions Gold" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/01/game.pragmaticPlay5LionsGold.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">5 Lions Gold</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayAladdinAndTheSorcerer">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/aladdin-and-the-sorcerer/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Aladdin And The Sorcerer" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayAladdinAndTheSorcerer.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Aladdin and the Sorcerer</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlay7Piggies5000">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/oyunlar/7-piggies-5000/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="7 Piggies 5,000" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/11/game.pragmaticPlay7Piggies5000.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">7 Piggies 5,000</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlay7Piggies">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/7-piggies/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="7 Piggies" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/03/game.pragmaticPlay7Piggies.thumbnail.344x220_v3.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">7 Piggies</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlay3KingdomsBattleOfRedCliffsNoJP">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/3-kingdoms-battle-of-red-cliffs/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="3 Kingdoms Battle Of Red Cliffs" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/04/game.pragmaticPlay3KingdomsBattleOfRedCliffsNoJP.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">3 Kingdoms Battle Of Red Cliffs</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlay5LionsDance">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/5-lions-dance/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="5 Lions Dance" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/03/game.pragmaticPlay5LionsDance.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">5 Lions Dance</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlay888Dragons">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/klasik-slotlar/888-dragons/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="888 Dragons" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlay888Dragons.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">888 Dragons</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayAncientEgyptClassic">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/ancient-egypt-classic/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Ancient Egypt Classic" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayAncientEgyptClassic.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Ancient Egypt Classic</span>undefined</div>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </section>undefined
                                </a>undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined</obg-casino-game-thumbnail>undefined</li>undefined<li class="game-container ng-tns-c187-0 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-0">undefined<div test-id="game-thumbnail" class="game-thumbnail" game-id="pragmaticPlayAncientEgypt">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                    <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                                  </div>undefined</game-favourite>undefined
                                <!---->undefined<a uisref="game" href="/tr/slot-oyunlari/ancient-egypt/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                    <!---->undefined<img class="thumbnail-img ng-star-inserted" alt="Ancient Egypt" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.pragmaticPlayAncientEgypt.thumbnail.344x220.jpg">undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                  <!---->undefined<section>undefined<div class="ng-star-inserted">undefined<span test-id="game-name" class="game-name">Ancient Egypt</span>undefined</div>undefined
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
            <!---->undefined
          </ui-view>undefined
          <!---->undefined
        </div>undefined
      </div>undefined
      <!---->undefined
    </div>undefined
  </main>undefined
  <!---->undefined
  <!---->undefined
</ui-view>
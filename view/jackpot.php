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
                    <a href="/classic-slots" >
                      <span class="category-icon icon-me-classicslots"></span>
                      <span>Klasik Slotlar</span>
                    </a>
                    <!---->
                    <!---->
                  </li>
                  <!---->
                  <!---->
                  <li class="ma-jackpot" test-id="menu-item-nav-jackpots">
                    <a href="/jackpot" class="active">
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
                  <casino-game-collection class="ng-tns-c187-4 ng-star-inserted">
                    <section class="games-section content-wrapper ng-tns-c187-4 ng-star-inserted" test-id="jackpotlar-collection">
                      <div class="game-category-header row ng-tns-c187-4">
                        <div class="col-md-7 ng-tns-c187-4">
                          <!---->
                          <!---->
                          <game-collection-filter class="game-collection-filter ng-tns-c187-4 ng-star-inserted">
                            <ul class="games-filter-options">
                              <li>
                                <input id="filter-expression-all-games" type="radio" name="filter-expression" checked="true">
                                <label for="filter-expression-all-games" class="btn active-filter" id="game-filter-collection.all.jackpots" test-id="Jackpots-filter">Tüm Jackpotlar</label>
                              </li>
                              <li class="ng-star-inserted">
                                <input type="radio" name="filter-expression" id="filter-expression-New">
                                <label class="btn" id="game-filter-collection.jackpots.New" for="filter-expression-" test-id="New-filter">Yeni Oyunlar</label>
                              </li>
                              <li class="ng-star-inserted">
                                <input type="radio" name="filter-expression" id="filter-expression-Exclusive">
                                <label class="btn" id="game-filter-collection.jackpots.Exclusive" for="filter-expression-" test-id="Exclusive-filter">Klasik</label>
                              </li>
                              <!---->
                            </ul>
                          </game-collection-filter>
                          <!---->
                        </div>
                        <div class="col-md-5 collection-select ng-tns-c187-4">
                          <section class="collection-sort ng-tns-c187-4">
                            <form-select formtextuals="common" labelname="common.label.sort-by" class="collection-dropdown collection-select-title ng-tns-c187-4 ng-untouched ng-pristine ng-valid">
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
                          <section class="collection-sort collection-sort-provider-list ng-tns-c187-4 ng-star-inserted">
                            <dropdown icon="icon-filter" test-id="game-filter-dropdown" class="ng-tns-c187-4">
                              <div class="dropdown-overlay"></div>
                              <div class="dropdown-trigger">
                                <span class="dropdown-title">Filtreler</span>
                                <i class="fa icon-filter"></i>
                                <!---->
                              </div>
                              <div class="dropdown">
                                <div class="dropdown-content">
                                  <game-filter>
                                    <div class="game-filter">
                                      <div class="game-filter-content-header">
                                        <div class="game-filter-content-header-action">
                                          <div>
                                            <span>Jackpots</span>
                                            <span>Filtreler</span>
                                          </div>
                                          <div test-id="clear-filter-button" class="clear">Filtreleri temizle</div>
                                          <button class="btn btn-success">Onayla</button>
                                        </div>
                                        <div class="game-filter-content-header-input">
                                          <i test-id="search-icon" class="fa icon-magnifier game-filter-search-icon"></i>
                                          <input type="text" class="game-filter-search-field">
                                          <!---->
                                        </div>
                                      </div>
                                      <div class="game-filter-content">
                                        <span class="studio-content ng-star-inserted">
                                          <input type="checkbox" id="netent" name="netent" tabindex="0" test-id="netent-studio">
                                          <label for="netent">NetEnt</label>
                                        </span>
                                        <span class="studio-content ng-star-inserted">
                                          <input type="checkbox" id="blueprint" name="blueprint" tabindex="1" test-id="blueprint-studio">
                                          <label for="blueprint">Blueprint</label>
                                        </span>
                                        <span class="studio-content ng-star-inserted">
                                          <input type="checkbox" id="gamesinc" name="gamesinc" tabindex="2" test-id="gamesinc-studio">
                                          <label for="gamesinc">GamesInc</label>
                                        </span>
                                        <span class="studio-content ng-star-inserted">
                                          <input type="checkbox" id="thunderbolt" name="thunderbolt" tabindex="3" test-id="thunderbolt-studio">
                                          <label for="thunderbolt">Thunderbolt</label>
                                        </span>
                                        <span class="studio-content ng-star-inserted">
                                          <input type="checkbox" id="leander" name="leander" tabindex="4" test-id="leander-studio">
                                          <label for="leander">Leander</label>
                                        </span>
                                        <span class="studio-content ng-star-inserted">
                                          <input type="checkbox" id="sigma gaming" name="sigma gaming" tabindex="5" test-id="sigma gaming-studio">
                                          <label for="sigma gaming">Sigma Gaming</label>
                                        </span>
                                        <span class="studio-content ng-star-inserted">
                                          <input type="checkbox" id="wild streak gaming" name="wild streak gaming" tabindex="6" test-id="wild streak gaming-studio">
                                          <label for="wild streak gaming">Wild Streak Gaming</label>
                                        </span>
                                        <span class="studio-content ng-star-inserted">
                                          <input type="checkbox" id="playngo" name="playngo" tabindex="7" test-id="playngo-studio">
                                          <label for="playngo">PlaynGo</label>
                                        </span>
                                        <span class="studio-content ng-star-inserted">
                                          <input type="checkbox" id="playtech" name="playtech" tabindex="8" test-id="playtech-studio">
                                          <label for="playtech">Playtech</label>
                                        </span>
                                        <span class="studio-content ng-star-inserted">
                                          <input type="checkbox" id="big time gaming" name="big time gaming" tabindex="9" test-id="big time gaming-studio">
                                          <label for="big time gaming">Big Time Gaming</label>
                                        </span>
                                        <span class="studio-content ng-star-inserted">
                                          <input type="checkbox" id="relax gaming" name="relax gaming" tabindex="10" test-id="relax gaming-studio">
                                          <label for="relax gaming">Relax Gaming</label>
                                        </span>
                                        <span class="studio-content ng-star-inserted">
                                          <input type="checkbox" id="reel play" name="reel play" tabindex="11" test-id="reel play-studio">
                                          <label for="reel play">Reel Play</label>
                                        </span>
                                        <span class="studio-content ng-star-inserted">
                                          <input type="checkbox" id="yggdrasil" name="yggdrasil" tabindex="12" test-id="yggdrasil-studio">
                                          <label for="yggdrasil">Yggdrasil</label>
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
                        <div class="col-md-12 studio-select ng-tns-c187-4">
                          <!---->
                        </div>
                      </div>
                      <!---->
                      <section class="games-collection-section ng-tns-c187-4" test-id="jackpotlar-content">
                        <!---->
                        <ul class="games-list-wrapper ng-tns-c187-4" test-id="allgames-collection">
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="MegaJackpot">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/mega-fortune/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺49.779.433 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="play Mega Fortune" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/11/game.MegaJackpot.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">Mega Fortune</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="netentDivineFortune">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/divine-fortune/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺2.495.134 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Divine Fortune" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/11/game.netentDivineFortune.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">Divine Fortune</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="yggdrasilEmpireFortune">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/empire-fortune/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺45.612.886 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Empire Fortune" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.yggdrasilEmpireFortune.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">Empire Fortune</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="HallOfGods">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/hall-of-gods/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺93.586.916 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="play Hall of Gods" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.HallOfGods.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">Efsanevi Tanrılar</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="yggdrasilJokerMillions">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/joker-millions/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺45.612.886 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.yggdrasilJokerMillions.thumbnail.344x220_v4.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Joker Millions</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="netentMegaFortuneDreams">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/mega-fortune-dreams/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺69.906.267 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="play Mega Fortune Dreams" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.netentMegaFortuneDreams.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Mega Fortune Dreams</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="ArabianNights">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/arabian-nights/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺8.899.827 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="play Arabian Nights" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.ArabianNights.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Arabian Nights</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxDreamDropDiamonds">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/dream-drop-diamonds/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺30.708.951 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Dream Drop Diamonds" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.relaxDreamDropDiamonds.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Dream Drop Diamonds</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintFunkyPharaohJackpotKing">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/funky-pharaoh-jackpot-king/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺31.041.515 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Funky Pharaoh Jackpot King" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/09/game.blueprintFunkyPharaohJackpotKing.thumbnail.344x220.jpg">
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
                                      <span test-id="game-name" class="game-name">Funky Pharaoh Jackpot King</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="playtechStallionStrikePowerPlayJackpot">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/stallion-strike-powerplay-jackpot/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺1.026.532 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Stallion Strike PowerPlay Jackpot" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.playtechStallionStrikePowerPlayJackpot.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">Stallion Strike PowerPlay Jackpot</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxTNTTumbleDreamDrop">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/tnt-tumble-dream-drop/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺30.708.951 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="TNT Tumble Dream Drop" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.relaxTNTTumbleDreamDrop.thumbnail.344x220.jpg">
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
                                      <span test-id="game-name" class="game-name">TNT Tumble Dream Drop</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxTemplarTumble2DreamDrop">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/templar-tumble-2-dream-drop/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Templar Tumble 2 Dream Drop" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.relaxTemplarTumble2DreamDrop.thumbnail.344x220_v4.jpg">
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
                                      <span test-id="game-name" class="game-name">Templar Tumble 2 Dream Drop</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxSnakeArenaDreamDrop">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/snake-arena-dream-drop/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺30.708.951 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Snake Arena Dream Drop" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.relaxSnakeArenaDreamDrop.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Snake Arena Dream Drop</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxNekoNightDreamDrop">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/neko-night-dream-drop/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺30.708.951 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Neko Night Dream Drop" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/09/game.relaxNekoNightDreamDrop.thumbnail.344x220_v3.jpg">
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
                                      <span test-id="game-name" class="game-name">Neko Night Dream Drop</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintFishinFrenzyTheBigCatchJackpotKing">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/fishin-frenzy-the-big-catch-jackpot-king/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺31.041.515 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Fishin' Frenzy The Big Catch Jackpot King" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.blueprintFishinFrenzyTheBigCatchJackpotKing.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Fishin' Frenzy The Big Catch Jackpot King</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxWildChapoDreamDrop">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/wild-chapo-dream-drop/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺30.708.951 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Wild Chapo Dream Drop" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.relaxWildChapoDreamDrop.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Wild Chapo Dream Drop</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxTheGreatPigsbyMegapays">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/the-great-pigsby-megapays/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺35.307.214 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="The Great Pigsby Megapays" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/04/game.relaxTheGreatPigsbyMegapays.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">The Great Pigsby Megapays</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintMegaBarsFortuneWheelJackpotKing">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/mega-bars-fortune-wheel-jackpot-king/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺31.041.515 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Mega Bars Fortune Wheel Jackpot King" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/03/game.blueprintMegaBarsFortuneWheelJackpotKing.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Mega Bars Fortune Wheel Jackpot King</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxMillionaireMegapays">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/millionaire-megapays/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺35.307.214 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Millionaire Megapays" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/08/game.relaxMillionaireMegapays.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Millionaire Megapays</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintFishinFrenzyMegawaysJPK">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/fishin-frenzy-megaways-jackpot-king/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺31.041.515 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Fishin Frenzy Megaways Jackpot King" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/08/game.blueprintFishinFrenzyMegawaysJPK.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Fishin Frenzy Megaways Jackpot King</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintGoldStrikeBonanzaJackpotKing">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/gold-strike-bonanza-jackpot-king/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺31.041.515 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Gold Strike Bonanza Jackpot King" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/01/game.blueprintGoldStrikeBonanzaJackpotKing.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Gold Strike Bonanza Jackpot King</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxBonanzaMegapays">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/bonanza-megapays/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺35.307.214 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Bonanza MegaPays" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/05/game.relaxBonanzaMegapays.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Bonanza MegaPays</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintBisonRisingMegawaysJackpotKing">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/bison-rising-megaways-jackpot-king/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺31.041.515 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Bison Rising Megaways Jackpot King" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.blueprintBisonRisingMegawaysJackpotKing.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Bison Rising Megaways Jackpot King</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintDiamondMineMegawaysJackpotKing">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/diamond-mine-megaways-jackpot-king/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺31.041.515 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Diamond Mine Megaways Jackpot King" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/05/game.blueprintDiamondMineMegawaysJackpotKing.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Diamond Mine Megaways Jackpot King</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="yggdrasilAtlanteanGigarise">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/atlantean-gigarise/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺468.269 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Atlantean Gigarise" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/04/game.yggdrasilAtlanteanGigarise.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Atlantean Gigarise</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintKingKongCashJackpotKing">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/king-kong-cash-jackpot-king/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺31.041.515 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="King Kong Cash Jackpot King" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/04/game.blueprintKingKongCashJackpotKing.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">King Kong Cash Jackpot King</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="yggdrasilFrostQueenJackpot">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/frost-queen-jackpots/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺468.269 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Frost Queen Jackpot" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/01/game.yggdrasilFrostQueenJackpot.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Frost Queen Jackpots</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxTikiInfinityReelsMegaways">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/tiki-infinity-reels-megaways/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Tiki INFINITY REELS x MEGAWAYS" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/11/game.relaxTikiInfinityReelsMegaways.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Tiki INFINITY REELS x MEGAWAYS</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="relaxThorInfinityReels">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/thor-infinity-reels/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Thor INFINITY REELS" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/02/game.relaxThorInfinityReels.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Thor Infinity Reels</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintEyeOfHorusJackpotKing">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/eye-of-horus-jackpot-king/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺31.041.515 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Eye of Horus Jackpot King" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/11/game.blueprintEyeOfHorusJackpotKing.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Eye of Horus Jackpot King</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincPop">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/oyunlar/pop/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <div class="icon-jackpots jackpot ng-star-inserted">
                                      <span>
                                        <span class="jackpot-value"> ₺200.313 </span>
                                      </span>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="Pop" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/10/game.gamesincPop.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted">
                                      <span test-id="game-name" class="game-name">Pop!</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="netentVegasNightLife">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                    <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" href="/tr/jackpotlar/vegas-night-life/" class="ng-star-inserted" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image">
                                    <div test-id="game-hover-wrapper" class="hover-wrapper">
                                      <i test-id="play-button" class="fa fa-play"></i>
                                    </div>
                                    <!---->
                                    <img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/10/game.netentVegasNightLife.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <section>
                                    <div class="ng-star-inserted"><span test-id="game-name" class="game-name">Vegas Night Life</span>
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
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintMightyGriffinMegawaysJackpotKing">
                                <game-favourite class="ng-star-inserted" style="">
                                  <div class="game-favourite">
                                    <!---->
                                    <input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div>
                                </game-favourite>
                                <!---->
                                <a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/mighty-griffin-megaways-jackpot-king/" style="">
                                  <div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺31.041.515 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Mighty Griffin Megaways Jackpot King" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/06/game.blueprintMightyGriffinMegawaysJackpotKing.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Mighty Griffin Megaways Jackpot King</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4">
                              <div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintTikiTreasuresMegawaysJPK">
                                <game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/tiki-treasures-megaways-jackpot-king/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺31.041.515 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Tiki Treasures Megaways Jackpot King" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/07/game.blueprintTikiTreasuresMegawaysJPK.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Tiki Treasures Megaways Jackpot king</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div>
                            </obg-casino-game-thumbnail>
                          </li>
                          <li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                            <obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderAPiratesQuest"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/a-pirates-quest/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺229.788 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="A Pirate's Quest" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/10/game.leanderAPiratesQuest.thumbnail.344x220_v4.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">A Pirate's Quest</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail>
                          </li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="yggdrasilJackpotExpress"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/jackpot-express/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺468.269 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Jackpot Express" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/08/game.yggdrasilJackpotExpress.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Jackpot Express</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincSophie"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/sophie/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺1.021.780 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Sophie" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/03/game.gamesincSophie.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Sophie</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="netentGrandSpinnSuperpot"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/grand-spinn-superpot/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺500.367 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Grand Spinn Superpot" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.netentGrandSpinnSuperpot.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Grand Spinn Superpot</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderFortuneFireworks"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/fortune-fireworks/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺7.130.201 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Fortune Fireworks" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.leanderFortuneFireworks.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Fortune Fireworks</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="netentImperialRiches"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/imperial-riches/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺225.522 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Imperial Riches" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/09/game.netentImperialRiches.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Imperial Riches</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincDiamondJoker"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/diamond-joker/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺1.021.780 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Diamond Joker" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/10/game.gamesincDiamondJoker.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Diamond Joker</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="netentMercyOfTheGods"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/mercy-of-the-gods/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺1.344.305 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Mercy Of The Gods" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.netentMercyOfTheGods.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Mercy of the Gods</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintIrishRiches"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/irish-riches/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺31.041.515 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Irish Riches" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.blueprintIrishRiches.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Irish Riches</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintWinstar"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/win-star/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺31.041.515 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Win Star" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.blueprintWinStar.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Win Star</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintSuperDiamondDeluxe"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/super-diamond-deluxe/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺31.041.515 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Super Diamond Deluxe" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.blueprintSuperDiamondDeluxe.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Super Diamond Deluxe</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="yggdrasilJackpotRaiders"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/jackpot-raiders/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺468.269 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Jackpot Raiders" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/05/game.yggdrasilJackpotRaiders.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Jackpot Raiders</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintPawsOfFury"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/paws-of-fury/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺31.041.515 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Paws Of Fury" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.blueprintPawsOfFury.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Paws Of Fury</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="yggdrasilDrFortuno"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/dr-fortuno/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺9.185 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/04/game.yggdrasilDrFortuno.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Dr. Fortuno</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintThePigWizard"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/the-pig-wizard/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺31.041.515 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="The Pig Wizard" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.blueprintThePigWizard.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">The Pig Wizard</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincDoubleDemonReels"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/double-demon-reels/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺57.173 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Double Demon Reel" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/10/game.gamesincDoubleDemonReels.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Double Demon Reels</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintSlotsOGold"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/slots-o-gold/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺31.041.515 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Slots O' Gold" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.blueprintSlotsOGold.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Slots O' Gold</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderPatricksJackpot"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/patricks-jackpot/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺2.816.202 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/03/game.leanderPatricksJackpot.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Patricks Jackpot</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintGenieJackpots"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/genie-jackpots/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺31.041.515 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Genie Jackpots" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.blueprintGenieJackpots.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Genie Jackpots</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincCowboyTreasureDeluxe"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/cowboy-treasure-deluxe/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺1.021.780 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/03/game.gamesincCowboyTreasureDeluxe.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Cowboy Treasure Deluxe</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintWishUponALeprechaun"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/wish-upon-a-leprechaun/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺31.041.515 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Wish Upon A Leprechaun" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.blueprintWishUponALeprechaun.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Wish Upon A Leprechaun</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincJazzOfNewOrleans"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/jazz-of-new-orleans/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺1.021.780 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/11/game.gamesincJazzOfNewOrleans.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Jazz Of New Orleans</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintSuperSpinner"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/super-spinner/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺31.041.515 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Super Spinner" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.blueprintSuperSpinner.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Super Spinner</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderBandida"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/bandida/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺229.788 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/11/game.leanderBandida.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Bandida</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincMrToad"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/mr-toad/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺1.021.780 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/11/game.gamesincMrToad.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Mr Toad</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintRomeoAndJuliet"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/romeo-and-juliet-jackpot-king/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺31.041.515 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Romeo And Juliet" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.blueprintRomeoAndJuliet.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Romeo and Juliet Jackpot King</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincTheUntouchables"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/the-untouchables/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺224.512 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/09/game.gamesincTheUntouchables.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">The Untouchables</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincSpinAndWin"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/spin-and-win/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺1.021.780 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/11/game.gamesincSpinAndWin.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Spin And Win</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintStarSpinner"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/star-spinner/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺31.041.515 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Star Spinner" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.blueprintStarSpinner.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Star Spinner</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderZombieRushDeluxe"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/zombie-rush-deluxe/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺876.566 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.leanderZombieRushDeluxe.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Zombie Rush Deluxe</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="blueprintDiamondJackpots"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/diamond-jackpots/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺31.041.515 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Diamond Jackpots" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/04/game.blueprintDiamondJackpots.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Diamond Jackpots</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="gamesincPiggyBank"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/piggy-bank/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺1.021.780 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Piggy Bank" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/11/game.gamesincPIggyBank.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Piggy Bank</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderMagicGemsDeluxe"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/magic-gems-deluxe/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺876.566 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.leanderMagicGemsDeluxe.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Magic Gems Deluxe</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderGoldenWild"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/golden-wild/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺163.953 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.leanderGoldenWild.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Golden Wild</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="yggdrasilHolmesAndTheStolenStones"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/holmes-and-the-stolen-stones/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺462.696 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="play Holmes" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/11/game.yggdrasilHolmesAndTheStolenStones.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Holmes and the Stolen Stones</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderAveCaesar"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/ave-caesar/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺229.788 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Ave Ceasar" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2017/09/game.leanderAveCaesar.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Ave Caesar</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="yggdrasilOzwinsJackpot"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/ozwins-jackpot/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺68.511 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/01/game.yggdrasilOzwinsJackpot.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Ozwin's Jackpot</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="MegaJoker"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/mega-joker/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺282.250 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="play Mega Joker" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.MegaJoker.thumbnail.344x220_v3.jpg">
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
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoFruitBonanza"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/fruit-bonanza/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺1.592.493 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.playngofruitbonanza.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Fruit Bonanza</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderApollo"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/apollo/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺2.477.347 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Apollo" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.leanderApollo.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Apollo</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoLeprechaunGoesToHell"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/leprechaun-goes-to-hell/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺170.771 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Leprechauns Goes To Hell" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2017/07/game.playngoLeprechaunGoesToHell.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Leprechaun Goes To Hell</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderTrickOrTreat"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/trick-or-treat/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺2.618.435 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Trick Or Treat" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2017/10/game.leanderTrickOrTreat.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Trick Or Treat</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderDragonSlotJackpot"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/dragon-slot-jackpot/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺876.566 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Dragon Slot Jackpot" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/01/game.leanderDragonSlotJackpot.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Dragon Slot Jackpot</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoJackpotPoker"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/jackpot-poker-mh/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺185.476 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Jackpot Poker" data-src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.playngoJackpotPoker.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Jackpot Poker</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderGoldenMoneyFrog"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/golden-money-frog/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺558.457 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="Gold Money Frog" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.leanderGoldenMoneyFrog.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Golden Money Frog</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoCasinoStudPoker"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/casino-stud-poker/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺319.681 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="play Casino Stud Poker" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/08/game.playngoCasinoStudPoker.thumbnail.344x220_v3.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Casino Stud Poker</span></div>
                                    <!---->
                                    <!---->
                                  </section>
                                </a>
                                <!---->
                                <!---->
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoBellOfFortune"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/bell-of-fortune/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺35.636 </span></span></div>
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
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoGiftShop"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/gift-shop/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺35.636 </span></span></div>
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
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoSpeedCash"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/speed-cash/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺35.636 </span></span></div>
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
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="playngoGoldenGoal"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/golden-goal/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺35.636 </span></span></div>
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
                              </div></obg-casino-game-thumbnail></li><li class="game-container ng-tns-c187-4 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted"><obg-casino-game-thumbnail class="game-wrapper ng-tns-c187-4"><div test-id="game-thumbnail" class="game-thumbnail" game-id="leanderAlibabaJackpot"><game-favourite class="ng-star-inserted" style=""><div class="game-favourite">
                                    <!----><input type="checkbox" class="favourite-checkbox" test-id="favourite-button"><i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                                  </div></game-favourite>
                                <!----><a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/jackpotlar/ali-baba-jackpot/" style=""><div test-id="game-image" lazy-load-images="" class="game-image"><div test-id="game-hover-wrapper" class="hover-wrapper"><i test-id="play-button" class="fa fa-play"></i></div><div class="icon-jackpots jackpot ng-star-inserted"><span><span class="jackpot-value"> ₺876.566 </span></span></div>
                                    <!----><img class="thumbnail-img ng-star-inserted" alt="" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2018/01/game.leanderAlibabaJackpot.thumbnail.344x220.jpg">
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                  <!----><section><div class="ng-star-inserted"><span test-id="game-name" class="game-name">Ali Baba Jackpot</span></div>
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
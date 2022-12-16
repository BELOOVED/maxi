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
            <adaptive-lobby class="ng-star-inserted">
              <section class="adaptive-lobby">
                <tiled-filter class="ng-star-inserted">
                  <div class="tiled-filter">
                    <div class="tiles">
                      <div class="tile allgames active ng-star-inserted" test-id="tiled-filter-allgames">
                        <div class="tile-content">
                          <h5>
                            <span class="sub-category">Tüm Oyunlar</span>
                          </h5>
                          <!---->
                        </div>
                      </div>
                      <div class="tile roulette ng-star-inserted" test-id="tiled-filter-roulette">
                        <div class="tile-content">
                          <h5>
                            <span class="sub-category">Rulet</span>
                          </h5>
                          <!---->
                        </div>
                      </div>
                      <div class="tile blackjack ng-star-inserted" test-id="tiled-filter-blackjack">
                        <div class="tile-content">
                          <h5>
                            <span class="sub-category">Blackjack</span>
                          </h5>
                          <!---->
                        </div>
                      </div>
                      <div class="tile other ng-star-inserted" test-id="tiled-filter-other">
                        <div class="tile-content">
                          <h5>
                            <span class="sub-category">Diğer Oyunlar</span>
                          </h5>
                          <!---->
                        </div>
                      </div>
                      <!---->
                    </div>
                  </div>
                  <!---->
                </tiled-filter>
                <!---->
                <!---->
                <div test-id="lobby-title" class="adaptive-lobby-games">
                  <h3>Tüm Canlı Casino Oyunları</h3>
                  <h4 test-id="lobby-subtitle-allgames">common.tiledfilter.subtitle.allgames</h4>
                  <adaptive-grid class="ng-tns-c192-2">
                    <section class="adaptive-grid ng-tns-c192-2">
                      <banner-tile class="ng-tns-c192-2">
                        <div class="banner-tile ng-star-inserted">
                          <div class="banner-tile-inner">
                            <obg-swiper class="banner-tile-swiper">
                              <section class="swiper">
                                <div class="swiper-navigation">
                                  <div class="swiper-previous"></div>
                                  <div class="swiper-next disabled-navigation"></div>
                                </div>
                                <div class="swiper-content">
                                  <div class="swiper-wrapper smooth-translate" style="--columnWidth:362px; --noOfColumns:3; --columnWidthPercentage:33.3333%; width: 300%; transform: translate3d(-66.6667%, 0px, 0px);">
                                    <div class="swiper-container ng-star-inserted">
                                      <div class="swiper-slide" style="background-image: url(&quot;https://cdnroute.bpsgameserver.com/bgr/CasinoMaxi/Common/tr/image/2022/12/ed9d0e2d6bb54e3c94c9ca1c1b16d214.jpg&quot;);">
                                        <!---->
                                        <div class="content-wrapper">
                                          <div class="slider-info">
                                            <div class="slider-text">
                                              <span class="banner-title ng-star-inserted">23 Teklif:</span>
                                              <!---->
                                              <span class="banner-description ng-star-inserted">2023'e Ödüllerle Gir</span>
                                              <!---->
                                            </div>
                                            <div class="buttons-holder">
                                              <a class="btn btn-icon-before btn-icon-play btn-sm btn-success ng-star-inserted" href="https://bonus.casinomaxi564.com/tr/23-teklif-ile-2023e-odullerle-gir/">Bilgi Al</a>
                                              <!---->
                                              <!---->
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="swiper-container ng-star-inserted">
                                      <div class="swiper-slide" style="background-image: url(&quot;https://cdnroute.bpsgameserver.com/bgr/CasinoMaxi/Common/tr/image/2022/11/701c6c00d5214fb787fd6730b9d11ea5.jpg&quot;);">
                                        <!---->
                                        <div class="content-wrapper">
                                          <div class="slider-info">
                                            <div class="slider-text">
                                              <span class="banner-title ng-star-inserted">Şanslı Sayılardan</span>
                                              <!---->
                                              <span class="banner-description ng-star-inserted">28 Gün Nakit Ödül</span>
                                              <!---->
                                            </div>
                                            <div class="buttons-holder">
                                              <a class="btn btn-icon-before btn-icon-play btn-sm btn-success ng-star-inserted" href="https://bonus.casinomaxi564.com/tr/sansli-sayilardan-28-gun-nakit-odul">Bilgi Al</a>
                                              <!---->
                                              <!---->
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="swiper-container ng-star-inserted">
                                      <div class="swiper-slide" style="background-image: url(&quot;https://cdnroute.bpsgameserver.com/bgr/CasinoMaxi/Common/tr/image/2022/11/53e68a39abec49dab9b2ca0b2202466a.jpg&quot;);">
                                        <!---->
                                        <div class="content-wrapper">
                                          <div class="slider-info">
                                            <div class="slider-text">
                                              <span class="banner-title ng-star-inserted">Kışa Kazançlarla Başla</span>
                                              <!---->
                                              <span class="banner-description ng-star-inserted">Evolution masalarında kışa özel çekiliş seni bekliyor.</span>
                                              <!---->
                                            </div>
                                            <div class="buttons-holder">
                                              <a class="btn btn-icon-before btn-icon-play btn-sm btn-success ng-star-inserted" href="https://cmax.io/bns/canli-casinoda-kis-odulleri">Bilgi Al</a>
                                              <!---->
                                              <!---->
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!---->
                                  </div>
                                </div>
                                <!---->
                              </section>
                            </obg-swiper>
                          </div>
                        </div>
                        <!---->
                      </banner-tile>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoMonopolyBigBaller">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/monopoly-big-baller/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Monopoly Big Baller" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/08/game.evoMonopolyBigBaller.thumbnail.344x220_v3.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <game-ribbon class="ng-star-inserted">
                                <!---->
                              </game-ribbon>
                              <!---->
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺2 - ₺160.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Monopoly Big Baller">Monopoly Big Baller</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Inga">Inga</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveTheGreatestCardsShow">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/the-greatest-cards-show/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="The Greatest Cards Show Live" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.playtechLiveTheGreatestCardsShow.thumbnail.344x220_v3.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺1 - ₺1.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="The Greatest Cards Show Live">The Greatest Cards Show Live</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Nathan">Nathan</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveAdventuresBeyondWonderlandWalterspins">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/adventures-beyond-wonderland-walterspins/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Adventures Beyond Wonderland Walterspins" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.playtechLiveAdventuresBeyondWonderlandWalterspins.thumbnail.344x220_v3.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <roulette-results class="ng-star-inserted">
                                  <div class="roulette-results">
                                    <div class="roulette-stripe">
                                      <div class="roulette-number black ng-star-inserted" style=""> 2 </div>
                                      <div class="roulette-number red ng-star-inserted" style=""> 1 </div>
                                      <div class="roulette-number black ng-star-inserted" style=""> 2 </div>
                                      <div class="roulette-number black ng-star-inserted" style=""> 2 </div>
                                      <div class="roulette-number red ng-star-inserted" style=""> 5 </div>
                                      <div class="roulette-number red ng-star-inserted"> 1 </div>
                                      <div class="roulette-number black ng-star-inserted" style=""> 2 </div>
                                      <div class="roulette-number black ng-star-inserted"> 2 </div>
                                      <div class="roulette-number red ng-star-inserted"> 1 </div>
                                      <div class="roulette-number red ng-star-inserted"> 1 </div>
                                      <!---->
                                    </div>
                                  </div>
                                </roulette-results>
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺1 - ₺100.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Adventures Beyond Wonderland Walterspins Live">Adventures Beyond Wonderland Walterspins Live</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Denver">Denver</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoDeadorAliveSaloon">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/dead-or-alive-saloon/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Dead or Alive Saloon" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.evoDeadorAliveSaloon.thumbnail.344x220_v3.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺2 - ₺40.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Dead or Alive Saloon">Dead or Alive Saloon</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Eva">Eva</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="reevoLiveBetonPoker">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/betonpokerrev/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Bet on Poker" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoLiveBetonPoker.thumbnail.344x220.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
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
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info full-width" title="Bet On Poker">Bet On Poker</div>
                                  <!---->
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="reevoLiveWarofBets">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/warofbetsrev/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="War of Bets" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.reevoLiveWarofBets.thumbnail.344x220.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
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
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info full-width" title="War Of Bets">War Of Bets</div>
                                  <!---->
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="pragmaticPlayPowerUpRoulette">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/powerup-roulette/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="PowerUp Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/09/game.pragmaticPlayPowerUpRoulette.thumbnail.344x220_v3.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <roulette-results class="ng-star-inserted">
                                  <div class="roulette-results">
                                    <div class="roulette-stripe">
                                      <div class="roulette-number red ng-star-inserted" style=""> 9 </div>
                                      <div class="roulette-number red ng-star-inserted" style=""> 32 </div>
                                      <div class="roulette-number black ng-star-inserted" style=""> 8 </div>
                                      <div class="roulette-number black ng-star-inserted" style=""> 15 </div>
                                      <div class="roulette-number black ng-star-inserted" style=""> 35 </div>
                                      <div class="roulette-number red ng-star-inserted"> 27 </div>
                                      <!---->
                                    </div>
                                  </div>
                                </roulette-results>
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺1 - ₺50.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="PowerUp Roulette">PowerUp Roulette</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Rogan">Rogan</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveEverybodysJackpotLive">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/everybodys-jackpot-live/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Everybody's Jackpot Live" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/07/game.playtechLiveEverybodysJackpotLive.thumbnail.344x220_v3.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺1 - ₺200</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Everybody's Jackpot Live">Everybody's Jackpot Live</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Hadrian">Hadrian</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoFootballStudioDice">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/football-studio-dice/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Football Studio Dice" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.evoFootballStudioDice.thumbnail.344x220_v3.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺10 - ₺200.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Football Studio Dice">Football Studio Dice</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Devin">Devin</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoGoldBarRoulette">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/gold-bar-roulette/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Gold Bar Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.evoGoldBarRoulette.thumbnail.344x220_v6.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <roulette-results class="ng-star-inserted">
                                  <div class="roulette-results">
                                    <div class="roulette-stripe">
                                      <div class="roulette-number red ng-star-inserted"> 34 </div>
                                      <div class="roulette-number black ng-star-inserted"> 31 </div>
                                      <div class="roulette-number black ng-star-inserted"> 31 </div>
                                      <div class="roulette-number red ng-star-inserted"> 19 </div>
                                      <div class="roulette-number black ng-star-inserted"> 33 </div>
                                      <div class="roulette-number red ng-star-inserted"> 27 </div>
                                      <div class="roulette-number black ng-star-inserted"> 29 </div>
                                      <div class="roulette-number red ng-star-inserted"> 32 </div>
                                      <div class="roulette-number red ng-star-inserted"> 18 </div>
                                      <div class="roulette-number black ng-star-inserted"> 10 </div>
                                      <!---->
                                    </div>
                                  </div>
                                </roulette-results>
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺4 - ₺400.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Gold Bar Roulette">Gold Bar Roulette</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Tom">Tom</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="religaBlazeRoulette">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/blazerouletereliga/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Blaze Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/07/game.religaBlazeRoulette.thumbnail.344x220.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <roulette-results class="ng-star-inserted">
                                  <div class="roulette-results">
                                    <div class="roulette-stripe">
                                      <div class="roulette-number red ng-star-inserted" style=""> 1 </div>
                                      <div class="roulette-number black ng-star-inserted" style=""> 31 </div>
                                      <div class="roulette-number red ng-star-inserted" style=""> 1 </div>
                                      <div class="roulette-number red ng-star-inserted"> 16 </div>
                                      <div class="roulette-number red ng-star-inserted" style=""> 1 </div>
                                      <div class="roulette-number red ng-star-inserted" style=""> 34 </div>
                                      <div class="roulette-number black ng-star-inserted"> 35 </div>
                                      <div class="roulette-number red ng-star-inserted"> 7 </div>
                                      <div class="roulette-number black ng-star-inserted"> 8 </div>
                                      <div class="roulette-number red ng-star-inserted"> 3 </div>
                                      <div class="roulette-number black ng-star-inserted" style=""> 31 </div>
                                      <div class="roulette-number black ng-star-inserted"> 6 </div>
                                      <div class="roulette-number red ng-star-inserted"> 19 </div>
                                      <!---->
                                    </div>
                                  </div>
                                </roulette-results>
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺1 - ₺130.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Blaze Roulette">Blaze Roulette</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Carol">Carol</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="pragmaticPlayBoomCity">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/boom-city/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Boom City" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/07/game.pragmaticPlayBoomCity.thumbnail.344x220_v3.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <game-ribbon class="ng-star-inserted">
                                <!---->
                              </game-ribbon>
                              <!---->
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺1 - ₺30.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Boom City">Boom City</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Riki">Riki</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoFootballRoulette">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/evolution-football-roulette/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Football Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.evoFootballRoulette.thumbnail.344x220.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <roulette-results class="ng-star-inserted">
                                  <div class="roulette-results">
                                    <div class="roulette-stripe">
                                      <div class="roulette-number black ng-star-inserted"> 13 </div>
                                      <div class="roulette-number black ng-star-inserted"> 24 </div>
                                      <div class="roulette-number black ng-star-inserted"> 35 </div>
                                      <div class="roulette-number red ng-star-inserted"> 36 </div>
                                      <div class="roulette-number black ng-star-inserted"> 24 </div>
                                      <div class="roulette-number red ng-star-inserted"> 32 </div>
                                      <div class="roulette-number red ng-star-inserted"> 9 </div>
                                      <div class="roulette-number black ng-star-inserted"> 2 </div>
                                      <div class="roulette-number red ng-star-inserted"> 30 </div>
                                      <div class="roulette-number black ng-star-inserted"> 33 </div>
                                      <!---->
                                    </div>
                                  </div>
                                </roulette-results>
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺10 - ₺400.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Football Roulette">Football Roulette</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Kriss">Kriss</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="religaVIPRoulette">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/viproulettelivereliga/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="VIP Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/07/game.religaVIPRoulette.thumbnail.344x220.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <roulette-results class="ng-star-inserted">
                                  <div class="roulette-results">
                                    <div class="roulette-stripe">
                                      <div class="roulette-number red ng-star-inserted" style=""> 12 </div>
                                      <div class="roulette-number black ng-star-inserted" style=""> 29 </div>
                                      <div class="roulette-number black ng-star-inserted" style=""> 33 </div>
                                      <div class="roulette-number red ng-star-inserted" style=""> 12 </div>
                                      <div class="roulette-number red ng-star-inserted" style=""> 27 </div>
                                      <div class="roulette-number black ng-star-inserted" style=""> 22 </div>
                                      <div class="roulette-number black ng-star-inserted"> 6 </div>
                                      <div class="roulette-number red ng-star-inserted"> 3 </div>
                                      <div class="roulette-number red ng-star-inserted"> 9 </div>
                                      <div class="roulette-number black ng-star-inserted"> 2 </div>
                                      <div class="roulette-number black ng-star-inserted"> 4 </div>
                                      <div class="roulette-number red ng-star-inserted"> 19 </div>
                                      <div class="roulette-number red ng-star-inserted"> 3 </div>
                                      <!---->
                                    </div>
                                  </div>
                                </roulette-results>
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺1 - ₺250.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="VIP Roulette">VIP Roulette</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Mayka ">Mayka </div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="religaRealCasinoRoulette">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/realcasinoroulettereliga/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Real Casino Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/07/game.religaRealCasinoRoulette.thumbnail.344x220.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <roulette-results class="ng-star-inserted">
                                  <div class="roulette-results">
                                    <div class="roulette-stripe">
                                      <div class="roulette-number red ng-star-inserted" style=""> 36 </div>
                                      <div class="roulette-number red ng-star-inserted" style=""> 19 </div>
                                      <div class="roulette-number red ng-star-inserted" style=""> 12 </div>
                                      <div class="roulette-number black ng-star-inserted" style=""> 28 </div>
                                      <div class="roulette-number red ng-star-inserted" style=""> 23 </div>
                                      <div class="roulette-number black ng-star-inserted"> 4 </div>
                                      <div class="roulette-number red ng-star-inserted"> 32 </div>
                                      <div class="roulette-number red ng-star-inserted"> 7 </div>
                                      <div class="roulette-number black ng-star-inserted"> 11 </div>
                                      <div class="roulette-number black ng-star-inserted"> 22 </div>
                                      <div class="roulette-number black ng-star-inserted"> 17 </div>
                                      <div class="roulette-number black ng-star-inserted"> 11 </div>
                                      <div class="roulette-number black ng-star-inserted"> 8 </div>
                                      <!---->
                                    </div>
                                  </div>
                                </roulette-results>
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺1 - ₺130.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Real Casino Roulette">Real Casino Roulette</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Carol">Carol</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoExclusiveFreeBetBlackjack">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/exclusive-free-bet-blackjack/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Exclusive Free Bet Blackjack" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.evoExclusiveFreeBetBlackjack.thumbnail.344x220_v4.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺250 - ₺50.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Exclusive Free Bet Blackjack">Exclusive Free Bet Blackjack</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Dane">Dane</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoXtremeLightningRoulette">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/xxxtreme-lightning-roulette/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="XXXtreme Lightning Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.evoXtremeLightningRoulette.thumbnail.344x220_v5.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <roulette-results class="ng-star-inserted">
                                  <div class="roulette-results">
                                    <div class="roulette-stripe">
                                      <div class="roulette-number red ng-star-inserted"> 23 </div>
                                      <div class="roulette-number red ng-star-inserted"> 36 </div>
                                      <div class="roulette-number black ng-star-inserted"> 2 </div>
                                      <div class="roulette-number black ng-star-inserted"> 4 </div>
                                      <div class="roulette-number red ng-star-inserted"> 25 </div>
                                      <div class="roulette-number black ng-star-inserted"> 4 </div>
                                      <div class="roulette-number red ng-star-inserted"> 27 </div>
                                      <div class="roulette-number black ng-star-inserted"> 31 </div>
                                      <div class="roulette-number black ng-star-inserted"> 35 </div>
                                      <div class="roulette-number black ng-star-inserted"> 26 </div>
                                      <!---->
                                    </div>
                                  </div>
                                </roulette-results>
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <game-ribbon class="ng-star-inserted">
                                <!---->
                              </game-ribbon>
                              <!---->
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺4 - ₺200.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="XXXtreme Lightning Roulette">XXXtreme Lightning Roulette</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Kalvis">Kalvis</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="religaLumiaAutoRoulette">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/lumiaautoroulettelive/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Lumia Auto Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/07/game.religaLumiaAutoRoulette.thumbnail.344x220.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <roulette-results class="ng-star-inserted">
                                  <div class="roulette-results">
                                    <div class="roulette-stripe">
                                      <div class="roulette-number black ng-star-inserted" style=""> 22 </div>
                                      <div class="roulette-number red ng-star-inserted" style=""> 36 </div>
                                      <div class="roulette-number black ng-star-inserted" style=""> 17 </div>
                                      <div class="roulette-number red ng-star-inserted"> 23 </div>
                                      <div class="roulette-number black ng-star-inserted" style=""> 33 </div>
                                      <div class="roulette-number black ng-star-inserted"> 24 </div>
                                      <div class="roulette-number black ng-star-inserted"> 4 </div>
                                      <div class="roulette-number red ng-star-inserted"> 5 </div>
                                      <div class="roulette-number red ng-star-inserted"> 21 </div>
                                      <div class="roulette-number red ng-star-inserted"> 19 </div>
                                      <div class="roulette-number black ng-star-inserted"> 10 </div>
                                      <div class="roulette-number black ng-star-inserted"> 29 </div>
                                      <div class="roulette-number black ng-star-inserted"> 10 </div>
                                      <!---->
                                    </div>
                                  </div>
                                </roulette-results>
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺1 - ₺130.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info full-width" title="Lumia Auto Roulette">Lumia Auto Roulette</div>
                                  <!---->
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoCrazyCoinFlip">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/crazy-coin-flip/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Crazy Coin Flip" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/06/game.evoCrazyCoinFlip.thumbnail.344x220_v4.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺2 - ₺120.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Crazy Coin Flip">Crazy Coin Flip</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Anastasija">Anastasija</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveTurkishMegaFireBlazeRoulette">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/turkish-mega-fire-blaze-roulette/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Türkçe Mega Fire Blaze Rulet" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/01/game.playtechLiveTurkishMegaFireBlazeRoulette.thumbnail.344x220_v4.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <game-ribbon class="ng-star-inserted">
                                <!---->
                              </game-ribbon>
                              <!---->
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺2 - ₺50.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Türkçe Mega Fire Blaze Rulet">Türkçe Mega Fire Blaze Rulet</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Beyza">Beyza</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="religaGoldenBaccarat">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/goldenbaccaratlive/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Golden Baccarat" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/07/game.religaGoldenBaccarat.thumbnail.344x220.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
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
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info full-width" title="Golden Baccarat">Golden Baccarat</div>
                                  <!---->
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="religaGoldenSuper6">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/goldensuper6live/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Golden Super 6" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/07/game.religaGoldenSuper6.thumbnail.344x220.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
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
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info full-width" title="Golden Super 6">Golden Super 6</div>
                                  <!---->
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="religaReligaLobby">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/religalobbylive/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Religa Lobby" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/07/game.religaReligaLobby.thumbnail.344x220.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
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
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info full-width" title="Religa Lobby">Religa Lobby</div>
                                  <!---->
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="pragmaticPlaySweetBonanzaCandyLand">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/sweet-bonanza-candyland/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Sweet Bonanza CandyLand" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlaySweetBonanzaCandyLand.thumbnail.344x220_v5.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺2 - ₺30.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Sweet Bonanza CandyLand">Sweet Bonanza CandyLand</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Elizza">Elizza</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoBlackjackLobby">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/live-blackjack-lobby-evolution/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoblackjacklobby.thumbnail.344x220.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
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
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info full-width" title="Live Blackjack Lobby Evolution">Live Blackjack Lobby Evolution</div>
                                  <!---->
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoRouletteLobby">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/live-roulette-lobby-evolution/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoRouletteLobby.thumbnail.344x220.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <!---->
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info full-width" title="Canlı Roulette Lobby">Canlı Roulette Lobby</div>
                                  <!---->
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoTurkishLightningRoulette">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/turkce-lightning-rulet/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="T�rk�e Lightning Rulet" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.evoTurkishLightningRoulette.thumbnail.344x220_v3.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <roulette-results class="ng-star-inserted">
                                  <div class="roulette-results">
                                    <div class="roulette-stripe">
                                      <div class="roulette-number red ng-star-inserted"> 9 </div>
                                      <div class="roulette-number black ng-star-inserted"> 17 </div>
                                      <div class="roulette-number red ng-star-inserted"> 5 </div>
                                      <div class="roulette-number red ng-star-inserted"> 32 </div>
                                      <div class="roulette-number black ng-star-inserted"> 35 </div>
                                      <div class="roulette-number red ng-star-inserted"> 21 </div>
                                      <div class="roulette-number black ng-star-inserted"> 2 </div>
                                      <div class="roulette-number black ng-star-inserted"> 33 </div>
                                      <div class="roulette-number red ng-star-inserted"> 36 </div>
                                      <div class="roulette-number black ng-star-inserted"> 24 </div>
                                      <!---->
                                    </div>
                                  </div>
                                </roulette-results>
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺1 - ₺200.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Türkçe Lightning Rulet">Türkçe Lightning Rulet</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Tuncay">Tuncay</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="pragmaticPlaySuper8Baccarat">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/super-8-baccarat/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Super 8 Baccarat" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlaySuper8Baccarat.thumbnail.344x220_v3.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <game-ribbon class="ng-star-inserted">
                                <!---->
                              </game-ribbon>
                              <!---->
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺2 - ₺50.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Super 8 Baccarat">Super 8 Baccarat</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Ellsa">Ellsa</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoTurkishRouletteTable">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/turkish-roulette-table/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoTurkishRouletteTable.thumbnail.344x220.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <roulette-results class="ng-star-inserted">
                                  <div class="roulette-results">
                                    <div class="roulette-stripe">
                                      <div class="roulette-number red ng-star-inserted"> 16 </div>
                                      <div class="roulette-number red ng-star-inserted"> 32 </div>
                                      <div class="roulette-number red ng-star-inserted"> 34 </div>
                                      <div class="roulette-number black ng-star-inserted"> 8 </div>
                                      <div class="roulette-number red ng-star-inserted"> 16 </div>
                                      <div class="roulette-number black ng-star-inserted"> 4 </div>
                                      <div class="roulette-number red ng-star-inserted"> 23 </div>
                                      <div class="roulette-number black ng-star-inserted"> 24 </div>
                                      <div class="roulette-number black ng-star-inserted"> 17 </div>
                                      <div class="roulette-number black ng-star-inserted"> 4 </div>
                                      <!---->
                                    </div>
                                  </div>
                                </roulette-results>
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <game-ribbon class="ng-star-inserted">
                                <!---->
                              </game-ribbon>
                              <!---->
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺1 - ₺40.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Türkçe Canlı Rulet">Türkçe Canlı Rulet</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Ruya">Ruya</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="pragmaticPlayRouletteTurkey">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/roulette-turkey/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Roulette Turkey" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/06/game.pragmaticPlayRouletteTurkey.thumbnail.344x220_v4.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <roulette-results class="ng-star-inserted">
                                  <div class="roulette-results">
                                    <div class="roulette-stripe">
                                      <div class="roulette-number red ng-star-inserted" style=""> 18 </div>
                                      <div class="roulette-number red ng-star-inserted" style=""> 36 </div>
                                      <div class="roulette-number red ng-star-inserted" style=""> 30 </div>
                                      <div class="roulette-number green ng-star-inserted" style=""> 0 </div>
                                      <div class="roulette-number black ng-star-inserted" style=""> 24 </div>
                                      <div class="roulette-number black ng-star-inserted" style=""> 6 </div>
                                      <!---->
                                    </div>
                                  </div>
                                </roulette-results>
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <game-ribbon class="ng-star-inserted">
                                <!---->
                              </game-ribbon>
                              <!---->
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺1 - ₺50.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Roulette  Turkish 6">Roulette Turkish 6</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Posty">Posty</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoCrazyTimeTable">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/crazy-time/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Crazy Time" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.evoCrazyTimeTable.thumbnail.344x220_v4.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <roulette-results class="ng-star-inserted">
                                  <div class="roulette-results">
                                    <div class="roulette-stripe">
                                      <div class="roulette-number black ng-star-inserted"> 2 </div>
                                      <div class="roulette-number red ng-star-inserted"> 5 </div>
                                      <div class="roulette-number black ng-star-inserted"> 2 </div>
                                      <div class="roulette-number red ng-star-inserted"> 1 </div>
                                      <div class="roulette-number green ng-star-inserted"> fl_r </div>
                                      <div class="roulette-number black ng-star-inserted"> 2 </div>
                                      <div class="roulette-number red ng-star-inserted"> 1 </div>
                                      <div class="roulette-number red ng-star-inserted"> 1 </div>
                                      <div class="roulette-number black ng-star-inserted"> 10 </div>
                                      <div class="roulette-number red ng-star-inserted"> 5 </div>
                                      <!---->
                                    </div>
                                  </div>
                                </roulette-results>
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <game-ribbon class="ng-star-inserted">
                                <!---->
                              </game-ribbon>
                              <!---->
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺2 - ₺100.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Crazy Time">Crazy Time</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Emily">Emily</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoPeekBaccarat">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/peek-baccarat/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Peek Baccarat" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.evoPeekBaccarat.thumbnail.344x220_v4.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺20 - ₺500.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Peek Baccarat">Peek Baccarat</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Alisa">Alisa</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoBacBo">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/bac-bo/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Bac Bo" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.evoBacBo.thumbnail.344x220.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <game-ribbon class="ng-star-inserted">
                                <!---->
                              </game-ribbon>
                              <!---->
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺20 - ₺500.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Bac Bo">Bac Bo</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Simona">Simona</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoLightningBlackjackTable">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/lightning-blackjack/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Lightning Blackjack" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.evoLightningBlackjackTable.thumbnail.344x220.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <game-ribbon class="ng-star-inserted">
                                <!---->
                              </game-ribbon>
                              <!---->
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺20 - ₺200.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Lightning Blackjack">Lightning Blackjack</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Corazon">Corazon</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveQuantumBlackjack">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/live-quantum-blackjack-plus/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Live Quantum Blackjack Plus" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/09/game.playtechLiveQuantumBlackjack.thumbnail.344x220_v4.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <game-ribbon class="ng-star-inserted">
                                <!---->
                              </game-ribbon>
                              <!---->
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺10 - ₺50.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Live Quantum Blackjack Plus">Live Quantum Blackjack Plus</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Dylan">Dylan</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoFanTanTable">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/fan-tan/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Fan Tan" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.evoFanTanTable.thumbnail.344x220_v4.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <roulette-results class="ng-star-inserted">
                                  <div class="roulette-results">
                                    <div class="roulette-stripe">
                                      <div class="roulette-number red ng-star-inserted"> 3 </div>
                                      <div class="roulette-number red ng-star-inserted"> 3 </div>
                                      <div class="roulette-number red ng-star-inserted"> 3 </div>
                                      <div class="roulette-number red ng-star-inserted"> 3 </div>
                                      <div class="roulette-number red ng-star-inserted"> 1 </div>
                                      <div class="roulette-number red ng-star-inserted"> 1 </div>
                                      <div class="roulette-number red ng-star-inserted"> 1 </div>
                                      <div class="roulette-number black ng-star-inserted"> 4 </div>
                                      <div class="roulette-number black ng-star-inserted"> 2 </div>
                                      <div class="roulette-number red ng-star-inserted"> 1 </div>
                                      <div class="roulette-number red ng-star-inserted"> 1 </div>
                                      <div class="roulette-number black ng-star-inserted"> 2 </div>
                                      <div class="roulette-number black ng-star-inserted"> 4 </div>
                                      <div class="roulette-number red ng-star-inserted"> 1 </div>
                                      <div class="roulette-number red ng-star-inserted"> 1 </div>
                                      <div class="roulette-number red ng-star-inserted"> 3 </div>
                                      <!---->
                                    </div>
                                  </div>
                                </roulette-results>
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <game-ribbon class="ng-star-inserted">
                                <!---->
                              </game-ribbon>
                              <!---->
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺4 - ₺200.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Fan Tan">Fan Tan</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Nelly">Nelly</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoGoldenWealthBaccaratTable">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/golden-wealth-baccarat/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Golden Wealth Baccarat" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.evoGoldenWealthBaccaratTable.thumbnail.344x220_v5.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺20 - ₺100.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Golden Wealth Baccarat">Golden Wealth Baccarat</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Diāna">Diāna</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoCashorCrashTable">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/cash-or-crash/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Cash or Crash" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.evoCashorCrashTable.thumbnail.344x220_v4.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <game-ribbon class="ng-star-inserted">
                                <!---->
                              </game-ribbon>
                              <!---->
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺4 - ₺200.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Cash or Crash">Cash or Crash</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Arianna">Arianna</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveBetOnDragonTiger">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/bet-on-dragon-tiger/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Bet On Dragon Tiger" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/08/game.playtechLiveBetOnDragonTiger.thumbnail.344x220_v3.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <game-ribbon class="ng-star-inserted">
                                <!---->
                              </game-ribbon>
                              <!---->
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺5 - ₺150.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Bet On Dragon Tiger">Bet On Dragon Tiger</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Emmaline">Emmaline</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoTurkceTopCardTable">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/futbol-arena/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Futbol Arena" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.evoTurkceTopCardTable.thumbnail.344x220.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
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
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">
                                    <!---->
                                    <!---->
                                    <span class="ribbon bet-limit ng-star-inserted">₺10 - ₺200.000</span>
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Futbol Arena">Futbol Arena</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Mustafa">Mustafa</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveMegaFireBlazeRoulette">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/live-mega-fire-blaze-roulette/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">
                                  <i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Mega Fire Blaze Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/05/game.playtechLiveMegaFireBlazeRoulette.thumbnail.344x220_v4.jpg">
                                <!---->
                                <game-provider-logo class="ng-star-inserted">
                                  <!---->
                                </game-provider-logo>
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <game-ribbon class="ng-star-inserted">
                                <!---->
                              </game-ribbon>
                              <!---->
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">
                                <div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">
                                  <div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺2 - ₺50.000</span>undefined
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>
                                <!---->
                                <div class="live-casino-info-container ng-star-inserted">
                                  <div test-id="game-name" class="live-casino-game-info" title="Mega Fire Blaze Roulette">Mega Fire Blaze Roulette</div>
                                  <div class="live-casino-dealer-info ng-star-inserted" title="Kandida">Kandida</div>
                                  <!---->
                                  <div class="icon-live-casino-dealer ng-star-inserted"></div>
                                  <!---->
                                </div>
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="pragmaticPlayMegaWheel">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">
                                <!---->
                                <input type="checkbox" class="favourite-checkbox" test-id="favourite-button">
                                <i class="fa heart fa-heart-o" title="Favorilere ekle"></i>
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/mega-wheel/" class="ng-star-inserted" style="">
                              <div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">
                                <div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>
                                </div>
                                <!---->
                                <img class="thumbnail-img img-radius ng-star-inserted" alt="Mega Wheel" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/02/game.pragmaticPlayMegaWheel.thumbnail.344x220_v5.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->
                              </div>
                              <div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined<roulette-results class="ng-star-inserted">undefined<div class="roulette-results">undefined<div class="roulette-stripe">undefined<div class="roulette-number red ng-star-inserted" style=""> 5 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 8 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 8 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 1 </div>undefined<div class="roulette-number red ng-star-inserted"> 1 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 5 </div>undefined
                                      <!---->undefined
                                    </div>undefined</div>undefined</roulette-results>undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->
                              </div>
                              <!---->
                              <game-ribbon class="ng-star-inserted">undefined
                                <!---->
                              </game-ribbon>
                              <!---->
                              <game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺1 - ₺10.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->
                              </game-ribbon>
                              <!---->
                              <section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Mega Wheel">Mega Wheel</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Carson">Carson</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->
                              </section>
                            </a>
                            <!---->
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="pragmaticPlayRouletteLobby">
                            <game-favourite class="ng-star-inserted" style="">
                              <div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>
                            </game-favourite>
                            <!---->
                            <a uisref="game" href="/tr/canli-casino/live-roulette-lobby-pragmatic-play/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Roulette Lobby" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/06/game.pragmaticPlayRouletteLobby.thumbnail.344x220_v3.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info full-width" title="Live Roulette Lobby Pragmatic Play">Live Roulette Lobby Pragmatic Play</div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->
                          </div>
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">
                        <obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">
                          <div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoLightningRouletteTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/lightning-roulette-table/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoLightningRouletteTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined<roulette-results class="ng-star-inserted">undefined<div class="roulette-results">undefined<div class="roulette-stripe">undefined<div class="roulette-number black ng-star-inserted"> 17 </div>undefined<div class="roulette-number red ng-star-inserted"> 34 </div>undefined<div class="roulette-number red ng-star-inserted"> 23 </div>undefined<div class="roulette-number red ng-star-inserted"> 18 </div>undefined<div class="roulette-number black ng-star-inserted"> 26 </div>undefined<div class="roulette-number red ng-star-inserted"> 34 </div>undefined<div class="roulette-number black ng-star-inserted"> 35 </div>undefined<div class="roulette-number red ng-star-inserted"> 25 </div>undefined<div class="roulette-number red ng-star-inserted"> 34 </div>undefined<div class="roulette-number red ng-star-inserted"> 21 </div>undefined
                                      <!---->undefined
                                    </div>undefined</div>undefined</roulette-results>undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺4 - ₺200.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Lightning Rulet">Lightning Rulet</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Benjamin">Benjamin</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined
                        </obg-casino-game-thumbnail>
                      </div>
                      <div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="pragmaticPlayBlackjackLobby">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/live-blackjack-lobby-pragmatic-play/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Blackjack Lobby" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/05/game.pragmaticPlayBlackjackLobby.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info full-width" title="Live Blackjack Lobby Pragmatic Play">Live Blackjack Lobby Pragmatic Play</div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveBetOnBaccarat">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/bet-on-baccarat-playtech/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Bet On Baccarat" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/06/game.playtechLiveBetOnBaccarat.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺5 - ₺200.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Bet On Baccarat">Bet On Baccarat</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Kasey">Kasey</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="pragmaticPlayONEBlackjack">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/one-blackjack/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="ONE Blackjack" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlayONEBlackjack.thumbnail.344x220_v4.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺50.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="ONE Blackjack">ONE Blackjack</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Juliana">Juliana</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoTurkishBlackjack1Table">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/turkce-blackjack-1/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Türkçe Blackjack 1" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.evoTurkishBlackjack1Table.thumbnail.344x220_v4.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined<game-table-seats class="ng-star-inserted">undefined
                                  <!---->undefined<p class="table-full ng-star-inserted">Masa Dolu. Oyuncu Eline Bahis Yap!</p>undefined
                                  <!---->undefined
                                </game-table-seats>undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺50 - ₺100.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Türkçe Blackjack 1">Türkçe Blackjack 1</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Alp">Alp</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveSportsAllBetsBlackjack">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/sports-all-bets-blackjack/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Sports All Bets Blackjack" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/11/game.playtechLiveSportsAllBetsBlackjack.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺25.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Sports All Bets Blackjack">Sports All Bets Blackjack</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Xavier">Xavier</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="pragmaticPlayBaccaratA">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/baccarat-1-prag/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Baccarat A" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlayBaccaratA.thumbnail.344x220_v4.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺2 - ₺50.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Baccarat 1">Baccarat 1</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Ania">Ania</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="pragmaticPlaySpeedRoulette">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/speed-roulette-prag/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Speed Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/06/game.pragmaticPlaySpeedRoulette.thumbnail.344x220_v3.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined<roulette-results class="ng-star-inserted">undefined<div class="roulette-results">undefined<div class="roulette-stripe">undefined<div class="roulette-number red ng-star-inserted"> 34 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 28 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 9 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 11 </div>undefined<div class="roulette-number black ng-star-inserted"> 24 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 16 </div>undefined
                                      <!---->undefined
                                    </div>undefined</div>undefined</roulette-results>undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺1 - ₺50.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Speed Roulette 1">Speed Roulette 1</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Tahlia">Tahlia</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveBetOnPoker">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/bet-on-poker-playtech/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Bet On Poker" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/06/game.playtechLiveBetOnPoker.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺5 - ₺50.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Bet On Poker">Bet On Poker</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Eiden">Eiden</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="pragmaticPlayAutoRoulette">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/auto-roulette-prag/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Auto Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/06/game.pragmaticPlayAutoRoulette.thumbnail.344x220_v3.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined<roulette-results class="ng-star-inserted">undefined<div class="roulette-results">undefined<div class="roulette-stripe">undefined<div class="roulette-number black ng-star-inserted" style=""> 22 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 6 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 16 </div>undefined<div class="roulette-number red ng-star-inserted"> 14 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 12 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 26 </div>undefined
                                      <!---->undefined
                                    </div>undefined</div>undefined</roulette-results>undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺1 - ₺50.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Auto Roulette 1">Auto Roulette 1</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Auto">Auto</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveAgeOftheGodsRoulette">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/age-of-the-gods-roulette-live/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Age of the Gods: Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/12/game.playtechLiveAgeOftheGodsRoulette.thumbnail.344x220_v3.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺100.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Age of the Gods Bonus Roulette">Age of the Gods Bonus Roulette</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Ramona">Ramona</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveRouletteLobby">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/live-roulette-lobby-playtech/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Roulette Lobby" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/05/game.playtechLiveRouletteLobby.thumbnail.344x220_v4.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info full-width" title="Live Roulette Lobby Playtech">Live Roulette Lobby Playtech</div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveBlackjackLobby">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/live-blackjack-lobby-playtech/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Blackjack Lobby" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/05/game.playtechLiveBlackjackLobby.thumbnail.344x220_v4.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info full-width" title="Live Blackjack Lobby Playtech">Live Blackjack Lobby Playtech</div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveSpinaWin">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/spin-a-win-live/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Spin A Win" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/11/game.playtechLiveSpinAWin.thumbnail.344x220_v3.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined<roulette-results class="ng-star-inserted">undefined<div class="roulette-results">undefined<div class="roulette-stripe">undefined<div class="roulette-number black ng-star-inserted" style=""> 20 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 1 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 2 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 2 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 1 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 1 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 2 </div>undefined<div class="roulette-number red ng-star-inserted"> 1 </div>undefined<div class="roulette-number black ng-star-inserted"> 2 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 20 </div>undefined
                                      <!---->undefined
                                    </div>undefined</div>undefined</roulette-results>undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺1 - ₺50.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Spin A Win">Spin A Win</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Nahla">Nahla</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoCrapsTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/craps-table/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Live Craps" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.evoCrapsTable.thumbnail.344x220_v4.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺100.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Live Craps">Live Craps</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Uldis">Uldis</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveTurkishRoulette">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/turkish-roulette-ptech/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Turkish Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/07/game.playtechLiveTurkishRoulette.thumbnail.344x220_v4.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined<roulette-results class="ng-star-inserted">undefined<div class="roulette-results">undefined<div class="roulette-stripe">undefined<div class="roulette-number red ng-star-inserted" style=""> 16 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 9 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 6 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 17 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 34 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 2 </div>undefined<div class="roulette-number black ng-star-inserted"> 26 </div>undefined<div class="roulette-number black ng-star-inserted"> 17 </div>undefined<div class="roulette-number black ng-star-inserted"> 28 </div>undefined<div class="roulette-number black ng-star-inserted"> 28 </div>undefined
                                      <!---->undefined
                                    </div>undefined</div>undefined</roulette-results>undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺5 - ₺100.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Turkish Roulette">Turkish Roulette</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Ebru">Ebru</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveAmericanRoulette">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/american-roulette-pl/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="American Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/09/game.playtechLiveAmericanRoulette.thumbnail.344x220_v3.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined<roulette-results class="ng-star-inserted">undefined<div class="roulette-results">undefined<div class="roulette-stripe">undefined<div class="roulette-number black ng-star-inserted" style=""> 31 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 6 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 1 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 32 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 23 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 19 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 36 </div>undefined<div class="roulette-number black ng-star-inserted"> 11 </div>undefined<div class="roulette-number black ng-star-inserted"> 20 </div>undefined<div class="roulette-number black ng-star-inserted"> 13 </div>undefined
                                      <!---->undefined
                                    </div>undefined</div>undefined</roulette-results>undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺2 - ₺100.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="American Roulette">American Roulette</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Akello">Akello</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveAllBetsBlackjack">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/all-bets-blackjack-live/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="All Bets Blackjack" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/09/game.playtechLiveAllBetsBlackjack.thumbnail.344x220_v3.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺25.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="All Bets Blackjack">All Bets Blackjack</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Niyah">Niyah</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoPowerBlackjackTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/power-blackjack/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Power Blackjack" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.evoPowerBlackjackTable.thumbnail.344x220_v3.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺20 - ₺100.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Power Blackjack">Power Blackjack</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Mihails">Mihails</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveSpeedRoulette">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/live-speed-roulette/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Speed Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/11/game.playtechLiveSpeedRoulette.thumbnail.344x220_v3.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined<roulette-results class="ng-star-inserted">undefined<div class="roulette-results">undefined<div class="roulette-stripe">undefined<div class="roulette-number red ng-star-inserted" style=""> 32 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 29 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 27 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 4 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 19 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 11 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 9 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 2 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 15 </div>undefined<div class="roulette-number red ng-star-inserted"> 12 </div>undefined
                                      <!---->undefined
                                    </div>undefined</div>undefined</roulette-results>undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺5 - ₺100.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Speed Roulette">Speed Roulette</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Francis">Francis</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveMajorityRulesSpeedBlackjack">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/majority-rules-speed-blackjack/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Majority Rules Speed Blackjack" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/11/game.playtechLiveMajorityRulesSpeedBlackjack.thumbnail.344x220_v3.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺100.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Majority Rules Speed Blackjack">Majority Rules Speed Blackjack</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Peter">Peter</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveBaccaratLobby">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/live-baccarat-lobby-playtech/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Baccarat Lobby" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2021/05/game.playtechLiveBaccaratLobby.thumbnail.344x220_v4.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined
                              <!---->undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info full-width" title="Live Baccarat Lobby Playtech">Live Baccarat Lobby Playtech</div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoMegaBallTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/mega-ball/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2020/04/game.evoMegaBallTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺2 - ₺2.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Mega Ball">Mega Ball</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Anastasija">Anastasija</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoInstantRouletteTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/instant-roulette/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Instant Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.evoInstantRouletteTable.thumbnail.344x220_v3.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺2 - ₺200.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Instant Roulette">Instant Roulette</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Auto">Auto</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveBuffaloBlitzLiveSlots">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/buffalo-blitz-live-slots/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Buffalo Blitz Live Slots" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/09/game.playtechLiveBuffaloBlitzLiveSlots.thumbnail.344x220_v3.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺4 - ₺20</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Buffalo Blitz Live Slots">Buffalo Blitz Live Slots</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Glorija">Glorija</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveRoulette">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/playtech-live-roulette/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Roulette" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/11/game.playtechLiveRoulette.thumbnail.344x220_v3.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined<roulette-results class="ng-star-inserted">undefined<div class="roulette-results">undefined<div class="roulette-stripe">undefined<div class="roulette-number red ng-star-inserted" style=""> 21 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 6 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 2 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 24 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 27 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 31 </div>undefined<div class="roulette-number black ng-star-inserted" style=""> 35 </div>undefined<div class="roulette-number black ng-star-inserted"> 29 </div>undefined<div class="roulette-number red ng-star-inserted"> 1 </div>undefined<div class="roulette-number red ng-star-inserted" style=""> 27 </div>undefined
                                      <!---->undefined
                                    </div>undefined</div>undefined</roulette-results>undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺5 - ₺100.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Roulette">Roulette</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Meilani">Meilani</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="playtechLiveGrandBaccarat">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/grand-baccarat-pl/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Grand Baccarat" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2020/09/game.playtechLiveGrandBaccarat.thumbnail.344x220_v3.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺5 - ₺150.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Grand Baccarat">Grand Baccarat</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Oceanna">Oceanna</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoLightningBaccarat">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/lightning-baccarat/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2020/01/game.evoLightningBaccarat.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-new ng-star-inserted">undefined
                                    <!---->undefined<span class="ribbon ng-star-inserted">yeni</span>undefined
                                    <!---->undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺20 - ₺40.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Lightning Baccarat">Lightning Baccarat</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Darja">Darja</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoDoubleHandCasinoHoldem">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/double-hand-casino-holdem/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2019/05/game.evoDoubleHandCasinoHoldem.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺60.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="2 Hand Casino Hold 'em">2 Hand Casino Hold 'em</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Maira">Maira</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoSuperSicBo">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/super-sic-bo/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2019/04/game.evoSuperSicBo.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺4 - ₺200.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Super Sic Bo">Super Sic Bo</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Andzelika">Andzelika</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoLightningDiceTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/evo-lightning-dice/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Lightning Dice Table" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/10/game.evoLightningDiceTable.thumbnail.344x220_v6.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺4 - ₺100.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info full-width" title="Lightning Dice">Lightning Dice</div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoSideBetCity">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/side-bet-city/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2019/06/game.evoSideBetCity.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺5.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Side Bet City">Side Bet City</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Karolina">Karolina</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoDragonTigerBaccaratTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/dragon-tiger-baccarat/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoDragonTigerBaccaratTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺300.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Dragon Tiger Baccarat">Dragon Tiger Baccarat</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Vasilisa">Vasilisa</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoDreamCatcherWheel">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/dream-catcher-wheel/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoDreamCatcherWheel.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined<roulette-results class="ng-star-inserted">undefined<div class="roulette-results">undefined<div class="roulette-stripe">undefined<div class="roulette-number black ng-star-inserted"> 2 </div>undefined<div class="roulette-number black ng-star-inserted"> 2 </div>undefined<div class="roulette-number green ng-star-inserted"> 0 </div>undefined<div class="roulette-number red ng-star-inserted"> 1 </div>undefined<div class="roulette-number red ng-star-inserted"> 1 </div>undefined<div class="roulette-number black ng-star-inserted"> 2 </div>undefined<div class="roulette-number black ng-star-inserted"> 2 </div>undefined<div class="roulette-number red ng-star-inserted"> 5 </div>undefined<div class="roulette-number red ng-star-inserted"> 1 </div>undefined<div class="roulette-number black ng-star-inserted"> 2 </div>undefined
                                      <!---->undefined
                                    </div>undefined</div>undefined</roulette-results>undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺2 - ₺100.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Dream Catcher">Dream Catcher</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Emy">Emy</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoBlackjackInfiniteTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/infinite-blackjack/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2019/01/game.evoBlackjackInfiniteTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺20 - ₺50.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Infinite Blackjack">Infinite Blackjack</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Liva">Liva</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoTripleCardPokerTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/3-kart-poker/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2019/07/game.evoTripleCardPokerTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺100.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Three Card Poker">Three Card Poker</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Russell">Russell</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoTopcardTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/football-studio/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoTopcardTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺200.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Football Studio">Football Studio</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="William">William</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoRouletteTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/live-roulette-table/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoRouletteTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined<roulette-results class="ng-star-inserted">undefined<div class="roulette-results">undefined<div class="roulette-stripe">undefined<div class="roulette-number black ng-star-inserted"> 15 </div>undefined<div class="roulette-number black ng-star-inserted"> 22 </div>undefined<div class="roulette-number red ng-star-inserted"> 16 </div>undefined<div class="roulette-number black ng-star-inserted"> 20 </div>undefined<div class="roulette-number black ng-star-inserted"> 17 </div>undefined<div class="roulette-number red ng-star-inserted"> 19 </div>undefined<div class="roulette-number black ng-star-inserted"> 20 </div>undefined<div class="roulette-number black ng-star-inserted"> 10 </div>undefined<div class="roulette-number black ng-star-inserted"> 29 </div>undefined<div class="roulette-number red ng-star-inserted"> 5 </div>undefined
                                      <!---->undefined
                                    </div>undefined</div>undefined</roulette-results>undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺80.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Canlı Roulette">Canlı Roulette</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Anna">Anna</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoCasinoHoldemTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" class="jackpot-active ng-star-inserted" href="/tr/canli-casino/live-casino-holdem-table/" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoCasinoHoldemTable.thumbnail.344x220_v3.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺20.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Canlı Casino Hold'em">Canlı Casino Hold'em</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Janis">Janis</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="LiveBaccarat">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/live-baccarat/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.LiveBaccarat.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺300.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Evolution Bakara Lobisi">Evolution Bakara Lobisi</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Anina">Anina</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoImmersiveRouletteTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/immersive-roulette/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoImmersiveRouletteTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined<roulette-results class="ng-star-inserted">undefined<div class="roulette-results">undefined<div class="roulette-stripe">undefined<div class="roulette-number red ng-star-inserted"> 9 </div>undefined<div class="roulette-number black ng-star-inserted"> 11 </div>undefined<div class="roulette-number black ng-star-inserted"> 33 </div>undefined<div class="roulette-number red ng-star-inserted"> 16 </div>undefined<div class="roulette-number red ng-star-inserted"> 9 </div>undefined<div class="roulette-number black ng-star-inserted"> 10 </div>undefined<div class="roulette-number green ng-star-inserted"> 0 </div>undefined<div class="roulette-number red ng-star-inserted"> 9 </div>undefined<div class="roulette-number red ng-star-inserted"> 30 </div>undefined<div class="roulette-number black ng-star-inserted"> 20 </div>undefined
                                      <!---->undefined
                                    </div>undefined</div>undefined</roulette-results>undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺80.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Canlı Immersive Roulette">Canlı Immersive Roulette</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Sofija">Sofija</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoSpeedRoulette">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/speed-roulette/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoSpeedRoulette.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined<roulette-results class="ng-star-inserted">undefined<div class="roulette-results">undefined<div class="roulette-stripe">undefined<div class="roulette-number red ng-star-inserted"> 1 </div>undefined<div class="roulette-number red ng-star-inserted"> 19 </div>undefined<div class="roulette-number red ng-star-inserted"> 1 </div>undefined<div class="roulette-number red ng-star-inserted"> 36 </div>undefined<div class="roulette-number red ng-star-inserted"> 12 </div>undefined<div class="roulette-number black ng-star-inserted"> 2 </div>undefined<div class="roulette-number black ng-star-inserted"> 2 </div>undefined<div class="roulette-number red ng-star-inserted"> 30 </div>undefined<div class="roulette-number black ng-star-inserted"> 26 </div>undefined<div class="roulette-number red ng-star-inserted"> 12 </div>undefined
                                      <!---->undefined
                                    </div>undefined</div>undefined</roulette-results>undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺80.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Speed Roulette">Speed Roulette</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Vilhelmas">Vilhelmas</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoSpeedBaccarat">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/speed-baccarat/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoSpeedBaccarat.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺300.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Speed Baccarat">Speed Baccarat</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Margarita">Margarita</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoExclusiveBlackjackVIP">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/exclusive-blackjack-vip/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoExclusiveBlackjackVIP.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined<game-table-seats class="ng-star-inserted">undefined<span class="ng-star-inserted">undefined<span class="icon-seat seat"></span>undefined<p>Boş Koltuk</p>undefined<p class="number-of-seats"> 5/7 </p>undefined</span>undefined
                                  <!---->undefined
                                  <!---->undefined
                                </game-table-seats>undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺500 - ₺100.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Exclusive Blackjack VIP">Exclusive Blackjack VIP</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Liubov">Liubov</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoTexasHoldemBonusTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/texas-holdem-bonus-table/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoTexasHoldemBonusTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺40.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Holdem Bonus Poker">Holdem Bonus Poker</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Emils">Emils</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoAmericanRouletteTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/american-roulette-table/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoAmericanRouletteTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined<roulette-results class="ng-star-inserted">undefined<div class="roulette-results">undefined<div class="roulette-stripe">undefined<div class="roulette-number black ng-star-inserted"> 22 </div>undefined<div class="roulette-number black ng-star-inserted"> 10 </div>undefined<div class="roulette-number green ng-star-inserted"> 0 </div>undefined<div class="roulette-number black ng-star-inserted"> 24 </div>undefined<div class="roulette-number red ng-star-inserted"> 14 </div>undefined<div class="roulette-number red ng-star-inserted"> 19 </div>undefined<div class="roulette-number red ng-star-inserted"> 34 </div>undefined<div class="roulette-number black ng-star-inserted"> 35 </div>undefined<div class="roulette-number red ng-star-inserted"> 3 </div>undefined<div class="roulette-number black ng-star-inserted"> 2 </div>undefined
                                      <!---->undefined
                                    </div>undefined</div>undefined</roulette-results>undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺4 - ₺200.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Canlı American Roulette">Canlı American Roulette</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Aleqsandre">Aleqsandre</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoVipRouletteTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/vip-live-roulette/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoVipRouletteTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined<roulette-results class="ng-star-inserted">undefined<div class="roulette-results">undefined<div class="roulette-stripe">undefined<div class="roulette-number black ng-star-inserted"> 17 </div>undefined<div class="roulette-number black ng-star-inserted"> 17 </div>undefined<div class="roulette-number black ng-star-inserted"> 35 </div>undefined<div class="roulette-number black ng-star-inserted"> 31 </div>undefined<div class="roulette-number black ng-star-inserted"> 13 </div>undefined<div class="roulette-number red ng-star-inserted"> 12 </div>undefined<div class="roulette-number red ng-star-inserted"> 3 </div>undefined<div class="roulette-number black ng-star-inserted"> 6 </div>undefined<div class="roulette-number red ng-star-inserted"> 1 </div>undefined<div class="roulette-number black ng-star-inserted"> 13 </div>undefined
                                      <!---->undefined
                                    </div>undefined</div>undefined</roulette-results>undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺20 - ₺160.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Canlı VIP Roulette">Canlı VIP Roulette</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Kyrylo">Kyrylo</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoCaribbeanStudPokerTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/caribbean-live-stud-poker-table/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoCaribbeanStudPokerTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺20.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Caribbean Stud Poker">Caribbean Stud Poker</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Eldar">Eldar</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoDiamondVipBlackjackTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/live-diamond-vip-blackjack/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoDiamondVipBlackjackTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined<game-table-seats class="ng-star-inserted">undefined<span class="ng-star-inserted">undefined<span class="icon-seat seat"></span>undefined<p>Boş Koltuk</p>undefined<p class="number-of-seats"> 4/7 </p>undefined</span>undefined
                                  <!---->undefined
                                  <!---->undefined
                                </game-table-seats>undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺20.000 - ₺300.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Blackjack Diamond VIP">Blackjack Diamond VIP</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Hanna">Hanna</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoUltimateTexasHoldEmTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/ultimate-texas-holdem-table/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoUltimateTexasHoldEmTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺10.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Ultimate Texas Hold'em">Ultimate Texas Hold'em</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Richards">Richards</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoBaccaratSqueezeTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/baccarat-squeeze-table/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoBaccaratSqueezeTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺20 - ₺300.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Bakara Squeeze">Bakara Squeeze</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Anastasija">Anastasija</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoDoubleBallRouletteTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/double-ball-roulette-table/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoDoubleBallRouletteTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺40.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Double Ball Roulette">Double Ball Roulette</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Michael">Michael</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoBlackJackPartyTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/black-jack-party-table/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoBlackJackPartyTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺10 - ₺2.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Blackjack Party">Blackjack Party</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Jolanta">Jolanta</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="evoAutoRouletteTable">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/live-autoroulette/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="undefined" src="https://cdnroute.bpsgameserver.com/common/Common/Common/tr/image/2018/09/game.evoAutoRouletteTable.thumbnail.344x220.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined<roulette-results class="ng-star-inserted">undefined<div class="roulette-results">undefined<div class="roulette-stripe">undefined<div class="roulette-number red ng-star-inserted"> 23 </div>undefined<div class="roulette-number red ng-star-inserted"> 12 </div>undefined<div class="roulette-number black ng-star-inserted"> 20 </div>undefined<div class="roulette-number black ng-star-inserted"> 11 </div>undefined<div class="roulette-number black ng-star-inserted"> 8 </div>undefined<div class="roulette-number black ng-star-inserted"> 6 </div>undefined<div class="roulette-number black ng-star-inserted"> 15 </div>undefined<div class="roulette-number black ng-star-inserted"> 28 </div>undefined<div class="roulette-number black ng-star-inserted"> 13 </div>undefined<div class="roulette-number black ng-star-inserted"> 2 </div>undefined
                                      <!---->undefined
                                    </div>undefined</div>undefined</roulette-results>undefined
                                <!---->undefined
                                <!---->undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined<game-ribbon class="ng-star-inserted">undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺1 - ₺40.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info" title="Oto Rulet">Oto Rulet</div>undefined<div class="live-casino-dealer-info ng-star-inserted" title="Auto">Auto</div>undefined
                                  <!---->undefined<div class="icon-live-casino-dealer ng-star-inserted"></div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined<div class="game-container ng-tns-c192-2 ng-trigger ng-trigger-thumbnailEnterLeave ng-star-inserted">undefined<obg-casino-game-thumbnail class="game-wrapper ng-tns-c192-2">undefined<div test-id="game-thumbnail" class="game-thumbnail live-casino" game-id="pragmaticPlayBlackjackAzureA">undefined<game-favourite class="ng-star-inserted" style="">undefined<div class="game-favourite">undefined
                                <!---->undefined<input type="checkbox" class="favourite-checkbox" test-id="favourite-button">undefined<i class="fa heart fa-heart-o" title="Favorilere ekle"></i>undefined
                              </div>undefined</game-favourite>undefined
                            <!---->undefined<a uisref="game" href="/tr/canli-casino/blackjack-azure-3/" class="ng-star-inserted" style="">undefined<div test-id="game-image" lazy-load-images="" class="game-image game-image-radius">undefined<div test-id="game-hover-wrapper" class="hover-wrapper">undefined<i test-id="play-button" class="fa fa-play"></i>undefined</div>undefined
                                <!---->undefined<img class="thumbnail-img img-radius ng-star-inserted" alt="Blackjack Azure A" src="https://cdnroute.bpsgameserver.com/common/Common/Common/neutral/image/2022/05/game.pragmaticPlayBlackjackAzureA.thumbnail.344x220_v4.jpg">undefined
                                <!---->undefined<game-provider-logo class="ng-star-inserted">undefined
                                  <!---->undefined
                                </game-provider-logo>undefined
                                <!---->undefined
                              </div>undefined<div test-id="live-casino-stripe-container" class="live-casino-stripe-container ng-star-inserted">undefined
                                <!---->undefined
                                <!---->undefined<game-table-seats class="ng-star-inserted">undefined
                                  <!---->undefined<p class="table-full ng-star-inserted">Masa Dolu. Oyuncu Eline Bahis Yap!</p>undefined
                                  <!---->undefined
                                </game-table-seats>undefined
                                <!---->undefined
                              </div>undefined
                              <!---->undefined
                              <!---->undefined<game-ribbon cssclass="game-bet-limit-ribbon bold" wrappercssclass="game-bet-limit-ribbon-wrapper" class="ng-star-inserted">undefined<div test-id="game-ribbon" class="game-ribbon-wrapper game-bet-limit-ribbon-wrapper ng-star-inserted">undefined<div class="game-ribbon game-bet-limit-ribbon bold ng-star-inserted" style="">undefined
                                    <!---->undefined
                                    <!---->undefined<span class="ribbon bet-limit ng-star-inserted">₺100 - ₺25.000</span>undefined
                                    <!---->undefined
                                  </div>undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </game-ribbon>undefined
                              <!---->undefined<section>undefined
                                <!---->undefined<div class="live-casino-info-container ng-star-inserted">undefined<div test-id="game-name" class="live-casino-game-info full-width" title="Blackjack Azure 3">Blackjack Azure 3</div>undefined
                                  <!---->undefined
                                  <!---->undefined
                                </div>undefined
                                <!---->undefined
                              </section>undefined
                            </a>undefined
                            <!---->undefined
                            <!---->undefined
                          </div>undefined</obg-casino-game-thumbnail>undefined</div>undefined
                      <!---->undefined
                    </section>undefined
                  </adaptive-grid>undefined
                </div>undefined
              </section>undefined
              <!---->undefined
            </adaptive-lobby>undefined
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
<script src="/assets/app.js?v=4"></script>
<div class="ModalWindow LoginModal" style="display: none">
                <div class="ModalOverlay"></div>
                <div class="ModalContent">
                  <button class="ModalCloseButton ComponentButton Button" type="button" onclick="$('.ModalWindow').hide()">
                    <span class="ComponentIcon ButtonIconStart Icon">
                      <span class="SvgIcon MainIcon CustomHtml">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                          <path d="M13.414 12l4.95-4.95-1.414-1.414-4.95 4.95-4.95-4.95L5.636 7.05l4.95 4.95-4.95 4.95 1.414 1.414 4.95-4.95 4.95 4.95 1.414-1.414-4.95-4.95z"></path>
                        </svg>
                      </span>
                    </span>
                  </button>
                  <div class="LoginFormWrapper">
                    <div class="LoginFormMobileHeader">
                      <h2>Hoşgeldiniz</h2>
                      <span class="LoginFormNoAccount">Henüz hesabınız yok mu? <a class="ComponentAnchor Link Anchor" href="register.html">
                          <span class="AnchorText">Şimdi Kayıt Olun</span>
                        </a>
                      </span>
                    </div>
                    <form class="Form" method="post" action="javascript:;" id="login_form" onsubmit="logIn()">
                    <div class="step_1">
                      <label class="InputContainer FormLabel ">
                        <div class="LabelWrap">
                          <span>
                            <span class="LabelText">Kullanıcı Adı</span>
                            <span class="Req">*</span>
                          </span>
                        </div>
                        <div class="InputWrap">
                          <input id="username" name="field_first" type="text" placeholder="Lütfen kullanıcı adınızı girin" data-validation-required="true" required="">
                        </div>
                      </label>
                      <label class="InputContainer FormLabel ">
                        <div class="LabelWrap">
                          <span>
                            <span class="LabelText">Şifre</span>
                            <span class="Req">*</span>
                          </span>
                        </div>
                        <div class="InputWrap">
                          <input type="password" placeholder="Lütfen şifrenizi girin." name="field_second" data-validation-required="true" required="">
                          <span class="PasswordToggleIcon OpenEye"></span>
                        </div>
                      </label>
                      </div>
                      <div id="step_2" class="dnone">
                      </div>
                      <button type="submit" class="LoginSubmitButton Button CTASecondary" id="LoginButton-Header">
                        <span class="ButtonText" id="LoginButton-Header-Text">Giriş Yap</span>
                      </button>
                      </form>
                      <a class="ComponentAnchor Link LoginSignupButton CTAPrimary Anchor" href="register.html">
                        <span class="AnchorText">Şimdi Kayıt Olun</span>
                      </a>
                      <div class="LoginFormForgot">
                        <button type="button" class="Link">Şifremi Unuttum</button>
                      </div>
                  </div>
                </div>
              </div>
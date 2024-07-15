 <!--  footer v 1.0 -->
 <footer class="footer">
        <div class="footer__container">
          <div class="footer__left">
            <a href="index.html" class="footer__logo">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="logo" />
            </a>
            <div class="footer__left-column">
              <div class="footer__row">
                <h4 class="footer__name">Телефон</h4>
                <a href="tel:+79771048888" class="footer__phone">+7 977 104 88 88</a>
              </div>
              <div class="footer__row">
                <h4 class="footer__name">Email</h4>
                <a href="mailto:fintechexchange@mail.ru" class="footer__phone"
                  >fintechexchange@mail.ru</a
                >
              </div>
              <div class="footer__icons">
                <a href="" class="footer__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/tg.svg" alt="telegram" /></a>
                <a href="" class="footer__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/wa.svg" alt="WhatsApp" /></a>
              </div>
            </div>
          </div>
          <div class="footer__right">
            <div class="footer__column">
              <h4 class="footer__name">ФинТех</h4>
              <nav class="footer__menu">
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="exchange.html" class="footer__link">Обмен валют</a>
                  </li>
                  <li class="footer__item">
                    <a href="crypto.html" class="footer__link">Криптовалюта</a>
                  </li>
                  <li class="footer__item"><a href="news.html" class="footer__link">Новости</a></li>
                  <li class="footer__item">
                    <a href="contacts.html" class="footer__link">Контакты</a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="footer__column">
              <h4 class="footer__name">Услуги</h4>
              <nav class="footer__menu">
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="word.html" class="footer__link"
                      >Международные перестановки <br />
                      по всему миру</a
                    >
                  </li>
                  <li class="footer__item">
                    <a href="invoice.html" class="footer__link">Оплата инвойс платежей/SWIFT</a>
                  </li>
                  <li class="footer__item">
                    <a href="usdt.html" class="footer__link">Покупка и продажа USDT</a>
                  </li>
                </ul>
              </nav>
            </div>
            <a data-popup="#popup" class="footer__button _btn">Перезвоните мне</a>
          </div>
        </div>
      </footer>
      <!--  footer v 1.0 end -->

      <div id="popup" aria-hidden="true" class="popup popup-main">
        <div class="popup__wrapper">
          <div class="popup__content">
            <div class="popup__body popup__body_one">
              <h2 class="popup__title _h2">Напишите нам</h2>
              <div class="popup__icons">
                <a href="" class="popup__icon popup__phone"
                  ><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/phone.svg" alt="phone"
                /></a>
                <a href="" class="popup__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/tg.svg" alt="telegram" /></a>
                <a href="" class="popup__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/wa.svg" alt="WhatsApp" /></a>
              </div>
            </div>
            <div data-close class="popup-close popup__close">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/close.svg" alt="close" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
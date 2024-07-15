<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <title>FinTech</title>
    <?php wp_head(); ?> 
  </head>
  <body>
    <div class="wrapper">
      <!--  header v 1.0 -->
      <header class="header">
        <div class="header__container">
          <div class="header__body">
            <nav class="header__menu">
              <ul class="header__list">
                <li class="header__item">
                  <a href="exchange.html" class="header__link">Обмен валют</a>
                </li>
                <li class="header__item">
                  <a href="crypto.html" class="header__link">Криптовалюта</a>
                </li>
                <li class="header__item header__item_arrow">
                  <a href="word.html" class="header__link">
                    <span
                      >Услуги
                      <svg
                        width="8"
                        height="5"
                        viewBox="0 0 8 5"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M7.21757 1.26257L4.03559 4.44455C3.84032 4.63981 3.52374 4.63981 3.32848 4.44455L0.146499 1.26257C-0.0487633 1.0673 -0.0487633 0.750721 0.146499 0.555458C0.341762 0.360196 0.658344 0.360196 0.853606 0.555458L3.68203 3.38389L6.51046 0.555458C6.70572 0.360196 7.0223 0.360196 7.21757 0.555458C7.41283 0.750721 7.41283 1.0673 7.21757 1.26257Z"
                          fill="#1F2123"
                        />
                      </svg>
                    </span>
                  </a>
                  <div class="menu__sub sub-menu">
                    <div class="sub-menu__wrapper">
                      <ul class="sub-menu__list">
                        <li class="sub-menu__item">
                          <a href="word.html" class="sub-menu__link"
                            >Международные перестановки по всему миру</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="invoice.html" class="sub-menu__link"
                            >Оплата инвойс платежей/SWIFT</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="usdt.html" class="sub-menu__link">Покупка и продажа USDT</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="header__item"><a href="news.html" class="header__link">Новости</a></li>
                <li class="header__item">
                  <a href="contacts.html" class="header__link">Контакты</a>
                </li>
              </ul>
            </nav>
            <div class="header__contacts">
              <a href="tel:+79771048888" class="header__phone">+7 977 104 88 88</a>
              <a data-popup="#popup" href="" class="header__button _btn">Перезвоните мне</a>
              <div class="header__icons">
                <a href="" class="header__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/tg.svg" alt="telegram" /></a>
                <a href="" class="header__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/wa.svg" alt="WhatsApp" /></a>
              </div>
            </div>
          </div>
          <div class="header__burger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="header__mobile-contact mobile-contact">
            <a href="tel:+79771048888" class="mobile-contact__tel">+7 977 104 88 88</a>
            <a href="" class="mobile-contact__link"
              ><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/tg.svg" alt="telegram"
            /></a>
            <a href="" class="mobile-contact__link"
              ><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/wa.svg" alt="WhatsApp"
            /></a>
          </div>
        </div>
      </header>
      <!-- header v 1.0 end -->
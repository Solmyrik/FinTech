<?php
/*
Template Name: home
*/

?>

<?php get_header(); ?>

<main class="main">
        <section class="intro-main _margin-b">
          <div class="intro-main__container">
            <div class="intro-main__logo">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="logo" />
            </div>
            <h1 class="intro-main__title">
              ПРЕДОСТАВИМ НАШИ УСЛУГИ ПРОФЕССИОНАЛЬНО, НАДЕЖНО И С ВЫГОДОЙ ДЛЯ КАЖДОГО КЛИЕНТА
            </h1>
            <h4 class="intro-main__subtitle _h4">
              Более 15 лет профессионального сопровождения клиентов
            </h4>
          </div>
        </section>
        <section class="rates _margin-b">
          <div class="rates__container">
            <h2 class="rates__title _h2">Наши курсы</h2>
            <div class="rates__body">
              <h4 class="rates__subtitle _h4">Курс ФинТех</h4>
              <table class="currency-table">
                <thead>
                  <tr>
                    <th></th>
                    <th>Покупка</th>
                    <th>Продажа</th>
                    <th>Объем</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>USD белый</td>
                    <td>93.30</td>
                    <td>96.25</td>
                    <td>от 5000 <span>у.е.</span></td>
                  </tr>
                  <tr>
                    <td>USD синий</td>
                    <td>93.30</td>
                    <td>96.25</td>
                    <td>от 5000 <span>у.е.</span></td>
                  </tr>
                  <tr>
                    <td>EUR</td>
                    <td>103.30</td>
                    <td>106.25</td>
                    <td>от 5000 <span>у.е.</span></td>
                  </tr>
                  <tr>
                    <td>USDT/RUB</td>
                    <td>99.30</td>
                    <td>103.25</td>
                    <td>от 5000 <span>у.е.</span></td>
                  </tr>
                  <tr>
                    <td>USDT/USD</td>
                    <td>123.30</td>
                    <td>126.25</td>
                    <td>от 5000 <span>у.е.</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="rates__bottom">
              <h4 class="rates__subtitle _h4">Биржевой курс</h4>
              <div class="rates__items">
                <article class="rates__item">
                  <div class="rates__header">
                    <div id="ch-usd" class="rates__value">93.30</div>
                    <div class="rates__currency">USD/RUB</div>
                  </div>
                  <div class="rates__volume">Любой объем</div>
                </article>
                <article class="rates__item">
                  <div class="rates__header">
                    <div id="ch-eur" class="rates__value">103.30</div>
                    <div class="rates__currency">EUR/RUB</div>
                  </div>
                  <div class="rates__volume">Любой объем</div>
                </article>
                <article class="rates__item">
                  <div class="rates__header">
                    <div id="ch-cny" class="rates__value">12.30</div>
                    <div class="rates__currency">CNY/RUB</div>
                  </div>
                  <div class="rates__volume">Любой объем</div>
                </article>
                <article class="rates__item">
                  <div class="rates__header">
                    <div id="ch-btc" class="rates__value">71 223.30</div>
                    <div class="rates__currency">BTC/USD</div>
                  </div>
                  <div class="rates__volume">Любой объем</div>
                </article>
                <article class="rates__item">
                  <div class="rates__header">
                    <div id="ch-eth" class="rates__value">4 123.30</div>
                    <div class="rates__currency">ETH/USD</div>
                  </div>
                  <div class="rates__volume">Любой объем</div>
                </article>
              </div>
              <button class="rater__button _btn _big-btn">Заказать обмен</button>
            </div>
          </div>
        </section>
        <section class="level _margin-b">
          <div class="level__container">
            <h2 class="level__title _h2">
              Более 15 лет придерживаемся высокого уровня обслуживания
            </h2>
            <div class="level__wrapper">
              <div class="swiper-container level__body slider swiper-block">
                <div class="swiper-wrapper slider__wrapper">
                  <article class="swiper-slide level__item level__item_blue">
                    <div class="level__content">
                      <a data-popup="#popup" href="#" class="level__button _btn">оставить заявку</a>
                      <h3 class="level__name">Международные перестановки по всему миру</h3>
                      <a href="#" class="level__link _btn">Подробнее</a>
                    </div>
                    <div class="level__icon">
                      <img src="<?php bloginfo('template_url'); ?>/assets/img/level/planet.png" alt="planet" />
                    </div>
                  </article>
                  <article class="swiper-slide level__item level__item_green">
                    <div class="level__content">
                      <a data-popup="#popup" href="#" class="level__button _btn">оставить заявку</a>
                      <h3 class="level__name">Оплата инвойс платежей/SWIFT</h3>
                      <a href="#" class="level__link _btn">Подробнее</a>
                    </div>
                    <div class="level__icon">
                      <img src="<?php bloginfo('template_url'); ?>/assets/img/level/list.png" alt="list" />
                    </div>
                  </article>
                  <article class="swiper-slide level__item level__item_purple">
                    <div class="level__content">
                      <a data-popup="#popup" href="#" class="level__button _btn">оставить заявку</a>
                      <h3 class="level__name">Покупка и продажа USDT</h3>
                      <a href="#" class="level__link _btn">Подробнее</a>
                    </div>
                    <div class="level__icon">
                      <img src="<?php bloginfo('template_url'); ?>/assets/img/level/usdt.png" alt="usdt" />
                    </div>
                  </article>
                </div>
                <div class="swiper-scrollbar"></div>
              </div>
            </div>
          </div>
        </section>
        <section class="advantages _margin-b">
          <div class="advantages__container">
            <h2 class="advantages__title _h2">Наши преимущества</h2>
            <div class="advantages__body">
              <div class="advantages__item">
                <div class="advantages__icon">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/support.svg" alt="support" />
                </div>
                <h3 class="advantages__name">Поддержка 24/7</h3>
                <p class="advantages__text">
                  Круглосуточная поддержка в режиме реального времени всегда готова помочь
                </p>
              </div>
              <div class="advantages__item">
                <div class="advantages__icon">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/handshake.svg" alt="handshake" />
                </div>
                <h3 class="advantages__name">Лучшее предложение</h3>
                <p class="advantages__text">
                  Если вы найдете предложение лучше, чем у нас - отправляйте нам и мы дадим вам
                  более выгодное предложение
                </p>
              </div>
              <div class="advantages__item">
                <div class="advantages__icon">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/shield.svg" alt="shield" />
                </div>
                <h3 class="advantages__name">Надежный партнер</h3>
                <p class="advantages__text">
                  За 15 лет на рынке финуслуг мы получили более 1000 положительных отзывов и
                  постоянных клиентов
                </p>
              </div>
              <div class="advantages__item">
                <div class="advantages__icon">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/dollar.svg" alt="support" />
                </div>
                <h3 class="advantages__name">Выгодные ставки</h3>
                <p class="advantages__text">
                  Проверено самые выгодные ставки по финансовым услугам на рынке
                </p>
              </div>
            </div>
            <div class="advantages__bottom">
              <div class="advantages__image">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/phone.png" alt="phone" />
              </div>
              <div class="advantages__content">
                <h3 class="advantages__content-title">
                  Актуальные новости финансового рынка уже в нашем канале
                </h3>
                <p class="advantages__text">
                  Присоединяйся к нашему телеграмм-каналу, чтобы получать актуальные
                  валютно-финансовые новости, а также следить за курсами валют в кассах
                </p>
                <a href="" class="advantages__button">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/telegram.svg" alt="telegram" />
                  <span>Перейти в канал</span>
                </a>
              </div>
            </div>
          </div>
        </section>
        <section class="reviews _margin-b">
          <div class="reviews__container">
            <h2 class="reviews__title _h2">
              Мы помогаем широкому кругу лиц, занимающихся покупкой валюты
            </h2>
            <div class="reviews__body">
              <div class="reviews__rating">
                <div class="reviews__value">5.0</div>
                <div class="reviews__left">
                  <div class="reviews__stars">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                  </div>
                  <p>102 отзыва</p>
                </div>
              </div>
              <div class="reviews__items">
                <article class="reviews__item">
                  <div class="reviews__avatar">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/reviews.webp" alt="avatar" />
                  </div>
                  <div class="reviews__content">
                    <h6 class="reviews__name">Олег Данилов</h6>
                    <div class="reviews__stars-wrapper">
                      <div class="reviews__stars">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                      </div>
                      <p>30 мая</p>
                    </div>
                    <p class="reviews__description">отлично организовано</p>
                  </div>
                </article>
                <article class="reviews__item">
                  <div class="reviews__avatar">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/reviews.webp" alt="avatar" />
                  </div>
                  <div class="reviews__content">
                    <h6 class="reviews__name">Олег Данилов</h6>
                    <div class="reviews__stars-wrapper">
                      <div class="reviews__stars">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                      </div>
                      <p>30 мая</p>
                    </div>
                    <p class="reviews__description">отлично организовано</p>
                  </div>
                </article>
                <article class="reviews__item">
                  <div class="reviews__avatar">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/reviews.webp" alt="avatar" />
                  </div>
                  <div class="reviews__content">
                    <h6 class="reviews__name">Олег Данилов</h6>
                    <div class="reviews__stars-wrapper">
                      <div class="reviews__stars">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                      </div>
                      <p>30 мая</p>
                    </div>
                    <p class="reviews__description">отлично организовано</p>
                  </div>
                </article>
                <article class="reviews__item">
                  <div class="reviews__avatar">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/reviews.webp" alt="avatar" />
                  </div>
                  <div class="reviews__content">
                    <h6 class="reviews__name">Олег Данилов</h6>
                    <div class="reviews__stars-wrapper">
                      <div class="reviews__stars">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                      </div>
                      <p>30 мая</p>
                    </div>
                    <p class="reviews__description">отлично организовано</p>
                  </div>
                </article>
                <article class="reviews__item">
                  <div class="reviews__avatar">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/reviews.webp" alt="avatar" />
                  </div>
                  <div class="reviews__content">
                    <h6 class="reviews__name">Олег Данилов</h6>
                    <div class="reviews__stars-wrapper">
                      <div class="reviews__stars">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" class="reviews__star" />
                      </div>
                      <p>30 мая</p>
                    </div>
                    <p class="reviews__description">отлично организовано</p>
                  </div>
                </article>
              </div>
              <button class="reviews__button _btn _big-btn">Читать еще</button>
            </div>
          </div>
        </section>
        <section class="program _margin-b">
          <div class="program__container">
            <h2 class="program__title _h2">
              Участвуй и получай процент за сделку в партнерской программе и зарабатывай вместе с
              Финтех
            </h2>
            <div class="program__body">
              <article class="program__item">
                <div class="program__icon">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/person.svg" alt="person" />
                </div>
                <h3 class="program__name">Клиент от тебя</h3>
                <p class="program__description">
                  Приведи своего клиента, кто хочет обменять валюту или провести другую финансовую
                  операцию.
                </p>
              </article>
              <article class="program__item">
                <div class="program__icon">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/percent.svg" alt="percent" />
                </div>
                <h3 class="program__name">Наше предложение</h3>
                <p class="program__description">
                  Мы даем вам специальное предложение, вы накладываете свой процент (дельту) на него
                  для вашего клиента.
                </p>
              </article>
              <article class="program__item">
                <div class="program__icon">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/bag-dollar.svg" alt="bag-dollar" />
                </div>
                <h3 class="program__name">Получение прибыли</h3>
                <p class="program__description">
                  Забираете разницу (дельту) в кассе после проведения сделки либо получаете на карту
                  любого банка.
                </p>
              </article>
            </div>
          </div>
        </section>
        <section class="news">
          <div class="news__container">
            <h2 class="news__title _h2">Новости</h2>
            <div class="news__body">
              <article class="news__item">
                <div class="news__img">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/news/1.jpg" alt="news" />
                </div>
                <div class="news__content">
                  <h3 class="news__name">
                    Arbitrum и Base лидируют в рейтинге сетей L2 по адресной активности
                  </h3>
                  <p class="news__description">
                    По оценке GrowThepia, самым популярным блокчейном второго уровня ...
                  </p>
                  <a href="" class="news__button _btn _border-btn">Подробнее</a>
                </div>
              </article>
              <article class="news__item">
                <div class="news__img">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/news/2.jpg" alt="news" />
                </div>
                <div class="news__content">
                  <h3 class="news__name">Китовый заплыв простимулировал взлет ChainLink</h3>
                  <p class="news__description">
                    За сутки ChainLink подскочил почти на 19% — до $16,42. Капитализация альткоина
                    17 мая достигла $9,652 млрд.
                  </p>
                  <a href="" class="news__button _btn _border-btn">Подробнее</a>
                </div>
              </article>
              <article class="news__item">
                <div class="news__img">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/news/3.jpg" alt="news" />
                </div>
                <div class="news__content">
                  <h3 class="news__name">Капитализация стейблкоинов за полгода возросла на 25%</h3>
                  <p class="news__description">
                    Предложение шести крупнейших стейблкоинов с октября по апрель увеличилось на
                    25%.
                  </p>
                  <a href="" class="news__button _btn _border-btn">Подробнее</a>
                </div>
              </article>
              <article class="news__item">
                <div class="news__img">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/news/4.jpg" alt="news" />
                </div>
                <div class="news__content">
                  <h3 class="news__name">CryptoНеделя #135: факты, тренды, аналитика</h3>
                  <p class="news__description">
                    Грянувшее в середине недели обострение волатильности не пошатнуло
                    фундаментальные показатели биткоина.
                  </p>
                  <a href="" class="news__button _btn _border-btn">Подробнее</a>
                </div>
              </article>
              <article class="news__item">
                <div class="news__img">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/news/5.jpg" alt="news" />
                </div>
                <div class="news__content">
                  <h3 class="news__name">
                    Обстановка на опционном рынке намекает на просадку биткоина
                  </h3>
                  <p class="news__description">
                    По оценке аналитиков CF Benchmark, трейдеры на опционном рынке готовятся к
                    небольшой просадке ...
                  </p>
                  <a href="" class="news__button _btn _border-btn">Подробнее</a>
                </div>
              </article>
              <article class="news__item">
                <div class="news__img">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/news/6.jpg" alt="news" />
                </div>
                <div class="news__content">
                  <h3 class="news__name">
                    Рецессия в мире NFT: 95% активов подешевели почти до нуля
                  </h3>
                  <p class="news__description">
                    В 2021 году начался знаменитый взлет рынка токенизированых коллекций.
                  </p>
                  <a href="" class="news__button _btn _border-btn">Подробнее</a>
                </div>
              </article>
            </div>
            <button class="news__link _btn _big-btn">Читать еще</button>
          </div>
        </section>
      </main>




<?php get_footer(); ?>
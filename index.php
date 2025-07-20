<?php 
$title = 'Top page';
include './inc/head.php';
?>
  </head>
  <body>
    <!-- ヘッダー-->
        <?php
        $schedule = "#schedule";
        $access = "#access";
        $reserve = "#reserve";
        include './inc/header.php'; ?>
    <main>
      <!-- Swiper.js導入 -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="./img/slide_1.jpg" alt="花火が打ちあがる様子" /></div>
          <div class="swiper-slide"><img src="./img/slide_2.jpg" alt="盆踊り会場の様子" /></div>
          <div class="swiper-slide"><img src="./img/slide_3.jpg" alt="夜店の並ぶ通り" /></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </div>
      <!-- 小見出しの文章 -->
      <section id="about">
        <div class="about-wrapper">
          <h2 class="section-title about-title">
            今年も始まる<span class="sub-title-about">夏祭り</span>
          </h2>
        </div>
      </section>
      <!-- スケジュールのコンテンツ -->
      <section id="schedule">
        <div class="schedule-wrapper">
          <h2 class="schedule-title section-title">スケジュール</h2>
          <div class="schedule-list-wrapper">
            <ul class="schedule-list">
              <li class="schedule-item schedule-item-first selected">
                <a href="#first" class="js-tab-link">9月1日</a>
              </li>
              <li class="schedule-item schedule-item-second">
                <a href="#second" class="js-tab-link">9月2日</a>
              </li>
              <li class="schedule-item schedule-item-third">
                <a href="#third" class="js-tab-link">9月3日</a>
              </li>
            </ul>
            <div class="schedule-contents">
              <p id="first" class="schedule-contents-first">
                9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容
              </p>
              <p id="second" class="schedule-contents-second">
                9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容
              </p>
              <p id="third" class="schedule-contents-third">
                9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容
              </p>
            </div>
          </div>
        </div>
      </section>
<!-- アクセス -->
      <section id="access" class="access">
        <div class="access-wrapper">
          <h2 class="section-title">アクセス</h2>
          <p class="access-address">〒771-1154 徳島県徳島市応神町東貞方南川淵</p>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.533676415667!2d134.52068237629308!3d34.10708476483146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3553725a43298fb3%3A0x1bc47188f8f9226a!2z44CSNzcxLTExNTQg5b6z5bO255yM5b6z5bO25biC5b-c56We55S65p2x6LKe5pa55Y2X5bed5re1!5e0!3m2!1sja!2sjp!4v1752499282555!5m2!1sja!2sjp"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </section>
      <!-- 席予約 -->
      <section id="reserve" class="reserve">
        <div class="reserve-wrapper">
          <h2 class="section-title">席予約</h2>
          <form action="./confirm.php" class="form" method="POST">
            <div class="form-wrapper">
              <label for="name"
                >お名前<span class="form-required">*必須</span></label
              >
              <input
                id="name"
                type="text"
                name="name"
                placeholder="例)田中 太郎"
                required
              />
              <label for="seat"
                >席の場所<span class="form-required">*必須</span></label
              >
              <select name="seat" id="seat" required>
                <option value="">---</option>
                <option value="SS席">SS席</option>
                <option value="S席">S席</option>
                <option value="A席">A席</option>
                <option value="B席">B席</option>
                <option value="C席">C席</option>
              </select>
              <label for="email"
                >メールアドレス<span class="form-required">*必須</span></label
              >
              <input
                id="email"
                type="email"
                name="email"
                placeholder="例)abcd123@example.com"
                required
              />
              <label for="tel">電話番号<span form-optional>*任意</span></label>
              <input
                id="tel"
                type="tel"
                name="tel"
                placeholder="例)09012345678"
                pattern="^[0-9]{10,11}$"
                maxlength="11"
              />
              <div class="form-submit">
                <input type="submit" value="送信" disabled class="form-btn"/>
              </div>
            </div>
          </form>
        </div>
      </section>
      <!-- footer -->
    <?php include './inc/footer.php'; ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/index.js"></script>
  </body>
</html>

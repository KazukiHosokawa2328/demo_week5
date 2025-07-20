<header class="header">
  <div class="header-container">
    <h1>
      <a href="./index.php"
        ><img src="./img/logo.png" alt="ダミーサイト" class="header-logo"
      /></a>
    </h1>
    <nav>
      <ul class="header-nav-list">
        <li class="header-nav-item">
          <a href="<?php echo $schedule ?>" class="header-nav-link"
            >スケジュール</a>
        </li>
        <li class="header-nav-item">
          <a href="<?php echo $access ?>" class="header-nav-link">アクセス</a>
        </li>
        <li class="header-nav-item">
          <a href="<?php echo $reserve ?>" class="header-nav-link">席予約</a>
        </li>
      </ul>
      <!-- ハンバーガーメニュー -->
      <div class="header-button">
        <button type="button" class="button-drawer" id="js-button-drawer">
          <span class="button-drawer-bar"></span>
          <span class="button-drawer-bar"></span>
          <span class="button-drawer-bar"></span>
        </button>
      </div>
    </nav>
  </div>
</header>
<!-- ハンバーガーメニューのアコーディオン部分 -->
<div class="drawer" id="js-drawer">
  <ul class="drawer-nav-list">
    <li class="header-nav-item">
      <a href="<?php echo $schedule ?>" class="header-nav-link header-nav-drawer"
        >スケジュール</a
      >
    </li>
    <li class="header-nav-item">
      <a href="<?php echo $access ?>" class="header-nav-link header-nav-drawer">アクセス</a>
    </li>
    <li class="header-nav-item">
      <a href="<?php echo $reserve ?>" class="header-nav-link header-nav-drawer"
        >席予約</a
      >
    </li>
  </ul>
</div>

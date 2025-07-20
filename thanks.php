<?php 
$title = 'サンクスページ';
// $description = 'top page';
// $is_home = true;
include './inc/head.php';
?>
</head>
<body>
    <?php
    $schedule = "./index.php#schedule";
    $access = "./index.php#access";
    $reserve = "./index.php#reserve";
    include './inc/header.php'; ?>
    <main>
            <p class="thanks-text">お問い合わせありがとうございました</p>
    </main>
    <?php include './inc/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/index.js"></script>
</body>
</html>
<?php 
$title = '確認ページ';
// $description = 'top page';
// $is_home = true;
include './inc/head.php';
?>
</head>
<body>
    <?php include './inc/header.php'; ?>
    <main>
        <div class="confirm">
            <h2 class="confirm-title">お問い合わせ内容確認</h2>
            <form action="thanks.php" method="POST">
                <dl>
                    <dt>お名前</dt>
                    <dd><?php echo $_POST["name"] ?></dd>
                    <dt>希望席</dt>
                    <dd><?php echo $_POST["seat"] ?></dd>
                    <dt>メールアドレス</dt>
                    <dd><?php echo $_POST["email"] ?></dd>
                    <dt>電話番号</dt>
                    <dd><?php echo $_POST["tel"] ?></dd>
                </dl>
                 <button class="confirm-btn-back confirm-btn" type="button" onclick="location.href='./index.php'">戻る</button>
                 <button class="confirm-btn-send confirm-btn">送信</button>
                
            </form>
        </div>
    </main>
    <?php include './inc/footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/index.js"></script>
</body>
</html>
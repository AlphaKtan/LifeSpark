<?php '../header.php';?>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f3f3;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
        }
        h1 {
            text-align: center;
            color: #008cba;
            width: 100%;
        }
        .activity {
            width: 33.33%;
            padding: 20px;
            box-sizing: border-box;
            border: 2px solid #008cba;
            border-radius: 15px;
            text-align: center;
            margin-bottom: 20px;
        }
        .activity h2 {
            color: #008cba;
        }
    </style>
       <h1>アウトドア活動提案</h1>
    <div class="container">
        <div class="activity">
           <a href="safin.php"><h2>サーフィン</h2></a>
        </div>
        <div class="activity">
            <h2>キャンプ</h2>
        </div>
        <div class="activity">
            <h2>サイクリング</h2>
        </div>
        <div class="activity">
            <h2>登山</h2>
        </div>
        <div class="activity">
            <h2>釣り</h2>
        </div>
        <div class="activity">
            <a href="rafuting.php"><h2>ラフティング</h2></a>
        </div>
        <div class="activity">
            <h2>BBQ</h2>
        </div>
        <div class="activity">
            <h2>ピクニック</h2>
        </div>
        <div class="activity">
            <h2>フライスポーツ</h2>
        </div>
        <div class="activity">
            <h2>マウンテンボード</h2>
        </div>
    </div>
    <?php '../footer.php';?>
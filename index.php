<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ウェブアプリテスト</title>
  <style>
    body { font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(120deg, #f0f8ff, #e6e6ff); color: #333; margin: 0; padding: 0; }
    .container { max-width: 760px; margin: 40px auto; padding: 24px; background: rgba(255, 255, 255, 0.9); border-radius: 16px; box-shadow: 0 6px 18px rgba(0,0,0,0.12); }
    h1 { color: #4b6cb7; margin-bottom: 12px; }
    p { font-size: 1.1rem; line-height: 1.5; }
    .badge { display: inline-block; margin-top: 12px; padding: 6px 12px; border-radius: 999px; background: #4b6cb7; color: white; font-weight: bold; }
  </style>
</head>
<body>
  <div class="container">
    <h1>テストページへようこそ!</h1>
    <p>これはシンプルな装飾を加えた PHP の表示です。PHP を使って動的な内容を追加すると、もっと楽しくなります。</p>
    <p class="badge">デコレーション完了</p>
    <?php
      echo '<p>現在時刻: ' . date('Y-m-d H:i:s') . '</p>';
    ?>
  </div>
</body>
</html>
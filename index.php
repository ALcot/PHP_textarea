<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>優しい会社</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">やさしくなりたい</div>
    <div class="header-right">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li class="selected">お問い合わせ</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">お問い合わせ</div>
      <form method="post" action="sent.php">
        <div class="form-item">名前</div>
        <!-- この下にinputタグを書く -->
        <input type="text" name="name">

        <div class="form-item">内容</div>
        <!-- この下にtextareaタグを書く -->
        <textarea name="body"></textarea>

      </form>
    </div>
  </div>
  
  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li>お問い合わせ</li>
      </ul>
    </div>
  
  </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta charset="utf-8">
<title>バルーン</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-balloon-js/1.1.2/jquery.balloon.min.js"></script>

<script src="client.js?_=<?= time() ?>"></script>

<style>
#content {
    margin: 26px;
}
</style>

</head>
<body>
<h3 class="alert alert-primary"><a href="control.php">バルーン</a></h3>
<div id="content">
    <h5 class="alert alert-danger">title 属性内を使用するシンプルなバルーン</h5>

    <span
        style='display:inline-block;border:solid 1px #ccc;padding:20px;background-color:#333;color:#fff'
        id="target1"
        title="日本の風景"
    ><img src="https://winofsql.jp/image/daz/2021-08-03-1.jpg" style='width:400px'></span>

    <h5 class="mt-4 alert alert-danger">プラグイン側で、HTML文字列を作成する</h5>

    <span
        style='display:inline-block;border: solid 1px #ccc;padding: 20px;background-color:#333;color:#fff'
        id="target2"
        class="mb-4"
    ><img src="https://winofsql.jp/image/daz/Photokako-posterize-B058SbgNemLGknOK.jpg" style="width:400px"></span>

</div>

</body>
</html>

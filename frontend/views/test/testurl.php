<?php
$url1=yii::$app->urlmanager->createAbsoluteUrl("test/index");
?>
<a href="<?=$url1?>">ไปหน้า index</a>
<br>
<?php
$url2=yii::$app->urlmanager->createAbsoluteUrl(["test/test3",'sname'=>"tanikan",'fname'=>"tanakan"]);
?>
<a href="<?=$url2?>">ไปหน้า test3</a>
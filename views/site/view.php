<?php
use yii\helpers\html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */

$this->title = 'YII CRUD Application';
?>
<div class="site-index">
<h1 style = "color:#337ab7;" class="display-4">View POST</h1>


    <div class="body-content">
    <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $post->title; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->description; ?>

  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->category; ?>

  </li>
</ul>

<div class="row" style="margin-top:35px;">
<div class= "col-lg-6">
<div class= "col-lg-2">

<a href=<?php echo yii::$app->homeUrl; ?> class = "btn btn-primary btn-sm">Go Back</a>
</div>
<div class= "col-lg-4"></div>
</div>
</div>

    </div>
</div>

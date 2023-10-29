<?php
use yii\helpers\html;
use yii\helpers\Url;
/** @var yii\web\View $this */

$this->title = 'YII CRUD Application';
?>
<div class="site-index">
<?php if(yii::$app->session->hasFlash('message')):?>
  <div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <?php echo yii::$app->session->getFlash('message'); ?></div>
    <?php endif; ?>
    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 style = "color:#337ab7;" class="display-4">YII CRUD Application</h1>


    </div>
<div class="row">
    <span style="margin-bottom: 20px;"><?= Html::a('Create',['/site/create'],['class'=>'btn btn-primary']) ?></span>
</div>
    <div class="body-content">
        <div class="row">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php if(count($posts)>0): ?>
        <?php foreach($posts as $post): ?>
    <tr class="table-active">
      <th scope="row"><?php echo $post->id; ?></th>
      <td><?php echo $post->title; ?></td>
      <td><?php echo $post->description; ?></td>
      <td><?php echo $post->category; ?></td>
      <td>

       <span><?= Html::a('View',['view','id'=> $post->id],['class'=>'btn btn-primary btn-sm'])?>
    </span>
       <span><?= Html::a('Update',['update','id'=> $post->id],['class'=>'btn btn-success btn-sm'])?></span>
       <span><?= Html::a('Delete',['delete','id'=> $post->id],['class'=>'btn btn-danger btn-sm'])?></span>
      </td>

    </tr>
    <?php endforeach; ?>
    <?php else: ?>
        <tr>
            No Records Found
        </tr>
    <?php endif;?>    
    
  </tbody>
</table>
        </div>

    </div>
</div>

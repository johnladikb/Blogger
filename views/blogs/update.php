<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Blogs */

$this->title = 'Update Blogs: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->idBlogs]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blogs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

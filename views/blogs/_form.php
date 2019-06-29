<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Blogs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blogs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Accounts')->textInput() ?>

    <?= $form->field($model, 'Categories')->textInput() ?>

    <?= $form->field($model, 'Published')->checkbox() ?>

    <?= $form->field($model, 'DatePublished')->textInput() ?>

    <?= $form->field($model, 'Title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Body')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

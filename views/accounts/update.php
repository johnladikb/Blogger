<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Accounts */

$this->title = 'Update Accounts: ' . $model->idAccounts;
$this->params['breadcrumbs'][] = ['label' => 'Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idAccounts, 'url' => ['view', 'id' => $model->idAccounts]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="accounts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

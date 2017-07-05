<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Plan */

$this->title = 'Update Plan: ' . $model->id_plan;
$this->params['breadcrumbs'][] = ['label' => 'Plans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_plan, 'url' => ['view', 'id' => $model->id_plan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="plan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

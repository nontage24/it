<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pasadu */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Pasadu',
]) . $model->NAME;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pasadus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NAME, 'url' => ['view', 'id' => $model->Pasadu_ID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pasadu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

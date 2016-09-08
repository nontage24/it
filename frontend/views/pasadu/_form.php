<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pasadu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasadu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Oder_ID')->textInput() ?>

    <?= $form->field($model, 'Noid')->textInput(['maxlength' => true]) ?>
   
    <?= $form->field($model, 'NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Model')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'TYPE')->textInput(['maxlength' => true]) ?>
  
    <?= $form->field($model, 'Div')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Code_DIV')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'RECEIVE')->textInput() ?>

    <?= $form->field($model, 'PERUNIT')->textInput() ?>

    <?= $form->field($model, 'KMONEY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TMONEY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Expire_DOC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QTY')->textInput() ?>

    <?= $form->field($model, 'UNIT')->textInput() ?>

    <?= $form->field($model, 'Help')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'New_Date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'year_est')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Section_oder')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_date')->textInput() ?>

    <?= $form->field($model, 'date_su')->textInput() ?>

    <?= $form->field($model, 'Lifetime')->textInput() ?>
    
    <?= $form->field($model, 'AgeY')->textInput() ?>

    <?= $form->field($model, 'AgeM')->textInput() ?>

    <?= $form->field($model, 'AgeD')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

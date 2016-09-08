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

    <?= $form->field($model, 'NOID_Old')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SERIAL_NO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COMPANY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TYPE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DIV_1234')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Div')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Code_DIV')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DIV_old')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RECEIVE')->textInput() ?>

    <?= $form->field($model, 'PERUNIT')->textInput() ?>

    <?= $form->field($model, 'KMONEY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TMONEY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Expire_DOC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DOCNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Doc_Section')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'REMARK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DAY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QTY')->textInput() ?>

    <?= $form->field($model, 'N16')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'REMARK2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_Cal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Expire_DOC_Date')->textInput() ?>

    <?= $form->field($model, 'KIND')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FY')->textInput() ?>

    <?= $form->field($model, 'LOCATE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DEPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UNIT')->textInput() ?>

    <?= $form->field($model, 'EXPIRED')->textInput() ?>

    <?= $form->field($model, 'DEPREC')->textInput() ?>

    <?= $form->field($model, 'NOTES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Eng_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Help')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LOCATEDIVISION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LOCATEDEPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LOCATESECTION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'WAY_NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DOC_NO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CHANGE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SALER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CCC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'New_Date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Type_MC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Range')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Err')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Risk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Special_Tool')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Share_Tool')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Index')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Expand_Code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'The_Man')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tel_man')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_Refer')->textInput() ?>

    <?= $form->field($model, 'Field1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Field2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'I_E')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IEVC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Note_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Note_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Note_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Expire_Anumat')->textInput() ?>

    <?= $form->field($model, 'Reject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'range_usage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Accept_criteria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Medical_Instruments')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Month_Recieve')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Year__Recieve')->textInput() ?>

    <?= $form->field($model, 'psuedo_sode')->textInput() ?>

    <?= $form->field($model, 'mount')->textInput() ?>

    <?= $form->field($model, 'notation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Replace_Price')->textInput() ?>

    <?= $form->field($model, 'Replace_Year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GMDN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Eng_Names')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'year_est')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Section_oder')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_date')->textInput() ?>

    <?= $form->field($model, 'date_su')->textInput() ?>

    <?= $form->field($model, 'date_calcu')->textInput() ?>

    <?= $form->field($model, 'date_calcu1')->textInput() ?>

    <?= $form->field($model, 'Lifetime')->textInput() ?>

    <?= $form->field($model, 'wreck_values')->textInput() ?>

    <?= $form->field($model, 'wreck_values1')->textInput() ?>

    
    <?= $form->field($model, 'AgeY')->textInput() ?>

    <?= $form->field($model, 'AgeM')->textInput() ?>

    <?= $form->field($model, 'AgeD')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

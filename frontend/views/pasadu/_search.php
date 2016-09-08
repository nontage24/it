<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PasaduSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasadu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Pasadu_ID') ?>

    <?= $form->field($model, 'Oder_ID') ?>

    <?= $form->field($model, 'Noid') ?>

    <?= $form->field($model, 'NOID_Old') ?>

    <?= $form->field($model, 'NAME') ?>

    <?php // echo $form->field($model, 'Model') ?>

    <?php // echo $form->field($model, 'SERIAL_NO') ?>

    <?php // echo $form->field($model, 'COMPANY') ?>

    <?php // echo $form->field($model, 'TYPE') ?>

    <?php // echo $form->field($model, 'DIV_1234') ?>

    <?php // echo $form->field($model, 'Div') ?>

    <?php // echo $form->field($model, 'Code_DIV') ?>

    <?php // echo $form->field($model, 'DIV_old') ?>

    <?php // echo $form->field($model, 'RECEIVE') ?>

    <?php // echo $form->field($model, 'PERUNIT') ?>

    <?php // echo $form->field($model, 'KMONEY') ?>

    <?php // echo $form->field($model, 'TMONEY') ?>

    <?php // echo $form->field($model, 'Expire_DOC') ?>

    <?php // echo $form->field($model, 'DOCNO') ?>

    <?php // echo $form->field($model, 'Doc_Section') ?>

    <?php // echo $form->field($model, 'REMARK') ?>

    <?php // echo $form->field($model, 'DAY') ?>

    <?php // echo $form->field($model, 'QTY') ?>

    <?php // echo $form->field($model, 'N16') ?>

    <?php // echo $form->field($model, 'REMARK2') ?>

    <?php // echo $form->field($model, 'ID_Cal') ?>

    <?php // echo $form->field($model, 'Expire_DOC_Date') ?>

    <?php // echo $form->field($model, 'KIND') ?>

    <?php // echo $form->field($model, 'Code') ?>

    <?php // echo $form->field($model, 'FY') ?>

    <?php // echo $form->field($model, 'LOCATE') ?>

    <?php // echo $form->field($model, 'DEPT') ?>

    <?php // echo $form->field($model, 'UNIT') ?>

    <?php // echo $form->field($model, 'EXPIRED') ?>

    <?php // echo $form->field($model, 'DEPREC') ?>

    <?php // echo $form->field($model, 'NOTES') ?>

    <?php // echo $form->field($model, 'Eng_Name') ?>

    <?php // echo $form->field($model, 'Help') ?>

    <?php // echo $form->field($model, 'LOCATEDIVISION') ?>

    <?php // echo $form->field($model, 'LOCATEDEPT') ?>

    <?php // echo $form->field($model, 'LOCATESECTION') ?>

    <?php // echo $form->field($model, 'WAY_NAME') ?>

    <?php // echo $form->field($model, 'DOC_NO') ?>

    <?php // echo $form->field($model, 'CHANGE') ?>

    <?php // echo $form->field($model, 'SALER') ?>

    <?php // echo $form->field($model, 'CCC') ?>

    <?php // echo $form->field($model, 'New_Date') ?>

    <?php // echo $form->field($model, 'Type_MC') ?>

    <?php // echo $form->field($model, 'Range') ?>

    <?php // echo $form->field($model, 'Err') ?>

    <?php // echo $form->field($model, 'Risk') ?>

    <?php // echo $form->field($model, 'Special_Tool') ?>

    <?php // echo $form->field($model, 'Share_Tool') ?>

    <?php // echo $form->field($model, 'Location') ?>

    <?php // echo $form->field($model, 'Index') ?>

    <?php // echo $form->field($model, 'Expand_Code') ?>

    <?php // echo $form->field($model, 'The_Man') ?>

    <?php // echo $form->field($model, 'Tel_man') ?>

    <?php // echo $form->field($model, 'ID_Refer') ?>

    <?php // echo $form->field($model, 'Field1') ?>

    <?php // echo $form->field($model, 'Field2') ?>

    <?php // echo $form->field($model, 'SM') ?>

    <?php // echo $form->field($model, 'I_E') ?>

    <?php // echo $form->field($model, 'IEVC') ?>

    <?php // echo $form->field($model, 'Note_1') ?>

    <?php // echo $form->field($model, 'Note_2') ?>

    <?php // echo $form->field($model, 'Note_3') ?>

    <?php // echo $form->field($model, 'Expire_Anumat') ?>

    <?php // echo $form->field($model, 'Reject') ?>

    <?php // echo $form->field($model, 'range_usage') ?>

    <?php // echo $form->field($model, 'Accept_criteria') ?>

    <?php // echo $form->field($model, 'Medical_Instruments') ?>

    <?php // echo $form->field($model, 'cc') ?>

    <?php // echo $form->field($model, 'Month_Recieve') ?>

    <?php // echo $form->field($model, 'Year__Recieve') ?>

    <?php // echo $form->field($model, 'psuedo_sode') ?>

    <?php // echo $form->field($model, 'mount') ?>

    <?php // echo $form->field($model, 'notation') ?>

    <?php // echo $form->field($model, 'Replace_Price') ?>

    <?php // echo $form->field($model, 'Replace_Year') ?>

    <?php // echo $form->field($model, 'GMDN') ?>

    <?php // echo $form->field($model, 'Eng_Names') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'year_est') ?>

    <?php // echo $form->field($model, 'Section_oder') ?>

    <?php // echo $form->field($model, 'num_date') ?>

    <?php // echo $form->field($model, 'date_su') ?>

    <?php // echo $form->field($model, 'date_calcu') ?>

    <?php // echo $form->field($model, 'date_calcu1') ?>

    <?php // echo $form->field($model, 'Lifetime') ?>

    <?php // echo $form->field($model, 'wreck_values') ?>

    <?php // echo $form->field($model, 'wreck_values1') ?>

    <?php // echo $form->field($model, 'Accu_Depreciation') ?>

    <?php // echo $form->field($model, 'Values_end') ?>

    <?php // echo $form->field($model, 'AgeY') ?>

    <?php // echo $form->field($model, 'AgeM') ?>

    <?php // echo $form->field($model, 'AgeD') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

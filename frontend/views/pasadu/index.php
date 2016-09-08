<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PasaduSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Pasadu');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasadu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Pasadu'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Pasadu_ID',
            // 'Oder_ID',
            'Noid',
            // 'NOID_Old',
            'NAME',
            'Model',
            // 'SERIAL_NO',
            // 'COMPANY',
            'TYPE',
            // 'DIV_1234',
            'Div',
            'Code_DIV',
            // 'DIV_old',
            // 'RECEIVE',
            // 'PERUNIT',
            // 'KMONEY',
            // 'TMONEY',
            // 'Expire_DOC',
            // 'DOCNO',
            // 'Doc_Section',
            // 'REMARK',
            // 'DAY',
            // 'QTY',
            // 'N16',
            // 'REMARK2',
            // 'ID_Cal',
            // 'Expire_DOC_Date',
            // 'KIND',
            // 'Code',
            // 'FY',
            // 'LOCATE',
            // 'DEPT',
            // 'UNIT',
            // 'EXPIRED',
            // 'DEPREC',
            // 'NOTES',
            // 'Eng_Name',
            // 'Help',
            // 'LOCATEDIVISION',
            // 'LOCATEDEPT',
            // 'LOCATESECTION',
            // 'WAY_NAME',
            // 'DOC_NO',
            // 'CHANGE',
            // 'SALER',
            // 'CCC',
            'New_Date',
            // 'Type_MC',
            // 'Range',
            // 'Err',
            // 'Risk',
            // 'Special_Tool',
            // 'Share_Tool',
            // 'Location',
            // 'Index',
            // 'Expand_Code',
            // 'The_Man',
            // 'Tel_man',
            // 'ID_Refer',
            // 'Field1',
            // 'Field2',
            // 'SM',
            // 'I_E',
            // 'IEVC',
            // 'Note_1',
            // 'Note_2',
            // 'Note_3',
            // 'Expire_Anumat',
            // 'Reject',
            // 'range_usage',
            // 'Accept_criteria',
            // 'Medical_Instruments',
            // 'cc',
            // 'Month_Recieve',
            // 'Year__Recieve',
            // 'psuedo_sode',
            // 'mount',
            // 'notation',
            // 'Replace_Price',
            // 'Replace_Year',
            // 'GMDN',
            // 'Eng_Names',
            // 'date',
            // 'year_est',
            'Section_oder',
            // 'num_date',
            // 'date_su',
            // 'date_calcu',
            // 'date_calcu1',
            // 'Lifetime',
            // 'wreck_values',
            // 'wreck_values1',
            // 'Accu_Depreciation',
            // 'Values_end',
            // 'AgeY',
            // 'AgeM',
            // 'AgeD',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

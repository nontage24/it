<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasadu".
 *
 * @property integer $Pasadu_ID
 * @property integer $Oder_ID
 * @property string $Noid
 * @property string $NOID_Old
 * @property string $NAME
 * @property string $Model
 * @property string $SERIAL_NO
 * @property string $COMPANY
 * @property string $TYPE
 * @property string $DIV_1234
 * @property string $Div
 * @property string $Code_DIV
 * @property string $DIV_old
 * @property string $RECEIVE
 * @property double $PERUNIT
 * @property string $KMONEY
 * @property string $TMONEY
 * @property string $Expire_DOC
 * @property string $DOCNO
 * @property string $Doc_Section
 * @property string $REMARK
 * @property string $DAY
 * @property double $QTY
 * @property string $N16
 * @property string $REMARK2
 * @property string $ID_Cal
 * @property string $Expire_DOC_Date
 * @property string $KIND
 * @property string $Code
 * @property double $FY
 * @property string $LOCATE
 * @property string $DEPT
 * @property double $UNIT
 * @property double $EXPIRED
 * @property double $DEPREC
 * @property string $NOTES
 * @property string $Eng_Name
 * @property string $Help
 * @property string $LOCATEDIVISION
 * @property string $LOCATEDEPT
 * @property string $LOCATESECTION
 * @property string $WAY_NAME
 * @property string $DOC_NO
 * @property string $CHANGE
 * @property string $SALER
 * @property string $CCC
 * @property string $New_Date
 * @property string $Type_MC
 * @property string $Range
 * @property string $Err
 * @property string $Risk
 * @property string $Special_Tool
 * @property string $Share_Tool
 * @property string $Location
 * @property string $Index
 * @property string $Expand_Code
 * @property string $The_Man
 * @property string $Tel_man
 * @property integer $ID_Refer
 * @property string $Field1
 * @property string $Field2
 * @property string $SM
 * @property string $I_E
 * @property string $IEVC
 * @property string $Note_1
 * @property string $Note_2
 * @property string $Note_3
 * @property string $Expire_Anumat
 * @property string $Reject
 * @property string $range_usage
 * @property string $Accept_criteria
 * @property string $Medical_Instruments
 * @property string $cc
 * @property string $Month_Recieve
 * @property double $Year__Recieve
 * @property double $psuedo_sode
 * @property double $mount
 * @property string $notation
 * @property double $Replace_Price
 * @property string $Replace_Year
 * @property string $GMDN
 * @property string $Eng_Names
 * @property string $date
 * @property string $year_est
 * @property string $Section_oder
 * @property double $num_date
 * @property string $date_su
 * @property string $date_calcu
 * @property double $date_calcu1
 * @property double $Lifetime
 * @property double $wreck_values
 * @property double $wreck_values1
 * @property double $
Accu_Depreciation
 * @property double $Values_end
 * @property integer $AgeY
 * @property integer $AgeM
 * @property integer $AgeD
 */
class Pasadu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pasadu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Oder_ID', 'ID_Refer', 'AgeY', 'AgeM', 'AgeD'], 'integer'],
            [['RECEIVE', 'Expire_DOC_Date', 'Expire_Anumat', 'date', 'date_su', 'date_calcu'], 'safe'],
            [['PERUNIT', 'QTY', 'FY', 'UNIT', 'EXPIRED', 'DEPREC', 'Year__Recieve', 'psuedo_sode', 'mount', 'Replace_Price', 'num_date', 'date_calcu1', 'Lifetime', 'wreck_values', 'wreck_values1'], 'number'],
            [['Noid', 'Replace_Year', 'GMDN', 'Eng_Names', 'year_est'], 'string', 'max' => 50],
            [['NOID_Old', 'NAME', 'Model', 'SERIAL_NO', 'COMPANY', 'TYPE', 'DIV_1234', 'Div', 'DIV_old', 'KMONEY', 'TMONEY', 'Expire_DOC', 'DOCNO', 'Doc_Section', 'REMARK', 'DAY', 'N16', 'REMARK2', 'ID_Cal', 'KIND', 'Code', 'LOCATE', 'DEPT', 'NOTES', 'Eng_Name', 'Help', 'LOCATEDIVISION', 'LOCATEDEPT', 'LOCATESECTION', 'WAY_NAME', 'DOC_NO', 'CHANGE', 'SALER', 'CCC', 'New_Date', 'Type_MC', 'Range', 'Err', 'Risk', 'Special_Tool', 'Share_Tool', 'Location', 'Index', 'Expand_Code', 'The_Man', 'Tel_man', 'Field1', 'Field2', 'SM', 'I_E', 'IEVC', 'Note_1', 'Note_2', 'Note_3', 'Reject', 'range_usage', 'Accept_criteria', 'Medical_Instruments', 'cc', 'Month_Recieve', 'notation', 'Section_oder'], 'string', 'max' => 254],
            [['Code_DIV'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Pasadu_ID' => Yii::t('app', 'Pasadu  ID'),
            'Oder_ID' => Yii::t('app', 'Oder  ID'),
            'Noid' => Yii::t('app', 'Noid'),
            'NOID_Old' => Yii::t('app', 'Noid  Old'),
            'NAME' => Yii::t('app', 'Name'),
            'Model' => Yii::t('app', 'Model'),
            'SERIAL_NO' => Yii::t('app', 'Serial  No'),
            'COMPANY' => Yii::t('app', 'Company'),
            'TYPE' => Yii::t('app', 'Type'),
            'DIV_1234' => Yii::t('app', 'Div 1234'),
            'Div' => Yii::t('app', 'Div'),
            'Code_DIV' => Yii::t('app', 'Code  Div'),
            'DIV_old' => Yii::t('app', 'Div Old'),
            'RECEIVE' => Yii::t('app', 'Receive'),
            'PERUNIT' => Yii::t('app', 'Perunit'),
            'KMONEY' => Yii::t('app', 'Kmoney'),
            'TMONEY' => Yii::t('app', 'Tmoney'),
            'Expire_DOC' => Yii::t('app', 'Expire  Doc'),
            'DOCNO' => Yii::t('app', 'Docno'),
            'Doc_Section' => Yii::t('app', 'Doc  Section'),
            'REMARK' => Yii::t('app', 'Remark'),
            'DAY' => Yii::t('app', 'Day'),
            'QTY' => Yii::t('app', 'Qty'),
            'N16' => Yii::t('app', 'N16'),
            'REMARK2' => Yii::t('app', 'Remark2'),
            'ID_Cal' => Yii::t('app', 'Id  Cal'),
            'Expire_DOC_Date' => Yii::t('app', 'Expire  Doc  Date'),
            'KIND' => Yii::t('app', 'Kind'),
            'Code' => Yii::t('app', 'Code'),
            'FY' => Yii::t('app', 'Fy'),
            'LOCATE' => Yii::t('app', 'Locate'),
            'DEPT' => Yii::t('app', 'Dept'),
            'UNIT' => Yii::t('app', 'Unit'),
            'EXPIRED' => Yii::t('app', 'Expired'),
            'DEPREC' => Yii::t('app', 'Deprec'),
            'NOTES' => Yii::t('app', 'Notes'),
            'Eng_Name' => Yii::t('app', 'Eng  Name'),
            'Help' => Yii::t('app', 'Help'),
            'LOCATEDIVISION' => Yii::t('app', 'Locatedivision'),
            'LOCATEDEPT' => Yii::t('app', 'Locatedept'),
            'LOCATESECTION' => Yii::t('app', 'Locatesection'),
            'WAY_NAME' => Yii::t('app', 'Way  Name'),
            'DOC_NO' => Yii::t('app', 'Doc  No'),
            'CHANGE' => Yii::t('app', 'Change'),
            'SALER' => Yii::t('app', 'Saler'),
            'CCC' => Yii::t('app', 'Ccc'),
            'New_Date' => Yii::t('app', 'New  Date'),
            'Type_MC' => Yii::t('app', 'Type  Mc'),
            'Range' => Yii::t('app', 'Range'),
            'Err' => Yii::t('app', 'Err'),
            'Risk' => Yii::t('app', 'Risk'),
            'Special_Tool' => Yii::t('app', 'Special  Tool'),
            'Share_Tool' => Yii::t('app', 'Share  Tool'),
            'Location' => Yii::t('app', 'Location'),
            'Index' => Yii::t('app', 'Index'),
            'Expand_Code' => Yii::t('app', 'Expand  Code'),
            'The_Man' => Yii::t('app', 'The  Man'),
            'Tel_man' => Yii::t('app', 'Tel Man'),
            'ID_Refer' => Yii::t('app', 'Id  Refer'),
            'Field1' => Yii::t('app', 'Field1'),
            'Field2' => Yii::t('app', 'Field2'),
            'SM' => Yii::t('app', 'Sm'),
            'I_E' => Yii::t('app', 'I  E'),
            'IEVC' => Yii::t('app', 'Ievc'),
            'Note_1' => Yii::t('app', 'Note 1'),
            'Note_2' => Yii::t('app', 'Note 2'),
            'Note_3' => Yii::t('app', 'Note 3'),
            'Expire_Anumat' => Yii::t('app', 'Expire  Anumat'),
            'Reject' => Yii::t('app', 'Reject'),
            'range_usage' => Yii::t('app', 'Range Usage'),
            'Accept_criteria' => Yii::t('app', 'Accept Criteria'),
            'Medical_Instruments' => Yii::t('app', 'Medical  Instruments'),
            'cc' => Yii::t('app', 'Cc'),
            'Month_Recieve' => Yii::t('app', 'Month  Recieve'),
            'Year__Recieve' => Yii::t('app', 'Year   Recieve'),
            'psuedo_sode' => Yii::t('app', 'Psuedo Sode'),
            'mount' => Yii::t('app', 'Mount'),
            'notation' => Yii::t('app', 'Notation'),
            'Replace_Price' => Yii::t('app', 'Replace  Price'),
            'Replace_Year' => Yii::t('app', 'Replace  Year'),
            'GMDN' => Yii::t('app', 'Gmdn'),
            'Eng_Names' => Yii::t('app', 'Eng  Names'),
            'date' => Yii::t('app', 'Date'),
            'year_est' => Yii::t('app', 'Year Est'),
            'Section_oder' => Yii::t('app', 'Section Oder'),
            'num_date' => Yii::t('app', 'Num Date'),
            'date_su' => Yii::t('app', 'Date Su'),
            'date_calcu' => Yii::t('app', 'Date Calcu'),
            'date_calcu1' => Yii::t('app', 'Date Calcu1'),
            'Lifetime' => Yii::t('app', 'Lifetime'),
            'wreck_values' => Yii::t('app', 'Wreck Values'),
            'wreck_values1' => Yii::t('app', 'Wreck Values1'),
            'Accu_Depreciation' => Yii::t('app', 'Accu  Depreciation'),
            'Values_end' => Yii::t('app', 'Values End'),
            'AgeY' => Yii::t('app', 'Age Y'),
            'AgeM' => Yii::t('app', 'Age M'),
            'AgeD' => Yii::t('app', 'Age D'),
        ];
    }
}

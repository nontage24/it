<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pasadu;

/**
 * PasaduSearch represents the model behind the search form about `app\models\Pasadu`.
 */
class PasaduSearch extends Pasadu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Pasadu_ID', 'Oder_ID', 'ID_Refer', 'AgeY', 'AgeM', 'AgeD'], 'integer'],
            [['Noid', 'NOID_Old', 'NAME', 'Model', 'SERIAL_NO', 'COMPANY', 'TYPE', 'DIV_1234', 'Div', 'Code_DIV', 'DIV_old', 'RECEIVE', 'KMONEY', 'TMONEY', 'Expire_DOC', 'DOCNO', 'Doc_Section', 'REMARK', 'DAY', 'N16', 'REMARK2', 'ID_Cal', 'Expire_DOC_Date', 'KIND', 'Code', 'LOCATE', 'DEPT', 'NOTES', 'Eng_Name', 'Help', 'LOCATEDIVISION', 'LOCATEDEPT', 'LOCATESECTION', 'WAY_NAME', 'DOC_NO', 'CHANGE', 'SALER', 'CCC', 'New_Date', 'Type_MC', 'Range', 'Err', 'Risk', 'Special_Tool', 'Share_Tool', 'Location', 'Index', 'Expand_Code', 'The_Man', 'Tel_man', 'Field1', 'Field2', 'SM', 'I_E', 'IEVC', 'Note_1', 'Note_2', 'Note_3', 'Expire_Anumat', 'Reject', 'range_usage', 'Accept_criteria', 'Medical_Instruments', 'cc', 'Month_Recieve', 'notation', 'Replace_Year', 'GMDN', 'Eng_Names', 'date', 'year_est', 'Section_oder', 'date_su', 'date_calcu'], 'safe'],
            [['PERUNIT', 'QTY', 'FY', 'UNIT', 'EXPIRED', 'DEPREC', 'Year__Recieve', 'psuedo_sode', 'mount', 'Replace_Price', 'num_date', 'date_calcu1', 'Lifetime', 'wreck_values', 'wreck_values1'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pasadu::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Pasadu_ID' => $this->Pasadu_ID,
            'Oder_ID' => $this->Oder_ID,
            'RECEIVE' => $this->RECEIVE,
            'PERUNIT' => $this->PERUNIT,
            'QTY' => $this->QTY,
            'Expire_DOC_Date' => $this->Expire_DOC_Date,
            'FY' => $this->FY,
            'UNIT' => $this->UNIT,
            'EXPIRED' => $this->EXPIRED,
            'DEPREC' => $this->DEPREC,
            'ID_Refer' => $this->ID_Refer,
            'Expire_Anumat' => $this->Expire_Anumat,
            'Year__Recieve' => $this->Year__Recieve,
            'psuedo_sode' => $this->psuedo_sode,
            'mount' => $this->mount,
            'Replace_Price' => $this->Replace_Price,
            'date' => $this->date,
            'num_date' => $this->num_date,
            'date_su' => $this->date_su,
            'date_calcu' => $this->date_calcu,
            'date_calcu1' => $this->date_calcu1,
            'Lifetime' => $this->Lifetime,
            'wreck_values' => $this->wreck_values,
            'wreck_values1' => $this->wreck_values1,
            //'Accu_Depreciation' => $this->Accu_Depreciation,
            //'Values_end' => $this->Values_end,
            'AgeY' => $this->AgeY,
            'AgeM' => $this->AgeM,
            'AgeD' => $this->AgeD,
        ]);

        $query->andFilterWhere(['like', 'Noid', $this->Noid])
            ->andFilterWhere(['like', 'NOID_Old', $this->NOID_Old])
            ->andFilterWhere(['like', 'NAME', $this->NAME])
            ->andFilterWhere(['like', 'Model', $this->Model])
            ->andFilterWhere(['like', 'SERIAL_NO', $this->SERIAL_NO])
            ->andFilterWhere(['like', 'COMPANY', $this->COMPANY])
            ->andFilterWhere(['like', 'TYPE', $this->TYPE])
            ->andFilterWhere(['like', 'DIV_1234', $this->DIV_1234])
            ->andFilterWhere(['like', 'Div', $this->Div])
            ->andFilterWhere(['like', 'Code_DIV', $this->Code_DIV])
            ->andFilterWhere(['like', 'DIV_old', $this->DIV_old])
            ->andFilterWhere(['like', 'KMONEY', $this->KMONEY])
            ->andFilterWhere(['like', 'TMONEY', $this->TMONEY])
            ->andFilterWhere(['like', 'Expire_DOC', $this->Expire_DOC])
            ->andFilterWhere(['like', 'DOCNO', $this->DOCNO])
            ->andFilterWhere(['like', 'Doc_Section', $this->Doc_Section])
            ->andFilterWhere(['like', 'REMARK', $this->REMARK])
            ->andFilterWhere(['like', 'DAY', $this->DAY])
            ->andFilterWhere(['like', 'N16', $this->N16])
            ->andFilterWhere(['like', 'REMARK2', $this->REMARK2])
            ->andFilterWhere(['like', 'ID_Cal', $this->ID_Cal])
            ->andFilterWhere(['like', 'KIND', $this->KIND])
            ->andFilterWhere(['like', 'Code', $this->Code])
            ->andFilterWhere(['like', 'LOCATE', $this->LOCATE])
            ->andFilterWhere(['like', 'DEPT', $this->DEPT])
            ->andFilterWhere(['like', 'NOTES', $this->NOTES])
            ->andFilterWhere(['like', 'Eng_Name', $this->Eng_Name])
            ->andFilterWhere(['like', 'Help', $this->Help])
            ->andFilterWhere(['like', 'LOCATEDIVISION', $this->LOCATEDIVISION])
            ->andFilterWhere(['like', 'LOCATEDEPT', $this->LOCATEDEPT])
            ->andFilterWhere(['like', 'LOCATESECTION', $this->LOCATESECTION])
            ->andFilterWhere(['like', 'WAY_NAME', $this->WAY_NAME])
            ->andFilterWhere(['like', 'DOC_NO', $this->DOC_NO])
            ->andFilterWhere(['like', 'CHANGE', $this->CHANGE])
            ->andFilterWhere(['like', 'SALER', $this->SALER])
            ->andFilterWhere(['like', 'CCC', $this->CCC])
            ->andFilterWhere(['like', 'New_Date', $this->New_Date])
            ->andFilterWhere(['like', 'Type_MC', $this->Type_MC])
            ->andFilterWhere(['like', 'Range', $this->Range])
            ->andFilterWhere(['like', 'Err', $this->Err])
            ->andFilterWhere(['like', 'Risk', $this->Risk])
            ->andFilterWhere(['like', 'Special_Tool', $this->Special_Tool])
            ->andFilterWhere(['like', 'Share_Tool', $this->Share_Tool])
            ->andFilterWhere(['like', 'Location', $this->Location])
            ->andFilterWhere(['like', 'Index', $this->Index])
            ->andFilterWhere(['like', 'Expand_Code', $this->Expand_Code])
            ->andFilterWhere(['like', 'The_Man', $this->The_Man])
            ->andFilterWhere(['like', 'Tel_man', $this->Tel_man])
            ->andFilterWhere(['like', 'Field1', $this->Field1])
            ->andFilterWhere(['like', 'Field2', $this->Field2])
            ->andFilterWhere(['like', 'SM', $this->SM])
            ->andFilterWhere(['like', 'I_E', $this->I_E])
            ->andFilterWhere(['like', 'IEVC', $this->IEVC])
            ->andFilterWhere(['like', 'Note_1', $this->Note_1])
            ->andFilterWhere(['like', 'Note_2', $this->Note_2])
            ->andFilterWhere(['like', 'Note_3', $this->Note_3])
            ->andFilterWhere(['like', 'Reject', $this->Reject])
            ->andFilterWhere(['like', 'range_usage', $this->range_usage])
            ->andFilterWhere(['like', 'Accept_criteria', $this->Accept_criteria])
            ->andFilterWhere(['like', 'Medical_Instruments', $this->Medical_Instruments])
            ->andFilterWhere(['like', 'cc', $this->cc])
            ->andFilterWhere(['like', 'Month_Recieve', $this->Month_Recieve])
            ->andFilterWhere(['like', 'notation', $this->notation])
            ->andFilterWhere(['like', 'Replace_Year', $this->Replace_Year])
            ->andFilterWhere(['like', 'GMDN', $this->GMDN])
            ->andFilterWhere(['like', 'Eng_Names', $this->Eng_Names])
            ->andFilterWhere(['like', 'year_est', $this->year_est])
            ->andFilterWhere(['like', 'Section_oder', $this->Section_oder]);

        return $dataProvider;
    }
}

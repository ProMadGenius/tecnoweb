<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Administrador;

/**
 * AdministradorSearch represents the model behind the search form about `app\models\Administrador`.
 */
class AdministradorSearch extends Administrador
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admlogin', 'admpassword', 'admpadre', 'admfechinicial', 'admfechafinal', 'ustcod'], 'safe'],
            [['grupocod', 'admest'], 'integer'],
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
        $query = Administrador::find();

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
            'admfechinicial' => $this->admfechinicial,
            'admfechafinal' => $this->admfechafinal,
            'grupocod' => $this->grupocod,
            'admest' => $this->admest,
        ]);

        $query->andFilterWhere(['like', 'admlogin', $this->admlogin])
            ->andFilterWhere(['like', 'admpassword', $this->admpassword])
            ->andFilterWhere(['like', 'admpadre', $this->admpadre])
            ->andFilterWhere(['like', 'ustcod', $this->ustcod]);

        return $dataProvider;
    }
}

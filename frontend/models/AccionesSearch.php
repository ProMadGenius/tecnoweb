<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Acciones;

/**
 * AccionesSearch represents the model behind the search form about `app\models\Acciones`.
 */
class AccionesSearch extends Acciones
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['modcod', 'accest'], 'integer'],
            [['acccod'], 'number'],
            [['accdescrip', 'accparametros'], 'safe'],
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
        $query = Acciones::find();

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
            'modcod' => $this->modcod,
            'acccod' => $this->acccod,
            'accest' => $this->accest,
        ]);

        $query->andFilterWhere(['like', 'accdescrip', $this->accdescrip])
            ->andFilterWhere(['like', 'accparametros', $this->accparametros]);

        return $dataProvider;
    }
}

<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Detalleencuestapersona;

/**
 * DetalleencuestapersonaSearch represents the model behind the search form about `app\models\Detalleencuestapersona`.
 */
class DetalleencuestapersonaSearch extends Detalleencuestapersona
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idencuesta', 'idindicador', 'iddetalle'], 'integer'],
            [['descripcion', 'respuesta', 'usrcod'], 'safe'],
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
        $query = Detalleencuestapersona::find();

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
            'idencuesta' => $this->idencuesta,
            'idindicador' => $this->idindicador,
            'iddetalle' => $this->iddetalle,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'respuesta', $this->respuesta])
            ->andFilterWhere(['like', 'usrcod', $this->usrcod]);

        return $dataProvider;
    }
}

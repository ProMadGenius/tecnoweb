<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Persona;

/**
 * PersonaSearch represents the model behind the search form about `app\models\Persona`.
 */
class PersonaSearch extends Persona
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usrcod', 'usrpassword', 'usrnom', 'usrapp', 'usrapm', 'usrtelf', 'usremail', 'usrdir', 'usrfechanac', 'usrci', 'usrprof', 'usrfechainicio', 'usrfechafin', 'admlogin'], 'safe'],
            [['usrest', 'grupcod', 'tipousuario_id'], 'integer'],
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
        $query = Persona::find();

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
            'usrfechanac' => $this->usrfechanac,
            'usrfechainicio' => $this->usrfechainicio,
            'usrfechafin' => $this->usrfechafin,
            'usrest' => $this->usrest,
            'grupcod' => $this->grupcod,
            'tipousuario_id' => $this->tipousuario_id,
        ]);

        $query->andFilterWhere(['like', 'usrcod', $this->usrcod])
            ->andFilterWhere(['like', 'usrpassword', $this->usrpassword])
            ->andFilterWhere(['like', 'usrnom', $this->usrnom])
            ->andFilterWhere(['like', 'usrapp', $this->usrapp])
            ->andFilterWhere(['like', 'usrapm', $this->usrapm])
            ->andFilterWhere(['like', 'usrtelf', $this->usrtelf])
            ->andFilterWhere(['like', 'usremail', $this->usremail])
            ->andFilterWhere(['like', 'usrdir', $this->usrdir])
            ->andFilterWhere(['like', 'usrci', $this->usrci])
            ->andFilterWhere(['like', 'usrprof', $this->usrprof])
            ->andFilterWhere(['like', 'admlogin', $this->admlogin]);

        return $dataProvider;
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modelo".
 *
 * @property integer $id
 * @property string $descripcion
 *
 * @property Indicador[] $indicadors
 */
class Modelo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modelo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIndicadors()
    {
        return $this->hasMany(Indicador::className(), ['idmodelo' => 'id']);
    }
}

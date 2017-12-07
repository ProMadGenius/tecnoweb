<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "facultad".
 *
 * @property integer $id
 * @property string $descripcion
 *
 * @property Encuesta[] $encuestas
 */
class Facultad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'facultad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion'], 'string'],
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
    public function getEncuestas()
    {
        return $this->hasMany(Encuesta::className(), ['idfacultad' => 'id']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "indicador".
 *
 * @property integer $id
 * @property string $descripcion
 * @property string $metrica
 * @property integer $idmodelo
 *
 * @property Detalleencuestapersona[] $detalleencuestapersonas
 * @property Modelo $idmodelo0
 */
class Indicador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'indicador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idmodelo'], 'integer'],
            [['descripcion'], 'string', 'max' => 200],
            [['metrica'], 'string', 'max' => 400],
            [['idmodelo'], 'exist', 'skipOnError' => true, 'targetClass' => Modelo::className(), 'targetAttribute' => ['idmodelo' => 'id']],
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
            'metrica' => 'Metrica',
            'idmodelo' => 'Idmodelo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleencuestapersonas()
    {
        return $this->hasMany(Detalleencuestapersona::className(), ['idindicador' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdmodelo0()
    {
        return $this->hasOne(Modelo::className(), ['id' => 'idmodelo']);
    }
}

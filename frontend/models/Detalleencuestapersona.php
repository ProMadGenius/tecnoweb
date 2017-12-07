<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalleencuestapersona".
 *
 * @property integer $idencuesta
 * @property integer $idindicador
 * @property string $descripcion
 * @property string $respuesta
 * @property string $usrcod
 * @property integer $iddetalle
 *
 * @property Encuesta $idencuesta0
 * @property Indicador $idindicador0
 * @property Persona $usrcod0
 */
class Detalleencuestapersona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detalleencuestapersona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idencuesta', 'idindicador', 'descripcion', 'respuesta', 'usrcod', 'iddetalle'], 'required'],
            [['idencuesta', 'idindicador', 'iddetalle'], 'integer'],
            [['descripcion'], 'string', 'max' => 1000],
            [['respuesta'], 'string', 'max' => 25],
            [['usrcod'], 'string', 'max' => 15],
            [['idencuesta'], 'exist', 'skipOnError' => true, 'targetClass' => Encuesta::className(), 'targetAttribute' => ['idencuesta' => 'id']],
            [['idindicador'], 'exist', 'skipOnError' => true, 'targetClass' => Indicador::className(), 'targetAttribute' => ['idindicador' => 'id']],
            [['usrcod'], 'exist', 'skipOnError' => true, 'targetClass' => Persona::className(), 'targetAttribute' => ['usrcod' => 'usrcod']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idencuesta' => 'Idencuesta',
            'idindicador' => 'Idindicador',
            'descripcion' => 'Descripcion',
            'respuesta' => 'Respuesta',
            'usrcod' => 'Usrcod',
            'iddetalle' => 'Iddetalle',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdencuesta0()
    {
        return $this->hasOne(Encuesta::className(), ['id' => 'idencuesta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdindicador0()
    {
        return $this->hasOne(Indicador::className(), ['id' => 'idindicador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsrcod0()
    {
        return $this->hasOne(Persona::className(), ['usrcod' => 'usrcod']);
    }
}

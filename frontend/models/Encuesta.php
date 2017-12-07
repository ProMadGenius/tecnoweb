<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encuesta".
 *
 * @property integer $id
 * @property integer $idfacultad
 * @property string $fechainicio
 * @property string $fechafin
 *
 * @property Detalleencuestapersona[] $detalleencuestapersonas
 * @property Facultad $idfacultad0
 */
class Encuesta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encuesta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'idfacultad'], 'integer'],
            [['fechainicio', 'fechafin'], 'safe'],
            [['idfacultad'], 'exist', 'skipOnError' => true, 'targetClass' => Facultad::className(), 'targetAttribute' => ['idfacultad' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idfacultad' => 'Idfacultad',
            'fechainicio' => 'Fechainicio',
            'fechafin' => 'Fechafin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleencuestapersonas()
    {
        return $this->hasMany(Detalleencuestapersona::className(), ['idencuesta' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdfacultad0()
    {
        return $this->hasOne(Facultad::className(), ['id' => 'idfacultad']);
    }
}

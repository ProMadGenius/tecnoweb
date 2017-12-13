<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "detalleencuestapersona".
 *
 * @property integer $idencuesta
 * @property integer $idindicador
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
            [['idencuesta', 'idindicador', 'usrcod'], 'required'],
            [['idencuesta', 'idindicador', 'iddetalle'], 'integer'],
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


    public function getUsuarios()
    {
        $models = Persona::find()->asArray()->all();
        return ArrayHelper::map($models, 'usrcod', 'usrnom');
    }

    public function getIndicador()
    {
        $models = Indicador::find()->asArray()->all();
        return ArrayHelper::map($models, 'id', 'descripcion');
    }

    public function getTextoIndicador(){
        return $this->idindicador0->descripcion;
    }

    public function getNombreUsuario(){
        return $this->usrcod0->usrnom;
    }

    public function getTituloEncuesta(){
        return $this->idencuesta0->titulo;
    }


}

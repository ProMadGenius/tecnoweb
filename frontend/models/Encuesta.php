<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "encuesta".
 *
 * @property integer $id
 * @property integer $idfacultad
 * @property string $fechainicio
 * @property string $fechafin
 * @property string $titulo
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
            [['fechainicio', 'fechafin',], 'safe'],
            [['titulo','usuario_id'], 'string', 'max' => 255],
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
            'titulo' => 'Titulo',
            'usuario_id' => 'Usuario_id'
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

    public function getFacultades()
    {
        $models = Facultad::find()->asArray()->all();
        return ArrayHelper::map($models, 'id', 'descripcion');
    }
    //Funcion mia creada :'v recuperar nombre en vez de id
    public function getNombreFacultad(){
        return $this->idfacultad0->descripcion;
    }

    public function getUsuarios()
    {
        $models = Persona::find()->asArray()->all();
        return ArrayHelper::map($models, 'usrcod', 'usrnom');
    }


}

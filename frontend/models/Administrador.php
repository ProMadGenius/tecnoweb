<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "administrador".
 *
 * @property string $admlogin
 * @property string $admpassword
 * @property string $admpadre
 * @property string $admfechinicial
 * @property string $admfechafinal
 * @property integer $grupocod
 * @property integer $admest
 * @property string $ustcod
 *
 * @property Grupos[] $grupos
 * @property Modulos[] $modulos
 * @property Persona[] $personas
 */
class Administrador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'administrador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admlogin', 'admpassword', 'admpadre', 'admfechinicial', 'admfechafinal', 'grupocod', 'ustcod'], 'required'],
            [['admfechinicial', 'admfechafinal'], 'safe'],
            [['grupocod', 'admest'], 'integer'],
            [['admlogin', 'admpassword', 'admpadre', 'ustcod'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'admlogin' => 'Admlogin',
            'admpassword' => 'Admpassword',
            'admpadre' => 'Admpadre',
            'admfechinicial' => 'Admfechinicial',
            'admfechafinal' => 'Admfechafinal',
            'grupocod' => 'Grupocod',
            'admest' => 'Admest',
            'ustcod' => 'Ustcod',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupos()
    {
        return $this->hasMany(Grupos::className(), ['admlogin' => 'admlogin']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModulos()
    {
        return $this->hasMany(Modulos::className(), ['admlogin' => 'admlogin']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Persona::className(), ['admlogin' => 'admlogin']);
    }
}

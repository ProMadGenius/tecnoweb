<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modulos".
 *
 * @property integer $modcod
 * @property string $moddescrip
 * @property string $modobserv
 * @property string $modfile
 * @property integer $modnivel
 * @property integer $modest
 * @property string $admlogin
 *
 * @property Acciones[] $acciones
 * @property Modgrupo[] $modgrupos
 * @property Grupos[] $grupcods
 * @property Administrador $admlogin0
 */
class Modulos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modulos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['moddescrip', 'modobserv', 'modfile', 'modnivel', 'admlogin'], 'required'],
            [['modnivel', 'modest'], 'integer'],
            [['moddescrip', 'modobserv'], 'string', 'max' => 40],
            [['modfile'], 'string', 'max' => 60],
            [['admlogin'], 'string', 'max' => 15],
            [['admlogin'], 'exist', 'skipOnError' => true, 'targetClass' => Administrador::className(), 'targetAttribute' => ['admlogin' => 'admlogin']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'modcod' => 'Modcod',
            'moddescrip' => 'Moddescrip',
            'modobserv' => 'Modobserv',
            'modfile' => 'Modfile',
            'modnivel' => 'Modnivel',
            'modest' => 'Modest',
            'admlogin' => 'Admlogin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcciones()
    {
        return $this->hasMany(Acciones::className(), ['modcod' => 'modcod']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModgrupos()
    {
        return $this->hasMany(Modgrupo::className(), ['modcod' => 'modcod']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupcods()
    {
        return $this->hasMany(Grupos::className(), ['grupcod' => 'grupcod'])->viaTable('modgrupo', ['modcod' => 'modcod']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdmlogin0()
    {
        return $this->hasOne(Administrador::className(), ['admlogin' => 'admlogin']);
    }
}

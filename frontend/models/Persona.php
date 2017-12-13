<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persona".
 *
 * @property string $usrcod
 * @property string $usrpassword
 * @property string $usrnom
 * @property string $usrapp
 * @property string $usrapm
 * @property string $usrtelf
 * @property string $usremail
 * @property string $usrdir
 * @property string $usrfechanac
 * @property string $usrci
 * @property string $usrprof
 * @property string $usrfechainicio
 * @property string $usrfechafin
 * @property integer $usrest
 * @property integer $grupcod
 * @property string $admlogin
 * @property integer $tipousuario_id
 *
 * @property Detalleencuestapersona[] $detalleencuestapersonas
 * @property Administrador $admlogin0
 * @property Grupos $grupcod0
 * @property Tipousuario $tipousuario
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usrcod', 'usrpassword', 'usrnom', 'usrapp', 'usrfechainicio', 'usrfechafin', 'grupcod', 'admlogin', 'tipousuario_id'], 'required'],
            [['usrfechanac', 'usrfechainicio', 'usrfechafin'], 'safe'],
            [['usrest', 'grupcod', 'tipousuario_id'], 'integer'],
            [['usrcod', 'usrpassword', 'usrci', 'admlogin'], 'string', 'max' => 15],
            [['usrnom'], 'string', 'max' => 35],
            [['usrapp', 'usrapm'], 'string', 'max' => 25],
            [['usrtelf'], 'string', 'max' => 18],
            [['usremail', 'usrdir'], 'string', 'max' => 60],
            [['usrprof'], 'string', 'max' => 20],
            [['admlogin'], 'exist', 'skipOnError' => true, 'targetClass' => Administrador::className(), 'targetAttribute' => ['admlogin' => 'admlogin']],
            [['grupcod'], 'exist', 'skipOnError' => true, 'targetClass' => Grupos::className(), 'targetAttribute' => ['grupcod' => 'grupcod']],
            [['tipousuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tipousuario::className(), 'targetAttribute' => ['tipousuario_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usrcod' => 'Usrcod',
            'usrpassword' => 'Usrpassword',
            'usrnom' => 'Usrnom',
            'usrapp' => 'Usrapp',
            'usrapm' => 'Usrapm',
            'usrtelf' => 'Usrtelf',
            'usremail' => 'Usremail',
            'usrdir' => 'Usrdir',
            'usrfechanac' => 'Usrfechanac',
            'usrci' => 'Usrci',
            'usrprof' => 'Usrprof',
            'usrfechainicio' => 'Usrfechainicio',
            'usrfechafin' => 'Usrfechafin',
            'usrest' => 'Usrest',
            'grupcod' => 'Grupcod',
            'admlogin' => 'Admlogin',
            'tipousuario_id' => 'Tipousuario ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleencuestapersonas()
    {
        return $this->hasMany(Detalleencuestapersona::className(), ['usrcod' => 'usrcod']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdmlogin0()
    {
        return $this->hasOne(Administrador::className(), ['admlogin' => 'admlogin']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupcod0()
    {
        return $this->hasOne(Grupos::className(), ['grupcod' => 'grupcod']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipousuario()
    {
        return $this->hasOne(Tipousuario::className(), ['id' => 'tipousuario_id']);
    }
}

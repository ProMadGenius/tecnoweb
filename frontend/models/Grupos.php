<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupos".
 *
 * @property integer $grupcod
 * @property string $grupdescrip
 * @property string $grupobserv
 * @property integer $grupest
 * @property string $admlogin
 *
 * @property Administrador $admlogin0
 * @property Modgrupo[] $modgrupos
 * @property Modulos[] $modcods
 * @property Persona[] $personas
 */
class Grupos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grupos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grupdescrip', 'grupobserv', 'admlogin'], 'required'],
            [['grupest'], 'integer'],
            [['grupdescrip'], 'string', 'max' => 20],
            [['grupobserv'], 'string', 'max' => 50],
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
            'grupcod' => 'Grupcod',
            'grupdescrip' => 'Grupdescrip',
            'grupobserv' => 'Grupobserv',
            'grupest' => 'Grupest',
            'admlogin' => 'Admlogin',
        ];
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
    public function getModgrupos()
    {
        return $this->hasMany(Modgrupo::className(), ['grupcod' => 'grupcod']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModcods()
    {
        return $this->hasMany(Modulos::className(), ['modcod' => 'modcod'])->viaTable('modgrupo', ['grupcod' => 'grupcod']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Persona::className(), ['grupcod' => 'grupcod']);
    }
}

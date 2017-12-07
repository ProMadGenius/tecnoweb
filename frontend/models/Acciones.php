<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "acciones".
 *
 * @property integer $modcod
 * @property string $acccod
 * @property string $accdescrip
 * @property string $accparametros
 * @property integer $accest
 *
 * @property Modulos $modcod0
 */
class Acciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['modcod', 'acccod'], 'required'],
            [['modcod', 'accest'], 'integer'],
            [['acccod'], 'number'],
            [['accdescrip'], 'string', 'max' => 60],
            [['accparametros'], 'string', 'max' => 40],
            [['modcod'], 'exist', 'skipOnError' => true, 'targetClass' => Modulos::className(), 'targetAttribute' => ['modcod' => 'modcod']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'modcod' => 'Modcod',
            'acccod' => 'Acccod',
            'accdescrip' => 'Accdescrip',
            'accparametros' => 'Accparametros',
            'accest' => 'Accest',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModcod0()
    {
        return $this->hasOne(Modulos::className(), ['modcod' => 'modcod']);
    }
}

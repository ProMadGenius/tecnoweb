<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modgrupo".
 *
 * @property integer $grupcod
 * @property integer $modcod
 * @property string $modgrupfechinstall
 *
 * @property Grupos $grupcod0
 * @property Modulos $modcod0
 */
class Modgrupo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modgrupo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grupcod', 'modcod', 'modgrupfechinstall'], 'required'],
            [['grupcod', 'modcod'], 'integer'],
            [['modgrupfechinstall'], 'safe'],
            [['grupcod'], 'exist', 'skipOnError' => true, 'targetClass' => Grupos::className(), 'targetAttribute' => ['grupcod' => 'grupcod']],
            [['modcod'], 'exist', 'skipOnError' => true, 'targetClass' => Modulos::className(), 'targetAttribute' => ['modcod' => 'modcod']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grupcod' => 'Grupcod',
            'modcod' => 'Modcod',
            'modgrupfechinstall' => 'Modgrupfechinstall',
        ];
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
    public function getModcod0()
    {
        return $this->hasOne(Modulos::className(), ['modcod' => 'modcod']);
    }
}

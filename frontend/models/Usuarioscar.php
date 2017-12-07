<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarioscar".
 *
 * @property integer $idusrscar
 */
class Usuarioscar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarioscar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idusrscar'], 'required'],
            [['idusrscar'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idusrscar' => 'Idusrscar',
        ];
    }
}

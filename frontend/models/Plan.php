<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "plan".
 *
 * @property integer $id_plan
 * @property integer $valor
 * @property integer $puntos
 * @property string $nombre
 */
class Plan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['valor', 'puntos'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_plan' => 'Id Plan',
            'valor' => 'Valor',
            'puntos' => 'Puntos',
            'nombre' => 'Nombre',
        ];
    }
}

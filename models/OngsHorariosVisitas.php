<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ongs_horarios_visitas".
 *
 * @property integer $id
 * @property string $horario
 * @property integer $excluido
 * @property string $created
 * @property string $modified
 * @property integer $ongs_id
 *
 * @property AgendamentoVisita[] $agendamentoVisitas
 * @property Ongs $ongs
 */
class OngsHorariosVisitas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ongs_horarios_visitas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['horario', 'ongs_id'], 'required'],
            [['horario', 'created', 'modified'], 'safe'],
            [['excluido', 'ongs_id'], 'integer'],
            [['ongs_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ongs::className(), 'targetAttribute' => ['ongs_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'horario' => 'Horario',
            'excluido' => 'Excluido',
            'created' => 'Created',
            'modified' => 'Modified',
            'ongs_id' => 'Ongs ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgendamentoVisitas()
    {
        return $this->hasMany(AgendamentoVisita::className(), ['ongs_horarios_visitas_id' => 'id', 'ongs_horarios_visitas_ongs_id' => 'ongs_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOngs()
    {
        return $this->hasOne(Ongs::className(), ['id' => 'ongs_id']);
    }
}

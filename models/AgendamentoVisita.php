<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agendamento_visita".
 *
 * @property integer $id
 * @property integer $excluido
 * @property string $created
 * @property string $modified
 * @property integer $apadrinhamentos_id
 * @property integer $apadrinhamentos_padrinho_id
 * @property integer $apadrinhamentos_afilhado_id
 * @property integer $ongs_horarios_visitas_id
 * @property integer $ongs_horarios_visitas_ongs_id
 *
 * @property Apadrinhamentos $apadrinhamentos
 * @property OngsHorariosVisitas $ongsHorariosVisitas
 */
class AgendamentoVisita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agendamento_visita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['excluido', 'apadrinhamentos_id', 'apadrinhamentos_padrinho_id', 'apadrinhamentos_afilhado_id', 'ongs_horarios_visitas_id', 'ongs_horarios_visitas_ongs_id'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['apadrinhamentos_id', 'apadrinhamentos_padrinho_id', 'apadrinhamentos_afilhado_id', 'ongs_horarios_visitas_id', 'ongs_horarios_visitas_ongs_id'], 'required'],
            [['apadrinhamentos_id', 'apadrinhamentos_padrinho_id', 'apadrinhamentos_afilhado_id'], 'exist', 'skipOnError' => true, 'targetClass' => Apadrinhamentos::className(), 'targetAttribute' => ['apadrinhamentos_id' => 'id', 'apadrinhamentos_padrinho_id' => 'padrinho_id', 'apadrinhamentos_afilhado_id' => 'afilhado_id']],
            [['ongs_horarios_visitas_id', 'ongs_horarios_visitas_ongs_id'], 'exist', 'skipOnError' => true, 'targetClass' => OngsHorariosVisitas::className(), 'targetAttribute' => ['ongs_horarios_visitas_id' => 'id', 'ongs_horarios_visitas_ongs_id' => 'ongs_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'excluido' => 'Excluido',
            'created' => 'Created',
            'modified' => 'Modified',
            'apadrinhamentos_id' => 'Apadrinhamentos ID',
            'apadrinhamentos_padrinho_id' => 'Apadrinhamentos Padrinho ID',
            'apadrinhamentos_afilhado_id' => 'Apadrinhamentos Afilhado ID',
            'ongs_horarios_visitas_id' => 'Ongs Horarios Visitas ID',
            'ongs_horarios_visitas_ongs_id' => 'Ongs Horarios Visitas Ongs ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApadrinhamentos()
    {
        return $this->hasOne(Apadrinhamentos::className(), ['id' => 'apadrinhamentos_id', 'padrinho_id' => 'apadrinhamentos_padrinho_id', 'afilhado_id' => 'apadrinhamentos_afilhado_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOngsHorariosVisitas()
    {
        return $this->hasOne(OngsHorariosVisitas::className(), ['id' => 'ongs_horarios_visitas_id', 'ongs_id' => 'ongs_horarios_visitas_ongs_id']);
    }
}

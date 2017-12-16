<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "apadrinhamentos".
 *
 * @property integer $id
 * @property integer $excluido
 * @property string $created
 * @property string $modified
 * @property string $apadrinhamentoscol
 * @property integer $padrinho_id
 * @property integer $afilhado_id
 *
 * @property AgendamentoVisita[] $agendamentoVisitas
 * @property Pessoas $padrinho
 * @property Pessoas $afilhado
 */
class Apadrinhamentos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apadrinhamentos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['excluido', 'padrinho_id', 'afilhado_id'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['padrinho_id', 'afilhado_id'], 'required'],
            [['apadrinhamentoscol'], 'string', 'max' => 45],
            [['padrinho_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pessoas::className(), 'targetAttribute' => ['padrinho_id' => 'id']],
            [['afilhado_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pessoas::className(), 'targetAttribute' => ['afilhado_id' => 'id']],
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
            'apadrinhamentoscol' => 'Apadrinhamentoscol',
            'padrinho_id' => 'Padrinho ID',
            'afilhado_id' => 'Afilhado ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgendamentoVisitas()
    {
        return $this->hasMany(AgendamentoVisita::className(), ['apadrinhamentos_id' => 'id', 'apadrinhamentos_padrinho_id' => 'padrinho_id', 'apadrinhamentos_afilhado_id' => 'afilhado_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPadrinho()
    {
        return $this->hasOne(Pessoas::className(), ['id' => 'padrinho_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAfilhado()
    {
        return $this->hasOne(Pessoas::className(), ['id' => 'afilhado_id']);
    }
}

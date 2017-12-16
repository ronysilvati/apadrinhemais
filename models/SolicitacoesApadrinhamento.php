<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "solicitacoes_apadrinhamento".
 *
 * @property integer $id
 * @property integer $qtd_pessoas_desejo_apadrinhar
 * @property string $sexo_apadrinhados
 * @property string $motivo_apadrinhar
 * @property string $status_solicitacao
 * @property integer $excluido
 * @property string $created
 * @property string $modified
 * @property integer $pessoas_id
 * @property integer $ongs_id
 *
 * @property Ongs $ongs
 * @property Pessoas $pessoas
 */
class SolicitacoesApadrinhamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'solicitacoes_apadrinhamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['qtd_pessoas_desejo_apadrinhar', 'excluido', 'pessoas_id', 'ongs_id'], 'integer'],
            [['sexo_apadrinhados', 'motivo_apadrinhar', 'status_solicitacao', 'pessoas_id', 'ongs_id'], 'required'],
            [['created', 'modified'], 'safe'],
            [['sexo_apadrinhados', 'status_solicitacao'], 'string', 'max' => 45],
            [['motivo_apadrinhar'], 'string', 'max' => 255],
            [['ongs_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ongs::className(), 'targetAttribute' => ['ongs_id' => 'id']],
            [['pessoas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pessoas::className(), 'targetAttribute' => ['pessoas_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'qtd_pessoas_desejo_apadrinhar' => 'Apadrinhar',
            'sexo_apadrinhados' => 'Sexo Apadrinhados',
            'motivo_apadrinhar' => 'Motivo para Apadrinhar',
            'status_solicitacao' => 'Status Solicitação',
            'excluido' => 'Excluido',
            'created' => 'Created',
            'modified' => 'Modified',
            'pessoas_id' => 'Pessoas ID',
            'ongs_id' => 'Ongs ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOngs()
    {
        return $this->hasOne(Ongs::className(), ['id' => 'ongs_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPessoas()
    {
        return $this->hasOne(Pessoas::className(), ['id' => 'pessoas_id']);
    }
}

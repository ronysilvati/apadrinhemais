<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ongs".
 *
 * @property integer $id
 * @property string $cnpj
 * @property string $nome_fantasia
 * @property string $endereco
 * @property string $requisitos_apadrinhamento
 * @property integer $excluido
 * @property string $created
 * @property string $modified
 *
 * @property OngsHorariosVisitas[] $ongsHorariosVisitas
 * @property SolicitacoesApadrinhamento[] $solicitacoesApadrinhamentos
 * @property Usuarios[] $usuarios
 */
class Ongs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ongs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cnpj', 'nome_fantasia', 'endereco'], 'required'],
            [['requisitos_apadrinhamento'], 'string'],
            [['excluido'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['cnpj'], 'string', 'max' => 14],
            [['nome_fantasia', 'endereco'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cnpj' => 'Cnpj',
            'nome_fantasia' => 'Nome Fantasia',
            'endereco' => 'Endereco',
            'requisitos_apadrinhamento' => 'Requisitos Apadrinhamento',
            'excluido' => 'Excluido',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOngsHorariosVisitas()
    {
        return $this->hasMany(OngsHorariosVisitas::className(), ['ongs_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitacoesApadrinhamentos()
    {
        return $this->hasMany(SolicitacoesApadrinhamento::className(), ['ongs_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::className(), ['ongs_id' => 'id']);
    }
}

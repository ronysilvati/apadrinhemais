<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pessoas".
 *
 * @property integer $id
 * @property string $nome
 * @property string $nascimento
 * @property string $tipo_pessoa
 * @property integer $excluido
 * @property string $created
 * @property string $modified
 * @property string $profissao
 * @property string $estado_civil
 * @property integer $total_pessoas_reside
 * @property string $endereco
 * @property string $celular
 * @property string $email
 * @property string $sexo
 *
 * @property Apadrinhamentos[] $apadrinhamentos
 * @property Apadrinhamentos[] $apadrinhamentos0
 * @property ApadrinhamentosDisponiveis[] $apadrinhamentosDisponiveis
 * @property OngsDoacoes[] $ongDoacoes
 * @property SolicitacoesApadrinhamento[] $solicitacoesApadrinhamentos
 * @property Usuarios[] $usuarios
 */
class Pessoas extends \yii\db\ActiveRecord
{
    const SCENARIO_APADRINHADO = 'apadrinhado';
    const SCENARIO_PADRINHO = 'padrinho';
    const SCENARIO_GESTOR = 'gestor';

    public function scenarios()
    {
        return [
            self::SCENARIO_APADRINHADO => ['username', 'password'],
            self::SCENARIO_PADRINHO => ['nome', 'nascimento', 'tipo_pessoa','sexo','profissao','estado_civil','endereco','celular','email'],
            self::SCENARIO_GESTOR => ['nome', 'nascimento', 'tipo_pessoa','sexo','profissao','estado_civil','endereco','celular','email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pessoas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'nascimento', 'tipo_pessoa', 'sexo'], 'required','on' => self::SCENARIO_APADRINHADO],
            [['nome', 'nascimento', 'tipo_pessoa', 'sexo','profissao','estado_civil','endereco','celular','email'], 'required','on' => self::SCENARIO_PADRINHO],
            [['nome', 'nascimento', 'tipo_pessoa', 'sexo','profissao','estado_civil','endereco','celular','email'], 'required','on' => self::SCENARIO_GESTOR],
            [['nascimento', 'created', 'modified'], 'safe'],
            [['excluido', 'total_pessoas_reside'], 'integer'],
            [['nome', 'tipo_pessoa', 'profissao', 'estado_civil'], 'string', 'max' => 45],
            [['endereco'], 'string', 'max' => 100],
            [['celular'], 'string', 'max' => 13],
            [['email'], 'string', 'max' => 60],
            [['sexo'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'nascimento' => 'Nascimento',
            'tipo_pessoa' => 'Tipo Pessoa',
            'excluido' => 'Excluido',
            'created' => 'Created',
            'modified' => 'Modified',
            'profissao' => 'Profissao',
            'estado_civil' => 'Estado Civil',
            'total_pessoas_reside' => 'Total Pessoas Reside',
            'endereco' => 'Endereco',
            'celular' => 'Celular',
            'email' => 'Email',
            'sexo' => 'Sexo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApadrinhamentos()
    {
        return $this->hasMany(Apadrinhamentos::className(), ['padrinho_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApadrinhamentos0()
    {
        return $this->hasMany(Apadrinhamentos::className(), ['afilhado_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApadrinhamentosDisponiveis()
    {
        return $this->hasMany(ApadrinhamentosDisponiveis::className(), ['pessoas_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOngDoacoes()
    {
        return $this->hasMany(OngsDoacoes::className(), ['pessoas_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitacoesApadrinhamentos()
    {
        return $this->hasMany(SolicitacoesApadrinhamento::className(), ['pessoas_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::className(), ['pessoas_id' => 'id']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "apadrinhamentos_disponiveis".
 *
 * @property integer $id
 * @property string $descricao
 * @property integer $excluido
 * @property string $created
 * @property string $modified
 * @property integer $pessoas_id
 *
 * @property Pessoas $pessoas
 */
class ApadrinhamentosDisponiveis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apadrinhamentos_disponiveis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao', 'pessoas_id'], 'required'],
            [['excluido', 'pessoas_id'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['descricao'], 'string', 'max' => 255],
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
            'descricao' => 'Descricao',
            'excluido' => 'Excluido',
            'created' => 'Created',
            'modified' => 'Modified',
            'pessoas_id' => 'Pessoas ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPessoas()
    {
        return $this->hasOne(Pessoas::className(), ['id' => 'pessoas_id']);
    }
}

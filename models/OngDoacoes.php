<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ong_doacoes".
 *
 * @property integer $id
 * @property double $valor
 * @property string $celular
 * @property string $email
 * @property integer $confirmado
 * @property integer $excluido
 * @property string $created
 * @property string $modified
 * @property integer $pessoas_id
 *
 * @property Pessoas $pessoas
 */
class OngDoacoes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ong_doacoes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['valor', 'celular', 'pessoas_id'], 'required'],
            [['valor'], 'number'],
            [['confirmado', 'excluido', 'pessoas_id'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['celular'], 'string', 'max' => 11],
            [['email'], 'string', 'max' => 45],
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
            'valor' => 'Valor',
            'celular' => 'Celular',
            'email' => 'Email',
            'confirmado' => 'Confirmado',
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

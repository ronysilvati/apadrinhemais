<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property integer $id
 * @property string $login
 * @property string $senha
 * @property integer $excluido
 * @property string $created
 * @property string $modified
 * @property integer $pessoas_id
 * @property integer $ongs_id
 *
 * @property Pessoas $pessoas
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'senha', 'excluido', 'pessoas_id'], 'required'],
            [['excluido', 'pessoas_id', 'ongs_id'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['login', 'senha'], 'string', 'max' => 45],
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
            'login' => 'Login',
            'senha' => 'Senha',
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
    public function getPessoas()
    {
        return $this->hasOne(Pessoas::className(), ['id' => 'pessoas_id']);
    }
}

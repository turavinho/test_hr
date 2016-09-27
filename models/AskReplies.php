<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%ask_replies}}".
 *
 * @property integer $id
 * @property string $quest_id
 * @property string $res_id
 * @property string $value
 */
class AskReplies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ask_replies}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quest_id', 'res_id'], 'integer'],
            [['value'], 'required'],
            [['value'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quest_id' => 'id анкеты',
            'res_id' => 'id ответа',
            'value' => 'Значение',
        ];
    }

    /**
     * @inheritdoc
     * @return AskRepliesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AskRepliesQuery(get_called_class());
    }
}

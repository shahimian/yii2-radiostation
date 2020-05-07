<?php

namespace shahimian\radiostation\models;

use Yii;

/**
 * This is the model class for table "radio_source".
 *
 * @property int $source_id
 * @property string|null $source_audio
 * @property string|null $source_picture
 * @property string|null $datetime
 */
class RadioSource extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'radio_source';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['datetime'], 'safe'],
            [['source_audio', 'source_picture'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'source_id' => 'Source ID',
            'source_audio' => 'Source Audio',
            'source_picture' => 'Source Picture',
            'datetime' => 'Datetime',
        ];
    }
}

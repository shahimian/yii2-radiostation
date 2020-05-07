<?php

namespace shahimian\radiostation\models;

use Yii;
use yii\web\UploadedFile;

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
    public $source_audio_file;
    public $source_picture_file;

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
            [['source_audio_file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'mp3'],
            [['source_picture_file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg, png'],
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

    public function upload(){
        if($this->validate()){
            $this->source_audio_file->saveAs('uploads/' . $this->source_audio_file->basename . '.' . $this->source_audio_file->extension);
            $this->source_picture_file->saveAs('uploads/' . $this->source_picture_file->basename . '.' . $this->source_picture_file->extension);
            return true;
        }
        return false;
    }
}

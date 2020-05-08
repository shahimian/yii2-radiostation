<?php

/**
 * Created by VSCode
 * User: Shahimian
 * Date: 2019-10-16
 * Time: 10:39:20
 */

namespace shahimian\radiostation;

use Yii;
use yii\base\Widget;
use yii\db\Migration;
use shahimian\radiostation\models\migrations\RadioSource as RSMigration;
use shahimian\radiostation\models\RadioSource;

class RadioGadget extends Widget {

    public $source_id;

    public function run(){
        $source = null;
        if($this->source_id)
            $source = RadioSource::find()->where(['source_id' => $this->source_id])->asArray()->one();
        $rows = RadioSource::find()->asArray()->all();
        return $this->render('radio-gadget', [
            'rows' => $rows,
            'source' => $source,
        ]);
    }
}

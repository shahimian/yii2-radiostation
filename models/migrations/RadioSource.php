<?php
/**
 * Created by VSCode
 * User: Shahimian
 * Date: 2019-09-07
 * Time: 11:25:58
 */

namespace shahimian\radiostation\models\migrations;


use yii\db\Migration;

class RadioSource extends Migration
{

    function up()
    {
        if($this->getDb()->schema->getTableSchema('radio_source') == false){
            $this->createTable('radio_source', [
                'source_id' => $this->bigPrimaryKey(),
                'source_audio' => $this->string(),
                'source_picture' => $this->string(),
                'datetime' => $this->datetime(),
            ], 'CHARACTER SET utf8 COLLATE utf8_persian_ci ENGINE=InnoDB');
        }
        return parent::up();
    }

}

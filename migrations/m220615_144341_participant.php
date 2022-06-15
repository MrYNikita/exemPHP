<?php

use yii\db\Migration;

/**
 * Class m220615_144341_participant
 */
class m220615_144341_participant extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("participant",[
            'id'=>$this->primaryKey(),
            'idUser'=>$this->integer(),
            'idProject'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220615_144341_participant cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220615_144341_participant cannot be reverted.\n";

        return false;
    }
    */
}

<?php

use yii\db\Migration;

/**
 * Class m220615_145501_manager
 */
class m220615_145501_manager extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("manager",[
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
        echo "m220615_145501_manager cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220615_145501_manager cannot be reverted.\n";

        return false;
    }
    */
}

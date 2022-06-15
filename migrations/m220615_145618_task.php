<?php

use yii\db\Migration;

/**
 * Class m220615_145618_task
 */
class m220615_145618_task extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("task",[
            'id'=>$this->primaryKey(),
            'name'=>$this->integer(),
            'dateBegin'=>$this->date(),
            'dateFinish'=>$this->date(),
            'idProject'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220615_145618_task cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220615_145618_task cannot be reverted.\n";

        return false;
    }
    */
}

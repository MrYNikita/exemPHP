<?php

use yii\db\Migration;

/**
 * Class m220615_150117_performance
 */
class m220615_150117_performance extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("performance",[
            'id'=>$this->primaryKey(),
            'idTask'=>$this->integer(),
            'idEmployee'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220615_150117_performance cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220615_150117_performance cannot be reverted.\n";

        return false;
    }
    */
}

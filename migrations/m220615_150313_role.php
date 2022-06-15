<?php

use yii\db\Migration;

/**
 * Class m220615_150313_role
 */
class m220615_150313_role extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("role",[
            'id'=>$this->primaryKey(),
            'name'=>$this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220615_150313_role cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220615_150313_role cannot be reverted.\n";

        return false;
    }
    */
}

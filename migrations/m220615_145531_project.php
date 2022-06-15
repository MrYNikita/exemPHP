<?php

use yii\db\Migration;

/**
 * Class m220615_145531_project
 */
class m220615_145531_project extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("project",[
            'id'=>$this->primaryKey(),
            'name'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220615_145531_project cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220615_145531_project cannot be reverted.\n";

        return false;
    }
    */
}

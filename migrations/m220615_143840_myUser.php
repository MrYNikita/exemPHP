<?php

use yii\db\Migration;

/**
 * Class m220615_143840_myUser
 */
class m220615_143840_myUser extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("myUser",[
            'id'=>$this->primaryKey(),
            'login'=>$this->string(),
            'password'=>$this->string(),
            'nameFirst'=>$this->string(),
            'nameLast'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220615_143840_myUser cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220615_143840_myUser cannot be reverted.\n";

        return false;
    }
    */
}

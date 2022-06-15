<?php

use yii\db\Migration;

/**
 * Class m220615_145057_employee
 */
class m220615_145057_employee extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("employee",[
            'id'=>$this->primaryKey(),
            'idRole'=>$this->integer(),
            'idUser'=>$this->integer(),
            'idProject'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220615_145057_employee cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220615_145057_employee cannot be reverted.\n";

        return false;
    }
    */
}

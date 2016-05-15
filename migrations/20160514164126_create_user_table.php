<?php

use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
  /*  public function change()
    {

    }
  */
    public function up()
    {
      $users = $this->table('users');
      $users->addColumn('first_name', 'string')
          ->addColumn('last_name', 'string')
          ->addColumn('email', 'string')
          ->addColumn('password', 'string')
          ->addColumn('active', 'integer', ['default' => '0'])
          ->addColumn('access_level', 'integer', ['default' => '1'])
          ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
          ->addColumn('updated_at', 'datetime', ['null' => true])
          ->addIndex(['email'], ['unique' => true])
          ->save();
    }

    public function down()
    {
      $this->dropTable('users');
    }

}

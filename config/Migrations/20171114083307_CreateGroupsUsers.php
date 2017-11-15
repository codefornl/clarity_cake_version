<?php
use Migrations\AbstractMigration;

class CreateGroupsUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('groups_users');
        $table->addColumn('group_id', 'integer', [
          'limit' => 11
        ])->addForeignKey('group_id', 'groups', 'id');
        $table->addColumn('user_id', 'integer', [
          'limit' => 11
        ])->addForeignKey('user_id', 'users', 'id');
        $table->addColumn('role', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}

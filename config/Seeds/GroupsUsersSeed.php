<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class GroupsUsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'group_id'    => 1,
                'user_id'   => 1,
                'role'   => 'curator',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],[
              'group_id'    => 2,
              'user_id'   => 2,
              'role'   => 'curator',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ]
        ];

        $table = $this->table('groups_users');
        $table->insert($data)->save();
    }
}

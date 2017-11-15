<?php
use Migrations\AbstractSeed;

/**
 * Group seed.
 */
class GroupsSeed extends AbstractSeed
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
                'name'    => 'Code For NL',
                'image'   => 'http://www.codefor.nl/img/larger_CfNL.png',
                'description' => 'This list is maintained by <a href="http://www.codefor.nl">Code For NL</a>. The list contains people, organisations, projects and applications that are open source and about eDemocracy.',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],[
                'name'    => 'Clarity',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ]
        ];

        $table = $this->table('groups');
        $table->insert($data)->save();
    }
}

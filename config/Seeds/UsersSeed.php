<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'id' => 1,
                'name'    => 'Johan Groenen',
                'email'   => 'johan@codefor.nl',
                'image'   => 'https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAArrAAAAJDI3ZDk5NWNmLTk0OGUtNDQ2OS04YWU0LTVhYzRkNGMwYmJlYg.jpg',
                'token'   => md5(uniqid(rand(), true)),
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'name'    => 'Milo van der Linden',
                'email'   => 'milo@codefor.nl',
                'token'   => md5(uniqid(rand(), true)),
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],[
                'id' => 3,
                'name'    => 'Ivonne Jansen-Dings',
                'email'   => 'ivonne@waag.org',
                'token'   => md5(uniqid(rand(), true)),
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ]
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}

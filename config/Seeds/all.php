<?php
use Migrations\AbstractSeed;

/**
 * Group seed.
 */
class all extends AbstractSeed
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
      $this->call('GroupsSeed');
      $this->call('UsersSeed');
      $this->call('GroupsUsersSeed');
      $this->call('ProjectsSeed');

    }
}

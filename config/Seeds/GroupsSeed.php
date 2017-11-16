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
            "id" => 4,
            "name" => "Clarity",
            "slug" => preg_replace('/[[:space:]]+/', '-', strtolower("Clarity")) . '-' . uniqid(),
            "image" => "https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAArrAAAAJDI3ZDk5NWNmLTk0OGUtNDQ2OS04YWU0LTVhYzRkNGMwYmJlYg.jpg",
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s')
          ],
          [
            'id' => 5,
            'name' => 'Code For NL',
            "slug" => preg_replace('/[[:space:]]+/', '-', strtolower("Code For NL")) . '-' . uniqid(),
            'image'   => 'http://www.codefor.nl/img/larger_CfNL.png',
            'description' => 'This list is maintained by <a href="http://www.codefor.nl">Code For NL</a>. The list contains people, organisations, projects and applications that are open source and about eDemocracy.',
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s')
          ],[
            "id" => 20,
        		"name" => "Project Repositories",
        		"slug" => preg_replace('/[[:space:]]+/', '-', strtolower("Project Repositories")) . '-' . uniqid(),
        		"image" => "https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAArrAAAAJDI3ZDk5NWNmLTk0OGUtNDQ2OS04YWU0LTVhYzRkNGMwYmJlYg.jpg",
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s')
          ],[
            "id" =>  21,
    				"name" =>  "Open Data Platforms",
    				"slug" =>  "open-data-platforms-50219f7e",
    				"image" =>  "https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAArrAAAAJDI3ZDk5NWNmLTk0OGUtNDQ2OS04YWU0LTVhYzRkNGMwYmJlYg.jpg",
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s')
          ],[
            "id" => 23,
    				"name" => "Rescale EU",
    				"slug" => preg_replace('/[[:space:]]+/', '-', strtolower("Rescale EU")) . '-' . uniqid(),
    				"description" => "",
    				"image" => "https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAArrAAAAJDI3ZDk5NWNmLTk0OGUtNDQ2OS04YWU0LTVhYzRkNGMwYmJlYg.jpg",
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s')
          ],[
            "id" => 24,
    				"name" => "Waag Society",
    				"slug" => preg_replace('/[[:space:]]+/', '-', strtolower("Waag Society")) . '-' . uniqid(),
    				"description" => "",
    				"image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPnEAuOGUcn9gLofcDeaEKx60B1EdCMRp5UM1l29N1GpTDwWvf_g",
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s')
          ]
        ];

        $table = $this->table('groups');
        $table->insert($data)->save();
    }
}

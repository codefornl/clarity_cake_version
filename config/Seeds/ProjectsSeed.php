<?php
use Migrations\AbstractSeed;

/**
 * Projects seed.
 */
class ProjectsSeed extends AbstractSeed
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
              'name'    => 'OGP Toolbox',
              'description'   => 'The OGP Toolbox is a free software initially developed by Etalab, the Prime Minister taskforce in charge of open data and open government French policy, on behalf of the Open Government Partnership community. Co-created by the open government and the civic tech international community throughout 2016, the OGP Toolbox is one of the main deliverables of the OGP Global Summit hackathon (7, 8 and 9 December 2016). In order to guarantee sustainability, independence and the capacity to associate various actors at the international level in the long term, the governance of the project has, since, evolved. In February 2017, the OGPToolbox.org association was created to fulfill the mission associated to the platform. The object of the association is to empower public, private and civil society actors worldwide by sharing digital tools and resources, in order to promote democracy, transparency, participation and collaboration. The goals of the association, using the OGPToolbox.org platform and every means at its disposal, are to: allow actors to identify the digital tools better suited to their needs, by collecting and describing them in the most objective way possible; collaborate to make digital tools more accessible and easier to use; create favourable conditions to further the development of better digital tools; foster the sharing of experience between actors and giving feedback on existing tools. To participate to the activities of the OGPToolbox.org association, follow the latest news on the forum.',
              'image'   => 'https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAArrAAAAJDI3ZDk5NWNmLTk0OGUtNDQ2OS04YWU0LTVhYzRkNGMwYmJlYg.jpg',
              'type' => 'Catalog',
              'country' => 'France',
              'category' => 'FirstCategory',
              'organisation' => 'OGPToolbox.org association',
              'website' => 'https://ogptoolbox.org',
              'published' => true,
              'created' => date('Y-m-d H:i:s'),
              'modified' => date('Y-m-d H:i:s'),
              'cbase_id' => 1
          ]
        ];

        $table = $this->table('projects');
        $table->insert($data)->save();
    }
}

<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * JobCategories seed.
 */
class JobCategoriesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name" => "Name1",
                "sort_order" => 1, 
                "created_by" => 1
            ]
        ];

        $table = $this->table('job_categories');
        $table->insert($data)->save();
    }
}

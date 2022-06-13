<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * JobTypes seed.
 */
class JobTypesSeed extends AbstractSeed
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
                "job_category_id" => 1, 
                "created_by" => 1
            ]
        ];

        $table = $this->table('job_types');
        $table->insert($data)->save();
    }
}

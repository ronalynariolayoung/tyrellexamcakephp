<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Personalities seed.
 */
class PersonalitiesSeed extends AbstractSeed
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
                "name" => "Name1"
            ]
        ];

        $table = $this->table('personalities');
        $table->insert($data)->save();
    }
}

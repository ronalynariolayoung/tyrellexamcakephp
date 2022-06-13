<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Affiliates seed.
 */
class AffiliatesSeed extends AbstractSeed
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
        $data = [];

        for($i = 2; $i < 100; $i++){
            $d =  [
            "name" => "Name1".$i,
            "type" => $i
            ];
            array_push($data, $d);
            }

        $table = $this->table('affiliates');
        $table->insert($data)->save();
    }
}

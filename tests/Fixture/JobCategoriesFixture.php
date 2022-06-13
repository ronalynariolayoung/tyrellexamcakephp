<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JobCategoriesFixture
 */
class JobCategoriesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'sort_order' => 1,
                'created_by' => 1,
                'created' => 1654966912,
                'modified' => 1654966912,
                'deleted' => 1654966912,
            ],
        ];
        parent::init();
    }
}

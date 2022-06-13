<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JobTypesFixture
 */
class JobTypesFixture extends TestFixture
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
                'created' => 1654967584,
                'modified' => 1654967584,
                'deleted' => 1654967584,
                'job_category_id' => 1,
            ],
        ];
        parent::init();
    }
}

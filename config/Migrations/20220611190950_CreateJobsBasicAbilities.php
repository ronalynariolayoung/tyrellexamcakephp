<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateJobsBasicAbilities extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('jobs_basic_abilities');

        $table->addColumn('created', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);

        $table->addColumn('modified', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => true,
        ]);

        $table->addColumn('deleted', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => true,
        ]);

        $table->addColumn('job_id', 'integer', [
            'limit' => 11,
            'null' => false,
        ]);

        $table->addColumn('basic_ability_id', 'integer', [
            'limit' => 11,
            'null' => false,
        ]);

        $table->addIndex(['job_id']); 
        $table->addIndex(['basic_ability_id']);
        $table->addForeignKey('job_id', 'jobs', 'id');
        $table->addForeignKey('basic_ability_id', 'basic_abilities', 'id');

        $table->create();
    }
}


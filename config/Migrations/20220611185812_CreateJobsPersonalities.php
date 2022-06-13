<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateJobsPersonalities extends AbstractMigration
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
        $table = $this->table('jobs_personalities');

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

        $table->addColumn('personality_id', 'integer', [
            'limit' => 11,
            'null' => false,
        ]);

        $table->addIndex(['job_id']);
        // $table->addIndex(['personality_id']);
        
        $table->addForeignKey('job_id', 'jobs', 'id'); 
        $table->addForeignKey('personality_id', 'personalities', 'id');
        $table->create();
    }
}

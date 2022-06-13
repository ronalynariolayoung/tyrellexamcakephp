<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateJobsPracticalSkills extends AbstractMigration
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
        $table = $this->table('jobs_practical_skills');

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

        $table->addColumn('practical_skill_id', 'integer', [
            'limit' => 11,
            'null' => false,
        ]);

        $table->addIndex(['job_id']);
        $table->addIndex(['practical_skill_id']);
        $table->addForeignKey('job_id', 'jobs', 'id');
        $table->addForeignKey('practical_skill_id', 'practical_skills', 'id');

        $table->create();
    }
}

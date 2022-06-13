<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateJobTypes extends AbstractMigration
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
        $table = $this->table('job_types');

        $table->addColumn('name', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('sort_order', 'integer', [
            'limit' => 11,
            'null' => false,
        ]);

        $table->addColumn('created_by', 'integer', [
            'limit' => 11,
            'null' => false,
        ]);

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

        $table->addColumn('job_category_id', 'integer', [
            'limit' => 11,
            'null' => false,
        ]);

        $table->addIndex(['job_category_id']);
        $table->addForeignKey('job_category_id', 'job_categories', 'id');

        $table->create();
    }
}

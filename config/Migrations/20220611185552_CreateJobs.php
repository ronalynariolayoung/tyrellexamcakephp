<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateJobs extends AbstractMigration
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
        $table = $this->table('jobs');
        
        $table->addColumn('name', 'string', [
            'limit' => 120,
            'null' => false,
        ]);
        
        $table->addColumn('description', 'string', [
            'limit' => 120,
            'null' => false,
        ]);
        
        $table->addColumn('detail', 'string', [
            'limit' => 120,
            'null' => false,
        ]);
        
        $table->addColumn('business_skill', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('knowledge', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('location', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('activity', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('academic_degree_doctor', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('academic_degree_master', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('academic_degree_professional', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('academic_degree_bachelor', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('salary_statistic_group', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('salary_range_first_year', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('salary_range_average', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('salary_range_remarks', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('restriction', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('estimated_total_workers', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('remarks', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('url', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('seo_description', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('seo_keywords', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('sort_order', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('publish_status', 'string', [
            'limit' => 120,
            'null' => false,
        ]);

        $table->addColumn('version', 'string', [
            'limit' => 120,
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

        $table->addColumn('media_id', 'integer', [
            'limit' => 11,
            'null' => false,
        ]);

        $table->addColumn('job_category_id', 'integer', [
            'limit' => 11,
            'null' => false,
        ]);

        $table->addColumn('job_type_id', 'integer', [
            'limit' => 11,
            'null' => false,
        ]);

        $table->addIndex(['job_category_id']); 
        $table->addIndex(['job_type_id']);

        $table->addForeignKey('media_id', 'medias', 'id');
        $table->addForeignKey('job_category_id', 'job_categories', 'id');
        $table->addForeignKey('job_type_id', 'job_types', 'id');
        $table->create();
    }
}

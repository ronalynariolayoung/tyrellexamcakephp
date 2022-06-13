<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Jobs seed.
 */
class JobsSeed extends AbstractSeed
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
        
        for($i = 1; $i < 100; $i++){
            $d = [
                "name" => "Name1".$i,
                "description" => "description1".$i,
                "detail" => "detail1".$i,
                "business_skill" => "business_skill".$i,
                "knowledge" => "knowledge".$i,
                "location" => "location".$i,
                "activity" => "activity".$i,
                "academic_degree_doctor" => "academic_degree_doctor".$i,
                "academic_degree_master" => "academic_degree_master".$i,
                "academic_degree_professional" => "academic_degree_professional".$i,
                "academic_degree_bachelor" => "academic_degree_bachelor".$i,
                "salary_statistic_group" => "salary_statistic_group".$i,
                "salary_range_first_year" => "salary_range_first_year".$i,
                "salary_range_average" => "salary_range_average".$i,
                "salary_range_remarks" => "salary_range_remarks".$i,
                "restriction" => "restriction".$i,
                "estimated_total_workers" => "estimated_total_workers".$i,
                "remarks" => "remarks".$i,
                "url" => "url".$i,
                "seo_description" => "seo_description".$i,
                "seo_keywords" => "seo_keywords".$i, 
                "sort_order" => $i, 
                "publish_status" => "publish_status".$i,
                "version" => "version".$i, 
                "created_by" => 1,
                "media_id" => 1, 
                "job_category_id" => 2, 
                "job_type_id" => 2, 
            ];
            array_push($data, $d);
        }


        $table = $this->table('jobs');
        $table->insert($data)->save();
    }
}

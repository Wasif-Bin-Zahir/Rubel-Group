<?php

namespace Modules\Cms\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;

// Models...
use Modules\Cms\Entities\Page;
use Modules\Cms\Entities\PageCategory;
use Modules\Cms\Entities\CommitteeCategory;
use Modules\Cms\Entities\ContentCategory;

class CmsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // seed slider
        factory(\Modules\Cms\Entities\Slider::class, 5)->create();

        // seed page category
        $this->seedPageCategories();

        // seed contents
        $this->seedContentCategories();

        // seed contents
        $this->seedCommitteeCategories();

        //[FACTORY_REGISTER]
    }

    private function seedPageCategories()
    {
        $data = json_decode(File::get(resource_path('seed/cms/page_category.json')), true);
        foreach ($data as $datum) {
            $pages = $datum['pages'];
            unset($datum['pages']);
            $pageCategory = PageCategory::create($datum);
        }
    }

    private function seedContentCategories()
    {
        $data = json_decode(File::get(resource_path('seed/cms/content_category.json')), true);
        foreach ($data as $datum) {
            $contentCategory = ContentCategory::create($datum);
            factory(\Modules\Cms\Entities\Content::class, 5)->create([
                'content_category_id' => $contentCategory->id
            ]);
        }
    }

    private function seedCommitteeCategories()
    {
        $data = json_decode(File::get(resource_path('seed/cms/committee_category.json')), true);
        foreach ($data as $datum) {
            $committeeCategory = CommitteeCategory::create($datum);
            factory(\Modules\Cms\Entities\CommitteeMember::class, 3)->create([
                'committee_category_id' => $committeeCategory->id
            ]);
        }
    }
}

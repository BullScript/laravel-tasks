<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Helpers\DataHelper;

class TaskPriorityTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrStrNames = DataHelper::taskPriorityTypes();

        $intOrder = 1;

        DB::table('task_priority_types')->truncate();

        foreach ($arrStrNames as $strName) {

            $arrMixInsertData = [];
            $arrMixInsertData['name'] = $strName;
            $arrMixInsertData['description'] = $strName;
            $arrMixInsertData['is_published'] = true;
            $arrMixInsertData['order'] = $intOrder++;

            DB::table('task_priority_types')->insert($arrMixInsertData);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Helpers\DataHelper;

class TaskStatusTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrStrNames = DataHelper::taskStatusTypes();

        $intOrder = 1;

        foreach ($arrStrNames as $strName) {

            $arrMixInsertData = [];
            $arrMixInsertData['name'] = $strName;
            $arrMixInsertData['description'] = $strName;
            $arrMixInsertData['is_published'] = true;
            $arrMixInsertData['order'] = $intOrder++;

            DB::table('task_status_types')->insert($arrMixInsertData);
        }
    }
}

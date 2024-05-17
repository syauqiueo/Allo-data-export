<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\ToModel;

class DataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Data([
            'key' => $row[0],
            'environment' => $row[1],
            'problem_category' => $row[2],
            'summary' => $row[3],
            'zentao_link' => $row[4],
            'priority' => $row[5],
            'status' => $row[6],
            'pending_reason' => $row[7],
            'target_version' => $row[8],
            'impact_analyst' => $row[9],
            'rootcause' => $row[10],
            'workaround' => $row[11],
            'reporter' => $row[12],
            'assignee' => $row[13],
            // 'created_at' => $row[14],
            // 'updated_at' => $row[15],
            //
        ]);
    }
}

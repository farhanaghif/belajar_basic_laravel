<?php

namespace App\Imports;

use App\Models\Project;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProjectsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Project([
            'name'      => $row['name'],
            'leader_id' => $row['leader_id'],
            'owner'     => $row['owner'],
            'progress'  => $row['progress'],
            'description' => $row['description'],
            'deadline'  => $row['deadline'],
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}

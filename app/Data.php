<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "data";

    protected $fillable = ['key','environment','problem_category', 'summary', 'zentao_link', 'priority', 'status', 'pending_reason', 'target_version', 'impact_analyst', 'rootcause', 'workaround', 'reporter', 'assignee', 'created_at', 'updated_at'];
}

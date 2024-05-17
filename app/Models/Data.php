<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = "data";

    protected $fillable = ['key','environment','problem_category', 'summary', 'zentao_link', 'priority', 'status', 'pending_reason', 'target_version', 'impact_analyst', 'rootcause', 'workaround', 'reporter', 'assignee', 'created_at', 'updated_at'];
}

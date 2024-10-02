<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    protected $table = 'tabel_survey';
    protected $fillable = [
        'id_user',
        'question_number',
        'answer',
        'status',
        'description',
        'no_surat',
    ];
    


}

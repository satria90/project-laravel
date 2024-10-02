<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Notifications extends Model
{
    use HasFactory;
    protected $table = 'tabel_notifications';
    protected $primaryKey = 'id';
    protected $fillable = [
        'notifications',
        'assignee',
        'status',
    ];
    public static function CountNontification() {
        $assignee = auth()->user()->role === 'admin' ? auth()->user()->role : auth()->user()->email;
        return DB::table('tabel_notifications')->where('assignee', '=', $assignee)->count();
    }
}

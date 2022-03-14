<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;
use App\Models\Specialization;
use App\Models\User;

class Technician extends Model {
    use HasFactory;

    protected $table = 'Technician';
    protected $fillable = [
        'technician_id',
        'specialist_id',
        'user_id',
        'certification',
        'created_at',
        'updated_at',
    ];

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }

    public function specialization(){
        return $this->belongsTo(Specialization::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

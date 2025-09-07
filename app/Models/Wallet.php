<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = ['name', 'balance', 'user_id',
    'expense_alert_percentage','expense_alert_limit'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}

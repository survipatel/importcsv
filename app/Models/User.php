<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'date' ,
            'academic',
            'session',
            'alloted_category',
            'voucher_type',
            'voucher_no',
            'roll_no',
            'admno/uniqid',
            'status' ,
            'fee_category',
            'faculty' ,
            'program' ,
            'department',
            'batch',
            'receipt_no',
            'fee_head',
            'due_amount',
            'paid_amount',
            'conccession_amount',
            'scholarship_amount',
            'reverse_concession',
            'write_off',
            'adjusted_amount',
            'refund_amount',
            'fund_fransfer_amount',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

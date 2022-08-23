<?php
namespace App;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
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
}



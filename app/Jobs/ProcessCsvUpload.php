<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Redis;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessCsvUpload implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $file;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $file)
    {
        //
        $this->file = $file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Redis::throttle('upload-csv')->allow(1)->every(20)->then(function(){

            dump('processing this file : ----', $this->file);
        
         $data = array_map('str_getcsv', file($this->file));

        //loop over the data
       foreach($data as $row) {

            //insert the record or update if the email already exists
            Contact::updateOrCreate([

            'date' => $row[1],
            'academic' => $row[2],
            'session'  => $row[3],
            'alloted_category' => $row[4],
            'voucher_type'   => $row[5],
            'voucher_no'     => $row[6],
            'roll_no'        => $row[7],
            'admno/uniqid'    => $row[8],
            'status'        => $row[9],
            'fee_category'   => $row[10],
            'faculty'      => $row[11],
            'program'     => $row[12],
            'department'   => $row[13],
            'batch'       => $row[14],
            'receipt_no'   => $row[15],
            'fee_head'     => $row[16],
            'due_amount'  => $row[17],
            'paid_amount'   => $row[18],
            'conccession_amount'    => $row[19],
            'scholarship_amount'    => $row[20],
            'reverse_concession'    => $row[21],
            'write_off'             => $row[22],
            'adjusted_amount'       => $row[23],
            'refund_amount'         => $row[24],
            'fund_fransfer_amount'   => $row[25],
              ]);
            }
      
       dump('done this file : ----', $this->file);
        //delete the file
        unlink($this->file);

        }, function(){
            return $this->release(10);
        
        });

         
    }
}

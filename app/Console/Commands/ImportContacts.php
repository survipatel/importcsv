<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Contact;
use App\Jobs\ProcessCsvUpload;

class ImportContacts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:contacts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'import contacts from stored csv files';

    /**
     * Execute the console command.
     *
     * @return int
     */
   
     protected $guarded = [];

    public function handle()
{
    //set the path for the csv files
    $path = base_path("resources/pendingcontacts/*.csv");

    $files = glob($path);

    //run 2 loops at a time
    foreach ($files as $file) {

        ProcessCsvUpload:: dispatch($file);

        //read the data into an array
       // $data = array_map('str_getcsv', file($file));

        //loop over the data
       // foreach($data as $row) {

            //dd($row);
            //insert the record or update if the email already exists
          //  Contact::updateOrCreate([

            //     'date' => $row[1],
            // 'academic' => $row[2],
            // 'session'  => $row[3],
            // 'alloted_category' => $row[4],
            // 'voucher_type'   => $row[5],
            // 'voucher_no'     => $row[6],
            // 'roll_no'        => $row[7],
            // 'admno/uniqid'    => $row[8],
            // 'status'        => $row[9],
            // 'fee_category'   => $row[10],
            // 'faculty'      => $row[11],
            // 'program'     => $row[12],
            // 'department'   => $row[13],
            // 'batch'       => $row[14],
            // 'receipt_no'   => $row[15],
            // 'fee_head'     => $row[16],
            // 'due_amount'  => $row[17],
            // 'paid_amount'   => $row[18],
            // 'conccession_amount'    => $row[19],
            // 'scholarship_amount'    => $row[20],
            // 'reverse_concession'    => $row[21],
            // 'write_off'             => $row[22],
            // 'adjusted_amount'       => $row[23],
            // 'refund_amount'         => $row[24],
            // 'fund_fransfer_amount'   => $row[25],

       // ]);


       // }

        //delete the file
       // unlink($file);
    }
}
}


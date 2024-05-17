<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;
use App\Mail\EnquiryEmail;

class EnquiryEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($reqData)
    {
        $this->data = $reqData;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to('support@cp.technology')
                ->cc(['selvapriya.ramesh@axionpcs.in', 'arul.ramdoss@axionpcs.in', 'mizba.sayed@axionpcs.in'])->bcc('thameem.ansari@axionpcs.in')->send(new EnquiryEmail($this->data));    
    }
}

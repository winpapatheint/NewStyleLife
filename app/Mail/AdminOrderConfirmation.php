<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminOrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    public $orderDetails;
    public $bankInfo;
    public $totalAmount;
    public $transferPersonName;
    public $transferDate;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderDetails, $bankInfo, $totalAmount, $transferPersonName, $transferDate, $name)
    {
        $this->orderDetails = $orderDetails;
        $this->bankInfo = $bankInfo;
        $this->totalAmount = $totalAmount;
        $this->transferPersonName = $transferPersonName;
        $this->transferDate = $transferDate;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.admin_order_confirmation');
    }
}

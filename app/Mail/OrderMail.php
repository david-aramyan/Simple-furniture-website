<?php

namespace App\Mail;

use App\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $product;
    public $data;

    /**
     * Create a new message instance.
     *
     * @param Product $product
     * @param array $data
     * @return void
     */
    public function __construct(Product $product, $data)
    {
        $this->product = $product;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->data['email'], $this->data['first_name']." ".$this->data['last_name'])->subject('Order from Website')->view('emails.order');
    }
}

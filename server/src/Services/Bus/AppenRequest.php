<?php namespace Agronomist\Services\Bus;

class AppenRequest {
    public $user_id;
    public $payment_method;
    public $bonus;
    public $plates;

    function __construct($user_id, $payment_method, $bonus, $plates)
    {
        $this->user_id = $user_id;
        $this->payment_method = $payment_method;
        $this->bonus = $bonus;
        $this->plates = $plates;
    }
}

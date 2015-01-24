<?php

class Arrivedmessage extends Eloquent {

    protected $table = 'Arrivedmessages';

    public function happycouple()
    {
        return $this->belongsTo('Happycouple', 'message_id');
    }

	public function lovehunter()
    {
        return $this->belongsTo('Lovehunter', 'message_id');
    }    
}
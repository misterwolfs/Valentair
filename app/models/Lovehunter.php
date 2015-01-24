<?php

class Lovehunter extends Eloquent {

    protected $table = 'Lovehunters';
    
    public function arrivedmessage()
    {
        return $this->hasOne('Arrivedmessage', 'message_id');
    }

    public function getDates()
	{
	    return array('created_at');
	}

    public function scopeIdDescending($query)
    {
        return $query->orderBy('id','DESC');
    }  
    
}
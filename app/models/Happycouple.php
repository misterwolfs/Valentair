<?php

class Happycouple extends Eloquent {

    protected $table = 'Happycouples';
    protected $dates = array('created_at');
    
    public function arrivedmessage()
    {
        return $this->hasOne('Arrivedmessage', 'message_id');
    }

    public function scopeIdDescending($query)
    {
        return $query->orderBy('id','DESC');
    }  

 //    public function getDates()
	// {
	//     // return array('created_at');
	//     return array(static::CREATED_AT, static::UPDATED_AT, static::DELETED_AT);
	// }
}
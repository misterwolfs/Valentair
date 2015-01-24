<?php

use Carbon\Carbon;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showIndex() {
		$data['title'] =  'Send your valentine message into space';
	
	    return View::make('pages.home', $data);
	}

	public function showAbout() {
		$data['title'] =  'About us';

	    return View::make('pages.about', $data);
	}

	public function showOverview() {
		

		$happycouples = array();
		$lovehunters = array();
		$i = 0;
		$j = 0;

		$couples  = Happycouple::idDescending(array('arrivedmessage' => function($query)
		{
		    $query->where('type_id', '=', '2');
		}))->get();

		$hunters  = Lovehunter::idDescending(array('arrivedmessage' => function($query)
		{
		    $query->where('type_id', '=', '1');
		}))->get();


		$data = array();
		$data['title'] =  'All messages';
		$data['couples'] = $couples;
		$data['hunters'] = $hunters;

		foreach($data['hunters'] as &$hunter)
		{
			$name = $hunter['name'];
			$name = explode(' ', $name);
			$hunter['firstname'] = $name[0];
			if(isset($name[1]))
			{
				$hunter['lastname'] = substr($name[1], 0, 1);
			}
		}

		foreach($data['couples'] as &$couple)
		{
			$name = $couple['name'];
			$name = explode(' ', $name);
			$couple['firstname'] = $name[0];
			if(isset($name[1]))
			{
				$couple['lastname'] = substr($name[1], 0, 1);
			}
		}

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		
		return View::make('pages.overview', $data);

	}

	public function postMessages($type) {

		$input = Input::all();

		$name = $input['name'];
		$message = $input['message'];
		$email = $input['email'];
		$place = $input['place'];

		$code = '';	

		for ($i = 0; $i<3; $i++) 
		{
		    $code .= mt_rand(0,9);
		}

		$code = substr(strtolower($name), 0, 3) . $code;

		if($type == 'couples')
		{
			$loved_one = $input['loved_one'];
		
			$happycouple = new Happycouple;
			$happycouple->adress = $place;
			$happycouple->name = $name;
			$happycouple->loved_one = $loved_one;
			$happycouple->text = $message;
			$happycouple->email = $email;
			$happycouple->code = $code;

			// if($type == 'couples_logged')
			// {
			// 	$happycouple->published = 1;
			// }

			$happycouple->save();
		}
		elseif ($type == 'hunters') {
			$age = $input['age'];
			$sex = $input['sex'];

			$lovehunter = new Lovehunter;
			$lovehunter->adress = $place;
			$lovehunter->name = $name;
			$lovehunter->age = $age;
			$lovehunter->sex = $sex;
			$lovehunter->text = $message;
			$lovehunter->email = $email;
			$lovehunter->code = $code;

			// if($type == 'hunters_logged')
			// {
			// 	$lovehunter->published = 1;
			// }

			$lovehunter->save();
		}	

	}

	public function postArrived() {
		$input = Input::all();

	//	var_dump($input);


		$id = $input['id'];
		$code = $input['code'];
		$correct = false;

		$type_id = intval($id[0]);
		$message_id = intval(substr($id, 1));

		$arrived_adress = $input['arrived'];


		if($type_id == 1)
		{
			$lovehunter = Lovehunter::find($message_id);

			if($code == $lovehunter->code)
			{
				$correct = true;
			}
		}
		elseif ($type_id == 2) {
			$happycouple = Happycouple::find($message_id);

			if($code == $happycouple->code)
			{
				$correct = true;
			}
		}
		else {
			$correct = false;
		}

		if($correct)
		{
			$arrived = new Arrivedmessage;
			$arrived->adress = $arrived_adress;
			$arrived->message_id = $message_id;
			$arrived->type_id = $type_id;
			$arrived->save();
		}
	}

	public function getSuccesMessage() {

		return View::make('pages.message');

	}

	public function getSpecificMessage($id) {

		$type = substr($id, 0, 1);
		$data = array();

		if($type == 2)
		{
			$data['couple'] = Happycouple::findOrFail(substr( $id, 1 ));
			$data['arrived'] = Arrivedmessage::where('message_id', '=', $data['couple']['id'])->where('type_id', '=', '2')->first();
			$data['title'] =  'Message from ' . $data['couple']['name'];

		}
		elseif($type == 1)
		{
			$data['hunter'] = Lovehunter::findOrFail(substr( $id, 1 ));
			$data['arrived'] = Arrivedmessage::where('message_id', '=', $data['hunter']['id'])->where('type_id', '=', '1')->first();
			$data['title'] =  'Message from ' . $data['hunter']['name'];

		}
		else {
			$data = 'something went wrong';
		}


		return View::make('pages.detail', $data);
	}

	public function getSpecificMessageCode($code) {
		$type = substr($code, 0, 1);
		$data = array();

		if($type == 2)
		{
			$data['couple'] = Happycouple::findOrFail(substr( $code, 1 ));
			$data['arrived'] = Arrivedmessage::where('message_id', '=', $data['couple']['id'])->where('type_id', '=', '2')->first();

			return $data['couple']->code;

		}
		elseif($type == 1)
		{
			$data['hunter'] = Lovehunter::findOrFail(substr( $code, 1 ));
			$data['arrived'] = Arrivedmessage::where('message_id', '=', $data['hunter']['id'])->where('type_id', '=', '1')->first();

			return $data['hunter']->code;
		}
	
	}

}
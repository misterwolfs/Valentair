<?php

class FacebookController extends BaseController {

	public function login() {
		if (Auth::check()) {
		     return Redirect::to('/');
		}
		else {

			$facebook = new Facebook(Config::get('facebook'));
		    $params = array(
		        'redirect_uri' => url('/login/fb/callback'),
		        'scope' => 'email',
		    );

		    return Redirect::to($facebook->getLoginUrl($params));

		}
	}

	public function callback() {
	    $code = Input::get('code');
	    if (strlen($code) == 0) return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');
	 
	    $facebook = new Facebook(Config::get('facebook'));
	    $uid = $facebook->getUser();
	 
	    if ($uid == 0) return Redirect::to('/')->with('message', 'There was an error');
	 
	    $me = $facebook->api('/me');
	 
	    $profile = Profile::whereUid($uid)->first();
	    if (empty($profile)) {
	 
	        $user = new User;
	        $user->name = $me['first_name'].' '.$me['last_name'];
	        $user->email = $me['email'];
	        $user->photo = 'https://graph.facebook.com/'.$me['username'].'/picture?type=large';
	 
	        $user->save();
	 
	        $profile = new Profile();
	        $profile->uid = $uid;
	        $profile->username = $me['username'];
	        $profile = $user->profiles()->save($profile);
	    }
	 
	    $profile->access_token = $facebook->getAccessToken();
	    $profile->save();
	 
	    $user = $profile->user;
	 
	    Auth::login($user);
	 
	 	return Redirect::to('/')->with('message', 'Logged in with Facebook');
	}

	public function logout() {
		Auth::logout();
    	return Redirect::to('/');
	}

}
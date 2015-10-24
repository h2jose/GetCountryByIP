<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Member;

class MemberController extends Controller
{
	public function index()
	{

	    foreach (Member::all() as $item) {

	    	sleep(2); // ip-api.com ban any IP addresses doing over 150 requests per minute

			$json = json_decode(file_get_contents("http://ip-api.com/json/$item->ip"));


    		$item->city = $json->city;
    		$item->country = $json->country;

    		$member = Member::find($item->id);
	    	$member->city = $item->city ;
	    	$member->country = $item->country;
	    	$member->save();
			
	    }

		return "Ready";

	}

}

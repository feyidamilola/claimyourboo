<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Claim;


class ViewsController extends Controller
{
    //
    public function homepage(Request $request){

        // $questions[] =[
        //     "fwb" => "When you add benefits (mummy and daddy)", "You don catch feelings?",
        //     "husband" => "He don put a ring on it?", "How often do you do it?",
        //     "wife" => "She don collect bride price?", "How often do you do it?",
        //     "side chick" => "When you accept second place?", "Your secret hookup location",
        //     "side dick" => "When you accept second place?", "Your secret hookup location",
        //     "situationship" => "When confusion start?", "what is holding you back?",
        //     "boyfriend" => "When did you start dating?", "Has he cheated before?",
        //     "girlfriend" => "When did you start dating?", "Has she cheated before?",
        //     "fuck buddies" => "When you don dey knack", "Your favorite position"
        // ];

        // if($request->isMethod('post')) {
        //     $data = $request->all();
        //     $relationship = $data['relationship'];

        //     echo "<pre>"; print_r($relationship); die;
        // }
       
        
        return view('welcome');
    }

    public function store(Request $request){
        Claim::create([
            'your_username' => $request->get('username'),
            'your_social_media' => $request->get('username'),
            'relationship' => $request->get('relationship'),
            'length' => $request->get('length'),
            'personal_response' => $request->get('personal'),
            'partner_handle' => $request->get('partnerusername'),
            'result' => $request->get('result'),
            'share' => $request->get('share'),
        ]);
        return response()->json([$request->all()]);
    }
}


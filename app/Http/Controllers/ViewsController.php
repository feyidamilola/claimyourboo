<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Claim;
// use Twitter;
use Abraham\TwitterOAuth\TwitterOAuth;
use InstagramAPI\Instagram;
use InstagramAPI\Media\Video\InstagramVideo;
use File;


class ViewsController extends Controller
{
    //
    public function homepage(Request $request){
        return view('welcome');
    }

    public function store(Request $request){

        // $claims = Claim::all();

        // set_time_limit(0);
        // $consumer_key = 'lUUbzWp24dMcRA6CdWFVKRXsP';
        // $consumer_secret = 'CZ5RrHGm86tnL04VnCdasUsg0tFgPz1bvfwGVQ6oMskn1vr28l';
        // $oauth_token = '1093138021703143424-G9szp52EbkORjMSqmNaf447zMPSbP8';
        // $oauth_token_secret = '88cjfkU4va9H9IoOafvcdvpmBzGDcwmIhZU5G993InvSj';

        // Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;

        // if ( $request->get('socialmedia') === 'twitter'){
        //     $path  = 'img/gifs/'.$request->get('image');
        //     echo $path;

        //     $connection = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);


        //     // foreach( $claims as $claim){
        //     //     if( $claim->your_username === $request->get('partnerusername') && $claim->partner_handle === $request->get('username')  ){
        //     //         $statues = $connection->post("statuses/update" , [
        //     //             'status' => $request->get('partnerusername') .' and ' . $request->get('username') . ' I wish you both a stronger relationship moving forward']);
        //     //     }
        //     // }

        //     $media1 = $connection->upload('media/upload', ['media' => public_path($path)]);

        //     $parameters = [
        //         'status' => $request->get('result'). '. Find out who claimed you by clicking on the link on our bio',
        //         'media_ids' => $media1->media_id_string
        //     ];

        //     $statues = $connection->post("statuses/update" , $parameters);

        // }

        // if( $request->get('socialmedia') === 'instagram' ){
        //     $username = 'claimyourboo';
        //     $password = 'Astract9';
        //     $debug = true;
        //     $truncatedDebug = false;
        //     $path  = 'img/gifs/'.$request->get('image').'.mp4';

        //     $videoF = response()->file(public_path($path));
        //     // $videoF = public_path($path);
        //     // echo gettype($videoF);
        //     var_dump(is_file($videoF));

        //     $captionText = $request->get('result');

        //     $ig = new Instagram($debug, $truncatedDebug);
        //     try {
        //         $ig->login($username, $password);
        //     } catch (\Exception $e) {
        //         echo 'Something went wrong: '.$e->getMessage()."\n";
        //         exit(0);
        //     }
        //     try {
        //         $ig->timeline->uploadVideo($videoF->getFile(), ['caption' => $captionText]);
        //     } catch (\Exception $e) {
        //         echo 'Something went wrong: '.$e->getMessage()."\n";
        //     }
        // }


        $number = count(Claim::where('partner_handle' , $request->get('partnerusername'))->get() );


       $saved =  Claim::create([
            'your_username' => $request->get('username'),
            'your_social_media' => $request->get('socialmedia'),
            'relationship' => $request->get('relationship'),
            'length' => $request->get('length'),
            'personal_response' => $request->get('personal'),
            'partner_handle' => $request->get('partnerusername'),
            'result' => $request->get('result'),
            'partner_social_media' => $request->get('socialmedia'),
            'share' => '',
        ]);

        if($saved){
            return response()->json(['success' => true , 'id' => $saved->id , 'number' => $number , 'image' => 'bg2.jpg' ]);
        }

        return response()->json(['success' => false ] );

    }
}

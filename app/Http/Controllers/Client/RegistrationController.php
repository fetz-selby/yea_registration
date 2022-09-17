<?php

namespace App\Http\Controllers\Client;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\ClientRegistrationDetails;


class RegistrationController extends Controller
{
    //

    public function nextOccurance()
{
    // the 31th of May of the current year
    $day = Carbon::createFromFormat('m-d', '05-31');
    $now = Carbon::now();
    // If today after $day
    if($now >= $day) {
       // Gat a next year
       $day->modify('next year');
    }

    echo $day->format('Y-m-d');
    exit();
}

    public function register()
    {

        $start1 = Carbon::parse('16-09-2022');
        $end1 =  Carbon::parse('20-09-2022');
        $start2 = Carbon::parse('20-09-2022');
        $end2 = Carbon::parse('28-09-2022');
        $start3 = Carbon::parse('29-09-2022');
        $end3 = Carbon::parse('14-10-2022');
        // If today after $day
        if(Carbon::now() >= $start1 && Carbon::now() <= $end1){
        
           // Gat a next year
           $module_list = ['Community Policy Assistant'];
        }
        elseif(Carbon::now() >= $start2 && Carbon::now() <= $end2){
            $module_list = ['Community Policy Assistant', 'Community Health Worker'];
        }
        elseif(Carbon::now() >= $start3 && Carbon::now() <= $end3){
            $module_list = ['Community Policy Assistant'];
        }
        else{
            $module_list = [NULL];
        }
    
        // echo $day->format('Y-m-d');

        return view("client.register", ['module_list' => $module_list]);
    }

    
    public static function generateRegistrationCode($id)
    {
        return 'R' . str_repeat('0', 5 - strlen(strval($id))) . strval($id). date('y');
    }


    public function store(Request $request)
    {

        // $file_categories = ['cv', 'photo', 'artisan_certificate', 'apprenticeship_certifacte'];

    //    ClientRegistrationDetails::create($request->all());
    $request->validate([


        'last_name' => 'required|max:60',
        'first_name' => 'required|max:60',
        'other_names' => 'nullable|max:60',
        'ghana_card' => 'required',
        'date_of_birth' => 'required|date_format:Y/m/d',
        'email' => 'nullable|email',
        'residential_address' => 'required|max:255',
        'gps_address' => 'required|max:40',
        'community' => 'required|max:60',
        'region' => 'required',
        'district' => 'required',       
        'next_of_kin' => 'required|max:200',
        'next_of_kin_phone_number' => 'required|numeric|digits:10',
        'momo_network' => 'required',
        'momo_number' => 'required|numeric|digits:10',
        // 'CPA' => 'nullable',
        // 'CPA_YEA_name' => 'nullable',
        // 'level_of_education1' => 'required',
        // 'level_of_education2' => 'required',
        // 'aggreement' => 'required'
    ]);

    if($request->module == "Community Policy Assistant"){
    $request->validate([
        'CPA' => 'nullable',
        'CPA_YEA_name' => 'nullable',
        'level_of_education1' => 'required',
        // 'level_of_education2' => 'required',
        // 'aggreement' => 'required'
    ]);}
    if($request->module == "Community Health Worker"){
        $request->validate([
            // 'CPA' => 'nullable',
            // 'CPA_YEA_name' => 'nullable',
            // 'level_of_education1' => 'required',
            'level_of_education2' => 'required',
            // 'aggreement' => 'required'
        ]);}

    
    // ClientRegistrationDetails::create($request->all());
    $register = new ClientRegistrationDetails();


    $register->last_name = $request->last_name;
    $register->last_name = $request->last_name;
    $register->first_name = $request->first_name;
    $register->other_name = $request->other_name;
    $register->ghana_card = "GHA-".$request->ghana_card;
    $register->date_of_birth = $request->date_of_birth;
    $register->email = $request->email;
    $register->residential_address = $request->residential_address;
    $register->gps_address = $request->gps_address;
    $register->community = $request->community;
    $register->region = $request->region;
    $register->district = $request->district;
   
    $register->next_of_kin = $request->next_of_kin;
    $register->next_of_kin_phone_number = $request->next_of_kin_phone_number;
    $register->momo_network = $request->momo_network;
    $register->momo_number = $request->momo_number;
    $register->module = $request->module;
    if($request->module == "Community Policy Assistant"){
        $register->module_question = $request->CPA;
        $register->module_number = $request->CPA_YEA_name;
        $register->level_of_education = $request->level_of_education1;
    }
    elseif($request->module == "Community Health Worker"){
        $register->level_of_education = $request->level_of_education2;
    }

    $register->aggreement = $request->input('aggreement');

    $register->save();
    Session::put('reg_id', $register->id);
    Session::put('yea_code', $this::generateRegistrationCode(Session::get('reg_id')));


    $client = new Client();
    $client->registration_code = Session::get('yea_code');
    $client->password = "null";
    $client->last_name = $request->last_name;
    $client->last_name = $request->last_name;
    $client->first_name = $request->first_name;
    $client->other_name = $request->other_name;
    $client->ghana_card = "GHA-".$request->ghana_card;
    $client->date_of_birth = $request->date_of_birth;
    $client->email = $request->email;
    $client->residential_address = $request->residential_address;
    $client->gps_address = $request->gps_address;
    $client->community = $request->community;
    $client->region = $request->region;
    $client->district = $request->district;
   
    $client->next_of_kin = $request->next_of_kin;
    $client->next_of_kin_phone_number = $request->next_of_kin_phone_number;
    $client->momo_network = $request->momo_network;
    $client->momo_number = $request->momo_number;
    $client->module = $request->module;
    if($request->module == "Community Policy Assistant"){
        $client->module_question = $request->CPA;
        $client->module_number = $request->CPA_YEA_name;
        $client->level_of_education = $request->level_of_education1;
    }
    elseif($request->module == "Community Health Worker"){
        $client->level_of_education = $request->level_of_education2;
    }

    $client->aggreement = $request->aggreement;
    $client->save();



    return redirect(route('client.set.pin'));

       

       

        // foreach ($file_categories as $category) {

        //     if ($request->has($category) && $request->input($category) !== "") {

        //         // $tempFile = TemporaryFile::where('folder', $request->input($category))->first();

        //         if ($tempFile) {
        //             $clientDetails
        //                 ->addMedia(storage_path('app/public/uploads/tmp/' . $tempFile->folder . '/' . $tempFile->filename))
        //                 ->toMediaCollection($category);

        //             rmdir(storage_path('app/public/uploads/tmp/' . $tempFile->folder));
        //             $tempFile->delete();
        //         }
        //     }
        // }

        
    }

    public function setPin()
    {
        if (Session::has('reg_id')) {

            Session::put('yea_code', $this::generateRegistrationCode(Session::get('reg_id')));

            Session::pull('reg_code');

            return view('client.auth.register');
        }

        return redirect()->route('client.register');

    }

    public function show($num)
    { 
        // $ID = Session::get('reg_id');
        $client = Client::where('registration_code', $num)->first();
        return view('client.show',['client'=>$client]);
    }
}

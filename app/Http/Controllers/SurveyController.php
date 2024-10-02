<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\License;
use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index( $id){

        $role = auth()->user()->role;
        if ($role == 'user') {
            return view('/survey/insert_form', ['id' => $id]);
        } else {
            $data = Survey::all();
            $question_length = 10;
            $data_user = User::all();
            $tmp = [];
        
            foreach($data_user as $key => $user){
                $item = [];
                $item['user'] = $user->name;
                if($user->role == 'user'){
                    foreach ($data as $key => $value) {
                        if($user->id == $value->id_user) {
                            $item[$value->question_number] = $value->answer;
                        }
                    }
                    array_push($tmp,$item);
                }
            }
            // dd($tmp);
            return view('/survey/index', ['data' => $tmp, 'length' => $question_length]);
        }

    }

    public function store(Request $request, $id){
        $data = $request->all();
        foreach($data as $i => $i_value) {
            if($i !== '_token'){
                $survey = new Survey();
                $survey->question_number = $i;
                $survey->answer = $i_value;
                $survey->id_user = auth()->user()->id;
                $survey->no_surat = $id;
                $survey->save();
            }
        }
        $license = License::find($id);
        $license->status = 'survey-selesai';
        $license->save();

        return redirect('/license');
    }

    public function detail($id){
        $data = Survey::where('no_surat', $id)->get();
        // dd($data);
        // foreach ($data as $key => $value) {
        // //dd($value);
        // }
        return view('/survey/survey_surat', ['data' => $data]);

    }

    public function detail_all(){
        $data = Survey::all();
            $question_length = 9;
            $data_user = User::all();
            $tmp = [];
        
            foreach($data_user as $key => $user){
                $item = [];
                $item['user'] = $user->name;
                $total=0;
                if($user->role == 'user'){
                    foreach ($data as $key => $value) {
                        if($user->id == $value->id_user) {
                            $val = ['Tidak Sesuai','Cukup Sesuai','Sesuai','Sangat Sesuai']; 
                            $q = array_search($value->answer,$val);
                            $total = $total+$q;
                            $item[$value->question_number] = array('jawaban'=>$value->answer, 'value' => $q);
                        }
                    }
                    // $item["item_total"]=$total;
                    array_push($tmp,$item);
                }
            }
             //dd($tmp);
            return view('/survey/index', ['data' => $tmp, 'length' => $question_length]);
    }
    
}

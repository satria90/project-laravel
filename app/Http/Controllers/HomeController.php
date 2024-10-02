<?php

namespace App\Http\Controllers;

use App\Models\License;
use App\Models\Survey;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = auth()->user()->role;
        if ($role == 'admin') {
            $baru = License::where('status',null)->count() ;
            $diterima = License::where('status','diterima')->count() ;
            $ditolak = License::where('status','ditolak')->count();
            $diproses = License::where('status','diproses')->count();
            $data = Survey::all();
            $question_length = 9;
            $data_user = User::all();
            $tmp = [];
            $rest=array('1'=>0,'2'=>0,'3'=>0,'4'=>0,'5'=>0,'6'=>0,'7'=>0,'8'=>0,'9'=>0);
        
            foreach($data_user as $key => $user){
                $item = [];
                if($user->role == 'user'){
                    foreach ($data as $key => $value) {
                        if($user->id == $value->id_user) {
                            if($value->question_number!=='saran'){
                                $val = ['Tidak Sesuai','Cukup Sesuai','Sesuai','Sangat Sesuai']; 
                                $q = array_search($value->answer,$val);
                                $item[$value->question_number] = $q;
                            }
                        }
                    }
                    array_push($tmp,$item);
                }
            }
            foreach ($tmp as $key => $value) {
                foreach ($value as $k => $v) {
                    $rest[$k]+=$v;

                }
            }
            //dd($rest);
            
            return view('home',['baru'=>$baru,'diterima'=>$diterima,'ditolak'=>$ditolak,'diproses'=>$diproses,'survey'=>$rest]);
        } else {
            $email = auth()->user()->email;
            $baru = License::where('status',null)->where('email',$email)->count() ;
            $diterima = License::where('status','diterima')->where('email',$email)->count() ;
            $ditolak = License::where('status','ditolak')->where('email',$email)->count();
            $diproses = License::where('status','diproses')->where('email',$email)->count();
            return view('home',['baru'=>$baru,'diterima'=>$diterima,'ditolak'=>$ditolak,'diproses'=>$diproses]);
        }
    }
}

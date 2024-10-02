<?php

namespace App\Http\Controllers;

use App\Models\License;
use App\Models\Notifications;
use ArrayObject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LicenseController extends Controller
{
    public function index()
    {
        $role = auth()->user()->role;
        if ($role == 'user') {
            $license = License::where('email', auth()->user()->email)->paginate(5);
            $result = $license->getCollection()->sortByDesc('created_at')->values();
            $license->setCollection($result);
            return view('/license/index', ['data' => $license]);
        } else {
            $license = License::paginate(5);
            $result = $license->getCollection()->sortByDesc('created_at')->values();
            $license->setCollection($result);
            return view('/license/index', ['data' => $license]);
        }
    }

    public function create_form()
    {
        return view('/license/createform');
    }

    public function view_detail($id)
    {
        $license = License::find($id);
        return view('/license/view', ['data' => $license]);
    }

    public function upload_data_form($id)
    {
        $license = License::find($id);
        return view('/license/upload-data', ['data' => $license]);
    }

    public function proses_upload_data($id,Request $request)
    {

        $license = License::find($id);
        $path = Storage::putFile('upload_data', $request->file('upload_data'));
        $license->upload_data = $path;
        $license->save();
        return redirect('/license');
    }

    public function update_form($id)
    {
        $license = License::find($id);
        return view('/license/createform', ['data' => $license]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $license = new License();
        $license->created_by = $request->created_by;
        $license->assignee = $request->assignee;
        $license->status = $request->status;
        $Date = date('Y-m-d H:i:s');
        $license->deadline = date('Y-m-d H:i:s',strtotime($Date. ' + 7 days'));
        // $license->file_path=$request->file_path;
        $license->email = $request->email;
        $license->nama_lengkap = $request->nama_lengkap;
        $license->nomor_identitas = $request->nomor_identitas;
        $license->alamat_rumah = $request->alamat_rumah;
        $license->nomor_telepon = $request->nomor_telepon;
        $license->perkerjaan = $request->pekerjaan;
        $license->nama_perusahaan = $request->nama_perusahaan;
        $license->alamat_perusahaan = $request->alamat_perusahaan;
        $license->curah_hujan = $request->curah_hujan;
        $license->profile_sungai = $request->profile_sungai;
        $license->topografi = $request->topografi;
        $license->studi_kajian = $request->studi_kajian;
        $license->alokasi_air = $request->alokasi_air;
        $license->lainnya = $request->lainnya;
        $license->rincian_informasi = $request->rincian_informasi;
        $license->penelitian_ta_tesis = $request->penelitian_ta_tesis;
        $license->studi_kajian_proyek = $request->studi_kajian_proyek;
        $license->lainnya2 = $request->lainnya2;
        // $file = $request->upload_identitas;
        $path = Storage::putFile('upload_identitas', $request->file('upload_identitas'));
        $license->file_path = $path;

        // $file->move('data_file', $file->getClientOriginalName());
        $license->save();

        $notifications = new Notifications();
        $notifications->notifications = 'permintaan data baru '.$request->nama_lengkap;
        $notifications->status = 'unread';
        $notifications->assignee = 'admin';
        $notifications->save();


        return redirect('/license');
    }

    public function update($id, Request $request)
    {
        // dd($request);
        $license = License::find($id);
        $license->created_by = $request->created_by;
        $license->assignee = $request->assignee;
        $license->status = $request->status;
        // $license->file_path=$request->file_path;
        // $license->email = $request->email;
        $license->nama_lengkap = $request->nama_lengkap;
        $license->nomor_identitas = $request->nomor_identitas;
        $license->alamat_rumah = $request->alamat_rumah;
        $license->nomor_telepon = $request->nomor_telepon;
        $license->perkerjaan = $request->pekerjaan;
        $license->nama_perusahaan = $request->nama_perusahaan;
        $license->alamat_perusahaan = $request->alamat_perusahaan;
        $license->curah_hujan = $request->curah_hujan;
        $license->profile_sungai = $request->profile_sungai;
        $license->topografi = $request->topografi;
        $license->studi_kajian = $request->studi_kajian;
        $license->alokasi_air = $request->alokasi_air;
        $license->lainnya = $request->lainnya;
        $license->rincian_informasi = $request->rincian_informasi;
        $license->penelitian_ta_tesis = $request->penelitian_ta_tesis;
        $license->studi_kajian_proyek = $request->studi_kajian_proyek;
        $license->lainnya2 = $request->lainnya2;
        $license->save();
        return redirect('/license');
    }

    public function delete($id)
    {
        $license = License::find($id);
        $license->delete();
        return redirect('/license');
    }

    public function inprogress($id)
    {
        $license = License::find($id);
        $license->status = 'diproses';
        $license->save();
        $notifications = new Notifications();
        $notifications->notifications = 'permintaan data diproses';
        $notifications->status = 'unread';
        $notifications->assignee = $license->email;
        $notifications->save();
        return redirect('/license');
    }

    public function declain($id)
    {
        $license = License::find($id);
        $license->status = 'ditolak';
        $license->save();
        $notifications = new Notifications();
        $notifications->notifications = 'permintaan data ditolak';
        $notifications->status = 'unread';
        $notifications->assignee = $license->email;
        $notifications->save();
        return redirect('/license');
    }

    public function accept($id)
    {
        $license = License::find($id);
        $license->status = 'diterima';
        $license->save();
        $notifications = new Notifications();
        $notifications->notifications = 'permintaan data diterima';
        $notifications->status = 'unread';
        $notifications->assignee = $license->email;
        $notifications->save();
        return redirect('/license');
    }

    public function downloadFile($path)
    {
        $license = License::find($path);
        return response()->download(storage_path('/app/' . $license->upload_data));
    }
}

<?php

namespace App\Http\Controllers;

use App\UserBimbel;
use App\UserSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserBimbelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:bimbel');
    }

    public function dashboard()
    {
        return view('pages.bimbel.dashboard');
    }


    public function index()
    {
        $usiswa = UserSiswa::where('status', '2')->where('deleted_at', '0')->get();
        return view('pages.bimbel.akun_siswa.akun_siswa', compact('usiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.bimbel.akun_siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:user_siswas',
            'password' => 'required',
            'avatar' => 'required|file|image|mimes:jpg,png,jpeg|max:2048',
        ]);


        $avatar = $request->file('avatar');
        $filename = time().'.'. $avatar->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/user siswa');
        $avatar->move($destinationPath, $filename);


        $usiswa = new UserSiswa();
        $usiswa->name = $request->name;
        $usiswa->email = $request->email;
        $usiswa->password = bcrypt($request->password);
        $usiswa->avatar = $filename;
        $usiswa->status = '2';
        $usiswa->save();

        return redirect()->route('usiswa')->with('create', 'Berhasil Menambahkan Data User Siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserSiswa  $userSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(UserSiswa $userSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserSiswa  $userSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usiswa = UserSiswa::find($id);
        return view('pages.bimbel.akun_siswa.edit', compact('usiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserSiswa  $userSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'password' => 'required',
            'avatar' => 'file|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $usiswa = UserSiswa::find($id);
        $usiswa->name = $request->name;
        $usiswa->password = bcrypt($request->password);
        $avatar = $request->file('avatar');
        if ($avatar == ''){
            $usiswa->avatar = $request->old_avatar;
        }else{
            $filename = time().'.'. $avatar->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/user siswa');
            $avatar->move($destinationPath, $filename);
            $usiswa->avatar = $filename;
        }
        $usiswa->update();

        return redirect()->route('usiswa')->with('update', 'Berhasil Mengupdate Data User Siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserSiswa  $userSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usiswa = UserSiswa::find($id);
        $usiswa->update(['deleted_at' => '1']);
        return redirect()->route('usiswa')->with('delete', 'Berhasil Menghapus Data User Siswa');
    }

    public function notifbimbel(){
        $notif = UserSiswa::all()->whereIn('status',['1', '0'])->where('id_userbimbel', Auth::user()->id);
        return view('pages.bimbel.notifikasi.notifikasi', compact('notif'));
    }

    public function diterimabimbel($id){
        $ubimbel = UserSiswa::find($id);
        $ubimbel->update(['status' => '2']);
        return redirect()->route('ubimbel')->with('create', 'berhasil mengubah status menjadi di terima');
    }

    public function ditolakbimbel($id){
        $usiswa = UserSiswa::find($id);
        $usiswa->update(['status'=> '0']);
        return redirect()->route('notifikasi.bimbel')->with('create', 'berhasil mengubah status menjadi di tolak');
    }

    public function profile()
    {
        return view('pages.bimbel.profil.profil');
    }

    public function updateprofile(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'password' => 'required',
            'avatar' => 'file|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $bimbel = Auth::user();
        $bimbel->name = $request->name;
        $bimbel->password = bcrypt($request->password);
        $avatar = $request->file('avatar');
        if ($avatar == ''){
            $bimbel->avatar = old_filename;
        }else{
            $filename = time().'.'. $avatar->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/user bimbel');
            $avatar->move($destinationPath, $filename);
            $bimbel->avatar = $filename;
        }
        //dd($request->all());
        $bimbel->save();

        return redirect()->route('bimbel.profil')->with('update', 'Berhasil Mengupdate Data User Bimbel');
    }

}

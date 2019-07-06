<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserBimbel;
use Illuminate\Support\Facades\Auth;

class DeveloperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('pages.dev.dashboard');
    }


    public function index()
    {
        $userbimbel = UserBimbel::where('status', '2')->where('deleted_at', '1')->get();
        return view('pages.dev.akun_bimbel.akun_bimbel', compact('userbimbel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dev.akun_bimbel.create');
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
            'email' => 'required|unique:user_bimbels',
            'password' => 'required',
            'avatar' => 'required|file|image|mimes:jpg,png,jpeg|max:2048',
        ]);


        $avatar = $request->file('avatar');
        $filename = time().'.'. $avatar->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/user bimbel');
        $avatar->move($destinationPath, $filename);


        $ubimbel = new UserBimbel();
        $ubimbel->name = $request->name;
        $ubimbel->email = $request->email;
        $ubimbel->password = bcrypt($request->password);
        $ubimbel->avatar = $filename;
        $ubimbel->status = '2';
        $ubimbel->deleted_at = '1';
        $ubimbel->save();

        return redirect()->route('ubimbel')->with('create', 'Berhasil Menambahkan Data User Bimbel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserBimbel  $userBimbel
     * @return \Illuminate\Http\Response
     */
    public function show(UserBimbel $userBimbel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserBimbel  $userBimbel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ubimbel = UserBimbel::find($id);
        return view('pages.dev.akun_bimbel.edit', compact('ubimbel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserBimbel  $userBimbel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required',
            'password' => 'required',
            'avatar' => 'file|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $ubimbel = UserBimbel::find($id);
        $ubimbel->name = $request->name;
        $ubimbel->password = bcrypt($request->password);
        $avatar = $request->file('avatar');
        if ($avatar == ''){
            $ubimbel->avatar = $request->old_avatar;
        }else{
            $filename = time().'.'. $avatar->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/user bimbel');
            $avatar->move($destinationPath, $filename);
            $ubimbel->avatar = $filename;
        }
        $ubimbel->update();

        return redirect()->route('ubimbel')->with('update', 'Berhasil Mengupdate Data User Bimbel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserBimbel  $userBimbel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ubimbel = UserBimbel::find($id);
        $ubimbel->update(['deleted_at' => '0']);
        return redirect()->route('ubimbel')->with('delete', 'Berhasil Menghapus Data User Bimbel');
    }

    public function notifdev(){
        $notif = UserBimbel::all()->whereIn('status',['1', '0'])->where('deleted_at', '1');
        return view('pages.dev.notifikasi.notifikasi', compact('notif'));
    }

    public function diterimadev($id){
        $ubimbel = UserBimbel::find($id);
        $ubimbel->update(['status' => '2']);
        return redirect()->route('ubimbel')->with('create', 'berhasil mengubah status menjadi di terima');
    }

    public function ditolakdev($id){
        $ubimbel = UserBimbel::find($id);
        $ubimbel->update(['status'=> '0']);
        return redirect()->route('notifikasi.dev')->with('create', 'berhasil mengubah status menjadi di tolak');
    }

    public function profile()
    {
        return view('pages.dev.profile.profiledev');
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
            $destinationPath = public_path('/uploads/user');
            $avatar->move($destinationPath, $filename);
            $bimbel->avatar = $filename;
        }
        //dd($request->all());
        $bimbel->save();

        return redirect()->route('dev.profil')->with('update', 'Berhasil Mengupdate Data User Developers');
    }
}

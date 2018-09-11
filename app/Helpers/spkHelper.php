<?php

namespace App\Helpers;
use Illuminate\Support\Facades\DB;

class spkHelper{
    public static function auth(){
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        return $currentUser->group;
    }

    public static function group($param){
        $user_group=array('admin' => 'Admin', 
            'manager' => 'Manager');
        foreach ($user_group as $key => $value) {
            if($key==$param){
                return $value;
            }
        }
    }
    public static function input_group($param){
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        $group=$currentUser->group;
        $param=strtolower($param);
        $kesiswaan=array('eskul','sikap');
        $wali_kelas=array('absensi','raport');
        $value='true';
        if($group=='kesiswaan'){
            if(in_array($param, $kesiswaan)){
                $value="true";
            }else{
                $value="false";
            }
                   
        }
        if($group=='walikelas'){
            if(in_array($param, $wali_kelas)){
                $value="true";
            }else{
                $value="false";
            }
                  
        }
         return $value;

    }

    public static function kesiswaan(){
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        $group=$currentUser->group;
        $value="false";
        if($group=='kesiswaan'){
            $value="true";
        }
         return $value;
    }

    public static function walikelas(){
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        $group=$currentUser->group;
        $value="false";
        if($group=='walikelas'){
            $value="true";
        }
         return $value;
    }

    public static function akses($menu){
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        // dd($currentUser->id);
        $akses = DB::table('users')
            ->select('users.*','hak_akses.*')
            ->join('hak_akses', 'hak_akses.group', '=', 'users.group')
            ->where('users.id','=',$currentUser->id)
            ->get();
        $data=explode(',',$akses[0]->menu);

        if(in_array($menu, $data)){
            $value="true";
        }else{
            $value="false";
        }
            return $value;
    }
    public static function alternatif($kode){
        $data = DB::table('alternatifs')
            ->select('siswas.nama_siswa')
            ->join('siswas', 'siswas.id', '=', 'alternatifs.id_siswa')
            ->where('alternatifs.kode','=',$kode)
            ->get();
        return $data[0]->nama_siswa;
      
    }
    public static function kriteria($kode){
        $data = DB::table('kriterias')
            ->select('kriterias.kriteria')
            ->where('kriterias.kode','=',$kode)
            ->get();
        return $data[0]->kriteria;
    }
    //tabel kategori/Class
    public static function karyawan($id){
        $data = DB::table('karyawan')
            ->select('karyawan.nama')
            ->where('karyawan.id','=',$id)
            ->get();
        return $data[0]->nama;
    }
    public static function gaji($id){
        $data = DB::table('gaji')
            ->select('gaji.gaji')
            ->where('gaji.id_karyawan','=',$id)
            ->get();
        return $data[0]->gaji;
    }
    public static function jabatan($id){
        $data = DB::table('jabatan')
            ->select('jabatan.jabatan')
            ->where('jabatan.id','=',$id)
            ->get();
        return $data[0]->jabatan;
    }
    public static function harga($id){
        $data = DB::table('harga')
            ->select('harga.nominal')
            ->where('harga.id','=',$id)
            ->get();
        return $data[0]->nominal;
    }
    public static function jam($id){
        $data = DB::table('jam')
            ->select('jam.jam')
            ->where('jam.id','=',$id)
            ->get();
        return $data[0]->jam;
    }

//yang dipakai yang ini
    public static function list01($id){
        $data = DB::table('list1')
            ->select('list1.title')
            ->where('list1.id','=',$id)
            ->get();
        return $data[0]->title;
    }

    public static function child01($id){
        $data = DB::table('child01')
            ->select('child01.title')
            ->where('child01.id','=',$id)
            ->get();
        return $data[0]->title;
    }

    public static function child02($id){
        $data = DB::table('child02')
            ->select('child02.title')
            ->where('child02.id','=',$id)
            ->get();
        return $data[0]->title;
    }

//sampai tanda ini broo...



    public static function rute($id){
        $data = DB::table('rute')
            ->select('rute.rute')
            ->where('rute.id','=',$id)
            ->get();
        return $data[0]->rute;
    }
    //tabel transaksi
     public static function member($id){
        $data = DB::table('member')
            ->select('member.nama')
            ->where('member.id','=',$id)
            ->get();
        return $data[0]->nama;
    }

    public static function maxValueInArray($array, $keyToSearch)
    {
    $currentMax = NULL;
        foreach($array as $arr)
        {
            foreach($arr as $key => $value)
            {
                if ($key == $keyToSearch && ($value >= $currentMax))
                {
                    $currentMax = $value;
                }
            }
        }

        return $currentMax;
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\customers2_tabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class Customers2_TabelController extends Controller
{
    public function show()
    {
        return customers2_tabel::all();
    }
    public function detail($id)
    {
        if(customers2_tabel::where('id_pelanggan', $id)->exists()){
            $data = DB::table('customers2_tabel')->where('customers2_tabel.id_pelanggan', '=', $id)->get();
            return Response()->json($data);
        } else{
            return Response() ->json(['message' => 'Tidak ditemukan']);
        }
    }
    public function store(Request $request)
    {
    $validator=Validator::make($request->all(),
        [
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]
    );
    if($validator->fails()) {
        return Response()->json($validator->errors());
    }
    $simpan = customers2_tabel ::create([
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'telp' => $request->telp,
        'username' => $request->username,
        'password' => Hash::make($request->password)
        
    ]);
 if($simpan)
 {
 return Response()->json(['status' => 1]);
 }
 else
 {
 return Response()->json(['status' => 0]);
 }
 }

    public function update($id, Request $request) {         
        $validator=Validator::make($request->all(),         
        [                 
            'nama' => 'required',                                  
            'alamat' => 'required',
            'telp' => 'required',
            'username' => 'required',
            'password' => 'required'             
        ]); 

        if($validator->fails()) {             
            return Response()->json($validator->errors());         
        } 

        $ubah = Customers2_tabel::where('id_pelanggan', $id)->update([             
            'nama' => $request->nama,             
            'alamat' => $request->alamat,             
            'telp' => $request->telp,             
            'username' => $request->username,             
            'password' => $request->password       
        ]); 

        if($ubah) {             
            return Response()->json(['status' => 1]);         
        }         
        else {             
            return Response()->json(['status' => 0]);         
        }     
    }
    public function destroy($id)
    {
        $hapus = Customers2_tabel::where('id_pelanggan', $id)->delete();

        if($hapus) {
            return Response()->json(['status' => 1]);
    }

        else {
            return Response()->json(['status' => 0]);
    }
    }
    }


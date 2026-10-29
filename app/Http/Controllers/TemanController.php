<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teman;

class TemanController extends Controller
{
    public function index(){
        $all_friend = Teman::all();
        return view('Teman', compact('all_friend'));
    }
    public function tambah(){
        return view('tambah');
    }
    public function simpan(Request $request){
        $request->validate([
            'nama_teman' => 'required',
            'tanggal_lahir' => 'required|date|before:today',
            'nomor_kursi' => 'required|integer|min:1|max:36',
            'alamat' => 'required',
            'nomor_telepon' => 'required|numeric|digits_between:12,13'
        ], [
            'nama_teman.required' => 'Nama Teman anda harus diisi',
            'tanggal_lahir.required' => 'Tanggal Lahir teman lu diisi dong, biar bisa suprise nanti',
            'tanggal_lahir.date' => 'Isilah Tanggalnya betul-betul, masa teman lu lahir ga ingat',
            'tanggal_lahir.before' => 'Masa teman lu baru lahir??, yang bener dong tanggalnya',
            'nomor_kursi.required' => 'Teman lu ga duduk dikursi nya???',
            'nomor_kursi.integer' => 'Wajib angka aja bro, huruf ga bisa',
            'nomor_kursi.min' => 'minimal Nomor kursi itu 1',
            'nomor_kursi.max' => 'Kursinya cuman 36 bro',
            'alamat.required' => 'masukin nih alamat teman lu biar ga lupa kalo kerumahnya',
            'nomor_telepon.required' => 'masa punya teman ga punya nomor, isi nih',
            'nomor_telepon.numeric' => 'Nomor bro bukan huruf',
            'nomor_telepon.digits_between' => 'Lu WNA???, This is Indonesia +62 bro, isi 12 atau 13 lah'
        ]);

        Teman::create($request->all());

        return redirect('/')->with('success', 'Data teman berhasil disimpan.');
    }
    public function edit($id){
        $teman = Teman::findOrFail($id);
        return view('edit', compact('teman'));
    }
    public function hapus($id){
        $teman = Teman::findOrFail($id);
        $teman->delete();
        return redirect('/')->with('success', 'Data teman berhasil dihapus.');
    }
    public function simpanedit(Request $request, $id){
        $teman = Teman::findOrFail($id);

        $request->validate([
            'nama_teman' => 'required',
            'tanggal_lahir' => 'required|date|before:today',
            'nomor_kursi' => 'required|integer|min:1|max:36',
            'alamat' => 'required',
            'nomor_telepon' => 'required|numeric|digits_between:12,13'
        ], [
            'nama_teman.required' => 'Nama Teman anda harus diisi',
            'tanggal_lahir.required' => 'Tanggal Lahir teman lu diisi dong, biar bisa suprise nanti',
            'tanggal_lahir.date' => 'Isilah Tanggalnya betul-betul, masa teman lu lahir ga ingat',
            'tanggal_lahir.before' => 'Masa teman lu baru lahir??, yang bener dong tanggalnya',
            'nomor_kursi.required' => 'Teman lu ga duduk dikursi nya???',
            'nomor_kursi.integer' => 'Wajib angka aja bro, huruf ga bisa',
            'nomor_kursi.min' => 'minimal Nomor kursi itu 1',
            'nomor_kursi.max' => 'Kursinya cuman 36 bro',
            'alamat.required' => 'masukin nih alamat teman lu biar ga lupa kalo kerumahnya',
            'nomor_telepon.required' => 'masa punya teman ga punya nomor, isi nih',
            'nomor_telepon.numeric' => 'Nomor bro bukan huruf',
            'nomor_telepon.digits_between' => 'Lu WNA???, This is Indonesia +62 bro, isi 12 atau 13 lah'
        ]);

        $teman->update($request->all());

        return redirect('/')->with('success', 'Data teman berhasil diperbarui.');
    }
}
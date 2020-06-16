<?php

namespace App\Http\Controllers;

use App\Consument;
use Illuminate\Http\Request;

class ConsumentController extends Controller
{
    public function index()
    {
        $consuments = Consument::orderBy('created_at', 'DESC')->get();
        return view('consuments.index', compact('consuments'));
    }

    public function create()
    {
        return view('consuments.create');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jenis_kendaraan' => 'required',
            'no_polisi' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required'
        ]);

        try {
            $consument = Consument::create([
                'nama' => $request->nama,
                'jenis_kendaraan' => $request->jenis_kendaraan,
                'no_polisi' => $request->no_polisi,
                'tgl_lahir' => $request->tgl_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'no_hp' => $request->no_hp
            ]);

            return redirect('/')->with(['success' => '<strong>' . $consument->no_polisi . '</strong> Telah disimpan']);
        } catch (\Exception $e) {
            return redirect('/create')->with(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $consument = Consument::find($id);
        return view('consuments.edit', compact('consument'));
    }

    public function update(Request $request, $id)
    {
        $consument = Consument::find($id);
        $consument->update([
            'nama' => $request->nama,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'no_polisi' => $request->no_polisi,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp
        ]);

        return redirect('/')->with(['success' => '<strong>' . $consument->no_polisi . '</strong> Telah disimpan']);
    }

    public function destroy($id)
    {
        $consument = Consument::find($id);
        $consument->delete();
        return redirect('/')->with(['success' => '</strong>' . $consument->title . '</strong> Dihapus']);
    }
}

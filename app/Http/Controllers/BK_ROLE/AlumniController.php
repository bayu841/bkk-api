<?php

namespace App\Http\Controllers\BK_ROLE;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlumniController extends Controller
{
public function index()
    {
        $alumni = Alumni::with('user')->get();
        return response()->json([
            'data' => $alumni
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'nik' => 'required',
            'nis' => 'required',
            'nisn' => 'required',
            'ortu' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'tahun_lulus' => 'required',
            'skill' => 'required',
            'experience' => 'required',
            'cv' => 'required|file|mimes:pdf|max:2048',
            'status_ditrima_kerja' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()
            ], 422);
        }

        $cvPath = $request->file('cv')->store('cv/alumni', 'public');

        $alumni = Alumni::create([
            'user_id' => $request->user_id,
            'nik' => $request->nik,
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'ortu' => $request->ortu,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jurusan' => $request->jurusan,
            'tahun_lulus' => $request->tahun_lulus,
            'skill' => $request->skill,
            'experience' => $request->experience,
            'cv' => $cvPath,
            'status_ditrima_kerja' => $request->status_ditrima_kerja
        ]);

        return response()->json([
            'message' => 'Berhasil membuat data alumni',
            'cv_url' => asset('storage/' . $cvPath),
            'data' => $alumni
        ], 200);
    }

    public function update(Request $request, Alumni $alumni)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'nis' => 'required',
            'nisn' => 'required',
            'ortu' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'tahun_lulus' => 'required',
            'skill' => 'required',
            'experience' => 'required',
            'cv' => 'file|mimes:pdf|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()
            ], 422);
        }

        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cv/alumni', 'public');
            $alumni->update([
                'nik' => $request->nik,
                'nis' => $request->nis,
                'nisn' => $request->nisn,
                'ortu' => $request->ortu,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jurusan' => $request->jurusan,
                'tahun_lulus' => $request->tahun_lulus,
                'skill' => $request->skill,
                'experience' => $request->experience,
                'cv' => $cvPath,
            ]);
        } else {
            $alumni->update([
                'nik' => $request->nik,
                'nis' => $request->nis,
                'nisn' => $request->nisn,
                'ortu' => $request->ortu,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jurusan' => $request->jurusan,
                'tahun_lulus' => $request->tahun_lulus,
                'skill' => $request->skill,
                'experience' => $request->experience,
            ]);
        }

        return response()->json([
            'message' => 'Berhasil mengubah data alumni',
            'data' => $alumni
        ], 200);
    }

    public function destroy(Alumni $alumni)
    {
        $alumni->delete();
        return response()->json([
            'message' => 'Berhasil menghapus data alumni'
        ], 200);
    }
}

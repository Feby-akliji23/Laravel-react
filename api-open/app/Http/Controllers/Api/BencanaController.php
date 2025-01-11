<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bencana;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class BencanaController extends Controller
{
    /**
     * Tampilkan semua data bencana.
     */
public function index(Request $request)
    {
        $query = Bencana::with('wilayah');

        // Filter berdasarkan wilayah_id
        if ($request->has('wilayah_id') && !empty($request->wilayah_id)) {
            $query->where('wilayah_id', $request->wilayah_id);
        }

        // Filter berdasarkan tanggal (dari & hingga)
        if ($request->filled('tanggal_dari') && $request->filled('tanggal_hingga')) {
            $query->whereBetween('tanggal', [$request->tanggal_dari, $request->tanggal_hingga]);
        }

        // Filter berdasarkan teks di kolom kejadian dan detail
        if ($request->has('search') && !empty($request->search)) {
            $query->where(function ($q) use ($request) {
                $q->where('kejadian', 'LIKE', '%' . $request->search . '%')
                ->orWhere('detail', 'LIKE', '%' . $request->search . '%');
            });
        }

        // Pagination
        $bencana = $query->orderBy('created_at', 'desc')->paginate(10);
        $allWilayah = Wilayah::all();

        return response()->json([
            'code' => 200,
            'message' => 'Daftar bencana berhasil diambil',
            'data' => $bencana,
            'allWilayah' => $allWilayah, 
        ]);
    }



    /**
     * Simpan data bencana baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'wilayah_id' => 'required|exists:wilayah,id',
            'kib' => 'required|integer',
            'kejadian' => 'required|string',
            'detail' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        $bencana = Bencana::create($validated);

        return response()->json([
            'code' => 201,
            'message' => 'Bencana created successfully',
            'data' => $bencana,
        ], 201);
    }

    /**
     * Update data bencana.
     */
    public function update(Request $request, Bencana $bencana)
    {
        $validated = $request->validate([
            'wilayah_id' => 'exists:wilayah,id',
            'kib' => 'integer', // Validasi untuk integer
            'kejadian' => 'string',
            'detail' => 'string',
            'tanggal' => 'required|date',
        ]);

        $bencana->update($validated);

        return response()->json([
            'code' => 200,
            'message' => 'Bencana updated successfully',
            'data' => $bencana,
        ]);
    }

    /**
     * Hapus data bencana.
     */
    public function destroy(Bencana $bencana)
    {
        $bencana->delete();

        return response()->json([
            'code' => 200,
            'message' => 'Bencana deleted successfully',
        ]);
    }
}

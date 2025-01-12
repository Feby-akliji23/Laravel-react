<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Bencana;
use App\Models\Wilayah;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Bencana",
 *     description="API endpoints for managing bencana"
 * )
 *
 * @OA\PathItem(
 *     path="/api/bencana"
 * )
 */

class BencanaController extends Controller
{
    /**
     * Mengambil data bencana.
     */

    /**
     * @OA\Get(
     *     path="/api/bencana",
     *     summary="Get list of bencana",
     *     tags={"Bencana"},
     *     @OA\Parameter(
     *         name="wilayah_id",
     *         in="query",
     *         description="Filter by wilayah ID",
     *         required=false,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Parameter(
     *         name="tanggal_dari",
     *         in="query",
     *         description="Start date for filtering",
     *         required=false,
     *         @OA\Schema(type="string", format="date")
     *     ),
     *     @OA\Parameter(
     *         name="tanggal_hingga",
     *         in="query",
     *         description="End date for filtering",
     *         required=false,
     *         @OA\Schema(type="string", format="date")
     *     ),
     *     @OA\Parameter(
     *         name="search",
     *         in="query",
     *         description="Search term for kejadian or detail",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="code", type="integer"),
     *             @OA\Property(property="message", type="string"),
     *             @OA\Property(property="data", type="array", @OA\Items(type="object")),
     *             @OA\Property(property="allWilayah", type="array", @OA\Items(type="object"))
     *         )
     *     )
     * )
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

    /**
     * @OA\Post(
     *     path="/api/bencana",
     *     summary="Create a new bencana",
     *     tags={"Bencana"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             type="object",
     *             required={"wilayah_id", "kib", "kejadian", "detail", "tanggal"},
     *             @OA\Property(property="wilayah_id", type="integer"),
     *             @OA\Property(property="kib", type="integer"),
     *             @OA\Property(property="kejadian", type="string"),
     *             @OA\Property(property="detail", type="string"),
     *             @OA\Property(property="tanggal", type="string", format="date")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Bencana created successfully",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="code", type="integer"),
     *             @OA\Property(property="message", type="string"),
     *             @OA\Property(property="data", type="object")
     *         )
     *     )
     * )
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

     /**
     * @OA\Put(
     *     path="/api/bencana/{id}",
     *     summary="Update a bencana",
     *     tags={"Bencana"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of bencana to update",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="wilayah_id", type="integer"),
     *             @OA\Property(property="kib", type="integer"),
     *             @OA\Property(property="kejadian", type="string"),
     *             @OA\Property(property="detail", type="string"),
     *             @OA\Property(property="tanggal", type="string", format="date")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Bencana updated successfully",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="code", type="integer"),
     *             @OA\Property(property="message", type="string"),
     *             @OA\Property(property="data", type="object")
     *         )
     *     )
     * )
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

    /**
     * @OA\Delete(
     *     path="/api/bencana/{id}",
     *     summary="Delete a bencana",
     *     tags={"Bencana"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of bencana to delete",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Bencana deleted successfully",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="code", type="integer"),
     *             @OA\Property(property="message", type="string")
     *         )
     *     )
     * )
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

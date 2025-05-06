<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mapel;
use App\Models\User;

class AssignController extends Controller
{
    public function siswa(Request $request)
    {
        $user = User::find($request->id_siswa);
        $assigned_mapels_ids = json_decode($user->assigned_mapels, true) ?? [];
        $assigned_mapels = mapel::whereIn('id', $assigned_mapels_ids)->get();
        return response()->json([
            'message' => 'Siswa found',
            'siswa' => $user,
            'assigned_mapels' => $assigned_mapels,
        ]);
    }

    public function assign(Request $request)
    {
        $mapel = mapel::find($request->id_mapel);
        if (!$mapel) {
            return response()->json([
                'message' => 'Mapel not found',
            ], 404);
        }
        if ($mapel->total_students >= $mapel->max_students) {
            return response()->json([
                'message' => 'Mapel is full',
            ], 400);
        }
        $siswa = User::find($request->id_siswa);
        if (!$siswa) {
            return response()->json([
                'message' => 'Siswa not found',
            ], 404);
        }
        $assigned_mapels = json_decode($siswa->assigned_mapels, true) ?? [];
        if (!in_array($mapel->id, $assigned_mapels)) {
            $assigned_mapels[] = $mapel->id;
        }
        $siswa->assigned_mapels = json_encode($assigned_mapels);
        $siswa->save();
        $mapel->total_students += 1;
        $mapel->save();
        return response()->json([
            'message' => 'Mapel assigned successfully',
            'mapel' => $mapel,
            'siswa' => $siswa,
        ]);
    }
}

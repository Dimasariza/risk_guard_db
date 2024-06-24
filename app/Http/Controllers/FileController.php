<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Str;

class FileController extends Controller
{
    public function __construct(
        public readonly File $model
    ) {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'file' => 'required|mimes:jpg,png,jpeg,svg|max:2048'
        // ]);

        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs($request["path_folder"], $fileName, 'public');

            $this->model->file_id = STR::random(10);
            $this->model->file_name = time() . '_' . $request->file->getClientOriginalName();
            $this->model->file_path = '/' . $filePath;
            $this->model->save();

            return response()->json([
                "status" => true,
                "message" => "File has been uploaded",
                "data" => $this->model
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string|int $id)
    {
        $file = $this->model->where("file_id", $id);
        if (!$file->exists()) {
            return response()->json([
                'status' => false,
                'message' => 'Image not found.'
            ], 404);
        }

        $base_path = base_path() . '\storage\app/public';
        $file_path = $base_path . $file->first()->file_path;
        $file_info = new \finfo(FILEINFO_MIME_TYPE);

        if (!FacadesFile::exists($file_path)) {
            return response()->json([
                'status' => false,
                'message' => 'Image not found.'
            ], 404);
        }

        $exist_file = FacadesFile::get($file_path);

        return response($exist_file, 200)
            ->header('Content-Type', $file_info->buffer($exist_file));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        //
    }
}

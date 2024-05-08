<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = new Artist();
        $allArtists = $artists->getAllArtists();
        return view("admin.artists.lists", compact("allArtists"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.artists.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {    // Validate dữ liệu đầu vào từ form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'genre' => 'required|string|max:255'
        ]);

        // Tạo một đối tượng Artist và gán dữ liệu từ form vào
        $artist = new Artist();
        $artist->name = $validatedData['name'];
        $artist->genre = $validatedData['genre'];

        // Lưu nghệ sĩ mới vào cơ sở dữ liệu
        $artist->save();

        // Sau khi lưu thành công, chuyển hướng người dùng đến trang nào đó, ví dụ: trang danh sách nghệ sĩ
        return redirect()->route('admin.artists.index')->with('success', 'Nghệ sĩ đã được tạo thành công!');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            // tìm nghệ sĩ theo id 
            $artist = Artist::findOrFail($id);
            return view('admin.artists.show', ['artist' => $artist]);
        } catch (\Exception $e) {
            // nếu không tìm thấy nghệ sĩ có thể hiển thị 1 thông báo hoặc chuyeuenr hướng người dùng đến trang khác
            return redirect()->route('admin.artists.lists')->with('error', 'Không tìm thấy nghệ sĩ');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    public function getArtistsData()
    {
        $artists = Artist::all();
        return response()->json($artists);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

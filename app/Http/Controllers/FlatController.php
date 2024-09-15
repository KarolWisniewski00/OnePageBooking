<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FlatController extends Controller
{
    private function savePhoto($request, $i){
        if ($request->hasFile("foto{$i}")) {
            $file = $request->file("foto{$i}");
            $fileName = time() . rand(1, 100) . '.' . $file->extension();
            $file->move(public_path('photo'), $fileName);
            return $fileName;
        }else{
            return null;
        }
    }
    public function index()
    {
        $flats = Flat::all();
        $sets = Setting::all();
        return view('dashboard', compact('flats','sets'));
    }
    public function create()
    {
        return view('flats.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|url',
            'adress' => 'required|string|max:255',
            'description' => 'required|string',
            'foto1' => 'nullable|image|max:2048',
            'foto2' => 'nullable|image|max:2048',
            'foto3' => 'nullable|image|max:2048',
            'foto4' => 'nullable|image|max:2048',
            'foto5' => 'nullable|image|max:2048',
            'foto6' => 'nullable|image|max:2048',
            'foto7' => 'nullable|image|max:2048',
            'foto8' => 'nullable|image|max:2048',
            'foto9' => 'nullable|image|max:2048',
            'foto0' => 'nullable|image|max:2048',
            'foto11' => 'nullable|image|max:2048',
            'foto12' => 'nullable|image|max:2048',
            'foto13' => 'nullable|image|max:2048',
            'foto14' => 'nullable|image|max:2048',
            'foto15' => 'nullable|image|max:2048',
            'foto16' => 'nullable|image|max:2048',
            'foto17' => 'nullable|image|max:2048',
            'foto18' => 'nullable|image|max:2048',
            'foto19' => 'nullable|image|max:2048',
            'foto20' => 'nullable|image|max:2048',
            'foto21' => 'nullable|image|max:2048',
            'foto22' => 'nullable|image|max:2048',
        ]);

        $flat = new Flat($validated);
        $flat->foto1 = $this->savePhoto($request, 1);
        $flat->foto2 = $this->savePhoto($request, 2);
        $flat->foto3 = $this->savePhoto($request, 3);
        $flat->foto4 = $this->savePhoto($request, 4);
        $flat->foto5 = $this->savePhoto($request, 5);
        $flat->foto6 = $this->savePhoto($request, 6);
        $flat->foto7 = $this->savePhoto($request, 7);
        $flat->foto8 = $this->savePhoto($request, 8);
        $flat->foto9 = $this->savePhoto($request, 9);
        $flat->foto10 = $this->savePhoto($request, 10);
        $flat->foto11 = $this->savePhoto($request, 11);
        $flat->foto12 = $this->savePhoto($request, 12);
        $flat->foto13 = $this->savePhoto($request, 13);
        $flat->foto14 = $this->savePhoto($request, 14);
        $flat->foto15 = $this->savePhoto($request, 15);
        $flat->foto16 = $this->savePhoto($request, 16);
        $flat->foto17 = $this->savePhoto($request, 17);
        $flat->foto18 = $this->savePhoto($request, 18);
        $flat->foto19 = $this->savePhoto($request, 19);
        $flat->foto20 = $this->savePhoto($request, 20);
        $flat->foto21 = $this->savePhoto($request, 21);
        $flat->foto22 = $this->savePhoto($request, 22);

        $flat->save();

        return redirect()->route('dashboard')->with('success', 'Mieszkanie zostało dodane!');
    }
    public function delete(Flat $flat)
    {
        // Usunięcie powiązanych zdjęć, jeśli istnieją
        for ($i = 1; $i <= 22; $i++) {
            $fotoField = "foto{$i}";
            $photoFilePath = public_path('photo/' . $flat->$fotoField);
            if (File::exists($photoFilePath)) {
                $res = File::delete($photoFilePath);
            }
        }

        // Usunięcie rekordu z bazy danych
        $flat->delete();

        // Przekierowanie z wiadomością sukcesu
        return redirect()->route('dashboard')->with('success', 'Mieszkanie zostało pomyślnie usunięte.');
    }
}

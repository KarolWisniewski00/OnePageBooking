<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit(Setting $setting)
    {
        $set = $setting;
        return view('setting.edit', compact('set'));
    }
    public function update(Request $request, Setting $setting)
    {
        $setting->value = $request->value;
        $setting->update();
        $set = $setting;
        return view('setting.edit', compact('set'));
    }
}

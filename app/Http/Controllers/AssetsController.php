<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\AssetAdmin;
use App\Models\AssetMember;
use App\Models\Employee;
use App\Http\Requests\StoreAssetRequest;
use App\Http\Requests\UpdateAssetRequest;

class AssetsController extends Controller
{
    public function index()
    {
        $assets = Asset::latest()->paginate(10);
        return view('admin/aktivi/index')->with('assets', $assets);
    }

    public function create()
    {
        $employees = Employee::where('uloga', 'profesori')->where('kategorija', 'sadasnji_radnici')->get();
        return view('admin/aktivi/kreiraj')->with('employees', $employees);
    }

    public function store(StoreAssetRequest $request)
    {
        $data = $request->validated();

        $asset = Asset::create($data);

        AssetAdmin::create([
            'employee_id' => $data['predsjednik'],
            'asset_id' => $asset->id
        ]);

        AssetMember::create([
            'employee_id' => $data['predsjednik'],
            'asset_id' => $asset->id
        ]);

        if (array_key_exists('clanovi', $data)) {
            foreach ($data['clanovi'] as $id) {
                AssetMember::create([
                    'employee_id' => $id,
                    'asset_id' => $asset->id
                ]);
            }
        }

        return redirect(config('app.url') . '/admin/aktivi')->with([
            'message' => 'Uspjesno Dodano!'
        ]);
    }

    public function edit($assetId)
    {
        $employees = Employee::where('uloga', 'profesori')->where('kategorija', 'sadasnji_radnici')->get();
        $asset = Asset::findOrFail($assetId);
        return view('admin/aktivi/uredi')->with('asset', $asset)->with('employees', $employees);
    }

    public function update(UpdateAssetRequest $request, $assetId)
    {
        $asset = Asset::findOrFail($assetId);

        $data = $request->validated();

        if ($request->naziv) {
            $post->slug = null;
        }

        $asset->update($data);

        if ($request->predsjednik) {
            $oldAdmin = AssetAdmin::where('asset_id', $assetId)->first();
            $oldAdmin->delete();
            AssetAdmin::create([
                'employee_id' => $data['predsjednik'],
                'asset_id' => $asset->id
            ]);

            AssetMember::create([
                'employee_id' => $data['predsjednik'],
                'asset_id' => $asset->id
            ]);
            
        }

        if (array_key_exists('clanovi', $data)) {
            AssetMember::where('asset_id', $assetId)->where('employee_id', '!=', $request->predsjednik)->delete();
            foreach ($data['clanovi'] as $id) {
                AssetMember::create([
                    'employee_id' => $id,
                    'asset_id' => $asset->id
                ]);
            }
        }

        return redirect(config('app.url') . '/admin/aktivi')->with([
            'message' => 'Uspjesno Dodano!'
        ]);
    }

    public function delete($assetId)
    {
        $asset = Asset::findOrFail($assetId);
        $asset->delete();
        return redirect(config('app.url') . '/admin/aktivi')->with([
            'message' => 'Uspjesno Izbrisano!'
        ]);
    }

    public function getAllAssets()
    {
        $assets = Asset::latest()->paginate(10);
        return view('aktivi')->with('assets', $assets);
    }

    public function showSingleAsset($slug)
    {
        Asset::where('slug', $slug)->firstOrFail();
        return view('aktivi/single')->with('asset', $asset);
    }
}

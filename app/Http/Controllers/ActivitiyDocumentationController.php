<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivitiyDocumentation;

class ActivitiyDocumentationController extends Controller
{
    public function index(Request $request)
    {
        $query = ActivitiyDocumentation::query();

        if ($request->filled('tim_fungsi')) {
            $queryArray = explode(',', $request->tim_fungsi);
            $query->whereIn('fungsi_tim', $queryArray);
        }

        $activityDocumentation = $query->get();

        $timFungsi = explode(',', $request->tim_fungsi);

        if (in_array('Kepala', $timFungsi)) {
            return view('headoffice', compact('activityDocumentation'));
        } else if (in_array('Humas', $timFungsi)) {
            return view('internaloffice', compact('activityDocumentation'));
        } else {
            return view('statoffice', compact('activityDocumentation'));
        }
    }

    public function indexstatoffice(Request $request)
    {
        $query = ActivitiyDocumentation::query();

        if ($request->filled('tim_fungsi')) {
            $queryArray = explode(',', $request->tim_fungsi);
            $query->whereIn('fungsi_tim', $queryArray);
        }

        $activityDocumentation = $query->get();

        return view('statoffice', compact('activityDocumentation'));
    }

    //create (kage diurus pagenya)
    public function create()
    {
        return view('activity_documentation.create');
    }

    //store (kage diurus sistem penyimpanannya)
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'fungsi_tim' => 'required|string|max:255',
            'nama_kegiatan' => 'required|string|max:255',
            'link_asset' => 'nullable|url',
            'link_vo_script' => 'nullable|url',
            'link_cover' => 'nullable|url',
            'jenis_kegiatan' => 'required|string|max:255',
            'link_ig' => 'nullable|url',
            'link_youtube' => 'nullable|url',
            'link_bps_news' => 'nullable|url',
            'link_eksport' => 'nullable|url',
        ]);

        ActivitiyDocumentation::create($request->all());

        return redirect()->route('activity_documentation.index')->with('success', 'Activity documentation created successfully.');
    }

    public function show($id)
    {
        $activityDocumentation = ActivitiyDocumentation::findOrFail($id);
        return view('activity_documentation.show', compact('activityDocumentation'));
    }
    public function edit($id)
    {
        $activityDocumentation = ActivitiyDocumentation::findOrFail($id);
        return view('activity_documentation.edit', compact('activityDocumentation'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'fungsi_tim' => 'required|string|max:255',
            'nama_kegiatan' => 'required|string|max:255',
            'link_asset' => 'nullable|url',
            'link_vo_script' => 'nullable|url',
            'link_cover' => 'nullable|url',
            'jenis_kegiatan' => 'required|string|max:255',
            'link_ig' => 'nullable|url',
            'link_youtube' => 'nullable|url',
            'link_bps_news' => 'nullable|url',
            'link_eksport' => 'nullable|url',
        ]);

        $activityDocumentation = ActivitiyDocumentation::findOrFail($id);
        $activityDocumentation->update($request->all());

        return redirect()->route('activity_documentation.index')->with('success', 'Activity documentation updated successfully.');
    }
    //delete (kage diurus sistem hapusnya)
    public function destroy($id)
    {
        $activityDocumentation = ActivitiyDocumentation::findOrFail($id);
        $activityDocumentation->delete();

        return redirect()->route('activity_documentation.index')->with('success', 'Activity documentation deleted successfully.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $activityDocumentations = ActivitiyDocumentation::where('nama_kegiatan', 'LIKE', "%{$query}%")->get();

        return view('headoffice', compact('activityDocumentations'));
    }

    public function filter(Request $request)
    {
        $filter = $request->input('filter');
        $activityDocumentations = ActivitiyDocumentation::where('jenis_kegiatan', $filter)->get();

        return view('headoffice', compact('activityDocumentations'));
    }

    public function sort(Request $request)
    {
        $sort = $request->input('sort');
        $activityDocumentations = ActivitiyDocumentation::orderBy($sort, 'asc')->get();

        return view('headoffice', compact('activityDocumentations'));
    }

    public function paginate(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $activityDocumentations = ActivitiyDocumentation::paginate($perPage);

        return view('headoffice', compact('activityDocumentations'));
    }

    // Add other methods (edit, update, destroy) as needed
}

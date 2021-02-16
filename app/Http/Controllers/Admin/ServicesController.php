<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServicesValidation;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Servies = Services::all();
        return view('admin.Services.Services', compact('Servies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicesValidation $request)
    {
        // ServicesValidation Unique

        if (Services::where('Name_Services->ar', $request->Name_Services_ar)->orWhere('Name_Services->en', $request->Name_Services_en)->exists()) {

            return redirect()->back()->withErrors([trans('admin/services.Unique')]);
        }

        try {
            // Create Services Successfully

            $Servies = new Services();
            $Servies->Name_Services = ["en" => $request->Name_Services_en, "ar" => $request->Name_Services_ar];
            $Servies->Notes_Services = $request->Notes_Services;
            $Servies->save();
            session()->flash('Succesfully_Add');
            return redirect('/admin/Services ');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServicesValidation $request, $id)
    {
        try {
            // Edit Services Successfully

            $EditServies = Services::findOrFail($request->id);
            $EditServies->update([
                'Name_Services' => ["en" => $request->Name_Services_en, "ar" => $request->Name_Services_ar],
                'Notes_Services' => $request->Notes_Services,
            ]);
            session()->flash('Succesfully_Edit');
            return redirect('/admin/Services ');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        try {
            // Deleted Services Successfully

            Services::destroy($request->id);
            session()->flash('ServiesDeleted');
            return redirect('/admin/Services ');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}

<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointments;
use App\Http\Requests\AppointmentsValidation;
use Illuminate\Support\Facades\Notification;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(AppointmentsValidation $request)
    {


    try{
        $Appointments = new Appointments();
          
        $Appointments->email= $request->email;
        $Appointments->name= $request->name;
        $Appointments->Section_id= $request->Section_id;
        $Appointments->phone= $request->phone;
        $Appointments->date= $request->date;
        $Appointments->time= $request->time;
        $Appointments->messege= $request->messege;
       

            $Appointments->save();

           // Notification::send($Appointments, new Appointments($Appointments));

    }    catch (\Exception $e) {
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

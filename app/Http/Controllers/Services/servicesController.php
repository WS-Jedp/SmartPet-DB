<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Services\tbl_service;
use App\Models\Services\tbl_timetable;
use Exception;

class servicesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    // Index
    public function servicesIndex(){
        $services = tbl_service::all();
        $timetables = tbl_timetable::all();

        return view('AdminViews\Services\adminServices', compact('services', 'timetables'));
    }
    // ------- timetables ----------
    // Create
    public function timetableCreateIndex(){
        return view('AdminViews\Services\scheduleCrud');
    }
    public function timetableCreate(Request $request){
        try{
            $newTimetable = new tbl_timetable;
            $newTimetable->name = $request->name;
            $newTimetable->time_start = $request->time_start;
            $newTimetable->time_end = $request->time_end;
            $newTimetable->weekend = $request->weekend;
            $newTimetable->save();

            return response()->json([
                'message'=>'Se ha creado el horario ' . $request->name . ' correctamente',
                'status'=>200
            ]);
        }catch(Exception $err){
            return response()->json([
                'message'=>'Ha ocurrido un error',
                'status'=>404,
                'error'=>$err
            ]);
        }
    }
    // Edit
    public function timetableEditIndex($id){
        $timetable = tbl_timetable::findOrFail($id);
        return view('AdminViews\Services\scheduleEdit', compact('timetable'));
    }
    public function timetableEdit(Request $request){
        try{
            $timetable = tbl_timetable::findOrFail($request->id_timetable);
            $timetable->name = $request->name;
            $timetable->time_start = $request->time_start;
            $timetable->time_end = $request->time_end;
            $timetable->weekend = $request->weekend;
            $timetable->save();

            return response()->json([
                'message'=>'Se ha actualizado el horario numero ' . $request->id_timetable . ' correctamente',
                'status'=>200
            ]);
        }catch(Exception $err){
            return response()->json([
                'message'=>'Ha ocurrido un error',
                'status'=>404,
                'error'=>$err
            ]);
        }
    }
    // Delete
    public function deleteTimetable($id){
        try{
            $timetable = tbl_timetable::findOrFail($id);
            $timetable->delete();
            return response()->json([
                'message'=>'Se ha eliminado correctamente el horario',
                'status'=>200
            ]);
        }catch(Exception $err){
            return response()->json([
                'message'=>'Ha ocurrido un error',
                'status'=>404,
                'error'=>$err
            ]);
        }
    }

    // ------- Services ----------
    // Create
    public function servicesCreateIndex(){
        $timetables = tbl_timetable::all();
        return view('AdminViews\Services\serviceCrud', compact('timetables'));
    }
    public function serviceCreate(Request $request){
        try{
            $newService = new tbl_service;
            $newService->service = $request->service;
            $newService->description = $request->description;
            $newService->price = $request->price;
            $newService->id_timetable = $request->id_timetable;
            $newService->state = $request->state;
            $newService->save();
            
            return response()->json([
                'message'=>'Se ha creado el servicio '. $request->service . ' correctamente',
                'status'=>200
            ]);
        }
        catch(Exception $err){
            return response()->json([
                'message'=>'Ha ocurrido un error',
                'status'=>404,
                'error'=>$err
            ]);
        }
    }

    // Edit
    public function serviceEditIndex($id){
        $service = tbl_service::findOrFail($id);
        $timetableActual = tbl_timetable::findOrFail($service->id_timetable);
        $timetables = tbl_timetable::all();
        return view('AdminViews\Services\servicesEdit', compact('service', 'timetables', 'timetableActual'));
    }
    public function serviceEdit(Request $request){
        try{
            $service = tbl_service::findOrFail($request->id_service);
            $service->service = $request->service;
            $service->price = $request->price;
            $service->description = $request->description;
            $request->id_timetable = $request->id_timetable;
            $service->state = $request->state;
            $service->save();

            return response()->json([
                'message'=>'Se ha actualizado el servicio ' . $request->id_service . ' correctamente',
                'status'=>200,
            ]);
        }catch(Exception $err){
            return response()->json([
                'message'=>'Ha ocurrido un error',
                'status'=>404,
                'error'=>$err
            ]);
        }
    }
    
    // Delete
    public function serviceDelete($id){
        try{
            $service = tbl_service::findOrFail($id);
            $service->delete();

            return response()->json([
                'message'=>'Se ha eliminado correctamente el servicio',
                'status'=>200
            ]);
        }catch(Exception $err){
            return response()->json([
                'message'=>'Ha ocurrido un error',
                'status'=>404,
                'error'=>$err
            ]);
        }
    }
}

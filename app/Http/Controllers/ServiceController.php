<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id', 'DESC')->get();
        return view('services.index', compact('services'));
    }

    public function import()
    {

        $path = Input::file('import_file')->getRealPath();
        
        Excel::load($path, function($reader){

            foreach ($reader->get() as $key => $row) {
                $servicio = [
                    'nro_servicio'          => $row['Nro. Servicio'],
                    'nro_solicitud'         => $row['Nro. Solicitud'],
                    'motivo'                => $row['Motivo'],
                    'cliente'               => $row['Cliente'],
                    'fecha_orden'           => $row['Fecha Orden'],                    
                    'observaciones_agenda'  => $row['Observaciones Agenda'],
                    'lugar'                 => $row['Lugar'],
                    'region'                 => $row['Region'],
                    
                    
                ];

                /** Una vez obtenido los datos de la fila procedemos a registrarlos */
                if (!empty($servicio)) {
                    Service::create($servicio);
                    //DB::table('productos')->insert($producto);
                }
            }

        });

        return redirect()->route('services.index')->with('info', 'Servicios agregados correctamente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}

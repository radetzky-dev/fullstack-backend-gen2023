<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFlightRequest;
use App\Http\Requests\UpdateFlightRequest;
use App\Models\Flight;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //  $data['flights'] = Flight::all();
        //   return view('voli.index', $data);

        return view('voli.index', ['flights' => Flight::where("confirmed", 1)->orderBy('destination')
                ->take(10)->get()]);
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
    public function store(StoreFlightRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (is_numeric($id)) {
            try {
                $flight = Flight::where('id', $id)->first();

                if ($flight) {
                    return view('voli.single', compact('flight'));
                }

                echo "Nessun risultato per id $id. Torna alla home <a href='../voli'>home</a>";
                die();

            } catch (Exception $e) {
                \Log::error("Errore in show " . $e->getMessage());
                echo "Impossibile trovare questo id $id";
                die();
            }

        } else {
            echo "Richesta non valida. Il parametro non è numerico";
            die();
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFlightRequest $request, Flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flight $flight)
    {
        //
    }
}

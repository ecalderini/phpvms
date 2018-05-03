<?php

namespace App\Http\Requests\Acars;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class PrefileRequest
 * @package App\Http\Requests\Acars
 */
class PrefileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'airline_id'     => 'required|exists:airlines,id',
            'aircraft_id'    => 'required|exists:aircraft,id',
            'flight_number'  => 'required',
            'dpt_airport_id' => 'required',
            'arr_airport_id' => 'required',
            'source_name'    => 'required',

            'status'              => 'nullable',
            'level'               => 'nullable|numeric',
            'flight_type'         => 'nullable',
            'route_code'          => 'nullable',
            'route_leg'           => 'nullable',
            'distance'            => 'nullable|numeric',
            'block_time'          => 'nullable|integer',
            'flight_time'         => 'nullable|integer',
            'planned_distance'    => 'nullable|numeric',
            'planned_flight_time' => 'nullable|integer',
            'zfw'                 => 'nullable|numeric',
            'block_fuel'          => 'nullable|numeric',
            'route'               => 'nullable',
            'notes'               => 'nullable',
            'score'               => 'nullable|integer',
            'block_off_time'      => 'nullable|date',
            'block_on_time'       => 'nullable|date',
            'created_at'          => 'nullable|date',

            # See if the fare objects are included and formatted properly
            'fares'               => 'nullable|array',
            'fares.*.id'          => 'required',
            'fares.*.count'       => 'required|numeric',
        ];

        return $rules;
    }
}

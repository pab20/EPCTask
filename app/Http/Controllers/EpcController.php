<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class EpcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];

        $address = 'liverpool';
        $postcode = 'W37PQ';
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic cGF0cmlja2FudHdpYkBnbWFpbC5jb206NmQ1NWRhY2FjZDIzMmRjYjI5NDMwNzYxZTI1ZjBkM2ZjNDNlMTc1MA==',
        ])->get('https://epc.opendatacommunities.org/api/v1/display/search?adrress='.$address);

        //https://epc.opendatacommunities.org/docs/api/display#using_this_api
        $array = (json_decode($response, TRUE));

        if($array){
            foreach ($array as $key => $value) {
                $val = $value;
            }
        }

        if($val && count($val) > 0) {
            foreach ($val as $key => $value) {
                $data['address'] = $value['address'];
                $data['postcode'] = $value['postcode'];
                $data['local-authority-label'] = $value['local-authority-label'];
                $data['constituency-label'] = $value['constituency-label'];
                $data['posttown'] = $value['posttown'];
                $data['address1'] = $value['address1'];
                $data['address2'] = $value['address2'];
                $data['county'] = $value['county'];

                $data['data'][] = [
                    $data['address'],
                    $data['address1'],
                    $data['address2'],
                    $data['postcode'],
                    $data['county'],
                    $data['posttown'],
                    $data['local-authority-label'],
                    $data['constituency-label'],
                ];
            }
            Log::info($data);
        }
        else{
            $data['data'] = [];
        }
        return view('index');
    }

    public function search(Request $request)
    {
        //
        return $request->input();
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
    public function store(Request $request)
    {
        //
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

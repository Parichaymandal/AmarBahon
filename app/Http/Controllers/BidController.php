<?php

namespace App\Http\Controllers;

use App\Offering;
use App\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class BidController extends Controller
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
    public function store(Request $request)
    {
        $request = $request->all();
        $job = Job::find($request['job_id']);
        $offering = Offering::create($request);

        $job->offerings()->save($offering);

        $user = Auth::user();
        $owner = $user->owner;
        $owner -> offering()->save($offering);

        return redirect('owner');
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


        $offering = Offering::where('job_id','=',$id)
            ->where('vehicle_owner_id','=', Auth::user()->owner->id)
            ->first();

        if($request['action']== '1')
        {
            $offering->update(['vehicle_owner_offer' => $offering['counter_offer']]);
        }

        elseif($request['action'] == '2')
        {
            $offering -> delete();
        }
        else
        {
            $offering->update(['status' => '1']);

        }

        return redirect('owner');
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

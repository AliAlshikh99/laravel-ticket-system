<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretickettRequest;

use App\Models\ticket;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;




class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tikts=ticket::all();
        return view('ticketsy',compact('tikts'));
        
       
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
    public function store(StoretickettRequest $request)
    {
       
        
        ticket::create([
               'name'=> $request->name,
          'email'=> $request->email,
           'phone'=> $request->phone,
           'project'=> $request->project,
           'type'=> $request->type,
            'Description'=>$request->Description,
        ]);
         Alert::success('Done','The ticket has been sent successfully');

        return back();

        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    
    public function show()
    {
    
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {
        $tik_ed = ticket::find($id);
       
        return view('edited',compact('tik_ed'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $tik_up = ticket::find($id)->update([
           'name'=>$request->name,
           'email'=>$request->email,
           'Phone'=>$request->Phone,
           'project'=>$request->project,
           'type'=>$request->type,
           'Description'=>$request->Description,
          
        ]);
       

        
     

        return to_route('Tickets.index');

     
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ticket::destroy($id);
        return to_route('Tickets.archive');
        
    }

    public function archive()
    {
        $varcs=ticket::onlyTrashed()->get();
        
        return view('archive',compact('varcs'));
    }

    public function restore($id)
    {
        ticket::withTrashed()->findOrFail($id)->restore();
        
        return to_route('Tickets.index');
    }
    public function forcedelt($id)
    {
        ticket::withTrashed()->findOrFail($id)->forceDelete();
         
        return to_route('Tickets.index');
        
        
    }

   

}

<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use Illuminate\Http\Request;

class IdentityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $identities = Identity::all();
        return view('pages.home', compact('identities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $identities = Identity::all();
        return view('pages.create-identity',compact('identities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validation formulaire
      $request->validate([
        'url_img' => 'required|max:2000|mimes:png,jpg|image',
        'first_name'=> 'required|min:5|max:10',
        'last_name'=>'required|max:10',
        'job'=> 'required|max:20',
        'description' => 'required|max:1000',
         'tel'=>'required|integer|max:10',
         'e_mail'=>'required|email:rfc,dns',
         'street'=>'required|string|max:50',
         'cp_city'=>'required|string',

      ]);
       $validateImg = $request->file('url_img')->store('cover');
      Identity::create([

        
      'url_img' => $validateImg,
      'first_name' => $request->first_name,
      'last_name' => $request->last_name,
      'job' => $request->job,
      'description' => $request->description,
      'tel' => $request->tel,
      'e_mail' => $request->e_mail,
      'street' => $request->street,
      'cp_city' => $request->cp_city,
      'created_at' => now()

      ]); 
      return redirect()->route('home')->xith('status','succes'); 
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

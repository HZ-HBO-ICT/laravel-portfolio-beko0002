<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;

class FaqController
{
    public function show()
    {
        //render one faq om the page
        $faqs = Faq::all();
        return view('faq',[
            'faq'=>$faqs
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    public function create()
    {
        return view('create_faq');
    }


    public function store()
    {
        //
        $faqs = new Faq();

        $faqs->question = request('question');
        $faqs->answer = request('answer');

        $faqs->save();

        return redirect('/faq');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faqs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGradeRequest  $request
     * @param  \App\Models\Faq  $faqs
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

        $faqs = Faq::find($id);

        $faqs->question = request('question');
        $faqs->answer = request('answer');

        $faqs->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq $faqs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faqs = Faq::find($id);

        $faqs->delete();

        return redirect('/faq');
    }
}

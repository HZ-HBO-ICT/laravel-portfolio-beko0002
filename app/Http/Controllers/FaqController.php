<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;

class FaqController
{
    public function index()
    {
        //render one faq om the page
        $faqs = Faq::all();
        return view('faq',[
            'faq'=>$faqs
        ]);
    }


    public function show()
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



    public function edit($id)
    {
        //
        $faqs = Faq::find($id);

        return view('faq_edit', ['faq' => $faqs]);
    }


    public function update($id)
    {

        $faqs = Faq::find($id);

        $faqs->question = request('question');
        $faqs->answer = request('answer');

        $faqs->save();
    }


    public function destroy($id)
    {
        $faqs = Faq::find($id);

        $faqs->delete();

        return redirect('/faq');
    }
}

<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

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


    public function store(Request $request)
    {
        //persist a new FAQ

        Faq::create($this->ValidateArticle($request));

        // redirecting to show a page
        return redirect('/faq');
    }


//This function is to show an edited faq that already exists
    public function edit($id)
    {
        //

        request()->validate([
            'question'=>'required',
            'answer'=>['required', 'min:3', 'max:255']
        ]);
        $faqs = Faq::find($id);

        return view('faq_edit', ['faq' => $faqs]);
    }


    public function update($faqs, Request $request)
    {

        //$validatedAttributes = $this->validateArticle();

        Faq::create($this->ValidateArticle($request));

        $faqs->save();

        // redirecting to show a page
        return redirect('/faq');
    }


    public function destroy($id)
    {
        $faqs = Faq::find($id);

        $faqs->delete();

        // redirecting to show a page
        return redirect('/faq');
    }


    /**
     * @return array
     */
    public function ValidateArticle(Request $request): array
    {
        $validatedAttributes = $request->validate([
            'question' => 'required',
            'answer' => ['required', 'min:3', 'max:255']

        ]);
        return $validatedAttributes;
    }
}

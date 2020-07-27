<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postNoticia(Request $request)
    {
        $fields = $request->validate([
            'titulo' => 'required|min:10',
            'subtitulo' => 'required|min:10',
            'descricao' => 'required|min:10',
        ]);

        Mail::to('eduardobaranowski@gmail.com')->send(new Noticia($fields));
        //return redirect()->route('site.home');
        return view('site.contact');
        //return redirect()->back();
    }
}

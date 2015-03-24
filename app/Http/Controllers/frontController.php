<?php namespace juan2ramos\Http\Controllers;

use Illuminate\Support\Collection;

class FrontController extends Controller {

    public function index(){
        $message = $this->messagesFront();
        return view('front.front',compact('message'));
    }
    private function messagesFront(){
        return Collection::make([
            'Read The Fucking Manual',
            'No te repitas ',
            'No hay gloria sin sufrimiento',
        ])->random();
    }
}

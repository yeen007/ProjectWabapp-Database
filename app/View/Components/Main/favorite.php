<?php

namespace App\View\Components\main;


use Illuminate\View\Component;

class favorite extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $favorites = \App\Models\favorite::where('idUser',auth()->user()->idUser)->limit(3)->get();
        
        return view('components.main.favorite',[
            'favorites' => $favorites,
        ]);
    }
}

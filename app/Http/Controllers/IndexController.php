<?php

namespace Corp\Http\Controllers;

//use Corp\Article;
use Corp\Menu;
//use Corp\Repositories\ArticlesRepository;
use Corp\Repositories\MenusRepository;
//use Corp\Repositories\PortfoliosRepository;
//use Corp\Repositories\SlidersRepository;
//use Config;
use Illuminate\Http\Request;

//use Corp\Http\Requests;

class IndexController extends SiteController
{

    public function __construct()
    {
        parent::__construct(new MenusRepository(new Menu()));
//        $this->s_rep = $s_rep;
//        $this->a_rep = $a_rep;
//        $this->p_rep = $p_rep;
        $this->bar = 'right';

        $this->template = env('THEME').'.index';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return $this->renderOutput();
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

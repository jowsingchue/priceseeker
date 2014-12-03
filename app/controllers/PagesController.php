<?php

class PagesController extends \BaseController {

	/**
	 * Display home page
	 *
	 */
	public function index()
	{
		return View::make('pages.index');
	}

	/**
	 * Process form input and display the result
	 *
	 */
	public function store()
	{
        $validation = Validator::make(Input::all(), ['search' => 'required']);
        if ($validation->fails())
        {
            return Redirect::back();
        }
        $search = Input::get('search');

        $result = Product::getProduct($search);

        return View::make('pages.result')->withResult($result);
        // return View::make('pages.test');


	}

}

<?php

class BaseController extends Controller {

    protected $format = 'html';

    protected $viewData = array();

    protected $layout = null;

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return mixed
	 */
	protected function setupLayout()
	{
        if(strtolower($this->format) == 'json') {
            return Response::json($this->viewData);
        }

        if(!is_null($this->layout)) {
            return View::make($this->layout, $this->viewData);
        }
	}

}
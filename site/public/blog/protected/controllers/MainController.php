<?php

class MainController extends Controller
{
	public $layout='column1';

    public function actionIndex()
    {
        $this->render('index');
    }
}

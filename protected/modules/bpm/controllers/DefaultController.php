<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        /*
         * Fungsi ini untuk mengolah BPM menggunakan Graph Editor
         */
        public function actionBpmEditor()
        {
            $this->render('bpm_editor');
        }
}
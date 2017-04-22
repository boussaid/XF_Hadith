<?php

class Hadith_ControllerPublic_Hadith extends XenForo_ControllerPublic_Abstract
{
		public function actionIndex()
	{
		return $this->responseView('Hadith_ViewPublic_Hadith', 'hadith');		
	}
}
<?php
class Hadith_Dorar
{
	public static function hadithTab(&$extraTabs, $selectedTabId)
		{
						
			$extraTabs['hadith'] = array(
			        'title' 		=> new XenForo_Phrase("hadith"),
			        'href' 			=> XenForo_Link::buildPublicLink('full:hadith'),
			        'position'      => 'end'
			);
		}
}
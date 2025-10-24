<?php

class YellowClacksoverhead
{
	const VERSION = "0.0.1";
	public $yellow;

	public function onLoad($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->system->setDefault("clacksOverheadMessage", "GNU Terry Pratchett");
	}

	public function onParseMetaData($page)
	{
		$page->setHeader('X-Clacks-Overhead', $this->yellow->system->get('clacksOverheadMessage'));
	}
}

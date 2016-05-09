<?php
namespace ABD\Search\Controller\Index;

	class Redirect extends \Magento\Framework\App\Action\Action
	{
		public function execute()
		{
		   $this->_redirect('search');
		}
	}
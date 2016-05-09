<?php
namespace ABDirect\Search\Controller\Index;

	class Redirect extends \Magento\Framework\App\Action\Action
	{
		public function execute()
		{
		   $this->_redirect('search');
		}
	}
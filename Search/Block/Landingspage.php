<?php
namespace ABDirect\Search\Block;

use Magento\Framework\View\Element\Template;

class Landingspage extends Template
{
  public function getLandingsUrl()
  {
     return $this->getUrl('search');
  }

  public function getRedirectUrl()
  {
     return $this->getUrl('search/index/redirect');
  }
  
}
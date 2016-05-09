<?php
namespace ABD\Search\Block;

use Magento\Framework\View\Element\Template;

class Landingspage extends Template
{
  public function getSearchUrl()
  {
     return $this->getUrl('search');
  }

  public function getRedirectUrl()
  {
     return $this->getUrl('search/index/redirect');
  }

}
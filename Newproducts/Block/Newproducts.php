<?php
namespace ABD\Newproducts\Block;

use Magento\Framework\View\Element\Template;

class Newproducts extends Template
{
	private $_productCollectionFactory;

    public function __construct(
       Template\Context $context,
       \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
       array $data = [])
	{
		parent::__construct($context, $data);
		$this->_productCollectionFactory = $productCollectionFactory;
	}

	public function getProducts()
	{
		$collection = $this->_productCollectionFactory->create();
	    $collection
	    	// Selects all product attributes
	    	->addAttributeToSelect('*')

	    	// Array for product list (use * to select all)
	        // ->addAttributeToSelect([
	        // 	'sku', 
	        // 	'name',
	        // 	'image',
	        // 	'price',
	        // ])

	        // Filter for specific attribute.
	        ->addAttributeToFilter('name', array(
           		'like' => '%bulb%'
           	))
           	// Which store are we filtering products from
           	-> addStoreFilter(1)
           	// Sets display for newest products
	        ->setOrder('created_at')
	        // Amount of products to be displayed
	        ->setPageSize(12);

	    return $collection;
	}
}

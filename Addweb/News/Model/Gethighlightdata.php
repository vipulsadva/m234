<?php
namespace Addweb\News\Model;
use Addweb\News\Api\Gethighlight;
class Gethighlightdata implements Gethighlight
{
    protected $customCollection;
    public function __construct(
		\Addweb\News\Model\ResourceModel\Custom\Collection $customCollection
    ) {
        $this->customCollection = $customCollection;
    }
    public function gethighlightdata($id)
    {
		if($id){
			$customCol = $this->customCollection->addFieldToFilter('id', $id);
			$customColdata = $customCol->getData();
			
			if (empty(@$customColdata)) {
				$invalid = ["code" => '301', "message" => "ID " . $id . " Not Found On Magento"];
				return $invalid;
			}
		}else{
			$customCol = $this->customCollection;
			$customColdata = $customCol->getData();
			
			if (empty(@$customColdata)) {
				$invalid = ["code" => '301', "message" => "ID " . $id . " Not Found On Magento"];
				return $invalid;
			}
		}
        return $customColdata;        
		
    }
}

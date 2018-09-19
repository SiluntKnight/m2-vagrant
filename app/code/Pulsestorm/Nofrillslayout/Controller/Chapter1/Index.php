<?php
namespace Pulsestorm\Nofrillslayout\Controller\Chapter1;
use Pulsestorm\Nofrillslayout\Controller\Base;
    
class Index extends Base
{   
    public function execute()
    {
        // $block = new \Pulsestorm\Nofrillslayout\Block\Chapter1\Hello2;
        // echo $block->toHtml();
        // exit;


        $objectManager  = $this->getObjectManager();
        $block          = $objectManager->get('Magento\Framework\View\Element\Template');
        $block->setTemplate('Pulsestorm_Nofrillslayout::chapter1/user/hello.phtml');
        echo $block->toHtml();
    }
}

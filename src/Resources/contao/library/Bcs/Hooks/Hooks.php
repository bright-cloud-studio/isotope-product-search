<?php

namespace Bcs\Hooks;

use Contao\System;
use Isotope\Isotope;
use Isotope\Interfaces\IsotopeProductCollection;
use Isotope\Message;
use Isotope\Model\Config;
use Isotope\Model\Product;
use Isotope\Model\ProductCollection;
use Isotope\Model\ProductCollection\Cart;
use Isotope\Model\ProductCollection\Order;


class Hooks extends System
{
    protected static $arrUserOptions = array();

    /* HOOK - Triggered when trying to add a product to the cart on a Product Reader page */
    public function checkCollectionQuantity( Product $objProduct, $intQuantity, IsotopeProductCollection $objCollection ) {
        
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        die();
       
       
       
       $objProd = Product::findOneBy(['tl_iso_product.alias=?'],['carbide_end_mills_2_flute_decimal_standard_square_ball_end_uncoated']);
       $arrConfig = array();
        if ($objCollection->addProduct($objProd, $prod[1], $arrConfig) !== false){
            $_SESSION['ISO_CONFIRM'][] = $GLOBALS['TL_LANG']['MSC']['addedToCartBatch'];
            \Controller::redirect(\Haste\Util\Url::addQueryString('continue=' . base64_encode(\Environment::get('request')), $objModule->iso_addProductJumpTo));
        }
    
       print_r($objCollection);
       die();
            
       return true;
    }

    public function onProcessForm($submittedData, $formData, $files, $labels, $form)
    {
        echo "BLAM";
        die();

        if($formData['formID'] == 'directory_submission') {
        }
    }






    
    
}

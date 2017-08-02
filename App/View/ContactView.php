<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/2/17
 * Time: 11:43 AM
 */

namespace musicCatalogue\View;

use musicCatalogue\View\Templates\HeaderTemp;
use musicCatalogue\View\Templates\ContactTemp;
use musicCatalogue\View\Templates\FooterTemp;


class ContactView
{
    public function render(){

        $headerTemp = new HeaderTemp();
        $header = $headerTemp->getHeader();

        $contactTemp = new ContactTemp();
        $contact = $contactTemp->getContact();

        $footerTemp = new FooterTemp();
        $footer = $footerTemp->getFooter();

        return null;
    }

}
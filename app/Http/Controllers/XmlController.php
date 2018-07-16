<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use pdeans\Builders\XmlBuilder;
use Spatie\Sitemap\SitemapGenerator;

class XmlController extends Controller
{
    //

    public function downloadXml()

      {
        $builder = new XmlBuilder;
        $xml = $builder->create('Category_Add', [
          '@tags' => [
        'Code' => 'Tools',
        'Name' => $builder->cdata('Class Tools and Skill Kits'),
    ],
]);
        // $pdf = PDF::loadView('pdfView');
        return File::put('file.xml', $xml);

      }

      public function vistaXml()
      {
        $builder = new XmlBuilder;
        $xml = $builder->create('Category_Add', [
          '@tags' => [
        'Code' => 'Tools',
        'Name' => $builder->cdata('Class Tools and Skill Kits'),
    ],
]);

        return response()->view('xmlView',  compact([ 'xml', ]))->header('Content-Type', 'text/xml'); 

      }
}

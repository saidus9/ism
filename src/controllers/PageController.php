<?php
namespace Acme\Controllers;

use duncan3dc\Laravel\BladeInstance;
use Acme\models\Page;

class PageController extends BaseController
  {
    public function getShowHomePage()
      {
        echo $this->blade->render("home");
      }

      public function getShowPage()
      {
        $browser_title = "";
        $page_content = "";

        // Extract page name from url
        $uri = explode("/", $_SERVER['REQUEST_URI']);
        $target = $uri[1];

        // Find matching page in DB
        $page = Page::WHERE('slug', '=', $target)->get();


        // Lookup page curl_multi_getcontent
        foreach ($page as $item) {
          $browser_title = $item->browser_title;
          $page_content = $item->page_content;
        }

        // Handling Page Not Found ErrorException
        if (strlen($browser_title) == 0)
        {
          header("HTTP/1.0 404 Not Found");
          header("Location: /page-not-found");
          exit();
        }

        // Pass content to some blade template and Render the template
        echo $this->blade->render('generic-page', [
          'browser_title' => $browser_title,
          'page_content' => $page_content,
        ]);
      }

      public function getShow404()
      {
        echo $this->blade->render('page-not-found');
      }

  }

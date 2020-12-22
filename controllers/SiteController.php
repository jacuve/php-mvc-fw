<?php

namespace app\controllers;

use jacuve\phpmvc\Application;
use jacuve\phpmvc\Controller;
use app\models\ContactForm;
use jacuve\phpmvc\Request;
use jacuve\phpmvc\Response;

class SiteController extends Controller
{


    public function home()
    {
        $params = [
            'name' => 'jacuve'
        ];

        return $this->render('home', $params);
    }

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if($request->isPost()){
            $contact->loadData($request->getBody());
            if($contact->validate() && $contact->send()){
                Application::$app->session->setFlash('success', 'Thanks for contacting us');
                return $response->redirect('/contact');
            }
        }
        return $this->render('contact',[
            'model' => $contact
        ]);
    }


}
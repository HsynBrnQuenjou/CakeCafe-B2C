<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller{

    public function  contact(){

        $viewData = array(
            'setting' => $this->Common_model->get(['id'=>1], 'ayarlar'),
            'social' => $this->Common_model->getAll(['sosdurum'=>1], 'sosyalmedyalar'),
            'pages' => $this->Common_model->getAll(['sayfadurum'=>1], 'sayfalar'),
            //'popular' => $this->Common_model->getAll(['urun_durum'=>1], 8, 0, 'urunler', 'urun_goruntuleme', 'DESC'),
            //'popblog' => $this->Common_model->getAll(['blogdurum'=>1], 4, 0, 'blog', 'bloggoruntuleme', 'DESC'),
        );


        $this->load->view('default/contact_view', $viewData);
    }

    public function  about(){

        $viewData = array(
            'setting' => $this->Common_model->get(['id'=>1], 'ayarlar'),
            'social' => $this->Common_model->getAll(['sosdurum'=>1], 'sosyalmedyalar'),
            'pages' => $this->Common_model->getAll(['sayfadurum'=>1], 'sayfalar'),
            'comments' => $this->Common_model->getLimitAll(['yorumdurum'=>1], 8, 0, 'yorumlar', 'yorumid', 'DESC' ),
            'workers' => $this->Common_model->getLimitAll(['calisan_durum'=>1], 4, 0, 'calisanlar', 'calisan_id', 'DESC' ),
            //'popular' => $this->Common_model->getAll(['urun_durum'=>1], 8, 0, 'urunler', 'urun_goruntuleme', 'DESC'),
            //'popblog' => $this->Common_model->getAll(['blogdurum'=>1], 4, 0, 'blog', 'bloggoruntuleme', 'DESC'),
        );


        $this->load->view('default/about_view', $viewData);
    }

    public function  blog(){

        $viewData = array(
            'setting' => $this->Common_model->get(['id'=>1], 'ayarlar'),
            'social' => $this->Common_model->getAll(['sosdurum'=>1], 'sosyalmedyalar'),
            'pages' => $this->Common_model->getAll(['sayfadurum'=>1], 'sayfalar'),
            'comments' => $this->Common_model->getLimitAll(['yorumdurum'=>1], 8, 0, 'yorumlar', 'yorumid', 'DESC' ),
            //'workers' => $this->Common_model->getLimitAll(['calisan_durum'=>1], 4, 0, 'calisanlar', 'calisan_id', 'DESC' ),
            'popularblogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 5, 0, 'blog', 'bloggoruntulenme', 'DESC'),
            'blogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 4, 0, 'blog', 'blogid', 'ASC' ),
            'products' => $this->Common_model->getLimitAll(['urun_vitrin'=>1], 8, 0, 'urunler', 'urun_id', 'DESC' ),
        );


        $this->load->view('default/blog_view', $viewData);
    }

    public function  blog_details(){

        $viewData = array(
            'setting' => $this->Common_model->get(['id'=>1], 'ayarlar'),
            'social' => $this->Common_model->getAll(['sosdurum'=>1], 'sosyalmedyalar'),
            'pages' => $this->Common_model->getAll(['sayfadurum'=>1], 'sayfalar'),
            'comments' => $this->Common_model->getLimitAll(['yorumdurum'=>1], 8, 0, 'yorumlar', 'yorumid', 'DESC' ),
            //'workers' => $this->Common_model->getLimitAll(['calisan_durum'=>1], 4, 0, 'calisanlar', 'calisan_id', 'DESC' ),
            'popularblogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 5, 0, 'blog', 'bloggoruntulenme', 'DESC'),
            'blogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 4, 0, 'blog', 'blogid', 'DESC' ),
            'products' => $this->Common_model->getLimitAll(['urun_vitrin'=>1], 8, 0, 'urunler', 'urun_id', 'DESC' ),
        );


        $this->load->view('default/blog_details_view', $viewData);
    }

    public function  shop(){

        $viewData = array(
            'setting' => $this->Common_model->get(['id'=>1], 'ayarlar'),
            'social' => $this->Common_model->getAll(['sosdurum'=>1], 'sosyalmedyalar'),
            'pages' => $this->Common_model->getAll(['sayfadurum'=>1], 'sayfalar'),
            //'comments' => $this->Common_model->getLimitAll(['yorumdurum'=>1], 8, 0, 'yorumlar', 'yorumid', 'DESC' ),
            //'workers' => $this->Common_model->getLimitAll(['calisan_durum'=>1], 4, 0, 'calisanlar', 'calisan_id', 'DESC' ),
            //'popularblogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 5, 0, 'blog', 'bloggoruntulenme', 'DESC'),
            //'blogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 4, 0, 'blog', 'blogid', 'DESC' ),
            'products' => $this->Common_model->getLimitAll(['urun_vitrin'=>1], 8, 0, 'urunler', 'urun_id', 'DESC' ),
        );


        $this->load->view('default/shop_view', $viewData);
    }

}


?>
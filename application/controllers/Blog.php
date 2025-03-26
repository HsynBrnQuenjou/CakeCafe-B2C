<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{

    public function index(){

        //sayfa numarası
        //cafecake/blog/1 /2 /3


        //SAYFA NUMARALARINI BECEREMEDİM RENK DÜZGÜN DEĞİL SAYFA GEÇİŞLER ÇALIŞMIYOR

//        $perPage = 4;
//        $blogcount = $this->Common_model->getcount(['blogdurum'=>1], 'blog');
//        $pageSegment = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;
//
//        $pkCount = ($pageSegment -1) * $perPage;
//
//        $links = paginationHelper(
//            base_url('blogs'),
//            $blogcount,
//            $perPage,
//            2,
//            true,['class' => 'page-link']
//        );

        $viewData = array(
            'setting' => $this->Common_model->get(['id'=>1], 'ayarlar'),
//            'bloglist' => $this->Common_model->getLimitAll(['blogdurum'=>1], $perPage, $pkCount, 'blog', 'blogid', 'DESC' ),
//            'blogcount' => $blogcount,
//            'bloglinks' => $links,

            'social' => $this->Common_model->getAll(['sosdurum'=>1], 'sosyalmedyalar'),
            'pages' => $this->Common_model->getAll(['sayfadurum'=>1], 'sayfalar'),
            'popularblogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 4, 0, 'blog', 'bloggoruntulenme', 'DESC'),
            'comments' => $this->Common_model->getLimitAll(['yorumdurum'=>1], 8, 0, 'yorumlar', 'yorumid', 'DESC' ),
            'blogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 4, 0, 'blog', 'blogid', 'ASC'), //ilk 5i alsın diye asc yaptım yoksa sonuncusuna göre desc yap
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
            //'popularblogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 5, 0, 'blog', 'bloggoruntulenme', 'DESC'),
            'blogs' => $this->Common_model->getAll(['blogdurum'=>1], 'blog'),
            //'products' => $this->Common_model->getLimitAll(['urun_vitrin'=>1], 8, 0, 'urunler', 'urun_id', 'DESC' ),
        );


        $this->load->view('default/blog_details_view', $viewData);
    }

}

?>
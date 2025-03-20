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

    public function  detail($id){

//        echo $id;

        if(!$id){
             redirect(base_url());
        }

        $query = $this->Common_model->get(['sayfasef'=>$id, 'sayfadurum'=>1], 'sayfalar');
        if($query){

            $viewData = array(
                "page" => $query,
                "setting" => $this->Common_model->get(['id'=>1], 'ayarlar'),
                'social' => $this->Common_model->getAll(['sosdurum'=>1], 'sosyalmedyalar'),
                'pages' => $this->Common_model->getAll(['sayfadurum'=>1], 'sayfalar'),
            );

            $this->load->view('default/page_details_view', $viewData);

        }else{
            redirect(base_url());
        }

    }

    public function sendmessage(){

        //BİR TÜRLÜ BECEREMEDIM PROJE BITIMI ILE BAKARIZ VIDEO 10-11-12

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
            //'pages' => $this->Common_model->getAll(['sayfadurum'=>1], 'sayfalar'),
            //'comments' => $this->Common_model->getLimitAll(['yorumdurum'=>1], 8, 0, 'yorumlar', 'yorumid', 'DESC' ),
            //'workers' => $this->Common_model->getLimitAll(['calisan_durum'=>1], 4, 0, 'calisanlar', 'calisan_id', 'DESC' ),
            //'popularblogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 5, 0, 'blog', 'bloggoruntulenme', 'DESC'),
            //'blogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 4, 0, 'blog', 'blogid', 'DESC' ),
            'products' => $this->Common_model->getLimitAll(['urun_vitrin'=>1], 8, 0, 'urunler', 'urun_id', 'ASC' ),
        );


        $this->load->view('default/shop_view', $viewData);
    }

    public function  product_details($urun_sef){
        $urun = $this->Common_model->get(['urun_sef' => $urun_sef], 'urunler'); // urun_sef'ye göre ürünü getir

        if (!$urun) { // Eğer ürün bulunamazsa
            // Hata mesajı göster veya başka bir işlem yap
            echo "Ürün bulunamadı.";
            return; // Fonksiyondan çık
        }

        $category_products = $this->Common_model->get_products_by_category($urun->urun_kategori); // Aynı kategorideki ürünleri getir

        $viewData = array(
            'setting' => $this->Common_model->get(['id'=>1], 'ayarlar'),
            //'social' => $this->Common_model->getAll(['sosdurum'=>1], 'sosyalmedyalar'),
            //'pages' => $this->Common_model->getAll(['sayfadurum'=>1], 'sayfalar'),
            'comments' => $this->Common_model->getLimitAll(['yorumdurum'=>1], 8, 0, 'yorumlar', 'yorumid', 'DESC' ),
            //'workers' => $this->Common_model->getLimitAll(['calisan_durum'=>1], 4, 0, 'calisanlar', 'calisan_id', 'DESC' ),
            //'popularblogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 5, 0, 'blog', 'bloggoruntulenme', 'DESC'),
            'blogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 4, 0, 'blog', 'blogid', 'DESC' ),
            'products' => $this->Common_model->getLimitAll(['urun_vitrin'=>1], 8, 0, 'urunler', 'urun_id', 'ASC' ),
            'categories' => $this->Common_model->getLimitAll(['katvitrin'=>1], 7, 0, 'kategoriler', 'katid', 'DESC' ),
            'product'  => $urun,
        );


        $this->load->view('default/product_details_view', $viewData);
    }

    public function  class(){

        $viewData = array(
            'setting' => $this->Common_model->get(['id'=>1], 'ayarlar'),
            'social' => $this->Common_model->getAll(['sosdurum'=>1], 'sosyalmedyalar'),
            //'pages' => $this->Common_model->getAll(['sayfadurum'=>1], 'sayfalar'),
            //'comments' => $this->Common_model->getLimitAll(['yorumdurum'=>1], 8, 0, 'yorumlar', 'yorumid', 'DESC' ),
            //'workers' => $this->Common_model->getLimitAll(['calisan_durum'=>1], 4, 0, 'calisanlar', 'calisan_id', 'DESC' ),
            //'popularblogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 5, 0, 'blog', 'bloggoruntulenme', 'DESC'),
            //'blogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 4, 0, 'blog', 'blogid', 'DESC' ),
            'products' => $this->Common_model->getLimitAll(['urun_vitrin'=>1], 8, 0, 'urunler', 'urun_id', 'DESC' ),
        );


        $this->load->view('default/class_view', $viewData);
    }


}


?>
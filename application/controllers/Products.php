<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
    public function index(){
        $perPage = 8;
        $productcount = $this->Common_model->getcount(['urun_durum'=>1], 'urunler');
        $pageSegment = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;

        $pkCount = ($pageSegment -1) * $perPage;

        $links = paginationHelper(
            base_url('products'),
            $productcount,
            $perPage,
            2,
            true,['class' => 'page-link']
        );

        $viewData = array(
            'setting' => $this->Common_model->get(['id'=>1], 'ayarlar'),
            'productlist' => $this->Common_model->getLimitAll(['urun_durum'=>1], $perPage, $pkCount, 'urunler', 'urun_id', 'ASC' ),
            'productcount' => $productcount,
            'productlinks' => $links,

            'categories' => $this->Common_model->getLimitAll(['katdurum'=>1], 7, 0, 'kategoriler', 'katid', 'DESC' ),


            'social' => $this->Common_model->getAll(['sosdurum'=>1], 'sosyalmedyalar'),
            'pages' => $this->Common_model->getAll(['sayfadurum'=>1], 'sayfalar'),
            //'comments' => $this->Common_model->getLimitAll(['yorumdurum'=>1], 8, 0, 'yorumlar', 'yorumid', 'DESC' ),
            //'workers' => $this->Common_model->getLimitAll(['calisan_durum'=>1], 4, 0, 'calisanlar', 'calisan_id', 'DESC' ),
            //'popularblogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 5, 0, 'blog', 'bloggoruntulenme', 'DESC'),
            //'blogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 4, 0, 'blog', 'blogid', 'DESC' ),
            'products' => $this->Common_model->getLimitAll(['urun_vitrin'=>1], 8, 0, 'urunler', 'urun_id', 'ASC' ),
        );

        $this->load->view('default/products_view', $viewData);

    }

//    public function  shop(){
//
//        $viewData = array(
//            'setting' => $this->Common_model->get(['id'=>1], 'ayarlar'),
//            'social' => $this->Common_model->getAll(['sosdurum'=>1], 'sosyalmedyalar'),
//            'pages' => $this->Common_model->getAll(['sayfadurum'=>1], 'sayfalar'),
//            //'comments' => $this->Common_model->getLimitAll(['yorumdurum'=>1], 8, 0, 'yorumlar', 'yorumid', 'DESC' ),
//            //'workers' => $this->Common_model->getLimitAll(['calisan_durum'=>1], 4, 0, 'calisanlar', 'calisan_id', 'DESC' ),
//            //'popularblogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 5, 0, 'blog', 'bloggoruntulenme', 'DESC'),
//            //'blogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 4, 0, 'blog', 'blogid', 'DESC' ),
//            'products' => $this->Common_model->getLimitAll(['urun_vitrin'=>1], 8, 0, 'urunler', 'urun_id', 'ASC' ),
//        );
//
//
//        $this->load->view('default/shop_view', $viewData);
//    }

    public function  product_details($urun_sef){
        $urun = $this->Common_model->get(['urun_sef' => $urun_sef], 'urunler'); // urun_sef'ye göre ürünü getir

        if (!$urun) { // Eğer ürün bulunamazsa
            // Hata mesajı göster veya başka bir işlem yap
            echo "Ürün bulunamadı.";
            return; // Fonksiyondan çık
        }

//        $links = paginationHelper(
//            base_url('products/$urun_sef'),
////            $blogcount,
////            $perPage,
////            2,
////            true,['class' => 'page-link']
//        );

        $category_products = $this->Common_model->get_products_by_category($urun->urun_kategori); // Aynı kategorideki ürünleri getir

        $viewData = array(
            'setting' => $this->Common_model->get(['id'=>1], 'ayarlar'),
            'social' => $this->Common_model->getAll(['sosdurum'=>1], 'sosyalmedyalar'),
            'pages' => $this->Common_model->getAll(['sayfadurum'=>1], 'sayfalar'),
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

}

?>
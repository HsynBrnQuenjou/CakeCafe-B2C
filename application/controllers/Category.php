<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function index($par){
        // Kategoriyi küçük harfe çevirerek sorgula
        $catquery = $this->Common_model->get([
            'LOWER(katsef)' => strtolower($par),
            'katdurum' => 1
        ], 'kategoriler');

        if($catquery){
            // Ürünleri küçük harfe çevirerek sorgula
            $products = $this->Common_model->getLimitAll(
                [
                    'LOWER(urun_kategori)' => strtolower($catquery->katkodu),
                    'urun_durum' => 1
                ],
                8,
                0,
                'urunler',
                'urun_id',
                'ASC'
            );

            $viewData = array(
                'products' => $products,

                'setting' => $this->Common_model->get(['id'=>1], 'ayarlar'),
//                'products' => $this->Common_model->getLimitAll(['urun_kategori'=>$catquery->katkodu, 'urun_durum'=>1], $perPage, $pkCount, 'urunler', 'urun_id', 'ASC' ),
//                'productcount' => $categorycount,
//                'productlinks' => $links,
                'cataname' => $catquery->katadi,
                'categories' => $this->Common_model->getLimitAll(['katdurum'=>1], 7, 0, 'kategoriler', 'katid', 'DESC' ),
                'social' => $this->Common_model->getAll(['sosdurum'=>1], 'sosyalmedyalar', 'sosid', 'DESC'),
                'pages' => $this->Common_model->getAll(['sayfadurum'=>1], 'sayfalar', 'sayfaid', 'DESC'),

            );

            $this->load->view('default/category_view', $viewData);
        } else {
            redirect(base_url());
        }
    }

}

?>

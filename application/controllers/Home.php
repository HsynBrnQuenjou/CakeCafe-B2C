<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
        /*$query = $this->Common_model->get(['id'=>1], 'ayarlar');
        print_r($query);*/
        //echo loc();
        $viewData = array(
            'setting' => $this->Common_model->get(['id'=>1],'ayarlar'),
            'products' => $this->Common_model->getLimitAll(['urun_vitrin'=>1], 8, 0, 'urunler', 'urun_id', 'DESC' ), //videoda 9 adet var diye 9 yazdı
            'categories' => $this->Common_model->getLimitAll(['katvitrin'=>1], 7, 0, 'kategoriler', 'katid', 'ASC' ),
            'comments' => $this->Common_model->getLimitAll(['yorumdurum'=>1], 8, 0, 'yorumlar', 'yorumid', 'DESC' ),
            //isimiz yok 'blogs' => $this->Common_model->getLimitAll(['blogdurum'=>1], 4, 0, 'blog', 'blogid', 'DESC' ), //videoda 3 adet var diye 3 yazıldı

            //toplam yorumsayisi icin gerekli kod 'commentcount' => $this->Commmon_model->custom('SELECT count(*) as total FROM yorumlar WHERE yorumdurum=1', false),
            //toplam urunler icin gerekli kod'productcount' => $this->Commmon_model->custom('SELECT count(*) as total FROM urunler WHERE urun_durum=1', false),
            //toplam siparissaysı icin gerekli kod 'ordercount' => $this->Commmon_model->custom('SELECT count(*) as total FROM siparisler', false),
            //toplam uyeler icin gerekli kod'usercount' => $this->Commmon_model->custom('SELECT count(*) as total FROM uyeler', false),
        );
		$this->load->view('default/home_view', $viewData);

	}


}

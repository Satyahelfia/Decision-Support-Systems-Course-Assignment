<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Perhitungan extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->library('pagination');
            $this->load->library('form_validation');
            $this->load->model('Perhitungan_model');
            $this->load->model('Penilaian_model');
        }

        public function index()
        {	
            $this->db->order_by("id_penilaian", "desc");
			$this->db->limit(1);
			$penilaian = $this->db->get('penilaian')->row();
			$data = [
                'page' => "Perhitungan",
                'penilaian' => $penilaian,
                'kriteria'=> $this->Perhitungan_model->get_kriteria(),
                'alternatif'=> $this->Perhitungan_model->get_alternatif($penilaian->semester),
            ];
			
            $this->load->view('Perhitungan/perhitungan', $data);
        }
		
		public function hasil()
        {
            $data = [
                'page' => "Hasil",
				'hasil_wp'=> $this->Perhitungan_model->get_hasil_wp()
            ];			
            $this->load->view('Perhitungan/hasil', $data);
        }
    
    }
    
    
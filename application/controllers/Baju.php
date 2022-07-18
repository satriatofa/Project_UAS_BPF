<?php
defined('BASEPATH') or exit('No direct script access allowed');

class baju extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Baju_model');
    }
    public function index()
    {
        $data['judul'] ="Halaman Baju";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['baju']=$this->Baju_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("baju/vw_baju", $data);
        $this->load->view("layout/footer", $data);
    }

    function tambah()
    {
        $data['judul'] =  "Halaman Tambah Baju";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['baju'] = $this->Baju_model->get();

        $this->form_validation->set_rules('merk', 'Merk', 'required', [
            'required' => 'Merk Baju Wajib di isi',
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required|integer', [
            'required' => 'Baju Wajib di isi',
            'integer' => 'Baju harus Angka',
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|integer', [
            'required' => 'Sepatu Wajib di isi',
            'integer' => 'Sepatu harus Angka',
        ]);
        $this->form_validation->set_rules('ukuran', 'Ukuran', 'required', [
            'required' => 'Ukuran Wajib di isi',
        ]);
        $this->form_validation->set_rules(
            'keterangan',
            'Keterangan',
            'required',
            [
                'required' => 'Keterangan Wajib di isi',
            ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("baju/vw_tambah_baju", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'merk' => $this->input->post('merk'),
                'harga' => $this->input->post('harga'),
                'ukuran' => $this->input->post('ukuran'),
                'stok' => $this->input->post('stok'),
                'keterangan' => $this->input->post('keterangan'),
                // 'gambar' => $this->input->post('gambar'),
            ];
            $upload_image = $_FILES['gambar']['name'];
			if($upload_image){
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/images/baju/';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				}
				else{
					echo $this->upload->display_errors();
				}
			}
            $this->Baju_model->insert($data, $upload_image);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sukses. </strong> Data baju berhasil Ditambah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
            );
            redirect('Baju');
        }
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit baju";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['baju'] = $this->Baju_model->getById($id);

        $this->form_validation->set_rules('merk', 'Merk', 'required', [
            'required' => 'Merk Baju Wajib di isi',
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required|integer', [
            'required' => 'Baju Wajib di isi',
            'integer' => 'Baju harus Angka',
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|integer', [
            'required' => 'Baju Wajib di isi',
            'integer' => 'Baju harus Angka',
        ]);
        $this->form_validation->set_rules('ukuran', 'Ukuran', 'required', [
            'required' => 'Ukuran Wajib di isi',
        ]);
        $this->form_validation->set_rules(
            'keterangan',
            'Keterangan',
            'required',
            [
                'required' => 'Keterangan Wajib di isi',
            ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("baju/vw_ubah_baju", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'merk' => $this->input->post('merk'),
                'harga' => $this->input->post('harga'),
                'stok' => $this->input->post('stok'),
                'ukuran' => $this->input->post('ukuran'),
                'keterangan' => $this->input->post('keterangan'),
            ];
            $upload_image = $_FILES['gambar']['name'];
			if($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/images/baju/';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('gambar')) {
					$old_image = $data['baju']['gambar'];
					if($old_image != 'default.jpg') {
						unlink(FCPATH.'assets/images/baju/'.$old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				}
				else{
					echo $this->upload->display_errors();
				}
			}
            $id = $this->input->post('id');

            $this->Baju_model->update(['id' => $id], $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Sukses. </strong> Data baju berhasil Diperbarui!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('Baju');
        }
    }

    public function hapus($id)
    {
        $this->Baju_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert"><i class="icon 
			fas fa-info-circle"></i>Data Sepatu tidak dapat dihapus (sudah berelasi)!</div>'
            );
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert"><i 
			class="icon fas fa-check-circle"></i>Data Sepatu Berhasil Dihapus!</div>'
            );
        }
        redirect('Baju');
    }

}
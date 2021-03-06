<?php
class Matakuliah extends CI_Controller
{
    function __contruct(){
        parent::__contruct();
    }
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('kode','Kode ', 'required|min_length[4]',
        array(
            'required' => '%s harus diisi.',
             'min_length'=> '%s Minimal 4 Karakter'
        )
    );
        $this->form_validation->set_rules('nama','Nama ', 'required',
        array('required' => '%s harus diisi.')
    );
        $this->form_validation->set_rules('sks','SKS ', 'required',
        array('required' => '%s harus diisi.')
    );  

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('view-form-matakuliah');
        } 
        else 
        {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks'),
            ];

            $this->load->view('view-data-matakuliah', $data);
        }         
    }
    
}

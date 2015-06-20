<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datausaha extends CI_Controller {

    private $judul=array(
        'aktip' => ""
    );
    public function __construct()
    {
        parent :: __construct();
        $this->load->library('pagination');
        $this->load->model('M_datausaha','usa',true); // kec itu alias dari kecamatan
    }

    public function index($offset = 0)
    {
        $perpage = 7;

        //konfig dasar pagination
        $config = array(
            'base_url' => site_url('admin/datausaha/index'),
            'total_rows' => count($this->usa->readall()),
            'per_page' => $perpage,
            'first_link'       => '&#124;&lt; First',
            'last_link'        => 'Last &gt;&#124;',
            'next_link'        => 'Next &gt;',
            'prev_link'        => '&lt; Prev',
        );

        // inisialisasi pagination dan config
        $this->pagination->initialize($config);
        $limit['perpage'] = $perpage;
        $limit['offset'] = $offset;

        $data['datausaha'] = $this->usa->readall_paging($limit);
        $data['linkpaging'] = $this->linkpaging();

        $this->judul['aktip'] = "datausaha";
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/datausaha',$data);
        $this->load->view('admin/components/footer');
    }


    function linkpaging(){
        return $this->pagination->create_links();
    }

    public function add()
    {
        $nama = $this->input->post('nama_usaha'); // dari form
        $data['nama_usaha'] = $nama; // membuat array dari data post
        if($this->usa->add($data)){
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil ditambah');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal ditambah');
        }
        redirect(base_url('admin/datausaha'));
    }
    public function addview()
    {
        $this->judul['aktip'] = "datausaha";
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/datausaha_add');
        $this->load->view('admin/components/footer');
    }

    public function edit($id)
    {
        $nama = $this->input->post('nama_usaha'); // dari form
        $data['nama_usaha'] = $nama; // membuat array dari data post
        $status = $this->usa->edit($id,$data);
        if($status){ //memanggil method edit dari model kecamatan sekaligus cek status
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil diubah');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal diubah');
        }
        redirect(base_url('admin/datausaha'));
    }
    public function editview($id)
    {
        $this->judul['aktip'] = "datausaha";
        $data['edit'] = true;
        $dataUsaha = $this->usa->selectById($id);
        $data['datausaha'] =  $dataUsaha; //edit nanti dijadikan variabel di view
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/datausaha_add',$data);
        $this->load->view('admin/components/footer');
    }

    public function delete($id) // ambil dari uri ==> /kecamatan/delete/id
    {
        $status = $this->usa->delete($id);
        if($status){ //memanggil method edit dari model kecamatan sekaligus cek status
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil dihapus');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal dihapus');
        }
        redirect(base_url('admin/datausaha'));
    }

    public function search()
    {
        //$this->load->view('admin/login');
        echo "ini tambah kecamatan";
    }
    ##PAGING
    public function paging($query,$records_per_page)
    {
        $starting_position=0;
        if(isset($_GET["page_no"]))
        {
            $starting_position=($_GET["page_no"]-1)*$records_per_page;
        }
        $query2=$query." limit $starting_position,$records_per_page";
        return $query2;
    }

    public function paginglink($query,$records_per_page)
    {

        $self = $_SERVER['PHP_SELF'];

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $total_no_of_records = $stmt->rowCount();

        if($total_no_of_records > 0)
        {
            ?><ul class="pagination"><?php
            $total_no_of_pages=ceil($total_no_of_records/$records_per_page);
            $current_page=1;
            if(isset($_GET["page_no"]))
            {
                $current_page=$_GET["page_no"];
            }
            if($current_page!=1)
            {
                $previous =$current_page-1;
                echo "<li><a href='".$self."?page_no=1'>First</a></li>";
                echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a></li>";
            }
            for($i=1;$i<=$total_no_of_pages;$i++)
            {
                if($i==$current_page)
                {
                    echo "<li><a href='".$self."?page_no=".$i."' style='color:red;'>".$i."</a></li>";
                }
                else
                {
                    echo "<li><a href='".$self."?page_no=".$i."'>".$i."</a></li>";
                }
            }
            if($current_page!=$total_no_of_pages)
            {
                $next=$current_page+1;
                echo "<li><a href='".$self."?page_no=".$next."'>Next</a></li>";
                echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Last</a></li>";
            }
            ?></ul><?php
        }
    }

    /* paging */
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
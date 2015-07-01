<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //$this->load->model('M_aktivasipu');
        //$this->load->model('M_aktivasipu','apu',true);
        $this->load->model('M_datausaha','usa',true);
    }

    public function index()
    {
        $query = $this->usa->eksport_data();

        if(!$query)
            return false;

        // Load library PHPExcel
        $this->load->library('PHPExcel');
        $this->load->library('PHPExcel/IOFactory');

        // Buat sebuah file Excel baru.
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()->setTitle("Laporan Data Usaha");
        $objPHPExcel->getProperties()->setDescription("Laporan data usaha");
        $objPHPExcel->setActiveSheetIndex(0);

        // Header laporan
        $objPHPExcel->getActiveSheet()->setCellValue('A1','Laporan Data Usaha');
        $objPHPExcel->getActiveSheet()->mergeCells('A1:N1');
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(16);
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(30);
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

        // Tanggal laporan
        $today = date("d-m-Y");
        $objPHPExcel->getActiveSheet()->setCellValue('N3','Tanggal: '.$today);
        $objPHPExcel->getActiveSheet()->getStyle('N3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $objPHPExcel->getActiveSheet()->getStyle('N3')->getFont()->setBold(true);

        // Header tabel produk
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(15);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(50);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(20);

        $objPHPExcel->getActiveSheet()->getRowDimension('5')->setRowHeight(15);

        $objPHPExcel->getActiveSheet()->setCellValue('A5','Id Usaha');
        $objPHPExcel->getActiveSheet()->setCellValue('B5','Nama User');
        $objPHPExcel->getActiveSheet()->setCellValue('C5','Kecamatan');
        $objPHPExcel->getActiveSheet()->setCellValue('D5','Kelurahan');
        $objPHPExcel->getActiveSheet()->setCellValue('E5','Sektor');
        $objPHPExcel->getActiveSheet()->setCellValue('F5','Skala Usaha');
        $objPHPExcel->getActiveSheet()->setCellValue('G5','Nama Usaha');
        $objPHPExcel->getActiveSheet()->setCellValue('H5','Produk Utama');
        $objPHPExcel->getActiveSheet()->setCellValue('I5','Alamat Usaha');
        $objPHPExcel->getActiveSheet()->setCellValue('J5','Latitude');
        $objPHPExcel->getActiveSheet()->setCellValue('K5','Longitude');
        $objPHPExcel->getActiveSheet()->setCellValue('L5','Omzet');
        $objPHPExcel->getActiveSheet()->setCellValue('M5','No Telepon');
        $objPHPExcel->getActiveSheet()->setCellValue('N5','Status Usaha');

        $objPHPExcel->getActiveSheet()->getStyle('A5:N5')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('A5:N5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        // Border header tabel
        $styleArray = array(
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb'=>'E1E0F7'),
            ),
            'borders' => array(
                'outline' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                ),
            ),
        );
        $objPHPExcel->getActiveSheet()->getStyle('A5')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getStyle('B5')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getStyle('C5')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getStyle('D5')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getStyle('E5')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getStyle('F5')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getStyle('G5')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getStyle('H5')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getStyle('I5')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getStyle('J5')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getStyle('K5')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getStyle('L5')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getStyle('M5')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getStyle('N5')->applyFromArray($styleArray);

        // Isi tabel
        $fields = $query->list_fields();
        $row = 6;
        foreach($query->result() as $data)
        {
            $col = 0;
            foreach ($fields as $field)
            {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);
                $objPHPExcel->getActiveSheet()->getStyle("A".($row).":N".($row))->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
                $col++;
            }
            $row++;
        }


        // Menuliskan skrip pada file yang telah dibuat.
        $objWriter = IOFactory::createWriter($objPHPExcel, 'Excel2007');

        // Mendefinisikan header dan melakukan unggah secara otomatis.
        $filename='Laporan_DataUsaha'.$today.'.xlsx';

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');

        $objWriter->save('php://output');
    }

}

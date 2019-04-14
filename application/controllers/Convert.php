<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Convert extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function excel()
    {
        // $output = $this->input->post('output');
        $output = $this->session->userdata('excel');
        // echo "hey";
        
        header("Content-Type : application/xls");
        header("Content-Disposition : attachment; filename=download.xls");
        echo $output;
    }

    public function pdf()
    {
        $this->load->view('files');
        
        // Get output html
        $html = $this->output->get_output();
        
        // Load pdf library
        $this->load->library('pdf');
        
        // Load HTML content
        $this->dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4', 'landscape');
        
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("welcome.pdf", array("Attachment"=>0));
    }

}
?> 
# A codeigniter library for dompdf version 0.7 and above
### Download dompdf latest version from http://dompdf.github.com/ and copy it to application/third_party folder
### You can also install dompdf easily using composer
### load library in your controllers - $this->load->library('Dom_pdf');

    $this->load->view('yourviewpage_name');
    $html = $this->output->get_output();

    // Convert to PDF
    $this->dompdf->load_html($html);        
    $this->dompdf->render();
    $this->dompdf->stream("Heads.pdf");

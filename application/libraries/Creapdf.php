<?php

class Creapdf extends MX_Controller {

    private $header, $footer, $body, $pdf, $css, $destino;

    /**
     * CREA PDF
     * Classe para simplificar a geração de arquivos PDF
     * @param type $destino
     * @tutorial O destino é opcional. Caso seja informado o arquivo será gerado em disco
     * @example FCPATH . "/public/upload/nutella.pdf"
     */
    public function __construct($destino = NULL) {
        $this->destino = $destino ? $destino : null;
        $this->footer = "<div class=\"tbl_footer\" align=\"right\">Página: {PAGENO} de {nb}</div>";
    }

    /**
     * Define o título da página
     * @param string $titulo
     */
    function setHeader($titulo = null) {
        $this->header = $retorno = "<table class=\"tbl_header\" width=\"100%\"><tr><td align=\"left\">{$titulo}</td><td align=\"right\">" . date('d-m-Y') . "</td></tr></table>";
    }

    /**
     * Define o corpo da página
     * @param html $html
     */
    function setBody($html) {
        $this->body = $html;
    }

    /**
     * Define o caminho da folha de estilo
     * @param html $css_file
     * @author Wender Fernandes 
     * @example FCPATH."public/css/pdf.css"
     * 
     */
    function setCss($css_file) {
        $this->css = file_get_contents($css_file);
    }

    /**
     * Método para geração do PDF
     * @author Wender Fernandes <wenderfernandes@creago.org.br>
     */
    public function gerar() {
        $this->load->library("mpdf");
        $this->pdf = new mPDF('utf-8', 'A4-P');
        $this->pdf->WriteHTML($this->css, 1);
        $this->pdf->SetHTMLHeader($this->header);
        $this->pdf->SetHTMLFooter($this->footer);
        $this->pdf->WriteHTML($this->body);
        if (!$this->destino) {
            $this->pdf->Output("Crea-GO", 'I');
        }else{
            try {
                $this->pdf->Output($this->destino, 'F');
                return array('result'=>true, 'message'=>'Arquivo PDF gerado com sucesso');
            } catch (Exception $e) {
                echo $e->getMessage();
                return array('result'=>false, 'message'=>'Falha ao gerar o arquivo PDF', 'error'=>$e->getMessage());
            }

            
        }
    }

}

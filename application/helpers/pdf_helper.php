<?php

/**
 * Função para geração de PDF
 *
 * @author wender 
 */
class Pdf_helper extends CI_Model {

    private $titulo;
    private $colunas_nomes;
    private $colunas_indices;
    private $classes;
    private $dados;
    private $borda = 0;
    private $css;

    public function __construct() {
        $arquivo_css = FCPATH . "/public/css/pdf.css";
        $this->css = file_get_contents($arquivo_css);
        $this->classes = array();
    }

    public function setBorda($borda) {
        $this->borda = $borda;
    }

    public function setClasses(array $classes) {
        $this->classes = $classes;
    }

    public function setDados(array $dados) {
        $this->dados = $dados;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setColunasNomes(array $colunas_nomes) {
        $this->colunas_nomes = $colunas_nomes;
    }

    public function setColunasIndices(array $colunas_indices) {
        $this->colunas_dados = $colunas_indices;
    }

    private function getHeader() {
        $tabela .= "<table class=\"tbl_header cabecalho\" width=\"100%\">
               <tr>
                 <td align=\"left\">" . $this->titulo . "</td>
                 <td align=\"right\">Gerado em: " . date('d-m-Y') . "</td>
               </tr>
             </table>";
        return $tabela;
    }

    private function getFooter() {
        $tabela = "<table class=\"tbl_footer\" width=\"100%\">  
               <tr>
                 <td align=\"right\">Página: {PAGENO} / {nb}</td>
               </tr>
             </table>";
        return $tabela;
    }

    private function getTabela() {
        $tabela = $tabela = "<table border=\"" . $this->borda . "\" class=\"tbl_header\" width=\"100%\">";
        $tabela.="<thead>";
        $tabela.="<tr>";
        foreach ($this->colunas_nomes as $row) {
            if (count($this->classes) > 0) {
                $tabela.="<th class=\"upper center\">" . $row . "</th>";
            } else {
                $tabela.="<th class=\"upper left\">" . $row . "</th>";
            }
        }
        $tabela.="</tr>";
        $tabela.="</thead>";
        $tabela.="<tbody>";
        foreach ($this->dados as $row) {
            $tabela.="<tr>";
            $i = 0;
            foreach ($this->colunas_dados as $col) {
                $tabela.="<td class='" . $this->classes[$i] . "'>" . $row->$col . "</td>";
                $i++;
            }
            $tabela.="</tr>";
        }
        $tabela.="</tbody>";
        $tabela .= "</table>";
        return $tabela;
    }

    public function gerar() {
        $this->load->library("mpdf");
        $this->pdf = new mPDF('utf-8', 'A4-P');
        $this->pdf->SetHTMLHeader($this->getHeader());
        $this->pdf->SetHTMLFooter($this->getFooter());
        $this->pdf->WriteHTML($this->css, 1);
        $this->pdf->WriteHTML($this->getTabela(), 2);
        $this->pdf->Output("abastecimento.pdf", 'I');
    }

}

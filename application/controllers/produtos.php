<?php

class Produtos extends CI_Controller {

    public function index()
    {
        $this->load->database();
       $this->load->model("produtos_model");

        $produtos = $this->produtos_model->buscaTodos();
        
        $dados = array("produtos" => $produtos);
        $this->load->helper(array("url"));
        $this->load->helper(array("currency"));
        $this->load->helper(array("form"));
        $this->load->view("produtos/index.php", $dados);
     
    }
      
    
}

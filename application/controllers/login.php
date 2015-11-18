<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Login extends CI_Controller {

    public function autenticar() {
        $this->load->model("usuarios_model");
        $email = $this->input->post("email");
        $senha = md5($this->input->post("senha"));
        $usuario = $this->usuarios_model->buscaPorEmailESenha($email, $senha);
        if ($usuario) {
            $dados = array("mensagem" => "Logado com sucesso");
            $this->session->set_userdata("usuario_logado", $usuario);
        } else {
            $dados = array("mensagem" => "Usuário ou senha inválida.");
        }

        $this->load->view('login/autenticar', $dados);
    }

}

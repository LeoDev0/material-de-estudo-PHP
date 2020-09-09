<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $request) {

        // all()  <-- pega dados de qualquer método HTTP (GET, POST, PUT)
        // input()  <-- prioriza dados vindos do corpo da requisição (body params)
        // query()  <-- pega apenas os parâmetros da url (query params)

        $dados = $request->query('cidade', 'São Paulo'); // valor padrão para o caso do usuário não ter preenchido o campo 'cidade'

        print_r($dados);

        // $link_info = route('info');
        // $link_permissoes = route('permissoes');

        // echo "<a href='$link_info'>INFO</a>";
        // echo '<br>';
        // echo "<a href='$link_permissoes'>PERMISSOES</a>";

        return view('config');
    }

    public function info() {
        echo 'CONFIGURAÇÕES: info';
    }

    public function permissoes() {
        echo 'CONFIGURAÇÕES: permissoes';
    }
}

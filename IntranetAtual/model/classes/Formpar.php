<?php

/**
 *  Formpar de classe
 * Processa o formularioPAR de usuário
 */
class Formpar
{ 
    /**
     * @var object $db_connection A conexão do banco de dados
     */
    private $db_connection = null;
    /**
     * @var array $errors Coleção de mensagens de erro
     */
    public $errors = array();
     /**
     * @var array $messages Coleção de mensagens de sucesso
     */
    public $messages = array();
    /**
     * A função "__construct()" é iniciada automaticamente sempre que um objeto dessa classe é criado,
     * você sabe, quando faz "$registration = new Registration();"
     */
    public function __construct()
    {
        if (isset($_POST["formpar"])) {
            $this->registerNewForm();
        }
    }

    /**
     * Processa todo o processo de registo. Verifica todas as possibilidades de erro
      * E cria um Objeto for usuário no banco de dados se tudo estiver certo.
     */
    public function registerNewForm()
    {
        
        {
            // Criar uma conexão de banco de dados
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // Alterar o conjunto de caracteres para utf8 e verificá-lo
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // Se não há erros de conexão (= conexão de banco de dados de trabalho)
            if (!$this->db_connection->connect_errno) {

                // Escapar, além de remover tudo o que poderia ser (html / javascript-) código
                $alter_user = $this->db_connection->real_escape_string(strip_tags($_POST['alter_user'], ENT_QUOTES));
               
                              

                // Verifique se o usuário ou o endereço de e-mail já existe
        $sql = "SELECT * FROM users WHERE user_name = '" . $alter_user . "';";
                $query_check_user_name = $this->db_connection->query($sql);
                if ($query_check_user_name->num_rows == 1) {
                
                $sql = "DELETE FROM users WHERE user_name = '" . $alter_user . "';";
                    $query_new_user_insert = $this->db_connection->query($sql);
                } 

                else {
                    // write new user's data into database

                    // Se o usuário tiver sido adicionado com sucesso
                    if ($query_new_user_insert) {
                        $this->messages[] = "Usuário Deletado ";
                    } else {
                        $this->errors[] = "Desculpe, a alteração falhou. Por favor volte e tente novamente.";
                    }
                }
            } else {
                $this->errors[] = "Desculpe, nenhuma conexão de banco de dados.";
            }
        } else {
            $this->errors[] = "Ocorreu um erro desconhecido.";
            }
    }
}

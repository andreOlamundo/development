<?php

/**
 *  Registro de classe
 * Processa o registro de usuário
 */
class Registration
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
        if (isset($_POST["register"])) {
            $this->registerNewUser();
        }
    }

    /*
     * Processa todo o processo de registo. Verifica todas as possibilidades de erro
      * E cria um novo usuário no banco de dados se tudo estiver certo.
     */
    public function registerNewUser()
    {
        if (empty($_POST['user_name'])) {
            $this->errors[] = "Nome de usuário vazio";
        } elseif (empty($_POST['user_password_new']) || empty($_POST['user_password_repeat'])) {
            $this->errors[] = "Senha vazia";
        } elseif ($_POST['user_password_new'] !== $_POST['user_password_repeat']) {
            $this->errors[] = "Senha e repetição de senha não são os mesmos";
        } elseif (strlen($_POST['user_password_new']) < 6) {
            $this->errors[] = "A senha tem um comprimento mínimo de 6 caracteres";
        } elseif (strlen($_POST['user_name']) > 64 || strlen($_POST['user_name']) < 2) {
            $this->errors[] = "O nome de usuário não pode ter menos de 2 ou mais de 64 caracteres";
        } elseif (!preg_match('/^[a-z\d]{2,64}.[a-z\d]{2,64}$/i', $_POST['user_name'])) {
            $this->errors[] = "O nome de usuário não se encaixa no esquema de nome: somente a-Z e números são permitidos, de 2 a 64 caracteres";
        } elseif (empty($_POST['user_email'])) {
            $this->errors[] = "O e-mail não pode ficar em branco";
        } elseif (strlen($_POST['user_email']) > 64) {
            $this->errors[] = "O email não pode ter mais de 64 caracteres";
        } elseif (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "Seu endereço de e-mail não está em um formato de e-mail válido";
        } 
        elseif (!empty($_POST['user_name'])
            && strlen($_POST['user_name']) <= 64
            && strlen($_POST['user_name']) >= 2
            && preg_match('/^[a-z\d]{2,64}.[a-z\d]{2,64}$/i', $_POST['user_name'])
            && !empty($_POST['user_email'])
            && strlen($_POST['user_email']) <= 64
            && filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)
            && !empty($_POST['user_password_new'])
            && !empty($_POST['user_password_repeat'])
            && ($_POST['user_password_new'] === $_POST['user_password_repeat'])
              
        ) {
            // Criar uma conexão de banco de dados
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // Alterar o conjunto de caracteres para utf8 e verificá-lo
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // Se não há erros de conexão (= conexão de banco de dados de trabalho)
            if (!$this->db_connection->connect_errno) {

                // Escapar, além de remover tudo o que poderia ser (html / javascript-) código
                $user_namecolab = $this->db_connection->real_escape_string(strip_tags($_POST['user_namecolab'], ENT_QUOTES));
                $user_sobrenome = $this->db_connection->real_escape_string(strip_tags($_POST['user_sobrenome'], ENT_QUOTES));
                $user_email = $this->db_connection->real_escape_string(strip_tags($_POST['user_email'], ENT_QUOTES));
                $cod_depto = $this->db_connection->real_escape_string(strip_tags($_POST['cod_depto'], ENT_QUOTES));
                $nome_depto = $this->db_connection->real_escape_string(strip_tags($_POST['nome_depto'], ENT_QUOTES));
                $cod_cargo = $this->db_connection->real_escape_string(strip_tags($_POST['cod_cargo'], ENT_QUOTES));
                $user_name = $this->db_connection->real_escape_string(strip_tags($_POST['user_name'], ENT_QUOTES));
                $user_ramal = $this->db_connection->real_escape_string(strip_tags($_POST['user_ramal'], ENT_QUOTES));          
                $user_password = $_POST['user_password_new'];

                // crypt the user's password with PHP 5.5's password_hash() function, results in a 60 character
                // hash string. the PASSWORD_DEFAULT constant is defined by the PHP 5.5, or if you are using
                // PHP 5.3/5.4, by the password hashing compatibility library
                $user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);

                // Verifique se o usuário ou o endereço de e-mail já existe
                $sql = "SELECT * FROM users WHERE user_name = '" . $user_name . "' OR user_email = '" . $user_email ."';";

                
                $query_check_user_email = $this->db_connection->query($sql);

                if ($query_check_user_email->num_rows == 1) {
                    $this->errors[] = "Desculpe, endereço de e-mail já possue cadastro ativo, tente novamente, ou se já possuí cadastro, entre com Usuário e Senha em: ACESSO RESTRITO .";
                } else {     

 /*$sql = "SELECT nome_depto FROM departamento WHERE cod_depto = '" . $nome_depto . "';" ;

  $query_check_cod_depto = $this->db_connection->query($sql);

  if ($query_check_cod_depto->num_rows = $nome_depto) */



   // cod_depto.value.replace(cod_depto.value ,'.'));

                      // write new user's data into database
                    $sql = "INSERT INTO users (user_name, user_password_hash, user_sobrenome, user_email, cod_depto, cod_cargo, user_ramal, user_namecolab)
                            VALUES('" . $user_name . "', '" . $user_password_hash . "','" . $user_sobrenome . "', '" . $user_email ."','" . $cod_depto . "','" . $cod_cargo . "','" . $user_ramal . "','" . $user_namecolab . "');";
                        
                    $query_new_user_insert = $this->db_connection->query($sql);


                    // Se o usuário tiver sido adicionado com sucesso

                    if ($query_new_user_insert) {
                        $this->messages[] = "Sua conta foi criada com sucesso. Agora você pode entrar acessar ";
                      
                    } else {
                        $this->errors[] = "Desculpe, seu registro falhou. Por favor volte e tente novamente.";
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


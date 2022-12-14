 <?php
    class cliente extends Controller
    {
        public function __construct()
        {
            session_start();
            parent::__construct();
        }

        public function index()
        {
            if ($_SESSION['rol'] == "2") {
                $data['title'] = "Cliente";
                $this->views->getView("cliente", "perfil", $data);
            } else {
                header("location: " . BASE_URL);
            }
        }

        public function UpdateCorreo()
        {
            if ($this->valid_email($_POST['newCorreo'])) {
                $newCorreo = strClean($_POST['newCorreo']);
                $Actcorreo = strClean($_POST['ActCorreo']);
                $id = $_SESSION['id'];
                if ($newCorreo === $Actcorreo) {
                    $msg = "0";
                } else {
                    $data = $this->model->UpdateCorreo($newCorreo, $id);
                    if ($data === 1) {
                        $msg = "Correo actualizado con exito";
                        $_SESSION['usuario'] = $newCorreo;
                    } else {
                        $msg = "El correo no se encuentra disponible";
                    }
                }
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function UpdatePassword()
        {
            $passwordNow = strClean($_POST['passwordNow']);
            $newPassword = strClean($_POST['newPassword']);
            $newPasswordTry = strClean($_POST['newPasswordTry']);
            if (empty($passwordNow) || empty($newPassword) || empty($newPasswordTry)) {
                $msg = "null";
                if ($newPassword === $newPasswordTry) {
                    $id = $_SESSION['id'];
                    $data = $this->model->user_very($id);
                    if ($data) {
                        if (password_verify($passwordNow, $data['password'])) {
                            $msg = "exito";
                        }
                    }
                } else {
                    $msg = "las contraseñas no coinciden";
                }
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function valid_email($str)
        {
            return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
        }
    }

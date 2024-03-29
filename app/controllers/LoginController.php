<?php
include ("../app/models/User.php");
require_once ("../app/core/Controller.php");

class LoginController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = $this->model("User");
    }
    public function index()
    {
        session_unset();
        $this->view("user/login-view");
    }

    /** Connect user
     * 
     */
    public function askLogin()
    {
        $email = $_POST["email"] ?? "";
        $password = $_POST["password"] ?? "";

        # if field are not empty 
        if ($email != "" && $password != "") {
            if (!preg_match("/[\w\-\.]+@([\w-]+\.)+[\w-]{2,4}/", $email)) {
                return ["error" => "L'email est invalide."];
            }

            $res = $this->user->login($email, $password);
            $isconnected = $res["data"];
            $error = $res["error"] ?? null;

            if ($isconnected && $_SESSION["userId"] != null) {
                $this->view("user/dashboard-view", ["lastname" => $_SESSION["userLastname"], "firstname" => $_SESSION["userFirstname"]]);
            } else {
                $this->view("user/login-view", ["error" => $error]);
            }
        } else {
            $this->view("user/login-view", ["error" => "Vous ne pouvez pas avoir de champs vides"]);
        }
    }
}


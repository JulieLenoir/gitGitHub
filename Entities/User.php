<?php

class User
{

    private $id_user;
    private $login_user;
    private $password_user;


    /**
     * Get the value of id_user
     */
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of login_user
     */
    public function getLogin_user()
    {
        return $this->login_user;
    }

    /**
     * Set the value of login_user
     *
     * @return  self
     */
    public function setLogin_user($login_user)
    {
        $this->login_user = $login_user;

        return $this;
    }

    /**
     * Get the value of password_user
     */
    public function getPassword_user()
    {
        return $this->password_user;
    }

    /**
     * Set the value of password_user
     *
     * @return  self
     */
    public function setPassword_user($password_user)
    {
        $this->password_user = $password_user;

        return $this;
    }
}

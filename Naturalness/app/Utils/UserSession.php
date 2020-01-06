<?php

namespace App\Utils;

session_start();
use App\Models\User;

abstract class UserSession {

  

    // Constante contenant l'index du tableau de session
    const SESSION_INDEX_NAME = 'connectedUser';

    /**
     * Méthode permettant de connecter un utilisateur
     *
     * @param \App\User $user
     */
    public static function connect(User $user): void
    {
        // J'assigne l'id de l'user en session
        $_SESSION[self::SESSION_INDEX_NAME] = $user->id;
    }

    /**
     * Méthode permettant de déconnecter un utilisateur
     */
    public static function disconnect(): void
    {
        // Je supprime la variable en session
        unset($_SESSION[self::SESSION_INDEX_NAME]);
    }

    /**
     * Méthode permettant de savoir si le visiteur est connecté à un compte
     *
     * @return bool
     */
    public static function isConnected() : bool
    {
        // Je test l'existence de la variable en session
        return !empty($_SESSION[self::SESSION_INDEX_NAME]);
    }

    /**
     * Méthode permettant de récupérer le Model de l'utilisateur connecté
     *
     * @return \App\User ou NULL
     *
     * Ici le ? permet de dire soit NULL soit un objet de la classe User
     */
    public static function getUser(): ?User
    {
        // Je vérifie si je suis connecté
        if (self::isConnected()) {

            return User::findOrFail($_SESSION[self::SESSION_INDEX_NAME]);
        }

        return null;
    }

    /**
     * Méthode permettant de récuperer l'id du role de l'utilisateur connecté
     *
     * @return int
     */
    public static function getStatus(): int
    {
        if (self::isConnected()) {

            return self::getUser()->status;
        }

        return 0;
    }

    /**
     * Méthode permettant de savoir si l'utilisateur connecté est auteur
     *
     * @return bool
     */
    public static function isAuthor() : bool
    {
        // Je compare l'id du role de l'utilisateur avec l'id du status auteur
        // si ils sont pareil => return true
        // si ils sont différents => return false
        // return (self::getStatus() == self::AUTHOR_STATUS);

        // Revient au même que au dessus
        return self::getStatus() == User::AUTHOR_STATUS ? true : false;
    }

      /**
     * Méthode permettant de savoir si l'utilisateur connecté est admin
     *
     * @return bool
     */
    public static function isAdmin() : bool
    {
        if (self::isConnected()) {
            // Renvoir true si le user a le role 'admin' en BDD
            return self::getStatus() == User::ADMIN_STATUS ? true : false;
        }
    }
}
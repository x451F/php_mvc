<?php

namespace Afpa\Models;

/**
 * Classe représentant un utilisateur.
 * 
 * Ses attributs doivent être similaires aux colonnes de la table de base de données.
 */
class Utilisateur
{
    // le '?' est important : il indique qu'il peut, pour un utilisateur, avoir un id null !
    private ?int $id;
    private string $nom;
    private string $email;
    private string $password;
    private string $fonction;

    /**
     * Constructeur d'un utilisateur.
     * 
     * IMPORTANT : nous avons "?int $id = null"
     * Ceci indique que l'identifiant peut être "null" lors de la construction
     * 
     * ça permet de pouvoir instancier des utilisateurs SANS identifiant (par exemple, en cas de création dans une base de données).
     *
     * @param integer|null $id L'identifiant de l'utilisateur
     * @param string $prenom Le prénom de l'utilisateur
     * @param string $nom Le nom de l'utilisateur
     * @param string $email L'adresse email de l'utilisateur
     * @param string $password Le mot de passe de l'utilisateur
     */
    public function __construct(string $nom, string $email, string $password, string $fonction, ?int $id = null)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->fonction = $fonction;
        $this->password = $password;
        $this->id = $id;
    }

    /**
     * Retourne une représentation en chaîne de caractères de l'objet.
     */
    public function __toString()
    {
        return "$this->id - $this->nom - $this->email";
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getFonction(): string
    {
        return $this->fonction;
    }
}

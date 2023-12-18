<?php
namespace src\Entity;
class UsuarioEntity
{
    private int $id;
    private string $name;
    private string $empresa;
    private string $telefone;
    private string $cpf;
    private string $email;
    private string $senha;
    private string $senha_crip;
    private string $endereco;
    private string $status;
    private string $foto;
    private string $nivel;

    /**
     * @param int $id
     * @param string $name
     * @param string $empresa
     * @param string $telefone
     * @param string $cpf
     * @param string $email
     * @param string $senha
     * @param string $senha_crip
     * @param string $endereco
     * @param string $status
     * @param string $foto
     * @param string $nivel
     */
    public function __construct(int $id, string $name, string $empresa, string $telefone, string $cpf, string $email, string $senha, string $senha_crip, string $endereco, string $status, string $foto, string $nivel)
    {
        $this->id = $id;
        $this->name = $name;
        $this->empresa = $empresa;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
        $this->senha_crip = $senha_crip;
        $this->endereco = $endereco;
        $this->status = $status;
        $this->foto = $foto;
        $this->nivel = $nivel;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmpresa(): string
    {
        return $this->empresa;
    }

    public function setEmpresa(string $empresa): void
    {
        $this->empresa = $empresa;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

    public function getSenhaCrip(): string
    {
        return $this->senha_crip;
    }

    public function setSenhaCrip(string $senha_crip): void
    {
        $this->senha_crip = $senha_crip;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): void
    {
        $this->endereco = $endereco;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getFoto(): string
    {
        return $this->foto;
    }

    public function setFoto(string $foto): void
    {
        $this->foto = $foto;
    }

    public function getNivel(): string
    {
        return $this->nivel;
    }

    public function setNivel(string $nivel): void
    {
        $this->nivel = $nivel;
    }



}
<?php


namespace memo\modeles;


use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    /**
     * la table
     */
    protected $table = 'profil';
    /**
     * la clé primaire
     */
    protected $primaryKey = 'idprofil' ;
    /**
     * timestamps
     */
    public $timestamps = false ;
}
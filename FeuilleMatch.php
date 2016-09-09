<?php
/**
 * Created by PhpStorm.
 * User: florentcardoen
 * Date: 21/08/16
 * Time: 21:58
 */

namespace App\Api;


/**
 * Permet de récupérer une feuille de match
 * @package App\Api
 */
class FeuilleMatch extends ApiRequest
{
    /**
     * FeuilleMatch constructor.
     * @param Int id de la feuille
     */
    function __construct($idfeuille)
    {
        $this->setFile('feuille_de_matche');
        $this->setParam(["IC" => $idfeuille]);
    }

}
<?php

class Datas{

    private $header_menue = array(
        "L'atelier" => ["L'Atelier"],
        "LesCollections" => ["Les Collections"],
        "LesStyles" => ["Les Styles"],
        "SculpturesEtMoulages" => ["Sculpture Et Moulage"],
        "Luminaires" => ["Luminaires"],
        "ObjetsetDecors" => ["Objets Et décors"],
        "ClientsRealisations" => ["Clients-Réalisations"],
        "Boutique" => ["Boutique"],
        "Contact" => ["Contact"]
    );

    private $vertical_menue_scultptureEtMoulage = array(
        "ObjetsetDecors" => ["Objets et Décors"],
        "Statues" => ["Statues"],
        "Cariatides" => ["Cariatides"],
        "Bustes" => ["Bustes"],
        "SoclesEtPiedestaux" => ["Socles et Piédestaux"],
        "TetesVisagesEtPortraits" => ["Têtes Visages et Portraits"],
        "Statuettes" => ["Statuettes"],
        "Bas-Reliefs" => ["Bas-Reliefs"],
        "Hauts-Reliefs" => ["Hauts-Reliefs"],
        "Médaillons" => ["Médaillons"],
        "OrnementsDeDiversStyles" => ["Ornements de Divers Styles"],
        "VasesPotsEtVasques" => ["Vases Pots et Vasques"],
        "Rosaces" => ["Rosaces"],
        "Luminaires" => ["Luminaires"],
        "Animaux" => ["Animaux"],
        "Coquillages" => ["Coquillages"],
        "Fontaines" => ["Fontaines"],
        "MasquesDeFontaines" => ["Masques de Fontaines"],
        "MeublesResineEtComposites" => ["Meubles Résine et Composites"],
        "BaignoiresEtLavabos" => ["Baignoires et Lavabos"],
        "PiedsDeTablesEtDeConsoles" => ["Pieds de Tables et de Consoles"],
        "Chapiteaux" => ["Chapiteaux"],
        "Colonnes" => ["Colonnes"],
        "Pilastres" => ["Pilastres"],
        "Consoles" => ["Consoles"],
        "Corniches" => ["Corniches"],
        "PlafondsEnStaff" => ["Plafonds en Staff"],
        "Frises" => ["Frises"],
        "Moulures" => ["Moulures"],
        "NichesEtBalustres" => ["Niches et balustres"],
        "Cheminees" => ["Cheminées"],
        "CadresEtMiroirs" => ["Cadres et Miroirs"],
        "TrumeauxEtDessusDePortes" => ["Trumeaux et Dessus de Portes"],
        "CartouchesEtEcussons" => ["Cartouches et Ecussons"],
        "ReparationsEtRestaurations" => ["Réparations et Restaurations"]
      );

    private $vertical_menue_atelier = array(
        "HistoriquesDesAteliers" => ["Historiques des Ateliers"],
        "Contact" => ["Contact"],
      );

    function get_header_menue($val = false){
        if($val){
            if (array_key_exists($val,$this->header_menue)){
                array_push($this->header_menue[$val],"current");
            }else{
                return false;
            }
        } 
        return $this->header_menue;
    }

    function get_vertical_menue_scultptureEtMoulage($val = false){
        if($val){
            if (array_key_exists($val,$this->vertical_menue_scultptureEtMoulage)){
                array_push($this->vertical_menue_scultptureEtMoulage[$val],"current");
            }else{
                return false;
            }
        } 
        return $this->vertical_menue_scultptureEtMoulage;
    }

    function get_vertical_menue_atelier($val = false){
        if($val){
            if (array_key_exists($val,$this->vertical_menue_atelier)){
                array_push($this->vertical_menue_atelier[$val],"current");
            }else{
                return false;
            }
        } 
        return $this->vertical_menue_atelier;
       
    }
}

?>
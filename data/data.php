<?php

class Datas{

    private $header_menue = array(
        "L'atelier" => ["value" => "L'Atelier", "active" => false],
        "LesCollections" => ["value" => "Les Collections", "active" => false],
        "LesStyles" => ["value" => "Les Styles", "active" => false],
        "SculpturesEtMoulages" => ["value" => "Sculpture et Moulage", "active" => false],
        "Luminaires" => ["value" => "Luminaires", "active" => false],
        "ObjetsetDecors" => ["value" => "Objets et Décors", "active" => false],
        "ClientsRealisations" => ["value" => "Clients-Réalisations", "active" => false],
        "Boutique" => ["value" => "Boutique", "active" => false],
        "Contact" => ["value" => "Contact", "active" => false],
    );

    private $vertical_menue_scultptureEtMoulage = array(
        "ObjetsetDecors" => ["value" => "Objets et Décors", "active" => false, "script" => true],
        "Statues" => ["value" => "Statues", "active" => false, "script" => true],
        "Cariatides" => ["value" => "Cariatides", "active" => false],
        "Bustes" => ["value" => "Bustes", "active" => false],
        "SoclesEtPiedestaux" => ["value" => "Socles et Piédestaux", "active" => false],
        "TetesVisagesEtPortraits" => ["value" => "Têtes Visages et Portraits", "active" => false],
        "Statuettes" => ["value" => "Statuettes", "active" => false],
        "Bas-Reliefs" => ["value" => "Bas-Reliefs", "active" => false],
        "Hauts-Reliefs" => ["value" => "Hauts-Reliefs", "active" => false],
        "Médaillons" => ["value" => "Médaillons", "active" => false],
        "OrnementsDeDiversStyles" => ["value" => "Ornements de Divers Styles", "active" => false],
        "VasesPotsEtVasques" => ["value" => "Vases Pots et Vasques", "active" => false],
        "Rosaces" => ["value" => "Rosaces", "active" => false],
        "Luminaires" => ["value" => "Luminaires", "active" => false],
        "Animaux" => ["value" => "Animaux", "active" => false],
        "Coquillages" => ["value" => "Coquillages", "active" => false],
        "Fontaines" => ["value" => "Fontaines", "active" => false],
        "MasquesDeFontaines" => ["value" => "Masques de Fontaines", "active" => false],
        "MeublesResineEtComposites" => ["value" => "Meubles Résine et Composites", "active" => false],
        "BaignoiresEtLavabos" => ["value" => "Baignoires et Lavabos", "active" => false],
        "PiedsDeTablesEtDeConsoles" => ["value" => "Pieds de Tables et de Consoles", "active" => false],
        "Chapiteaux" => ["value" => "Chapiteaux", "active" => false],
        "Colonnes" => ["value" => "Colonnes", "active" => false],
        "Pilastres" => ["value" => "Pilastres", "active" => false],
        "Consoles" => ["value" => "Consoles", "active" => false],
        "Corniches" => ["value" => "Corniches", "active" => false],
        "PlafondsEnStaff" => ["value" => "Plafonds en Staff", "active" => false],
        "Frises" => ["value" => "Frises", "active" => false],
        "Moulures" => ["value" => "Moulures", "active" => false],
        "NichesEtBalustres" => ["value" => "Niches et balustres", "active" => false],
        "Cheminees" => ["value" => "Cheminées", "active" => false],
        "CadresEtMiroirs" => ["value" => "Cadres et Miroirs", "active" => false],
        "TrumeauxEtDessusDePortes" => ["value" => "Trumeaux et Dessus de Portes", "active" => false],
        "CartouchesEtEcussons" => ["value" => "Cartouches et Ecussons", "active" => false],
        "ReparationsEtRestaurations" => ["value" => "Réparations et Restaurations", "active" => false],
      );

    private $vertical_menue_atelier = array(
        "HistoriquesDesAteliers" => ["value" => "Historiques des Ateliers", "active" => false],
        "Contact" => ["value" => "Contact", "active" => false],
        "Video" => ["value" => "Video", "active" => false],
      );

    function get_header_menue($val = false){
        if($val){
            if (array_key_exists($val,$this->header_menue)){
                $this->header_menue[$val]["active"] = true;
            }else{
                return false;
            }
        } 
        return $this->header_menue;
    }

    function get_vertical_menue_scultptureEtMoulage($val = false){
        if($val){
            if (array_key_exists($val,$this->vertical_menue_scultptureEtMoulage)){
                $this->vertical_menue_scultptureEtMoulage[$val]["active"] = true;
            }else{
                return false;
            }
        } 
        return $this->vertical_menue_scultptureEtMoulage;
    }

    function get_vertical_menue_atelier($val = false){
        if($val){
            if (array_key_exists($val,$this->vertical_menue_atelier)){
                $this->vertical_menue_atelier[$val]["active"] = true;
            }else{
                return false;
            }
        } 
        return $this->vertical_menue_atelier;
       
    }
}

?>
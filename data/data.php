<?php

class Datas{

    private $header_menue = array(
        "L'atelier" => ["value" => "L'Atelier", "active" => false],
        "LesCollections" => ["value" => "Les Collections", "active" => false],
        "LesStyles" => ["value" => "Les Styles", "active" => false],
        "SculpturesEtMoulages" => ["value" => "Sculptures et Moulages", "active" => false],
        "Luminaires" => ["value" => "Luminaires", "active" => false],
        "ObjetsetDecors" => ["value" => "Objets et Décors", "active" => false],
        "ClientsRealisations" => ["value" => "Clients et Réalisations", "active" => false],
        "Boutique" => ["value" => "Boutique", "active" => false],
        "Contact" => ["value" => "Contact", "active" => false],
    );

    private $vertical_menue_scultptureEtMoulage = array(
        "ObjetsetDecors" => ["value" => "Objets et Décors", "active" => false, "img" => false],
        "Statues" => ["value" => "Statues", "active" => false, "img" => "statues.jpg"],
        "Cariatides" => ["value" => "Cariatides", "active" => false, "img" => "cariatides.jpg"],
        "Bustes" => ["value" => "Bustes", "active" => false, "img" => "bustes.jpg"],
        "SoclesEtPiedestaux" => ["value" => "Socles et Piédestaux", "active" => false, "img" => "soclesEtPiedestaux.jpg"],
        "TetesVisagesEtPortraits" => ["value" => "Têtes Visages et Portraits", "active" => false, "img" => "tetesVisagesEtPortrait.jpg"],
        "MainsEtPieds" => ["value" => "Mains et Pieds", "active" => false, "img" => "mainsEtPieds.jpg"],
        "Statuettes" => ["value" => "Statuettes", "active" => false, "img" => "statuettes.jpg"],
        "Bas-Reliefs" => ["value" => "Bas-Reliefs", "active" => false, "img" => "basReliefs.jpg"],
        "Hauts-Reliefs" => ["value" => "Hauts-Reliefs", "active" => false, "img" => "hautsReliefs.jpg"],
        "Médaillons" => ["value" => "Médaillons", "active" => false, "img" => "medaillons.jpg"],
        "OrnementsDeDiversStyles" => ["value" => "Ornements de Divers Styles", "active" => false, "img" => false],
        "VasesPotsEtVasques" => ["value" => "Vases Pots et Vasques", "active" => false, "img" => "vasesPotsEtVasques.jpg"],
        "Rosaces" => ["value" => "Rosaces", "active" => false, "img" => false],
        "Luminaires" => ["value" => "Luminaires", "active" => false, "img" => false],
        "Animaux" => ["value" => "Animaux", "active" => false, "img" => false],
        "Coquillages" => ["value" => "Coquillages", "active" => false, "img" => false],
        "Fontaines" => ["value" => "Fontaines", "active" => false, "img" => false],
        "MasquesDeFontaines" => ["value" => "Masques de Fontaines", "active" => false, "img" => false],
        "MeublesResineEtComposites" => ["value" => "Meubles Résine et Composites", "active" => false, "img" => false],
        "BaignoiresEtLavabos" => ["value" => "Baignoires et Lavabos", "active" => false, "img" => false],
        "PiedsDeTablesEtDeConsoles" => ["value" => "Pieds de Tables et de Consoles", "active" => false, "img" => false],
        "Chapiteaux" => ["value" => "Chapiteaux", "active" => false, "img" => false],
        "Colonnes" => ["value" => "Colonnes", "active" => false, "img" => false],
        "Pilastres" => ["value" => "Pilastres", "active" => false, "img" => false],
        "Consoles" => ["value" => "Consoles", "active" => false, "img" => false],
        "Corniches" => ["value" => "Corniches", "active" => false, "img" => false],
        "PlafondsEnStaff" => ["value" => "Plafonds en Staff", "active" => false, "img" => false],
        "Frises" => ["value" => "Frises", "active" => false, "img" => false],
        "Moulures" => ["value" => "Moulures", "active" => false, "img" => false],
        "NichesEtBalustres" => ["value" => "Niches et balustres", "active" => false, "img" => false],
        "Cheminees" => ["value" => "Cheminées", "active" => false, "img" => false],
        "CadresEtMiroirs" => ["value" => "Cadres et Miroirs", "active" => false, "img" => false],
        "TrumeauxEtDessusDePortes" => ["value" => "Trumeaux et Dessus de Portes", "active" => false, "img" => false],
        "CartouchesEtEcussons" => ["value" => "Cartouches et Ecussons", "active" => false, "img" => false],
        "ReparationsEtRestaurations" => ["value" => "Réparations et Restaurations", "active" => false, "img" => false],
      );

    private $vertical_menue_atelier = array(
        "Depuis1988" => ["value" => "Depuis 1988", "active" => false],
        "NosAteliersAutrefois" => ["value" => "Nos Ateliers Autrefois", "active" => false],
        "VideosDanslAtelierDeMandres" => ["value" => "Vidéos dans l'Atelier de Mandres", "active" => false],
        "CeQueNousFabriquons" => ["value" => "Ce que nous fabriquons", "active" => false],
        "NosPartenaires" => ["value" => "Nos Partenaires", "active" => false],
        "LAtelierDeMandresDansLeMonde" => ["value" => "L'Atelier de Mandres dans le Monde", "active" => false],
        "RevueDePresse" => ["value" => "Revue de Presse", "active" => false],
        "DanslAtelier" => ["value" => "Dans l'Atelier", "active" => false],
        "SavoirFaire" => ["value" => "Savoir Faire", "active" => false],
        "Patines" => ["value" => "Patines", "active" => false],
        "MateriauxUtilises" => ["value" => "Matériaux Utilisés", "active" => false],
        "PierreWagnerSculpteur" => ["value" => "Pierre Wagner Sculpteur - Mouleur - Biographie", "active" => false],
        "PierreWagnerPeintre" => ["value" => "Pierre Wagner (1897 - 1943) - Biographie", "active" => false],        
        "Contact" => ["value" => "Contact", "active" => false],        
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
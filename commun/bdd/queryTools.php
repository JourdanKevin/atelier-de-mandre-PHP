<?php
    function queryError($exe){
        if ($exe === false){
            echo 'prob dans la requete<br>';
            return false;
        }
        else if ($exe == 0){
            echo 'non effectuer<br>';
            return false;
        }        
        else{
            echo 'succes!<br>';
            return true;
        }
    }

    function queryPrepAmont($db,$request,$data){
        $req = $db->prepare($request);
        $req->execute($data);
        return $req;
    }

    function queryPrepBool($db,$request,$data){
        $req = queryPrepAmont($db,$request,$data);
        return $req->fetch(PDO::FETCH_BOUND);
    }
    function queryPrepAssoc($db,$request,$data){
        $req = queryPrepAmont($db,$request,$data);
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    function query($db,$request){
        $req = $db->query($request);
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
?>
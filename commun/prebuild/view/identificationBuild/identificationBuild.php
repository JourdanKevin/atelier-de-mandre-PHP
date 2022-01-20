<div id="login" class="wrapper fadeInDown login">
  <div id="formContent">

  <div class="fadeIn first">
      <!-- <span onclick="Close()" class="close" title="Close PopUp">&times;</span> -->
      <img src="test.jpg" id="icon" alt="User Icon" />
  </div>

    <form id="formAuthent" onsubmit="" method="post" action="./traitement/authent.php">
    
      <input type="text" id="login" class="fadeIn second" name=":login" placeholder="identifiant" required>
      <input type="password" id="password" class="fadeIn third" name=":mdp" placeholder="mot de passe" required>
      <input type="submit" class="fadeIn fourth" value="s'identifier">
    </form>
    <div id="formFooter">
      <!-- <a class="underlineHover" onclick="change('oubli')" >Mot de passe oublié</a> -->
      <!-- <a class="underlineHover" onclick="change('inscription')" style="margin-left: auto;">Demande d'inscription</a> -->
    </div>

  </div>
</div>

<!-- <div id="inscription" class="wrapper fadeInDown inscription">

  <div id="formContent">
  <span onclick="Close()" class="close" title="Close PopUp">&times;</span>
    <form class="formInscription">    
      <input type="text" id="login" class="fadeIn first" name="nom" placeholder="nom">
      <input type="text" id="login" class="fadeIn first" name="prenom" placeholder="prenom">
      <input type="text" id="login" class="fadeIn second" name="identifiant" placeholder="identifiant">
      <input type="mail" id="login" class="fadeIn second" name="mail" placeholder="mail">
      <input type="password" id="password" class="fadeIn third" name="mdp" placeholder="mot de passe">
      <input type="password" id="password" class="fadeIn third" name="cmdp" placeholder="confirmation mot de passe">
      <input type="submit" class="fadeIn fourth" value="enregistrer">
    </form>
    <div id="formFooter">
    <a class="underlineHover" onclick="change('oubli')" >Mot de passe oublié</a>
      <a class="underlineHover" onclick="change('login')"  style="margin-left: auto;">Connexion</a>
    </div>

  </div>
</div>

<div id="oubli" class="wrapper fadeInDown inscription">
  <div id="formContent">
  <span onclick="Close()" class="close" title="Close PopUp">&times;</span>
    <form class="formInscription">    
      <input type="mail" id="login" class="fadeIn first" name="mail" placeholder="mail">
      <input type="submit" class="fadeIn fourth" value="envoyer">
    </form>
    <div id="formFooter">
      <a class="underlineHover" onclick="change('login')" >Connexion</a>
      <a class="underlineHover" onclick="change('inscription')" style="margin-left: auto;">Demande d'inscription</a>
    </div>

  </div>
</div> -->
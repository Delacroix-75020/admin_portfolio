  <br>
  <br>
   <section>
      <body>
       <div class="row d-flex justify-content-center">
        <div class="col-sm-8 col-md-7 py-4">
         <form method="POST" class="box">
            <table class="box-input">
            <h1 class="box-title">Enregistrer un nouveau produit</h1>
               <tr>
                  <td align="right">
                     <label for="username" >Nom du projet :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="le produit" id="libelle" name="libelle" class="box-input" value="<?php if(isset($libelle)) { echo $libelle; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="text">Descrition</label>
                  </td>
                  <td>
                     <textarea rows="5" cols="20" wrap="physique" name="description" id="description" value="<?php if(isset($description)) { echo $description; } ?>"></textarea>
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="lien">lien de page</label>
                  </td>
                  <td>
                     <input type="description" placeholder="lien de la page" id="lien" name="lien" class="box-input" value="<?php if(isset($lien)) { echo $lien; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="prix">Lien GitHub</label>
                  </td>
                  <td>
                     <input type="text" placeholder="github" id="github" name="github" class="box-input" />
                  </td>
               </tr>
               <tr>
                  <tr>
                  <td align="right">
                     <label for="pass2">Quel Categorie ? :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="exemple : sîte web" id="idc" name="idc" class="box-input"/>
                  </td>
               </tr>
               <tr>
               <tr>
                  <td align="right">
                     <label for="pass">Image :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Choisir une image" id="idi" name="idi" class="box-input" />
                  </td>
               </tr>
               <tr>
                  
                  <td>
                     <br />
                     <input type="submit" name="insertProjet" value="Insertion" class="box-button" align="center" />
                  </td>
               </tr>
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red" align="center">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>

</section>
  
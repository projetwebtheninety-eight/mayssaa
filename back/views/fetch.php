<?PHP
$connect = mysqli_connect("localhost", "root", "", "test");

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM livraison 
  WHERE nom LIKE '%".$search."%'
  OR prenom LIKE '%".$search."%' 
 
 ";
}
else
{
 $query = "
  SELECT * FROM livraison ORDER BY ref
 ";
}
$result = mysqli_query($connect, $query);


//var_dump($listeEmployes->fetchAll());
?>

<table  border="1" id="customers">
<tr>
<th>Référence</th>
<th>Nom</th>
<th>Prénom</th>
<th>E-Mail</th>
<th>Télèphone</th>
<th>Ville</th>
<th>Adresse</th>
<th>Code postal</th>
<th>Livreur</th>
<th>supprimer</th>

</tr>
<?PHP
while($row = mysqli_fetch_array($result)){
  ?>
  <tr>
  <td><?PHP echo $row['ref']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['mail']; ?></td>
  <td><?PHP echo $row['numtel']; ?></td>
   <td><?PHP echo $row['ville']; ?></td>
    <td><?PHP echo $row['adresse']; ?></td>
     <td><?PHP echo $row['codepostal']; ?></td>
      <td><?PHP echo $row['livreur']; ?></td>
                    
  <td><form method="POST" action="supprimerLivraison.php">
  
  <button type="submit" name="supprimer"   value="supprimer"  class="btn btn-common mr-3">supprimer</button>
  <input type="hidden" value="<?PHP echo $row['ref']; ?>" name="ref">
  </form>
  </td>

 
  </tr>
  <?PHP
}
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product - Dashboard Admin Template</title>
    <script src="add-product.js">
</script>
    <!--

    Template 2108 Dashboard

    http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body id="reportsPage">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-xl navbar-light bg-light">
                    <a class="navbar-brand" href="index.php">
                        
                        <img src="img/logocaverne.jpg">
                    </a>
                    <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">
                                    <span class="sr-only">(current)</span>
                                </a>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Livreur
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="livreur.php">Ajouter un livreur</a>
                                    <a class="dropdown-item" href="affichage.php">Liste des livreurs </a>
                                    
                                </div>
                            </li>
                             <li class="nav-item dropdown">
                                <a class="nav-link" href="affichagelivraison.php" >
                                    Livraison
                                </a>
  
                                
                            </li>
                            <li class="nav-item dropdown">
                               
                                 <a class="nav-link" href="stat.php">Statistque </a>
                                    
                                
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="products.html">Products</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="accounts.html">Accounts</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Settings
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Billing</a>
                                    <a class="dropdown-item" href="#">Customize</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link d-flex" href="login.html">
                                    <i class="far fa-user mr-2 tm-logout-icon"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- row -->

        <div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Modifier livreur</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                        	        <?PHP
include "../entities/livreur.php";
include "../core/livreurL.php";
if (isset($_GET['cin'])){
	$livreurL=new LivreurL();
    $result=$livreurL->recupererLivreur($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$numtelephone=$row['numtelephone'];
		$mail=$row['mail'];
?>
                            <form name="f" class="tm-edit-product-form" method="post" >
                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label ">Numero de la carte cin
                                       
                                    </label>
                                    <input id="sarra" name="cin" type="number" value="<?PHP echo $cin ?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 "  onblur="verifnum(this);">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label ">Nom du livreur
                                       
                                    </label>
                                    <input id="sarra" name="nom" type="text"  value="<?PHP echo $nom ?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 "  onblur="verifname(this);">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label ">Prenom du livreur
                                       
                                    </label>
                                    <input id="sarra" name="prenom" type="text" value="<?PHP echo $prenom ?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 "  onblur="verifname(this);">
                                </div>
                                
                            
                               <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label ">Numero de telephone
                                       
                                    </label>
                                    <input id="sarra" name="numtelephone" type="number" value="<?PHP echo $numtelephone ?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 "  onblur="verifnum(this);">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="stock" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Adresse mail
                                    </label>
                                    <input id="stock" name="mail" type="text" value="<?PHP echo $mail ?>" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7"  onblur="verifMail(this);" >
                                </div>
                                <div>
                                        <button type="submit" id="modifier"name="modifier" value="modifier" class="btn btn-primary">modifier</button>
                            </div>
                            <div>
                                <input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>">
                                </div>
                                    	

                                  

   
                            </form>
                            <?PHP
	}
}
if (isset($_POST['modifier'])){
	$livreur=new livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['numtelephone'],$_POST['mail']);
	$livreurL->modifierLivreur($livreur,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: affichage.php');
}
?>
                          
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2018. Created by
                    <a href="http://www.tooplate.com" class="text-white tm-footer-link">Tooplate</a> |  Distributed by <a href="https://themewagon.com" class="text-white tm-footer-link">ThemeWagon</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
    </script>
</body>

</html>
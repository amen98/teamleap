<!DOCTYPE html>
<html lang="en">
<script src="controle.js"></script>

<?PHP
include "../config.php";
include "../core/transporteurC.php";
$transporteurC=new TransporteurC();
$listeTransporteur=$transporteurC->afficherTransporteurs2();
$listeClient=$transporteurC->afficherClient();
$listeCommande=$transporteurC->afficherCommande();
?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">snt <sup>Dashboard</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Tableau de bord</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        VENDRE
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCom" aria-expanded="true" aria-controls="collapseCom">
          <i class="fas fa-shopping-basket"></i>
          <span>Commandes</span>
        </a>
        <div id="collapseCom" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="Commande.html">Commandes</a>
            <a class="collapse-item" href="facture.html">Factures</a>
			 
            <a class="collapse-item" href="bon-liv.html">Bons de livraison</a>
			  <a class="collapse-item" href="panier.html">Paniers</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCat" aria-expanded="true" aria-controls="collapseCat">
<i class="fas fa-store-alt"></i>

          <span>Catalogue</span>
        </a>
        <div id="collapseCat" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="produit.html">Produits</a>
            <a class="collapse-item" href="categ.html">Catégories</a>
            <a class="collapse-item" href="suivi.html">Suivi</a>
            <a class="collapse-item" href="att-carac.html">Attributs & caractéristiques</a>
			   <a class="collapse-item" href="marque-fourni.html">Marques et fournisseurs</a>
            <a class="collapse-item" href="fichier.html">Fichiers</a>
            <a class="collapse-item" href="reduc.html">Réductions</a>
            <a class="collapse-item" href="stocks.html">Stocks</a>
          </div>
        </div>
      </li>
		<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCl" aria-expanded="true" aria-controls="collapseCl">
          <i class="fas fa-user"></i>


          <span>Clients</span>
        </a>
        <div id="collapseCl" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="client.html">Clients</a>
            <a class="collapse-item" href="adresse.html">Adresses</a>
          
          </div>
        </div>
      </li>
<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSAV" aria-expanded="true" aria-controls="collapseSAV">
          <i class="fas fa-comment-alt"></i>


          <span>SAV</span>
        </a>
        <div id="collapseSAV" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="sav.html">SAV</a>
            <a class="collapse-item" href="message.html">Messages prédéfinis</a>
          <a class="collapse-item" href="retour-prod.html">Retours produits</a>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        PERSONNALISER
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
<i class="fas fa-shipping-fast"></i>

          <span>Livraison</span>
        </a>
       <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="afficherTransporteur.php">Gérer les transporteurs</a>
       <a class="collapse-item" href="afficherLivraison.php">Gérer les livraisons</a>
       <a class="collapse-item" href="stats2.php">Transporteur stats.</a>
            <a class="collapse-item" href="stats.php">Livraison stats.</a>
          </div>
        </div>
      </li>

     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Rechercher..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ben Ayada Amen Allah</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Livraison</h1>
</div>
          <!-- Content Row -->
          <!-- Content Row -->
          <div class="row">
            <!-- Area Chart -->
            <!-- Pie Chart -->
          </div>
          <!-- Content Row -->
          <div class="row">
            <!-- Content Column -->
            <div class="container-fluid">
              <!-- Page Heading -->
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">MODIFIER UN TRANSPORTEUR </h6>
                </div>
                <div class="card-body">
                  <div class="card-body">
                <div class="table-responsive">
<?PHP


include "../entities/livraison.php";
include "../core/livraisonC.php";
if (isset($_GET['num'])){
	  $livraisonC=new LivraisonC();
    $result=$livraisonC->recupererLivraison($_GET['num']);
	foreach($result as $row){
		$num=$row['num'];
		$dateL=$row['dateL'];
		$dest=$row['Destination'];
		$adr=$row['adresse'];
		$cinClient=$row['cinClient'];
		$idCommande=$row['idCommande'];
		$idTransp=$row['idTransp'];
?>
<form method="POST" onsubmit="return verifForm4(this)">
<table>

<tr>
<td>Date de livraison</td>
<td><input onblur="verifDate(this)" type="date" name="dateL" value="<?PHP echo $dateL ?>" class="form-control form-control-user"  width="30%"></td>
</tr>

<tr>
<td>Destination</td>
<td><select onblur="verifDest(this)" class="form-control form-control-user"  width="30%"  size="1" name="dest">
                                  <option value = "<?PHP echo $dest ?>"><?PHP echo $dest ?></option>
                                  
           
            <option value="Ariana">Ariana</option>
            <option value="Béja">Béja</option>
            <option value="Ben Arous">Ben Arous</option>
            <option value="Bizerte">Bizerte</option>
                <option value="Gabès">Gabès</option>
                <option value="Gafsa">Gafsa</option>
                  <option value="Jendouba">Jendouba</option>
                <option value="Kairouan">Kairouan</option>
                <option value="Kasserine">Kasserine</option>
                  <option value="Kébili">Kébili</option>
                <option value="Kef"> Kef</option>
                <option value="Mahdia">Mahdia</option>
                  
                  <option value="Manouba">Manouba</option>
                <option value="Médenine">Médenine</option>
                <option value="Monastir">Monastir</option>
                  <option value="Nabeul">Nabeul</option>
                <option value="Sfax">Sfax</option>
                <option value="Sidi Bouzid">Sidi Bouzid</option>
                  <option value="Siliana">Siliana</option>
                <option value="Sousse">Sousse</option>
                <option value="Tataouine">Tataouine</option>
                  <option value="Tozeur">Tozeur</option>
                <option value="Tunis"> Tunis</option>
                <option value="Zaghouan">Zaghouan</option>
          </select></td>
</tr>
<tr>
<td>Adresse</td>
<td><input onblur="verifAdresse(this)" type="text" name="adr" value="<?PHP echo $adr ?>" class="form-control form-control-user"  width="30%"></td>
</tr>
<tr>
                            <td>CIN du client</td>
                           
                            <td>
                            <select name="cinClient" class="form-control form-control-user"  width="30%"  size="1"  onblur="verifSelection(this)" disabled>
                            <option value = "<?PHP echo $cinClient ?>"><?PHP echo $cinClient ?></option>
	<?PHP
foreach($listeClient as $row){
	?>
	<option value="<?PHP echo $row['cin']; ?>" ><?PHP echo $row['cin']; ?>
	</option>
	<?PHP } ?>
</select> 
                              </td>
                          </tr>
<tr>
<td>Code de la commande</td>
<td>
                            <select name="idCommande" class="form-control form-control-user"  width="30%"  size="1"  onblur="verifSelection(this)" disabled>
                            <option value = "<?PHP echo $idCommande ?>"><?PHP echo $idCommande ?></option>
  <?PHP
  $listeCommande=$transporteurC->afficherCommande();
foreach($listeCommande as $row){
	?>
	<option value="<?PHP echo $row['id']; ?>"><?PHP echo $row['id']; ?>
	</option>
	<?PHP } ?>
</select> 
                              </td>
</tr>
<tr>
<td>Le transporteur</td>

<?php
  
    $result=$transporteurC->recupererTransporteur2($idTransp);
    foreach($result as $row1){
      $nom=$row1['nom'];
      $prenom=$row1['prenom'];
    }
  ?>
                            <td>
                            <select  onblur="verifTransp2(this)" name="idTransporteur" class="form-control form-control-user"  width="30%"  size="1"  onblur="verifSelection(this)">
                            <option value = "<?PHP echo $idCommande ?>"><?PHP echo $row1['nom'].' '.$row1['prenom']; ?></option>
  <?PHP
  $transporteurC=new TransporteurC();
  $listeTransporteur=$transporteurC->afficherTransporteurs2();
foreach($listeTransporteur as $row){
	?>
	<option value="<?PHP echo $row['id']; ?>"><?PHP echo $row['nom'].' '.$row['prenom']; ?>
	</option>
	<?PHP } ?>
</select> 
                              </td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}

if (isset($_POST['modifier'])){
  


  

  $result=$transporteurC->recupererTransporteur2($_POST['idTransporteur']);
	foreach($result as $row){
    
    $montant=$row['montant'];
	}
	if($_POST['dest']=="Tunis" || $_POST['dest']=="Ariana" || $_POST['dest']=="Ben Arous"){
		$total=5*$row['montant'];
	}
	else if($_POST['dest']=="Bizerte"){
		$total=7*$row['montant'];
	}
	else if($_POST['dest']=="Béja" || $_POST['dest']=="Jendouba" || $_POST['dest']=="Nabeul"){
		$total=11*$row['montant'];
	}
	else if($_POST['dest']=="Kef" || $_POST['dest']=="Sousse" || $_POST['dest']=="Mahdia" || $_POST['dest']=="Monastir" || $_POST['dest']=="Kairouan" || $_POST['dest']=="Siliana"){
		$total=15*$row['montant'];
	}
	else if($_POST['dest']=="Sfax" || $_POST['dest']=="Sidi Bouzid" || $_POST['dest']=="Kasserine" || $_POST['dest']=="Gafsa"){
		$total=18*$row['montant'];
	}
	else{
		$total=20*$row['montant'];
	}


	$livraison= new Livraison($_POST['dateL'],$_POST['dest'],$_POST['adr'],$total,$row['cin'],$idCommande,$_POST['idTransporteur']);
  

  
  

	//$transporteurC=new TransporteurC();
   


	//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livraison1C=new LivraisonC();

	$livraisonC->modifierLivraison($livraison,$num);
	
	
	
}
$result2=$livraisonC->recupererClient($row['cin']);
foreach($result2 as $row7){
  
    $to=$row7['mail'];
$sujet='Affectation d\'une livraison';
$text='Bonjour Mr/Mm '.$row7['nom'].'. Une livraison a été affecté pour votre commande N°'.$_POST['idCommande'].' a '.$_POST['adr'].'-'.$_POST['dest'].' le '.$_POST['date'].' .Vous pouvez contacter le 27 925 666 pour plus d\'information.';
$header='From : Strong Nutrition Tunisia';
mail($to,$sujet,$text,$header);


}
?>
                  </div>
                
				</div>
				<div align="right" >
					<button onclick="location.href='afficherLivraison.php'" style="background-color: transparent;border: 0px" title="Retour"><i class="fas fa-long-arrow-alt-left"></i>
						
						</button>
					
						</div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; SNT 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<title>Liste des Serveurs</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
	<div class="container spacer col-md-6 col-md-offset-3 mt-5">
		<div class="panel panel-primary">
			<?php if(isset($_GET['non_existe_mat'])){
				echo "<div class='text-danger text-center'>Veuillez verifier votre Matricule</div>";
			} ?>
			<div class="panel-heading d-flex m-auto"><p>Liste des Cotisations</p>
            <p>
                 <form action="" method="post">
                     <div class="ml-5 d-flex">
                     <input type="search" class="input"  style="width:100%" placeholder="search" name="mois" >
                    <button type="submit" name='rechercher' class='btn btn-primary'>rechercher</button>
                    </div>
                </form>
            </p> 
            </div>
			<div class="panel-body">
				<table class="table table-bordered table-striped">
					<tr>
						<th>Numero Cotisation</th>
						<th>Date</th>
						<th>Mois</th>
                        <th>Motif</th>
						<th>Montant</th>
                        <th>Matricule</th>
					</tr>
					<?php 
                 if(isset($_POST['rechercher'])){
                            $mois=$_POST['mois'];
                            $lesCotis=RechercheDeMois($mois);
                            $nbrLign=mysqli_num_rows($lesCotis);
                            if($nbrLign>0){
                                while ($cotisations = mysqli_fetch_row($lesCotis)) {
                                    echo "<tr>
                                                <td>$cotisations[0]</td>
                                                <td>$cotisations[1]</td>
                                                <td>$cotisations[2]</td>
                                                <td>$cotisations[3]</td>
                                                <td>$cotisations[4]</td>
                                                <td>$cotisations[5]</td>
                                                 
                                          </tr>";
                                }
                            }
                  }else {
                        while ($cotisations = mysqli_fetch_row($liste)) {
							echo "<tr>
										<td>$cotisations[0]</td>
										<td>$cotisations[1]</td>
										<td>$cotisations[2]</td>
                                        <td>$cotisations[3]</td>
										<td>$cotisations[4]</td>
										<td>$cotisations[5]</td>
										 
								  </tr>";
						}
                    }
					?>
				</table>
			</div>
		</div>
	</div>

</body>
</html>
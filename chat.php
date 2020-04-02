<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Chat intagration</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/chat.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<!---->
  		<div class="row">
    		<div class="col-md-8">
                <div class="row">
            <div class="col-md-12">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg"
            alt="avatar mx-auto white" class="rounded-circle img-fluid " width="70px" height="70px">
            </div>
        </div>
    		</div>
    		<div class="col-md-4 ">
    			<div class="btn-group btn-group-sm">
    				<button type="button" class="btn btn-default btn-rounded">Online</button>
    				<button type="button" class="btn btn-default btn-rounded">Active-chat</button>
    				<button type="button" class="btn btn-default btn-rounded">Offline</button>
    			</div>
    		</div>
  		</div>

        <nav aria-label="breadcrumb" class="barGal">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="galerie.php">Galerie</a></li>
            <li class="breadcrumb-item active">Photos</li>
             <li class="breadcrumb-item "><a href="chat.php">Chat</a></li>
        </ol>
        </nav>

  		<!---->
  		<div class="row">
    		<div class="col-md-4 chatMenu"><!--Menu du chat-->
    			<ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      				<li><a class="nav-link active" data-toggle="pill" href="#" aria-selected="true">Saad Omar</a></li>
      				<li><a class="nav-link" data-toggle="pill" href="#" aria-selected="false">Luc</a></li>
      				<li><a class="nav-link" data-toggle="pill" href="#" aria-selected="false">Amdia</a></li>
        			<li><a class="nav-link" data-toggle="pill" href="#" aria-selected="false">Adama</a></li>
      				<li><a class="nav-link" data-toggle="pill" href="#" aria-selected="false">Rouki</a></li>
    			</ul>
    			<img src="img/" width="365" height="100"/>
  			</div>
    		<div class="col-md-8 chatColumn">
    			<div class="chat table-bordered">
    				<div class="chatContent">
    					<div class="row">
    						<div class="col-md-2 avatar">
    							<samp class="saad"></samp>
    						</div>
    						<div class="col-md-10 chatLine">
    							<div class="breadcrumb img-circle center-block">
    								Salut rouki, ça va ?
    							</div>
    						</div>
    					</div>
    					<div class="row">
    						<div class="col-md-10 chatLineLeft">
    							<div class="breadcrumb img-circle center-block">
    								ça va et toi?
    							</div>
    						</div>
    						<div class="col-md-2 avatarLeft">
    							<samp class="rouki"></samp>
    						</div>
    					</div>
    					<div class="row">
    						<div class="col-md-2 avatar">
    							<samp class="saad"></samp>
    						</div>
    						<div class="col-md-10 chatLine">
    							<div class="breadcrumb img-circle center-block">
    								Oui çava bien et les activités.
    							</div>
    						</div>
    					</div>
    					<div class="row">
    						<div class="col-md-10 chatLineLeft">
    							<div class="breadcrumb img-circle center-block">
    								cool et chez toi ?Et ton voyage
    							</div>
    						</div>
    						<div class="col-md-2 avatarLeft">
    							<samp class="rouki"></samp>
    						</div>
    					</div>
    					<div class="row">
    						<div class="col-md-2 avatar">
    							<samp class="saad"></samp>
    						</div>
    						<div class="col-md-10 chatLine">
    							<div class="breadcrumb img-circle center-block">
    								J'ai repporté pour le mois prochain
    							</div>
    						</div>
    					</div>
    					<div class="row">
    						<div class="col-md-10 chatLineLeft">
    							<div class="breadcrumb img-circle center-block">
    								Haaa d'accord.
    							</div>
    						</div>
    						<div class="col-md-2 avatarLeft">
    							<samp class="rouki"></samp>
    						</div>
    					</div>
    				</div>
    				</div>
                    <form class="">
                    <div class="input-group">
                        <input type="text" class="form-control saisis" autofocus>
                            <samp class="input-group-btn">
                                <div class="btn-group btn-group-sm">
                        <button type="submit" class="btn btn-primary btn-rounded-sm">Envoyer</button></div>
                            </samp>
                    </div>
                </form>
    			</div>
                
    		</div>
  		</div>
	</div>



    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>

<!-- Contenu de la page -->
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h5 class="card-title m-4" >{$title}</h5>
			<p class="card-text">{$text}</p>
			<img class="img-fluid m-4"  src="{$image}">
			<hr>
			<p>Espace commentaire: </p>
			<div id="coments">
				{foreach from=$coments item=$value}
				<div class="jumbotron">
					<div class="row">
						<div class="col-lg-3" style="border-right:1px solid black;">
							<p>{$value.pseudo}</p>
							<p>{$value.email}</p>
							<p>{$value.date|date_format:'%d/%m/%Y %H:%M'}</p>
							<a href="viewArticle.php?idArticle={$idArticle}&deleteComent={$value.id}"><button class="btn btn-danger">Supprimer</button></a>
						</div>
						<div class="col-lg-9">
							<p>{$value.texte}</p>
						</div>
					</div>
				</div>
				{/foreach}
			</div>
			<hr>
			<p>Ecrire un commentaire: </p>
			<form id="comentForm" action="viewArticle.php?idArticle={$idArticle}&addComent=true" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Email">
					</div>
					<div class="form-group col-md-6">
						<label for="pseudo">Pseudo</label>
						<input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo">
					</div>
				</div>
				<div class="form-group">
					<label for="coment">Commentaire</label>
					<textarea type="text" class="form-control" name="coment" id="coment" placeholder="Exprimez-vous!"></textarea> 
				</div>
				<input type="submit" name="sendComent" class="btn btn-primary" value="Publier">
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 text-center">

		</div>
	</div>
</div>
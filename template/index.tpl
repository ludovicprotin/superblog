<!-- Contenu de la page -->
<div class="container">

  <div class="row">
    <div class="col-lg-12 text-center">
      {if isset($notification['color'])}
      <div class="alert alert-{$notification['color']} alert-dismissible fade show mt-5" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">×</span>
        </button>
        {$notification['message']}         
      </div>
      {/if}
      <h1 class="mt-5">Le Super Blog</h1>
      <ul class="list-unstyled">
        <li>Les derniers Post mis en ligne :</li>
      </ul>
    </div>
  </div>


  <div class="row">

    {foreach from=$tabArticle item=$value}
    <br>
    <div class="col-md-6">
      <div class="card">
        <img class="card-img-top" src="images/{$value['id']}.jpg" alt="Card image cap" style="height: 250px;">
        <div class="card-body">
          <a href="viewArticle.php?idArticle={$value['id']}"><h5 class="card-title">{$value['titre']}</h5></a>
          <p class="card-text">{$value['date_fr']}</p>
          <p class="card-text">By {getAuteur($bdd, $value['idUtilisateur'])}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{$value['texte']}</li>
        </ul>
        {if isset($cookies['sid'])}
        {if getNomUtilisateur($bdd, $cookies['sid']) == getAuteur($bdd, $value['idUtilisateur'])}
        <div class="card-body">
          <a href="editArticle.php?idArticle={$value['id']}" class="btn btn-primary">Modifier</a>
        </div>
        {/if}
        {/if}
      </div>
      <br>
    </div>
    {/foreach}
  </div>
  <div class="row">
    <!-- Pagination  -->
    <nav aria-label="Page_navigation">
      <ul class="pagination">
        <li class="page-item">
          {if $pageCourante gt 1}
          <a class="page-link " href="index.php?page={$pageCourante - 1}">Previous</a>
          {else}
          <a class="page-link " href="index.php?page={$pageCourante}">Previous</a>
          {/if}
        </li>
        {for $i=1 to $nbPages}
        <li class="page-item">
          <a class="page-link" href="index.php?page={$i}">{$i}</a>
        </li>
        {/for}
        <li class="page-item">
          {if $pageCourante lt $nbPages}
          <a class="page-link " href="index.php?page={$pageCourante + 1}">Next</a>
          {else}
          <a class="page-link " href="index.php?page={$pageCourante}">Next</a>
          {/if}
        </li>
      </ul>
    </nav>
  </div>
</div>
<div class="container my-3">

    <h1>Concert</h1>

    <h3>Les Concerts</h3>
      <div class="Box">
         
          <?php 
       
        $req = $db->query('SELECT * FROM concerto ORDER BY id ASC LIMIT 3');
        $posts = $req->fetchALL();
        foreach ($posts as $post) { ?>

         <div class="card" style="width: 18rem;">
              <img src="assets/img/posts/<?= $post['image'] ?>" class="card-img-top " alt="<?= $post['alt'] ?>">
             <div class="card-body">
                  <h5 class="card-title"><?= $post['name'] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $post['ville'] . ' - '.'Salle' .' ' . $post['salle'] .'-'. '<br>'. 'Du'.' ' . $post['dateD'] .'<br>'.'Au'.' '.$post['dateF'].' '  ?></h6>
                  <p class="card-text"><?= substr($post['descri'],0,100). '...' ?></p>
               
             </div>
         </div>
         
         <?php }    ?>
     </div>
     </div>

</div>
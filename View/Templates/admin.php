<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a href="index.php?page=profile" class="navbar-brand"><?php 
   echo '@'.$admin->getLname();
?></a>
    <!-- <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success">Search</button>
    </form> -->
    <a href="index.php?page=register" class="material-icons-outlined"><img src="./View/Img/person/person_add_black_24dp.svg">

    <a href="index.php?page=view" class="material-icons-outlined"><img src="./View/Img/person/groups_black_24dp.svg">
  </a>
    <a href="index.php?page=disconnected"><img src="./View/Img/logout_min/logout_min.png" alt="logout"></a>
  </div>
</nav>

<a href="#" class="material-icons-outlined"><img src="./View/Img/crud/edit_note_black_24dp.svg">
<hr>
<div class="textarea" style="display: none;">
 <textarea placeholder="Welcome to TinyMCE!">
  </textarea>
<!-- <a href="#" class="material-icons-outlined"><img src="./View/Img/crud/send_black_24dp.svg"> -->
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
   });
  </script>
  </div>

  
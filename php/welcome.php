<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona Administrativa | R-THREE ADMIN</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="crudcontacto/css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="sidebar">
    <div class="logo-details">
    
        <div class="logo_name">Palomino</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">

      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Inicio</span>
        </a>
         <span class="tooltip">Inicio</span>
      </li>
     <li>
       <a href="crudcontacto/read.php">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Messages Contacto</span>
       </a>
       <span class="tooltip">Mensajes Contacto</span>
     <li class="profile">
         <div class="profile-details">
           <img src="foto.png" alt="profileImg">
           <div class="name_job">
             <div class="name"><?php echo $_SESSION['username']?></div>
             <div class="job">SV PALOMINO</div>
           </div>
         </div>
         <a href="logout.php" class="salir"><i class='bx bx-log-out' id="log_out" ></i></a>
   
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">
    <?php echo "<h1>Bienvenido <span class='resaltado'>" . $_SESSION['username'] . "</span></h1>"; ?>
    <p>Zona Administradora</p>
   

    </div>
    
    <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
    
</body>
</html>
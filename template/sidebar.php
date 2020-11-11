
<?php
    include "template/connect.php";
   
    $reads=  mysqli_query($connect,"select * from dept order by nama_dept ASC" );

if($_SESSION['role']=='uploader'){
?>
<!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" style="line-height:8px;height:39px" href="dashboard.php">Bank Document<br/><br/><span style="font-size:12px;line-height:20px;">Welcome, <?= $_SESSION['login_user'] ?></span><br/></a> 
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Upload">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Upload</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="cv.php">Curriculum Vitae</a>
            </li>
            <li>
              <a href="add_doc.php">Document</a>
            </li>
          </ul>
        </li>
           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="List All">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">List All</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="all_cv.php">Curriculum Vitae</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Department </a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <?php
    while($result= $reads ->fetch_array()){
        ?>
      
                  <li>
                  <a href="department.php?name=<?= $result['nama_dept']; ?>"><?= $result['nama_dept'] ?></a>
                </li>
                  <?php
    }
    ?>         
              </ul>
            </li>
          </ul>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="change.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Change Password</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Logout">
          <a class="nav-link" href="logout.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Logout</span>
          </a>
        </li>
       
      </ul>
  </nav> 
  <?php
} elseif (($_SESSION['role']=='administrator')) {
?>
<!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" style="line-height:8px;height:39px" href="dashboard.php">Bank Document<br/><br/><span style="font-size:12px;line-height:20px;">Welcome, <?= $_SESSION['login_user'] ?></span><br/></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Upload">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponentsz" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Upload</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponentsz">
            <li>
              <a href="cv.php">Curriculum Vitae</a>
            </li>
            <li>
              <a href="add_doc.php">Document</a>
            </li>
          </ul>
        </li>
        
           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="List All">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">List All</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="all_cv.php">Curriculum Vitae</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Department </a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <?php
    while($result= $reads ->fetch_array()){
        ?>
      
                  <li>
                  <a href="department.php?name=<?= $result['nama_dept']; ?>"><?= $result['nama_dept'] ?></a>
                </li>
                  <?php
    }
    ?>         
              </ul>
            </li>
          </ul>
        </li>
           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Setting">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Setting</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="manage_dept.php">Manage Department</a>
            </li>
            <li>
              <a href="manage_user.php">Manage User</a>
            </li>
          </ul>
        </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="change.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Change Password</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Logout">
          <a class="nav-link" href="logout.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Logout</span>
          </a>
        </li>

  </nav>
  <?php
} elseif (($_SESSION['role']=='downloader')) {
?>
<!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" style="line-height:8px;height:39px" href="dashboard.php">Bank Document<br/><br/><span style="font-size:12px;line-height:20px;">Welcome, <?= $_SESSION['login_user'] ?></span><br/></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">List All</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="all_cv.php">Curriculum Vitae</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Department </a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <?php
    while($result= $reads ->fetch_array()){
        ?>
      
                  <li>
                  <a href="department.php?name=<?= $result['nama_dept']; ?>"><?= $result['nama_dept'] ?></a>
                </li>
                  <?php
    }
    ?>         
              </ul>
            </li>
          </ul>
        </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="change.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Change Password</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Logout">
          <a class="nav-link" href="logout.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Logout</span>
          </a>
        </li>
      </ul>
  </nav>
  <?php
}
?>
 <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
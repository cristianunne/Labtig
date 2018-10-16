


<header class="main-header">
     <!-- Logo -->
    <a href="http://www.pindosa.com.ar/es/index_interior.php" target="_blank" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>LABTIG</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>LABTIG</b></span>
    </a>
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
      
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
               <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <!-- User image top-->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                       
                        <?php echo $this->Html->image('avatar5.png', ["alt" => 'User Image' , "class" => 'img-circle user-image']) ?>
             
                        <span class="hidden-xs">
                            Cristian Da Silva
                        </span>
                    </a>
                    
                    <!-- User Body COntextual-->
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?php echo $this->Html->image('avatar5.png', ["alt" => 'User Image' , "class" => 'img-circle']) ?>
          
                            <p>
                                <?= $current_user['email']; ?>
                                <small>Role: Admin</small>
                            </p>
                        </li>
       
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <?= $this->Html->link('Salir', ['controller' => 'Users', 'action' => 'logout'], ['class' => 'btn btn-default btn-flat'], ['escape' => false]) ?>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>        
                
      
     </nav>
    
</header>
            <style>
                  .dropdown-menu{
			display: none;
			position: absolute;
			top: 0;
			}
                  
            </style>
              
              <ul class="dropdown-menu dropdown-menu-dark show" data-bs-popper="static">
                                      <?php foreach ($menu as $itemMenu) { ?>
                                <li><a class="dropdown-item" href="<?=$itemMenu['path']?>"><?=$itemMenu['title']?></a></li>
    <?php } ?>

                    </ul>
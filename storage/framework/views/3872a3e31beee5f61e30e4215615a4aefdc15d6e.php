<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/kr.jpg" rel="icon">
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>


</head>
<body>
<div style="padding:0" class="container-fluid" >

        <nav class="navbar navbar-light ">
                <img src="images/logo.jpg" width="450" height="140" class="navbar-brand img-responsive logoss mx-lg-2" alt="">
            <nav class="navv">
                <img src="images/naac.jpg" width="110" height="100" class="navbar-brand  img-responsive" alt="">
                <img src="images/aicte.png" width="100" height="100" class="navbar-brand img-responsive " alt="">
                <img src="images/ISO2020.png" width="130" height="100" class="navbar-brand img-responsive" alt="">
                <img src="images/annauniv.png" width="100" height="100" class="navbar-brand  img-responsive" alt="">
                <img src="images/nba_logo.png" width="110" height="100" class="navbar-brand  img-responsive" alt="">
                <img src="images/tnea_code.gif" width="110" height="100" class="navbar-brand   img-responsive" alt="">
                <img src="images/top-log1.gif" width="110" height="80" class="navbar-brand  img-responsive" alt="">
            </nav>
            <nav id="logomid">
                <img src="images/aicte.png" width="110" height="100" class="navbar-brand img-responsive " alt="">
                <img src="images/ISO2020.png" width="130" height="100" class="navbar-brand img-responsive" alt="">
                <img src="images/annauniv.png" width="110" height="100" class="navbar-brand  img-responsive" alt="">
                <img src="images/nba_logo.png" width="110" height="100" class="navbar-brand  img-responsive" alt="">
                <img src="images/tnea_code.gif" width="110" height="100" class="navbar-brand   img-responsive" alt="">
                <img src="images/top-log1.gif" width="110" height="100" class="navbar-brand  img-responsive" alt="">

            </nav>
            <nav id="logo2">
              <img src="images/nba_logo.png" width="110" height="100" class="navbar-brand  img-responsive" alt="">
              <img src="images/tnea_code.gif" width="110" height="100" class="navbar-brand   img-responsive" alt="">
            </nav>
        </nav>
        <div class="mobmenu">
          <div class="menu-bar">
            <nav class="navbar  navbar-light p-2" >
              <button class="navbar-toggler" type="button"  data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav p-4" id="navvbar" >
                        <?php $__currentLoopData = $menuItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(count($item->submenus)>0): ?>
                        <li class="nav-item dropdown" id="hello1">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo e($item->name); ?></a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                              <?php $__currentLoopData = $item->submenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li><a class="dropdown-item" href="<?php echo e($submenu->link); ?>"><?php echo e($submenu->name); ?></a></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </li><hr>
                        <?php else: ?>
                        <a class="nav-link mx-4" aria-current="page" href="<?php echo e($item->link); ?>"><?php echo e($item->name); ?></a><hr>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>


    <div class="menu">
      <div class="">
          <ul class="navbar nav flex-wrap  justify-content-start ">
            <?php $__currentLoopData = $menuItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(count($item->submenus)>0): ?>
            <li class="nav-item dropdown" id="hello">
                <a class="nav-item dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?php echo e($item->name); ?></a>
                <ul class="dropdown-menu">
                  <?php $__currentLoopData = $item->submenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><a class="dropdown-item" href="<?php echo e($submenu->link); ?>"><?php echo e($submenu->name); ?></a></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>
            </li>
            <?php else: ?>
            <li class="nav-item"><a class="text-white"  href="<?php echo e($item->link); ?>"><?php echo e($item->name); ?></a></li>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
      </div>
    </div>
</div>
<script>//this ia for dropdown of menu on hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";

    $(window).on("load resize", function() {
      if (this.matchMedia("(min-width: 768px)").matches) {

        $dropdown.hover(
          function drpdown() {
            const $this = $(this);
            $this.addClass(showClass);
            $this.find($dropdownToggle).attr("aria-expanded", "true");
            $this.find($dropdownMenu).addClass(showClass);
          },
          function () {
            const $this = $(this);
            $this.removeClass(showClass);
            $this.find($dropdownToggle).attr("aria-expanded", "false");
            $this.find($dropdownMenu).removeClass(showClass);
          }
        );
      } else {
        $dropdown.off("mouseenter mouseleave");
      }
    });
</script>

<?php /**PATH C:\Users\Nithin U\Dropbox\My PC (LAPTOP-GE7L8071)\Desktop\clgweb\resources\views/frontend/header.blade.php ENDPATH**/ ?>
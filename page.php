<?php 
require_once './elements/header.php'; 

require_once './elements/pagesData.php'; 
?>

<?php 
if(!empty($pagesData) && $_GET['page'] == 'about'):
    foreach ($pagesData as $page => $content): ?>
    <div class="pagesBanner">
        <h1 class="pagesTitle"><?php echo $pagesData[$_GET['page']]['h1']; ?></h1>
    </div>
    <section class="main">
        <div class="pageBlock content-block">
            <img src="<?php echo $pagesData[$_GET['page']]['img1']; ?>" alt="">
            <p class="pageText text-content"><?php echo $pagesData[$_GET['page']]['text1']; ?></p>
        </div>
        <div class="pageBlock content-block">        
            <p class="pageText text-content" style="margin-right: 70px;"><?php echo $pagesData[$_GET['page']]['text2']; ?></p>
            <img src="<?php echo $pagesData[$_GET['page']]['img2']; ?>" alt="" style="margin-right: 0;">
        </div>
    </section>
    
<?php
break;
    endforeach;
endif;

if(!empty($pagesData) && ($_GET['page'] == 'blog' || $_GET['page'] == 'portfolio')):
    foreach ($pagesData as $page => $content): ?>
    <div class="pagesBanner">
        <h1 class="pagesTitle"><?php echo $pagesData[$_GET['page']]['h1']; ?></h1>
    </div>
    <section class="main">
        <div class="pageBlock content-block">
            <div class="<?php echo $_GET['page'] ?>">
                <img src="<?php echo $pagesData[$_GET['page']]['img1']; ?>" alt="">
                <h4 class="pageBlockTitle"><?php echo $pagesData[$_GET['page']]['title1']; ?></h4>
                <p class="pageText text-content"><?php echo $pagesData[$_GET['page']]['text1']; ?></p>
            </div>
            <div class="<?php echo $_GET['page'] ?>">
                <img src="<?php echo $pagesData[$_GET['page']]['img1']; ?>" alt="">
                <h4 class="pageBlockTitle"><?php echo $pagesData[$_GET['page']]['title2']; ?></h4>
                <p class="pageText text-content"><?php echo $pagesData[$_GET['page']]['text2']; ?></p>
            </div>
            <div class="<?php echo $_GET['page'] ?>">
                <img src="<?php echo $pagesData[$_GET['page']]['img1']; ?>" alt="">
                <h4 class="pageBlockTitle"><?php echo $pagesData[$_GET['page']]['title3']; ?></h4>
                <p class="pageText text-content"><?php echo $pagesData[$_GET['page']]['text3']; ?></p>
            </div>
        </div>        
    </section>
    
<?php
break;
    endforeach;
endif;

if(!empty($pagesData) && $_GET['page'] == 'contact'):
    foreach ($pagesData as $page => $content): ?>
    <div class="pagesBanner">
        <h1 class="pagesTitle"><?php echo $pagesData[$_GET['page']]['h1']; ?></h1>
    </div>
    <section class="main">
        <div class="pageBlock content-block">
            <div class="<?php echo $_GET['page'] ?>">
                <form action="success.php" method="POST">
                    <h4><?php echo $pagesData[$_GET['page']]['formName']; ?></h4>
                    <p><input type="text" name="name" placeholder="Enter your name*" required></p>
                    <p><input type="tel" name="phone" placeholder="+375(33)1234567*" required></p>
                    <p><input type="email" name="email" placeholder="info@gmail.com*" required></p>
                    <p><textarea name="message" id="" cols="30" rows="10" placeholder="Message..."></textarea></p>
                    <button type="submit">Send</button>
                </form>
            </div>
            <div class="<?php echo $_GET['page'] ?>">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59858.71939808963!2d-79.34468709127778!3d43.69316306867229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cc1b1d3e933d%3A0x30d077fd48bdeeb6!2zNTUgTWFpbiBTdCwgVG9yb250bywgT04gTTRFIDJWNiwg0JrQsNC90LDQtNCw!5e0!3m2!1sru!2sby!4v1668716040249!5m2!1sru!2sby" width="700" height="513" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>        
    </section>

<?php
break;
    endforeach;
endif;
?>

<?php require_once './elements/footer.php';
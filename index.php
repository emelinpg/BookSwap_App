<?php
$siteTitle = 'Bookswap';
include('./header.php');
 ?>
 <li class="active"><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="popular.php">Popular</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="search.php">Search</a></li>
<li class="dropdown">
<a href="profile.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="profile.php">SignIn</a></li>
<li><a href="#">Register</a></li>
<li><a href="#">Help</a></li>
<li role="separator" class="divider"></li>
<li class="dropdown-header">User Options</li>
<li><a href="#">Return Books</a></li>
<li><a href="#">Offer Books</a></li>
<li><a href="settings.php">Account Settings</a></li>
</ul>
</li>
</ul>
</div>

</nav>


</div>
      <div class="jumbotron">
            <div class="container">
              <h1>Read!Borrow!Lend!Repeat!</h1>
              <p>Instead of letting a book you’ve read sit on a shelf, why not trade the book with another person for a book you haven’t read. We encourages users to share their favorite literary works and trusting other users in their top choices. </p>
              <p><a class="btn btn-primary btn-lg" href="about.php" role="button">Learn more &raquo;</a></p>
            </div>
     </div>
     <div class="row">
           <div class="col-xs-4 col-lg-4">
              <img src="img/1984.jpg"height="25%" width="25%">
             <h2>1948</h2>
             <p>Written in 1948, 1984 was George Orwell’s chilling prophecy about the future. And while 1984 has come and gone, his dystopian vision of a government that will do anything to control the narrative is timelier than ever... </p>
             <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
           </div><!--/.col-xs-6.col-lg-4-->
           <div class="col-xs-4 col-lg-4">
               <img src="img/theFourAgreements.jpg" height="25%" width="25%">
             <h2>The Four Agreements</h2>
             <p>In The Four Agreements, bestselling author don Miguel Ruiz reveals the source of self-limiting beliefs that rob us of joy and create needless suffering. Based on ancient Toltec wisdom, The Four Agreements offer a powerful code of conduct that can rapidly transform our lives to a new experience of freedom, true happiness, and love. </p>
             <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
           </div><!--/.col-xs-6.col-lg-4-->
           <div class="col-xs-4 col-lg-4">
                <img src="img/NorseMythology.jpg"height="25%" width="25%">
             <h2>Norse Mythology</h2>
             <p>In Norse Mythology, Gaiman stays true to the myths in envisioning the major Norse pantheon: Odin, the highest of the high, wise, daring, and cunning; Thor, Odin’s son, incredibly strong yet not the wisest of gods; and Loki―son of a giant―blood brother to Odin and a trickster and unsurpassable manipulator. </p>
             <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
           </div><!--/.col-xs-6.col-lg-4-->


         </div>
       </div>




<?php include('./footer.php'); ?>

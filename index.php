<?php
 /*
 * By: Bryan Pearson
 * Postion: SchoolDude Guy
 * Purpose:

  * Flickr: This feed does not need to be filtered.
        Display:most recent images from our Flickr account:
        http://www.flickr.com/photos/schooldude

  * Twitter: Show only recent posts with the hash tag #SavingsSummit
        https://twitter.com/#!/schooldude

  * YouTube: Display this video from our video stream:
http://www.youtube.com/watch?v=GemGY0r6gTU&list=UUyQQqjt2BeeBXqwD_SFDj1g&index=2&feature=plcp

  * Facebook: All recent posts from: https://www.facebook.com/SchoolDude

  * From the Blog: This is a stream from our blog located at : http://www.schooldude.com/blog/.
    We only want to show posts from the Energy category.
 
 */
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    	<link rel="stylesheet" href="CSS/css.php?files=css.cssp" type="text/css" media="screen" />
        
        <title>SchoolDude Media MashUp</title>
<?php
//error reporting remember to remove this
error_reporting(E_ALL);
error_reporting(-1);
?>
        
    </head>
    <body>
        <div id="header">
            <div id="navigation">
                <ul id="main"><li class="seperator"><a href="#">Home</a></li> <li class="seperator"><a href="#">Agenda</a></li> <li class="seperator"><a href="#">Locations</a> </li>
                    <li class="seperator"><a href="#">FAQ</a></li> <li><a href="#">Summit Social</a></li>
                </ul>
                <ul id="register">
                    <li><a href="#">Register</a></li>
                </ul>
                
            </div>
        </div>

        <div id="content">
            <div id="mainpanel">

            <div id="flickr">
                <h1>Summit Snapshots</h1>
        <?php // include 'functions/flickr.php'; ?>
                <p><a href="http://www.flickr.com/photos/schooldude" class="button">Check out our Flickr Stream</a></p>
            </div>
            <div id="blog">
            <h1>From the Blog</h1>

	<?php include 'functions/blog.php'; ?>

<?php foreach ($feed->get_items() as $item): ?> 

<h2> <?php echo $item->get_title(); ?> </h2>

	<div id="postdetails">
POSTED <?php echo $item->get_date('F J Y'); ?> | BY <?php echo $item->get_creator(); ?> | COMMENTS(0)
        </div>
<?php echo  $item->get_description(); ?>

<div id="readmore">
    <a href="<?php echo $item->get_permalink(); ?>">Read the full article</a>
</div>




<?php endforeach; ?>








            </div>
            </div>
            <div id="sidepanel">
                <h1>What people are saying:</h1>
                
                <h2>On Twitter<span>(Tag: #SavingsSummit)</span></h2>
                <div id="tweet">
                    <div class="time">1 hour ago</div>
                    Something about something.
                </div>
                <p><a href="http://twitter.com/#!/schooldude" class="button">Follow @SchoolDude</a></p>
                <p><a href="https://twitter.com/#!/search/%23savingssummit" class="greenlink" class="underline">More #SavingsSummit on Twitter</a></p>
               

                <h2>On YouTube</h2>
                <div class="youtube">
                <iframe style="float:right" width="240" height="119" src="https://www.youtube.com/embed/GemGY0r6gTU?rel=0" frameborder="0" allowfullscreen></iframe> 
                
                <a href="http://www.youtube.com/user/SchoolDudeDotCom" class="greenlink">Watch more videos</a>
		</div>
                <h2>On Facebook</h2>

                <a href="https://www.facebook.com/SchoolDude" class="button">Like us on Facebook</a>
            </div>
        </div>

        <div id="footer">
               
        </div>
    </body>
</html>

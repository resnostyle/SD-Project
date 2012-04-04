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

            <h2>Blog Post</h2>
            <div id="postdetails">
                POSTED DECEMBER 12, 2011 BY JILL JUDD | COMMENTS(0)
            </div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non mi ut eros vulputate tempor. Vivamus est ligula, commodo eu elementum in, rhoncus ac tellus. Fusce eu orci libero, eget suscipit metus. Suspendisse diam sapien, mollis sit amet fermentum non, eleifend vel tellus. Nunc porttitor, nunc nec molestie aliquet, sapien libero lobortis urna, nec gravida nunc lorem in libero. Nulla dui diam, vulputate at fringilla non, posuere ullamcorper metus. Praesent pellentesque nunc quis neque ullamcorper pharetra. Quisque gravida massa eget leo sodales non gravida purus fringilla. Phasellus auctor pharetra nisi, ac imperdiet mauris ultrices non. Nulla elit leo, varius quis placerat quis, adipiscing sed urna. Donec nisl arcu, eleifend et vestibulum ut, dignissim quis justo. Pellentesque placerat imperdiet lacinia. Nam tellus risus, fermentum ut fermentum dignissim, imperdiet nec elit.</p>

<p>Praesent vehicula laoreet magna, et fringilla leo convallis ac. Nam nec est interdum libero interdum feugiat. Morbi condimentum augue et metus sollicitudin bibendum. Sed sit amet lorem a nulla eleifend consectetur et ut libero. Ut commodo quam in augue vehicula tristique. Ut viverra erat quis dolor blandit ultricies. Aliquam pretium, quam sit amet pulvinar pellentesque, erat mauris tempor dui, quis eleifend libero augue non diam. Integer viverra nisl sapien, non ullamcorper elit. Ut pretium, arcu placerat sagittis suscipit, arcu lectus malesuada est, eget blandit ipsum risus ac ipsum. Vestibulum luctus vulputate tortor, nec dictum diam posuere sit amet. Aliquam tincidunt quam arcu. In vestibulum eros eu justo pretium ut viverra urna fringilla. In eu lacus a risus facilisis pellentesque.</p>

<p>Donec at sem vel libero venenatis convallis. Nullam vulputate hendrerit nunc, id pharetra lectus sollicitudin sed. Duis elit tortor, aliquam et pharetra sit amet, tincidunt at tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur tortor libero, bibendum vitae ornare ac, tempor ut nisi. Duis a dolor erat. Phasellus cursus est urna, at varius turpis. Phasellus sagittis dictum lectus, in accumsan arcu sagittis et. Suspendisse non leo ante, sit amet tristique mi. Nam vestibulum mi in lacus commodo varius. Mauris nulla tellus, rutrum quis sollicitudin non, malesuada eget tellus. Vivamus vitae nunc urna, eget dapibus purus. Nulla eget lectus elit. Integer scelerisque quam a erat commodo nec auctor risus aliquet. Cras varius sodales nibh in consequat.</p>
<div id="readmore">
    <a href="#">Read the full article</a>
</div>

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
                </div>
                <a href="http://www.youtube.com/user/SchoolDudeDotCom" class="greenlink">Watch more videos</a>

                <h2>On Facebook</h2>

                <a href="https://www.facebook.com/SchoolDude" class="button">Like us on Facebook</a>
            </div>
        </div>

        <div id="footer">
               
        </div>
    </body>
</html>

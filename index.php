<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76680329-1', 'auto');
  ga('send', 'pageview');

</script>
<?php 

include "app/config.php";
include "app/detect.php";

if ($page_name=='') {
	include $browser_t.'/index.php';
	}
elseif ($page_name=='index.php') {
	include $browser_t.'/index.php';
	}
elseif ($page_name=='about.html') {
	include $browser_t.'/about.html';
	}
elseif ($page_name=='bloginner.html') {
	include $browser_t.'/bloginner.html';
	}
elseif ($page_name=='blogsingle.html') {
	include $browser_t.'/blogsingle.html';
	}
elseif ($page_name=='icons.html') {
	include $browser_t.'/icons.html';
	}
elseif ($page_name=='iconsingle.html') {
	include $browser_t.'/iconsingle.html';
	}
elseif ($page_name=='contact.html') {
	include $browser_t.'/contact.html';
	}
elseif ($page_name=='contact-post.html') {
	include $browser_t.'/contact.html';
	include 'app/contact.php';
	}
else
	{
		include $browser_t.'/404.html';
	}

?>

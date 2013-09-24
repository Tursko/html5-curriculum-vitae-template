<?php if (!isset($_GET['notrack'])) { file_put_contents("log.txt", date("F j, Y, g:i a") . "\n" . $_SERVER['REMOTE_ADDR'] . "\n" . $_SERVER['HTTP_USER_AGENT'] . "\n" . $_SERVER['REQUEST_URI'] . "\n" . $_SERVER['HTTP_REFERER'] . "\n\n", FILE_APPEND); } ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
  <title>Eric Zhang - Resume</title>
  
  <meta name="description" content="Resume of Eric Zhang, Georgia Tech">
  <meta name="author" content="Eric Zhang">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" media="screen" href="styles.css">
  
  <!-- Modernizr on top to enable old browsers to render HTML5 markup -->
  <script src="modernizr.custom.15550.js"></script>

</head>

<body>
    <div style="float:right; padding-right:50px">
        <a href="print-resume.html"><img src="printer.png" title="Print"></a>

        <a href="copies/Resume.pdf"><img src="pdf.gif" title="Download PDF"></a>
    </div>

    <header class="vcard">
    	<h1 class="fn" style="float: left; cursor: pointer;"><a onclick="document.location.href='http://www.ericzhang.me'">Eric Zhang</a></h1>
    	<ul class="contact">
        	<li class="email">ericjzhang@gatech.edu</li>
            <li class="url"><a href="http://www.ericzhang.me" title="Eric Zhang Website">www.ericzhang.me</a></li>
            <li class="tel">(203) 715-7725</li>
		</ul>
    </header>

	<section id="summary">
        <h1>Summary</h1>
        <p>Experienced and motivated developer and student with excellent interpersonal skills, organization, and work ethic. Looking for an engaging internship for Summer 2014 to work on impactful projects.</p>
    </section>

    <section id="education">
        <h1>Education</h1>
        <div style="float: left;">
            <p>
            <b>Georgia Institute of Technology</b><br>
            Candidate for B.S. in Computer Science<br>
            Anticipated Graduation: May, 2016<br>
            Cumulative GPA: 4.0/4.0<br>
            </p>
        </div>
        <div style="float: left; margin: 0px 90px;" >
            <p>
            <b>MOOC Lectures</b><br>
            MIT OCW: Introduction to Algorithms<br>
            Coursera: Malicious Software and its Underground Econ...<br>
            Lynda: SQL Essential Training, PostgreSQL 9 with PHP<br>
            </p>
        </div>
        <div id="clear"></div>
    </section>
    
    <section id="skills">
    	<h1>Skills</h1>
        <dl>
            <dt>Programming</dt>
            <dd>Java (incl. Android)</dd>
            <dd>Python</dd>
            <dd>.NET (C#, VB)</dd>

            <dt>Web Development</dt>
            <dd>SQL (PostgreSQL, MySQL)</dd>
            <dd>Javascript (AngularJS, JQuery)</dd>
            <dd>PHP</dd>
            <dd>HTML/CSS</dd>
            
            <dt>Technologies</dt>
            <dd>Git</dd>
            <dd>Unix Command-line</dd>
            <dd>AWS (EC2, S3, SES, SNS, SQS)</dd>
            <dd>Linux, OS X, Windows</dd>
            <dd>Unit Testing</dd>
        </dl>
    </section>

    <section id="hobbies">
        <h1>Personal Projects</h1>
        <ul>
            <li>Writing: <a href="http://www.ericzhang.me/faking-views-on-twitch-tv/">Reverse Engineering Twitch.TV's Viewer Counter</a>, <a href="http://www.ericzhang.me/howto-cpanel-automatic-backups/">Automatic cPanel Backups</a>, <a href="http://www.ericzhang.me/cracking-adobe-air-applications/">Cracking Adobe Air Apps</a></li>
            <li><a href="http://www.ericzhang.me/projects/chromelogger/">ChromeLogger</a> (Javascript, AngularJS) - A keylogger built as a Google Chrome extension with a log viewer built in AngularJS & Bootstrap.</li>
            <li><a href="http://www.ericzhang.me/projects/spotify-ad-blocker-ezblocker/">EZBlocker</a> (.NET) - A utility that blocks advertisements in the Spotify music player.</li>
            <li><a href="https://github.com/Xeroday/Commander">Commander</a> (AngularJS, PHP, MySQL) - A C&C server designed to be rapidly deployed and highly compatible with any host.</li>
            <li>Various Android applications (Java, PHP, MySQL) - I built the networking components of Android applications using a LAMP stack for other GT students.</li>
        </ul>
    </section>
    
    <section id="extracurriculars" class="experience">
        <h1>Extracurriculars</h1>
        <article>
            <h1><a href="https://greyhat.gatech.edu" title="Grey Hat">Grey Hat @ GT</a> <span>Atlanta, GA</span></h1>
            <h2>Communications Admin</h2>
            <time datetime="2012-08-18" class="start">August 2012</time>
            <span class="end">Present</span>
            <p>
                <i>Grey Hat is a community where students can learn offensive and defensive information security. It is one of the largest organizations in the College of Computing.</i><br>
                - Organized meetings and events for the club<br>
                - Contacted and managed relations with outside companies/people for talks and sponsorships<br>
                - Competed in CTF competitions with the MadHatters team
            </p>            
        </article>
        <article>
            <h1><a href="https://startupexchange.gatech.edu" title="Startup Exchange">Startup Exchange</a> <span>Atlanta, GA</span></h1>
            <h2>Hack @ Tech Organizer</h2>
            <time datetime="2013-08-18" class="start">August 2013</time>
            <span class="end">Present</span>
            <p>
                <i>Startup Exchange is a group of hackers and entrepreneurs who aim to bring startup culture to Georgia Tech.</i><br>
                - Plan and organize hackathons for Georgia Tech (3 Day Startup & Hack@Tech)
            </p>            
        </article>
    </section>    

    <section id="work" class="experience">
    	<h1>Work Experience</h1>
        <article>
        	<h1><a href="http://cc.gatech.edu" title="Georgia Tech">Georgia Institute of Technology</a> <span>Atlanta, GA</span></h1>
            <h2>Undergraduate Teaching Assistant</h2>
            <time datetime="2013-08-18" class="start">August 2013</time>
            <span class="end">Present</span>
            <p>
            	<i>TA for CS 2050, Intro to Discrete Math for Comp Sci</i><br>
                - Co-taught weekly recitation classes of ~50 students<br>
                - Held office hours to assist students on homework and course material
            </p>            
        </article>
        <article>
        	<h1><a href="http://www.sharewave.com" title="Sharewave">Sharewave</a> <span>New York, NY</span></h1>
            <h2>Software Engineer Intern</h2>
            <time datetime="2013-05-18" class="start">May 2013</time>
            <time datetime="2013-08-18" class="end">August 2013</time>
            <p>
            	<i>Sharewave is a web app for managing shareholders and investor relations, with features like document sharing, cap tables, and e-signatures.</i><br>
                - Worked with CTO & software devs to design and build core functionality for the MVP.<br>
                - Wrote PostgreSQL stored procedures using PL/pgSQL and used AngularJS to create front-end app pages.<br>
                - Created a server farm platform for document transcoding using C# (w/ MS Interops) and Python.
            </p>            
        </article>
        <article>
        	<h1><a href="http://www.uchc.edu" title="UCHC">UConn Health Center</a> <span>Farmington, CT</span></h1>
            <h2>Software Development & Research Intern</h2>
            <time datetime="2012-06-01" class="start">June 2012</time>
            <time datetime="2012-08-01" class="end">August 2012</time>
            <p>
                <i>The UCHC intern team focused on the topic of adolecent substance abuse.</i><br>
            	- Deployed web servers and sites using Apache.<br>
                - Built Android mobile applications and HTML mobile web apps.<br>
                - Conducted research for a publication presented at the 2012 Summit on the Science of Eliminating Health Disparities in Washington DC.
            </p>            
        </article>
        <article>
        	<h1>Freelance Web Development</a> <span>Various</span></h1>
            <h2>Web developer</h2>
            <time datetime="2010-06-01" class="start">June 2010</time>
            <time datetime="2012-06-01" class="end">June 2012</time>
            <p>
                - Created an internal management database for SolarYouth.org (2011).<br>
                - Designed and developed CMS for CastCT.org (2010).<br>
            </p>            
        </article>
    </section>

  <!-- Script for enabling media queries on IE5+ -->
  <script src="css3-mediaqueries.js"></script>
  <br>
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-42480515-2', 'ericzhang.me');
      ga('send', 'pageview');

    </script>
</body>
</html>

<?php if (!isset($_GET['notrack'])) { file_put_contents("log.txt", date("F j, Y, g:i a") . "\n" . $_SERVER['REMOTE_ADDR'] . "\t" . gethostbyaddr($_SERVER['REMOTE_ADDR']). "\n" . $_SERVER['HTTP_USER_AGENT'] . "\n" . $_SERVER['REQUEST_URI'] . "\n" . $_SERVER['HTTP_REFERER'] . "\n\n", FILE_APPEND); } ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Taylor Riley - Resume</title>

  <meta name="description" content="Resume of Taylor Riley, UTSA">
  <meta name="author" content="Taylor Riley">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" media="all" href="styles.css">

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
        	<li class="email">taylor@stykocompany.com</li>
            <li class="url"><a href="http://www.taylorriley.me" title="Taylor Riley Website">www.taylorriley.me</a></li>
            <li class="tel">(203) 715-7725</li>
		</ul>
    </header>

	<section id="summary">
        <h1>Summary</h1>
        <p>Experienced and motivated developer and student with excellent interpersonal skills, organization, and work ethic. Looking for an engaging <b>internship for Fall 2014</b> to work on impactful projects.</p>
    </section> 

    <section id="education">
        <h1>Education</h1>
        <div style="float: left;">
            <p>
            <b>University of Texas at San Antonio</b><br>
            Candidate for B.S. in Computer Science<br>
            Anticipated Graduation: Fall, 2020<br>
            Cumulative GPA: 3.5/4.0<br>
            </p>
        </div>
        <!-- <div style="float: left; margin: 0px 90px;" >
            <p>
            <b>MOOCs (MIT OCW, Coursera)</b><br>
            Cryptography I<br>Malicious Software and its Underground Econ...<br>Introduction to Algorithms
            </p>
        </div>
        <div id="clear"></div>
    </section> -->

    <section id="hobbies">
        <h1>Personal Projects</h1>
        <ul>
            <li><a href="http://www.ericzhang.me/projects/spotify-ad-blocker-ezblocker/">Turcrypt</a> (Java) - A tool for encrypting and decrptying yayaya</li>
            <li><a href="http://www.ericzhang.me/projects/chromelogger/">Binder</a> (Java) - A keylogger built as a Google Chrome extension with a log viewer built in AngularJS & Bootstrap.</li>
            <li>More at <a href="https://www.github.com/Tursko">Github.com/Tursko</a></li>
        </ul>
    </section>

    <section id="work" class="experience">
        <h1>Work Experience</h1>
        <article>
            <h1><a href="http://www.salesforce.com" title="Salesforce">Salesforce</a> <span>San Francisco, CA</span></h1>
            <h2>Security Engineer, Intern</h2>
            <span class="end">Summer 2014</span>
            <p>
                <i>Salesforce.com is an enterprise cloud computing company best known for its CRM platform.</i><br>
            </p>
        </article>
        <article>
            <h1><a href="http://cc.gatech.edu" title="Georgia Tech">Georgia Institute of Technology</a> <span>Atlanta, GA</span></h1>
            <h2>Teaching Assistant (CS 2050, Intro to Discrete Math)</h2>
            <span class="start">Fall 2013</span>
            <span class="end">Present</span>
            <p>
                - Co-taught weekly recitation classes of ~50 students and held office hours
            </p>
        </article>
        <article>
            <h1><a href="http://www.sharewave.com" title="Sharewave">Sharewave</a> <span>New York, NY</span></h1>
            <h2>Software Engineer, Intern</h2>
            <span class="end">Summer 2013</span>
            <p>
                <i>Sharewave is a web app for managing shareholders and investor relations, with features like document sharing, cap tables, and e-signatures.</i><br>
                - Designed and built core functionality for the MVP, such as designing database tables, creating user account management, etc.<br>
                - Wrote PostgreSQL stored procedures using PL/pgSQL and used AngularJS to create front-end app pages.<br>
                - Created a server farm platform for document transcoding using C# (w/ MS Interops) and Python.
            </p>
        </article>

    </section>

        <section id="extracurriculars" class="experience">
        <h1>Extracurriculars</h1>
        <article>
            <h1><a href="https://greyhat.gatech.edu" title="Grey Hat">Grey Hat @ GT</a> <span>Atlanta, GA</span></h1>
            <h2>Communications Admin</h2>
            <span class="start">Fall 2012</span>
            <span class="end">Present</span>
            <p>
                <i>Grey Hat is a community where students can learn offensive and defensive information security.</i><br>
                - Competed in CTF competitions with the MadHatters team<br>
                - Organized weekly meetings and gave presentations on security-related topics<br>
            </p>
        </article>
        <article>
            <h1><a href="https://www.hackgt.com" title="">Hack at Tech</a> <span>Atlanta, GA</span></h1>
            <h2>Director</h2>
            <span class="start">Fall 2013</span>
            <span class="end">Present</span>
            <p>
                - Plan and organize hackathons for Georgia Tech (3 Day Startup & HackGT)
            </p>
        </article>
    </section>

    <section id="skills">
    	<h1>Skills</h1>
        <dl>
            <dt><!-- Programming --></dt>
            <dd>Java</dd>
            <dd>C</dd>

            <!-- <dt>Web Development</dt> -->
            <dd>HTML/CSS</dd>

            <dt><!-- Technologies --></dt>
            <dd>Git</dd>
            <dd>Unix Command-line</dd>
            <dd>SED, GREP, AWK</dd>
            <dd>Bash</dd>
            <dd>Linux, Windows</dd>
        </dl>
    </section>

    <div style="float:right; padding-right:50px; font-size: 70%;">
        Last updated 4/2/2018
    </div>

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

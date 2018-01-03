<!DOCTYPE html>
<html lang="en" xml:lang="en">
    <head>
        <title>Stanley Hung - Programming Developer</title>
        <link rel="stylesheet" href="main.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script language="javascript">
            $(function() {
                $("ul").hover(function(){
                    $('.submenu').slideToggle();
                });
            });
        </script>
    </head>
    <body>
        <div id="title" name="title">
            FindStanley
        </div>
        <nav>
            <ul>
                <li>
                    <img src="threelines.png" alt="three_lines_menu" id="button" align="right" />
                </li>
                <li>
                    <a href="#title" class="submenu">GO TO TOP</a>
                </li>
                <li>
                    <a href="#header" class="submenu">ABOUT ME</a>
                </li>
                <li>
                    <a href="#projects" class="submenu">PROJECTS</a>
                </li>
                <li>
                    <a href="#contact_more" class="submenu">CONTACT & FIND MORE</a>
                </li>
            </ul>
        </nav>
        <div id="header" name="header">
            <div id="description" name="description">
                Programming Developer
            </div>
            <br>
            <div id="description2" name="description2">
                Never the best, always be better
            </div>
        </div>
        <div id="table">
            <table id="about_me_table" name="about_me_table">
                <tr>
                    <td id="about_me_description" name="about_me_description">
                        <div id="greeting" name="greeting">
                            Hi, I am Stanley Hung.
                        </div>
                        <div id="introduction" name="introduction">
                            I am a programming developer in Hawaii (born in Hong Kong). I also love <a href="">photographing</a>, cooking, biking and watching drama.
                        </div>
                    </td>
                    <td id="about_me_pic2" name="about_me_pic2">
                        <img src="me.jpg" alt="me" id="me" />
                    </td>
                </tr>
            </table>
        </div>
        <!--<div id="about_me_pic" name="about_me_pic">
            <img src="me.jpg" alt="me" id="me" />
        </div>
        <div id="about_me" name="about_me">
            <div id="greeting" name="greeting">
                Hi, I am Stanley Hung.
            </div>
            <div id="introduction" name="introduction">
                I am a programming developer in Hawaii (born in Hong Kong). I also love <a href="">photographing</a>, cooking, biking and watching drama.
            </div>
        </div>-->
        
        <div id="projects" name="projects">
            <table id="project_table">
                <tr>
                    <td id="project1">
                        
                    </td>
                    <td id="project2">
                        
                    </td>
                    <td id="project3">
                        
                    </td>
                </tr>
            </table>
        </div>
        <div id="footer-wrapper">
            <div id="contact_more" name="contact_more">
                <div id="contact">
                    <div id="contact_title">
                        Get In Touch
                    </div>
                    <div id="contatct_description">
                        <p>Interested to work with me, know more about me, or just chat with me? Send me an email or give me a follow.</p>
                    </div>
                </div>
                <div id="contact_details">
                    <div id="email" name="email">
                        Email<br><a href="mailto:stanleyhung0908@gmail.com">stanleyhung0908@gmail.com</a>
                    </div>
                    <br>
                    Other Links:
                    <div id="linkedin" name="linkedin">
                        <a href="https://www.linkedin.com/in/hing-yiu-stanley-hung-8b32a8133/">LinkedIn</a>
                    </div>
                    <div id="github" name="github">
                        <a href="https://github.com/StanleyHung0908/projects">GitHub</a>
                    </div>
                </div>
            </div>
            <footer>
                Copyright &copy; 2018 Stanley Hung
            </footer>
        </div>
    </body>
</html>
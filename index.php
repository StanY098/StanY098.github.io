<!DOCTYPE html>
<html lang="en" xml:lang="en">
    <head>
        <title>Stanley Hung - Programming Developer</title>
        <link rel="stylesheet" href="main.css">
        <link rel="shortcut icon" href="FindStanley.ico">
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
        <div id="about_me" name="about_me">
            <div id="about_me_pic" name="about_me_pic">
                <img src="me.jpg" alt="me" id="me" />
            </div>
            <div id="about_me_description">
               <div id="greeting" name="greeting">
                    Hi, I am Stanley Hung.
                </div>
                <div id="introduction" name="introduction">
                    I am a programming developer in Hawaii (born in Hong Kong). I also love <a href="">photographing</a>, cooking, biking and watching drama. <br/><br/>The followings are my projects & works:
                </div> 
            </div>
        </div>
        
        <div id="projects" name="projects">
            <!--<div id="project_title">
                My Projects & Works
            </div>-->
            <div class="left" id="project1">
                <a href="https://github.com/StanleyHung0908/projects/tree/master/Games/SurvivalShooter">
                    <img src="survival_shooter.jpg" alt="survival_shooter" id="project1_pic" />
                    <div id="project1_text">
                        <div id="project1_title">
                            Survival Shooter
                        </div>
                        <div id="project1_description">
                            A shooting game story with 3-level bosses (built by C# and Unity), with features of special moves, first person camera, high-score board and etc.
                        </div>
                    </div>
                </a>
            </div>
            <div class="right" id="project2">
                <a href="https://github.com/StanleyHung0908/projects/tree/master/Games/Tank">
                    <img src="tank_network.jpg" alt="tank_network" id="project2_pic" />
                    <div id="project2_text">
                        <div id="project2_title">
                            Tank
                        </div>
                        <div id="project2_description">
                            A tank shooting game with network of maximum 4 game players at a time  (built by C# and Unity), with features of network lobby, customizing names and colors of tanks and etc.
                        </div>
                    </div>
                </a>
            </div>
            <div class="left" id="project3">
                <a href="https://github.com/StanleyHung0908/projects/tree/master/Client_Server/With_TCP/TCPIPClientServer">
                    <img src="client_server.JPG" alt="TCP_Client_Server_Messenger" id="project3_pic" />
                    <div id="project3_text">
                        <div id="project3_title">
                            Simple Messenger
                        </div>
                        <div id="project3_description">
                            A simple TCP Server-Client Messenger built by C#, with features of customizing names, sending and receiving messages and etc.
                        </div>
                    </div>
                </a>
            </div>
            <div class="right" id="project4">
                <a href="https://stanleyhung0908.github.io/photographing/">
                    <img src="phtographing_web.JPG" alt="photographing_web" id="project4_pic" />
                    <div id="project4_text">
                        <div id="project4_title">
                            Photographing Beginner
                        </div>
                        <div id="project4_description">
                            A website to introduce the basic knowledge of photographing, built mainly by HTML5 and CSS and also PHP
                        </div>
                    </div>
                </a>
            </div>
<!--            <table id="project_table">
                <tr>
                    <td id="project1">
                        <a href="https://github.com/StanleyHung0908/projects/tree/master/Games/SurvivalShooter">
                            <div>
                                <img src="survival_shooter.jpg" alt="survival_shooter" id="project1_pic" />
                            </div>
                            <div id="project1_text">
                                <div id="project1_title">
                                    Survival Shooter
                                </div>
                                <div id="project1_description">
                                    A shooting game story with 3-level bosses (built by C# and Unity), with features of special moves, first person camera, high-score board and etc.
                                </div>
                            </div>
                        </a>
                    </td>
                    <td id="project2">
                        <a href="https://github.com/StanleyHung0908/projects/tree/master/Games/Tank">
                            <div>
                                <img src="tank_network.jpg" alt="tank_network" id="project2_pic" />
                            </div>
                            <div id="project2_text">
                                <div id="project2_title">
                                    Tank
                                </div>
                                <div id="project2_description">
                                    A tank shooting game with network of maximum 4 game players at a time  (built by C# and Unity), with features of network lobby, customizing names and colors of tanks and etc.
                                </div>
                            </div>
                        </a>
                    </td>
                    <td id="project3">
                        <a href="https://github.com/StanleyHung0908/projects/tree/master/Client_Server/With_TCP/TCPIPClientServer">
                            <div>
                                <img src="client_server.JPG" alt="TCP_Client_Server_Messenger" id="project3_pic" />
                            </div>
                            <div id="project3_text">
                                <div id="project3_title">
                                    Simple Messenger
                                </div>
                                <div id="project3_description">
                                    A simple TCP Server-Client Messenger built by C#, with features of customizing names, sending and receiving messages and etc.
                                </div>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td id="project4">
                        <a href="https://stanleyhung0908.github.io/photographing/">
                            <div>
                                <img src="phtographing_web.JPG" alt="photographing_web" id="project4_pic" />
                            </div>
                            <div id="project4_text">
                                <div id="project4_title">
                                    Photographing Beginner
                                </div>
                                <div id="project4_description">
                                    A website to introduce the basic knowledge of photographing, built mainly by HTML5 and CSS and also PHP
                                </div>
                            </div>
                        </a>
                    </td>
                    <td id="project5">
                        <div>
                            
                        </div>
                        <div id="project5_text">
                            <div id="project5_title">
                                
                            </div>
                            <div id="project5_description">
                                
                            </div>
                        </div>
                    </td>
                    <td id="project6">
                        <div>
                            
                        </div>
                        <div id="project6_text">
                            <div id="project6_title">
                                
                            </div>
                            <div id="project6_description">
                                
                            </div>
                        </div>
                    </td>
                </tr>
            </table>-->
            <div class="clear">&nbsp;</div>
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
                        <a href="https://github.com/StanleyHung0908/projects">GitHub</a> - Click to see more work
                    </div>
                </div>
            </div>
            <footer>
                Copyright &copy; 2018 Stanley Hung
            </footer>
        </div>
    </body>
</html>
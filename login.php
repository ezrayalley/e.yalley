
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="University of Cape Coast Student's Portal. Student Authentication!">

    <link rel="stylesheet" href="https://portal.ucc.edu.gh/reset/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://portal.ucc.edu.gh/reset/assets/fontawesome/css/solid.css">
    <link rel="stylesheet" href="https://portal.ucc.edu.gh/reset/assets/fontawesome/css/brands.css">
    <link rel="stylesheet" href="https://portal.ucc.edu.gh/reset/assets/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="https://portal.ucc.edu.gh/reset/assets/css/main.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-22318036-10"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-22318036-10');
    </script>


    <title>University of Cape Coast | Student Login</title>
</head>
<body>
    <main id="main" class="login-body">
        <div class="login-headline">
            <img src="https://portal.ucc.edu.gh/reset/assets/images/ucc_logo.png" class="img-fluid">
            <h3>Online Students' Portal</h3>
        </div>

        <div class="login-container">
            <section id="info-section">
                <h4>Announcements & Notifications!</h4>

				<!--
                <article class="info-importants">
                    <h6>Lecturers & Courses Assessment</h6>
                    <p>
                     Online appraisal of lecturers and courses for the 2019/2020 second semester start on <span class="important">10/09/2020 to 31/09/2020</span>.
                    </p>
                    <p>
                        All sandwich students should take note and partake in the exercise to aid the continuous improvement of teaching and learning as well as good service rendering. 
                    </p>
                </article>
                -->

                <article class="info-normal p-4 m-4">
                    <h6>Financial Aid (Student Loan Trust Fund)</h6>
                    <p>The Students Loan Trust Fund (SLTF) was established in December 2005 under the Trustee Incorporation Act 1962, Act 820.</p>

                    <p>The objectives of the Trust Fund are to provide financial resources for the sound management of the Trust for the benefit of students 
                    and to help promote and facilitate the national ideals enshrined in Article 28 and 38 of the 1992 Constitution.
                    </p>

                    <p>
                        Students who want to apply for financial aid should visit the following links to know more about the Trust Fund and its application process; 
                        <ul>
                            <li><a href="https://www.sltf.gov.gh/" target="_blank">Student Loan Trust Fund</a></li>
                            <li><a href="https://portal.ucc.edu.gh/reset/financial-aid.pdf" target="_blank">Financial Aid</a></li>
                            <li><a href="https://portal.ucc.edu.gh/reset/sltf-application-requirements.pdf" target="_blank">Financial Aid Application Requirements</a></li>
                        </ul>
                    </p>
                </article>
            </section>

            <div class="vertical-line"></div>

            <section id="login-form">
                <form action="https://portal.ucc.edu.gh/osis/authen.php" method="post" name="form" id="form">  
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="regno">
                                    <i class="fas fa-user-graduate fa-lg fa-fw"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="username" required placeholder="Registration Number" aria-label="Registration Number" aria-describedby="regno">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="passcode">
                                    <i class="fas fa-key fa-lg fa-fw"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" name="password" required placeholder="Password" aria-label="Password" aria-describedby="password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            <input name="login" type="submit" class="btn btn-primary btn-block" value="Login"/>
                        </div>

                        <div class="col" style="align-self: center;">
                            <a href="https://portal.ucc.edu.gh/reset/forgot_password.php" class="btn btn-link btn-block">
                                Forgot password? Reset here!
                            </a>
                        </div>
                    </div>
                </form>

                <hr class="mb-4 mt-4 mr-4 ml-4">
                
				<p class="mb-5">&nbsp;</p>
                
                <h6 class="mb-2" style="font-weight: 700;">Helplines (Working hours 08:00 - 18:00)</h6>
                <ul>
                	<li>Main UCC Accounts office : 0508118646</li>
                    <li>Fees enquiries <span class="text-danger">(CoDe Students only)</span> call: <br> <strong>033-2092-044 / 033-2092-050</strong></li>
                    <li>System support call MIS office on: <strong>054-5802-062 or 0545801203 </strong></li>
                    <li>System support<span class="text-danger"> Whatsapp Only</span> MIS office on: <strong>0244080587</strong></li>
                    <!-- <li>System support<span class="text-danger"> Whatsapp Only</span> MIS office on: <strong>0572568591</strong></li> -->
                </ul>
            </section>
        </div>

        <p class="footer">&copy; University of Cape Coast - Students' Portal</p>
    </main>
    
    <script src="https://portal.ucc.edu.gh/reset/assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://portal.ucc.edu.gh/reset/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://portal.ucc.edu.gh/reset/assets/js/main.js"></script>
</body>
</html>

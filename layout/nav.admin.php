<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.layout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid navbar-containter px-lg-4">
            <!-- ---- Account Profile Modal ---- -->
            <div class="pfpadmin-close pfpadmin-modal">
                <div class="pfpadmin-body">
                    <div class="pfpadmin-content">
                        <button><i class="fas fa-user"></i> View Profile</button>
                        <button><i class="fas fa-sign-out-alt"></i> Logout account</button>
                    </div>
                </div>
            </div>

            <img class="navbar-brand" src="../image/swablogo.png" alt="">
            <div class="navbar-nav me-auto mt-2">
                <h4 id="brandTitle">Swab System</h4>
            </div>
            <div class="d-flex align-items-center nav-avatar">
                <i class="fas fa-bell nav-notif" ><span>0</span></i>
                <div class="nav-avatar-container">
                    <div class="nav-avatar-image">
                        <img src="../image/default-user.png" alt="">
                    </div>
                    <span id="userNameID">Sample User</span>
                </div>
                <button onfocusin="pfpAdminModalShow()" onfocusout="pfpAdminModalHide()"><i class="fas fa-caret-down"></i></button>
            </div>
            </div>
        </div>
    </nav>
    <!-- Boostraps Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <!-- Script href Active -->
    <script type="text/javascript" >
        $(document).ready( ()=>{
            $(".nav li").each(function() {
                document.querySelector(".sideNav-ahref").classList.remove("sideNav-Active");
            });
            if (location.href.match(/adminDashboard.php/)){
                document.querySelector("#hrefDash").classList.add("sideNav-Active");
            }
            else if (location.href.match(/adminScheduling.php/)){
                document.querySelector("#hrefSched").classList.add("sideNav-Active");
            }
            else if (location.href.match(/adminAppointment.php/)){
                document.querySelector("#hrefAppoint").classList.add("sideNav-Active");
            }
            else if (location.href.match(/adminResults.php/)){
                document.querySelector("#hrefResults").classList.add("sideNav-Active");
            }
        })
    </script> 

     <!-- Sweet Alert Script -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Sroll animation Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
    <!-- PFP show script  -->
    <script type="text/javascript" src="../style/style.js"></script>
</body>
</html>
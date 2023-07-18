<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aristo</title>
    <style>
        footer,
        header,
        .main {
            padding-left: 300px;
        }

        @media(max-width:992px) {

            footer,
            header,
            .main {
                padding-left: 0px;
            }
        }
    </style>
</head>


<body>
    <nav class="blue-grey">
        <div class="nav-wrapper">
            <div class="container">
                <a href="#" class="brand-logo center">Aristo</a>
                <a href="#" data-target="sidenav" class="sidenav-trigger" data-activates="sidenav">
                    <i class="material-icons">menu</i>
                </a>
            </div>
        </div>
    </nav>

    <ul class="sidenav sidenav-fixed" id="sidenav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="../assets/images/ubg.jpg" alt="" class="responsive-img">
                </div>
                <a href=""> <img src="../assets/images/user.jpeg" alt="" class="circle"> </a>
                <span class="name white-text">Sovit</span>
                <span class="email white-text">sovit@gmail.com</span>
            </div>
        </li>
        <li>
            <a href=""><i class="fa fa-home blue-text" style="font-size:20px;"></i>Dashboard</a>
        </li>
        <li>
            <a href=""><i class="fa fa-pencil-square-o black-text" style="font-size:18px;"></i>Posts</a>
        </li>
        <li>
            <a href=""><i class="fa fa-file-image-o green-text" style="font-size:18px;"></i>Images</a>
        </li>
        <li>
            <a href=""><i class="fa fa-comments-o blue-text" style="font-size:18px;"></i>Comments</a>
        </li>
        <li>
            <a href=""><i class="fa fa-cog black-text" style="font-size:18px;"></i> Setting</a>
        </li>
        <div class="divider">

        </div>
        <li>
            <a href=""><i class="fa fa-sign-out red-text" style="font-size:18px;"></i>Logout</a>
        </li>
    </ul>

    <!-- Main content -->
    <div class="main">
        <div class="row">
            <div class="col l6 m6 s12">
                <ul class="collection with-header">
                    <li class="collection-header blue-grey">
                        <h5 class="white-text">Recent Posts</h5>
                    </li>
                    <li class="collection-item">
                        <a href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </a>
                        <br>
                        <span><a href=""> <i class="material-icons tiny black-text">edit</i>  Edit</a> | <a href=""><i
                                    class="fa fa-trash-o red-text"></i> Delete</a> | <a href=""> <i class="material-icons tiny green-text">share</i> Share</a></span>
                    </li>
                    <li class="collection-item">
                        <a href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </a>
                        <br>
                        <span><a href=""> <i class="material-icons tiny black-text">edit</i>  Edit</a> | <a href=""><i
                                    class="fa fa-trash-o red-text"></i> Delete</a> | <a href=""> <i class="material-icons tiny green-text">share</i> Share</a></span>
                    </li>
                    <li class="collection-item">
                        <a href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </a>
                        <br>
                        <span><a href=""> <i class="material-icons tiny black-text">edit</i>  Edit</a> | <a href=""><i
                                    class="fa fa-trash-o red-text"></i> Delete</a> | <a href=""> <i class="material-icons tiny green-text">share</i> Share</a></span>
                    </li>
                    <li class="collection-item">
                        <a href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </a>
                        <br>
                        <span><a href=""> <i class="material-icons tiny black-text">edit</i>  Edit</a> | <a href=""><i
                                    class="fa fa-trash-o red-text"></i> Delete</a> | <a href=""> <i class="material-icons tiny green-text">share</i> Share</a></span>
                    </li>
                    <li class="collection-item">
                        <a href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </a>
                        <br>
                        <span><a href=""> <i class="material-icons tiny black-text">edit</i>  Edit</a> | <a href=""><i
                                    class="fa fa-trash-o red-text"></i> Delete</a> | <a href=""> <i class="material-icons tiny green-text">share</i> Share</a></span>
                    </li>
                </ul>
            </div>
            <div class="col l6 m6 s12">
                <ul class="collection with-header">
                    <li class="collection-header blue-grey">
                        <h5 class="white-text">Recent Comments</h5>
                    </li>
                    <li class="collection-item">
                        <a href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </a>
                        <br>
                        <span><a href="">
                                <i class="fa fa-check green-text"></i> Approve</a> | <a href=""><i
                                    class="fa fa-times red-text"></i> Remove</a></span>
                    </li>
                    <li class="collection-item">
                        <a href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </a>
                        <br>
                        <span><a href="">
                                <i class="fa fa-check green-text"></i> Approve</a> | <a href=""><i
                                    class="fa fa-times red-text"></i> Remove</a></span>
                    </li>
                    <li class="collection-item">
                        <a href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </a>
                        <br>
                        <span><a href="">
                                <i class="fa fa-check green-text"></i> Approve</a> | <a href=""><i
                                    class="fa fa-times red-text"></i> Remove</a></span>
                    </li>
                    <li class="collection-item">
                        <a href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </a>
                        <br>
                        <span><a href="">
                                <i class="fa fa-check green-text"></i> Approve</a> | <a href=""><i
                                    class="fa fa-times red-text"></i> Remove</a></span>
                    </li>
                    <li class="collection-item">
                        <a href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </a>
                        <br>
                        <span><a href="">
                                <i class="fa fa-check green-text"></i> Approve</a> | <a href=""><i
                                    class="fa fa-times red-text"></i> Remove</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="fixed-action-btn">
        <a href="write_blog.php" class="btn-floating btn btn-large white-text pulse">
            <i class="material-icons">edit</i>
        </a>
    </div>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, options);
        });

        $(document).ready(function () {
            $('.sidenav').sidenav();
        });
    </script>


</body>

</html>
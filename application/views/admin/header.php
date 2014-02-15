<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <title>Arkeon Bandung</title>
    <!-- Link shortcut icon-->
    <link rel="shortcut icon" type="image/ico" href="<?php echo base_url('static/admin'); ?>/images/favicon2.html" /> 
    <!-- Link css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/css/zice.style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/css/icon.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/css/ui-custom.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/css/timepicker.css"  />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/components/colorpicker/css/colorpicker.css"  />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/components/elfinder/css/elfinder.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/components/datatables/dataTables.css"  />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/components/validationEngine/validationEngine.jquery.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/components/jscrollpane/jscrollpane.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/components/fancybox/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/components/tipsy/tipsy.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/components/editor/jquery.cleditor.css"  />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/components/chosen/chosen.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/components/confirm/jquery.confirm.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/components/sourcerer/sourcerer.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/components/fullcalendar/fullcalendar.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin'); ?>/components/Jcrop/jquery.Jcrop.css"  />


    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="components/flot/excanvas.min.js"></script><![endif]-->

    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/ui/jquery.ui.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/ui/jquery.autotab.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/ui/timepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/colorpicker/js/colorpicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/checkboxes/iphone.check.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/elfinder/js/elfinder.full.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/datatables/dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/jscrollpane/mousewheel.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/jscrollpane/mwheelIntent.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/jscrollpane/jscrollpane.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/spinner/ui.spinner.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/tipsy/jquery.tipsy.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/editor/jquery.cleditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/chosen/chosen.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/confirm/jquery.confirm.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/validationEngine/jquery.validationEngine.js" ></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/validationEngine/jquery.validationEngine-en.js" ></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/vticker/jquery.vticker-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/sourcerer/sourcerer.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/fullcalendar/fullcalendar.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/flot/flot.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/flot/flot.pie.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/flot/flot.resize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/flot/graphtable.js"></script>

    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/uploadify/swfobject.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/uploadify/uploadify.js"></script>        
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/checkboxes/customInput.jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/effect/jquery-jrumble.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/filestyle/jquery.filestyle.js" ></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/placeholder/jquery.placeholder.js" ></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/Jcrop/jquery.Jcrop.js" ></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/imgTransform/jquery.transform.js" ></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/rating_star/rating_star.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/dualListBox/dualListBox.js"  ></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/components/smartWizard/jquery.smartWizard.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin'); ?>/js/zice.custom.js"></script>        

</head>        
<body class="dashborad">        
    <div id="alertMessage" class="error"></div> 

    <div id="header" >
        <div id="account_info"> 
            <img src="<?php echo base_url('static/admin'); ?>/images/avatar.png" alt="Online" class="avatar" />
            <div class="setting" title="Profile Setting"><b>Welcome,</b> <b class="red">John Doe</b><img src="<?php echo base_url('static/admin'); ?>/images/gear.png" class="gear"  alt="Profile Setting" ></div>
            <div class="logout" title="Disconnect"><b >Logout</b> <img src="<?php echo base_url('static/admin'); ?>/images/connect.png" name="connect" class="disconnect" alt="disconnect" ></div> 
        </div>
    </div> <!--//  header -->
    <div id="shadowhead"></div>
    <div id="hide_panel"> 
        <a class="butAcc" rel="0" id="show_menu"></a>
        <a class="butAcc" rel="1" id="hide_menu"></a>
        <a class="butAcc" rel="0" id="show_menu_icon"></a>
        <a class="butAcc" rel="1" id="hide_menu_icon"></a>
    </div>           

    <div id="left_menu">
        <ul id="main_menu" class="main_menu">
            <li class="limenu <?php echo 'dashboard' == $content ? 'select' : ''; ?>" ><a href="<?php echo base_url('admin/dashboard'); ?>"><span class="ico gray shadow home" ></span><b>Dashboard</b></a></li>

            <li class="limenu <?php echo 'tempat' == $content ? 'select' : ''; ?>" ><a href="<?php echo base_url('admin/tempat'); ?>"><span class="ico gray shadow  spreadsheet"></span><b>Tempat</b> </a>
                <ul>
                    <li ><a href="<?php echo base_url('admin/tempat'); ?>"> Daftar tempat </a></li>
                    <li ><a href="<?php echo base_url('admin/tempat/add'); ?>"> Tambah tempat </a></li>
                </ul>
            </li>
        </ul>
    </div>
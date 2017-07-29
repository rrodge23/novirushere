                </div>
             </div>
            <footer class="footer">
                    <div class="container-fluid">
                        <nav class="pull-left">
                            <ul>
                                <li>
                                    <a href="#">
                                        Home
                                    </a>
                                </li>

                            </ul>
                        </nav>
                        <p class="copyright pull-right">
                            &copy; <script>document.write(new Date().getFullYear())</script> Enterprise Bank
                        </p>
                    </div>
                </footer>
            </div>
        </div>


    <!--MODAL-->
    
     <?php
        if($_SERVER['REQUEST_URI'] != "/"){
            include $_SERVER['DOCUMENT_ROOT'] . "view/base/modals.php";
        }
    ?>

    
    <script src= "<?php echo ASSET; ?>js/highchart.js" type="text/javascript"></script>
    <script src= "<?php echo ASSET; ?>js/highChartTable.js" type="text/javascript"></script>
    <script src= "<?php echo ASSET; ?>js/bootstrap.min.js" type="text/javascript"></script>
    <script src= "<?php echo ASSET; ?>js/bootstrap-phone-input.js" type="text/javascript"></script>
    <script src= "<?php echo ASSET; ?>js/material-dashboard.js" type="text/javascript"></script>
    <script src= "<?php echo ASSET; ?>js/material.min.js" type="text/javascript"></script>
    <script src= "<?php echo ASSET; ?>js/moment.js" type="text/javascript"></script>
    <script src= "<?php echo ASSET; ?>js/datepicker.js" type="text/javascript"></script>
    <script src= "<?php echo ASSET; ?>js/canvas.js" type="text/javascript"></script>
    <script src= "<?php echo ASSET; ?>js/jquery-dropdown.js" type="text/javascript"></script>
    <script src= "<?php echo ASSET; ?>js/sweetalert.js" type="text/javascript"></script>
    <script src= "<?php echo ASSET; ?>js/sweetalert.min.js" type="text/javascript"></script>
    <script src= "<?php echo ASSET; ?>js/demo.js" type="text/javascript"></script>
    <script src= "<?php echo ASSET; ?>js/common.js" type="text/javascript"></script>
    <script src= "<?php echo ASSET; ?>js/bs.js" type="text/javascript"></script>
    
</body>
</html>

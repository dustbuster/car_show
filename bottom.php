                        </div>
                        <!-- ESI START DUMMY COMMENT [] -->
                        <!-- ESI URL DUMMY COMMENT -->
                        <?php include 'footer.php'; ?>
                        <script>
                            $(document).ready(function() {
                                $("input[name$='registertype']").click(function() {
                                    var valu = $(this).val();
                                    $("div.desc").hide();
                                    $("#Cars-" + valu).show();
                                });
                            });

                            // This is for the address showing up
                            // $(document).ready(function() {
                            //    $('input[name="emaillist"]').click(function() {
                            //         var valu = $(this).val();
                            //         if(valu == 'both' || valu == 'catalog') {
                            //             $('#showaddress').show(); 
                            //         } else {
                            //             $('#showaddress').hide();       
                            //         }
                            //    });
                            // });
                            // $(document).ready(function() {
                            //     $('input[id="getaddress"]').click(function() {
                            //         var valu = $(this).val();
                            //         $("div.maadd").hide();
                            //         $("div.#getaddress").show();
                            //     });
                            // });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
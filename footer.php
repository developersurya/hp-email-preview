<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/ie10-viewport-bug-workaround.js"></script>
    <script>
        $(document).ready(function(){
            resizeContent();
            $(window).resize(function() {
                resizeContent();
            });
        $('.switch li').click(function(){
        $('.switch li').removeClass('active');
        $(this).addClass('active');
        })

        //if($('.switch li').eq(0).hasClass('active') )

        $('.switch li').eq(0).click(function(){$('.viewPort').width(370);})
        $('.switch li').eq(1).click(function(){$('.viewPort').width(500);})
        $('.switch li').eq(2).click(function(){$('.viewPort').width(800);})
            
        });
        function resizeContent() {
        $ht=$(window).height()-150;
            $('.viewPort').css('height', $ht);
        }
    </script>
    
    <!--sortable js -->
    <script src='dist/dragula.js'></script>
    <script src='sortable/sortable.min.js'></script>
  </body>
</html>
